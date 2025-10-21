<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::with('user', 'book')->get();

        if($transactions->isEmpty()){
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $transactions
        ], 200);
    }

    public function store(Request $request) {
        // 1. Validator dan cek validator
        $validator = Validator::make($request->all(),[
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|Integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validator error',
                'data' => $validator->errors(),
            ], 422);
        }

        // 2. Generate order number -> unique|ORD-003
        $uniqueCode = "ORD-" . strtoupper(uniqid());

        // 3. ambil user yang sedang login & cek login (apakah ada data user)
        $user = auth('api')->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized!',
            ], 401);
        }

        // 4. mencari data buku dari request
        $book = Book::find($request->book_id);

        // 5. cek stok buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'stock barang tidak cukup!'
            ], 400);
        }

        // 6. hitung total harga = price*quantity
        $totalAmount = $book->price * $request->quantity;

        // 7. kurangi stok buku (update)
        $book->stock -= $request->quantity;
        $book->save();

        // 8. simpan data transaksi
        $transactions = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction created succesfully!',
            'data' => $transactions
        ], 201);
    }

    public function show(string $id) {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Resources not found'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Get detail resources',
            'data' => $transaction
        ], 200);
    }

    public function update(string $id, Request $request) {
        // 1. Mencari data
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Resources not found'
            ], 404);
        }

        // 2. Validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|Integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. Siapkan data yang ingin diupdate
        $data = [
            'book_id' => $request->book_id,
            'quantity' => $request->quantity,
        ];


        // 4. update data baru ke database
        $transaction->update($data);

        // 5. response
        return response()->json([
            'success' => true,
            'message' => 'Resource updated succesfully',
            'data' => $transaction
        ], 201);
    }


    public function destroy(string $id) {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Resources not found'
            ], 404);
        }

        $transaction->delete();
        return response()->json([
            'success' => true,
            'message' => 'Delete resources succesfully'
        ], 200);
    }
}

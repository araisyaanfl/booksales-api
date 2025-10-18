<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all();

        if($genres->isEmpty()){
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);
    }

    public function store(Request $request) {
        // 1. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string'
        ]);

        // 2. check validator error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. upload image (untuk genre, tidak ada photo yang diunggah)
        // $image = $request->file('photo');
        // $image->store('authors', 'public');


        // 4. insert data
        $author = Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);


        // 5. response
        return response()->json([
            'success' => true,
            'message' => 'Resource added succesfully',
            'data' => $author
        ], 201);
    }

    public function show(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Resources not found'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Get detail resources',
            'data' => $genre
        ], 200);
    }

    public function update(string $id, Request $request) {
        // 1. Mencari data
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Resources not found'
            ], 404);
        }

        // 2. Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. Siapkan data yang ingin diupdate
        $data = [
            'name' => $request->title,
            'description' => $request->description,
        ];


        // 4. update data baru ke database
        $genre->update($data);

        // 5. response
        return response()->json([
            'success' => true,
            'message' => 'Resource updated succesfully',
            'data' => $genre
        ], 201);
    }


    public function destroy(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Resources not found'
            ], 404);
        }

        $genre->delete();
        return response()->json([
            'success' => true,
            'message' => 'Delete resources succesfully'
        ], 200);
    }

}


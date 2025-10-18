<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Sherlock Holmes: A Study in Scarlet',
            'description' => 'Kasus pertama Sherlock Holmes dan Dr. Watson memecahkan misteri pembunuhan misterius.',
            'price' => 55000,
            'stock' => 10,
            'cover_photo' => 'sh_1.jpg',
            'genre_id' => 4,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Hyouka',
            'description' => 'Kisah siswa SMA yang menyelidiki misteri kecil di klub sastra klasik.',
            'price' => 48000,
            'stock' => 12,
            'cover_photo' => 'hyouka.jpg',
            'genre_id' => 4,
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'The Maze Runner',
            'description' => 'Sekelompok remaja terjebak di dalam labirin raksasa dan berusaha mencari jalan keluar.',
            'price' => 60000,
            'stock' => 20,
            'cover_photo' => 'tmr.jpg',
            'genre_id' => 3,
            'author_id' => 4
        ]);

        Book::create([
            'title' => 'Alice in Borderland',
            'description' => 'Sekelompok orang terjebak di dunia alternatif dan dipaksa bermain permainan mematikan untuk bertahan hidup.',
            'price' => 65000,
            'stock' => 8,
            'cover_photo' => 'aib.jpg',
            'genre_id' => 4,
            'author_id' => 5
        ]);
    }
}

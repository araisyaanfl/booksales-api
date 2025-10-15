<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    // private $books = [
    //     [
    //         'title' => 'Pulang',
    //         'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
    //         'price' => 40000,
    //         'stock' => 15,
    //         'cover_photo' => 'pulang.jpg',
    //         'genre_id' => 1,
    //         'author_id' => 1
    //     ],
    //     [
    //         'title' => 'Sherlock Holmes: A Study in Scarlet',
    //         'description' => 'Kasus pertama Sherlock Holmes dan Dr. Watson memecahkan misteri pembunuhan misterius.',
    //         'price' => 55000,
    //         'stock' => 10,
    //         'cover_photo' => 'study_in_scarlet.jpg',
    //         'genre_id' => 2,
    //         'author_id' => 2
    //     ],
    //     [
    //         'title' => 'Hyouka',
    //         'description' => 'Kisah siswa SMA yang menyelidiki misteri kecil di klub sastra klasik.',
    //         'price' => 48000,
    //         'stock' => 12,
    //         'cover_photo' => 'hyouka.jpg',
    //         'genre_id' => 3,
    //         'author_id' => 3
    //     ],
    //     [
    //         'title' => 'Pulang',
    //         'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
    //         'price' => 40000,
    //         'stock' => 15,
    //         'cover_photo' => 'pulang.jpg',
    //         'genre_id' => 1,
    //         'author_id' => 1
    //     ],
    //     [
    //         'title' => 'Sherlock Holmes: A Study in Scarlet',
    //         'description' => 'Kasus pertama Sherlock Holmes dan Dr. Watson memecahkan misteri pembunuhan misterius.',
    //         'price' => 55000,
    //         'stock' => 10,
    //         'cover_photo' => 'study_in_scarlet.jpg',
    //         'genre_id' => 2,
    //         'author_id' => 2
    //     ],
    //     [
    //         'title' => 'Hyouka',
    //         'description' => 'Kisah siswa SMA yang menyelidiki misteri kecil di klub sastra klasik.',
    //         'price' => 48000,
    //         'stock' => 12,
    //         'cover_photo' => 'hyouka.jpg',
    //         'genre_id' => 3,
    //         'author_id' => 3
    //     ],
    //     [
    //         'title' => 'The Maze Runner',
    //         'description' => 'Sekelompok remaja terjebak di labirin mematikan dan berjuang untuk keluar.',
    //         'price' => 60000,
    //         'stock' => 8,
    //         'cover_photo' => 'the_maze_runner.jpg',
    //         'genre_id' => 4,
    //         'author_id' => 4
    //     ],
    //     [
    //         'title' => 'Alice in Borderland',
    //         'description' => 'Seorang pemuda terjebak di dunia paralel dan harus bertahan hidup melalui permainan mematikan.',
    //         'price' => 65000,
    //         'stock' => 7,
    //         'cover_photo' => 'alice_in_borderland.jpg',
    //         'genre_id' => 4,
    //         'author_id' => 5
    //     ],
    //     [
    //         'title' => 'Divergent',
    //         'description' => 'Remaja perempuan menemukan dirinya tidak cocok dengan sistem faksi masyarakatnya.',
    //         'price' => 58000,
    //         'stock' => 9,
    //         'cover_photo' => 'divergent.jpg',
    //         'genre_id' => 4,
    //         'author_id' => 6
    //     ],
    //     [
    //         'title' => 'Holy Mother',
    //         'description' => 'Kisah kelam tentang seorang ibu yang menyimpan rahasia tak terduga.',
    //         'price' => 52000,
    //         'stock' => 10,
    //         'cover_photo' => 'holy_mother.jpg',
    //         'genre_id' => 5,
    //         'author_id' => 7
    //     ],
    //     [
    //         'title' => 'Girls in the Dark',
    //         'description' => 'Kasus misterius kematian siswi yang diungkap oleh klub sastra perempuan.',
    //         'price' => 50000,
    //         'stock' => 11,
    //         'cover_photo' => 'girls_in_the_dark.jpg',
    //         'genre_id' => 5,
    //         'author_id' => 7
    //     ],
    //     [
    //         'title' => 'Giselle',
    //         'description' => 'Drama psikologis tentang rahasia dan pengkhianatan di balik senyum seorang gadis.',
    //         'price' => 53000,
    //         'stock' => 9,
    //         'cover_photo' => 'giselle.jpg',
    //         'genre_id' => 5,
    //         'author_id' => 7
    //     ],
    //     [
    //         'title' => 'Schedule Suicide Day',
    //         'description' => 'Sebuah perencanaan bunuh diri yang berubah menjadi pengungkapan misteri gelap.',
    //         'price' => 51000,
    //         'stock' => 10,
    //         'cover_photo' => 'schedule_suicide_day.jpg',
    //         'genre_id' => 5,
    //         'author_id' => 7
    //     ]
    // ];

    // public function getBooks() {
    //     return $this->books;
    // }
}

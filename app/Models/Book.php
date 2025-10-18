<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = 'books';

    protected $fillable = ['title', 'description', 'price', 'stock', 'cover_photo', 'genre_id', 'author_id'
    ];
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['name', 'description'
    ];

    // Jika ingin helper method:
    // public static function getGenres() {
    //     return self::all();
    // }


    // private $genres = [
    //     [
    //         'id' => 1,
    //         'name' => 'Drama',
    //         'description' => 'Cerita yang menggambarkan kehidupan dan konflik emosional manusia.'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Detektif',
    //         'description' => 'Genre yang berfokus pada pemecahan kasus dan misteri kriminal.'
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'Misteri Sekolah',
    //         'description' => 'Kisah misteri yang berlatar di lingkungan sekolah.'
    //     ],
    //     [
    //         'id' => 4,
    //         'name' => 'Fiksi Ilmiah',
    //         'description' => 'Cerita berlatar dunia futuristik atau eksperimen ilmiah dengan elemen petualangan.'
    //     ],
    //     [
    //         'id' => 5,
    //         'name' => 'Thriller Psikologis',
    //         'description' => 'Genre dengan ketegangan mental dan emosi yang intens, sering berfokus pada misteri atau kejahatan.'
    //     ]
    // ];

    // public function getGenres() {
    //     return $this->genres;
    // }
}

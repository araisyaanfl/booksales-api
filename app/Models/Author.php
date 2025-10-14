<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Leila S. Chudori',
            'photo' => 'leila_chudori.jpg',
            'bio' => 'Penulis asal Indonesia yang dikenal dengan karya sastra bertema politik dan sejarah.'
        ],
        [
            'id' => 2,
            'name' => 'Arthur Conan Doyle',
            'photo' => 'arthur_conan_doyle.jpg',
            'bio' => 'Penulis asal Inggris, pencipta tokoh detektif legendaris Sherlock Holmes.'
        ],
        [
            'id' => 3,
            'name' => 'Honobu Yonezawa',
            'photo' => 'honobu_yonezawa.jpg',
            'bio' => 'Penulis asal Jepang yang terkenal dengan seri misteri ringan Hyouka.'
        ],
        [
            'id' => 4,
            'name' => 'James Dashner',
            'photo' => 'james_dashner.jpg',
            'bio' => 'Penulis novel fiksi ilmiah dan petualangan, dikenal lewat seri The Maze Runner.'
        ],
        [
            'id' => 5,
            'name' => 'Haro Aso',
            'photo' => 'haro_aso.jpg',
            'bio' => 'Mangaka asal Jepang, pencipta seri Alice in Borderland dengan tema survival dan psikologis.'
        ],
        [
            'id' => 6,
            'name' => 'Veronica Roth',
            'photo' => 'veronica_roth.jpg',
            'bio' => 'Penulis asal Amerika Serikat, terkenal dengan trilogi fiksi ilmiah Divergent.'
        ],
        [
            'id' => 7,
            'name' => 'Akiyoshi Rikako',
            'photo' => 'akiyoshi_rikako.jpg',
            'bio' => 'Penulis Jepang dengan gaya misteri psikologis yang kuat dan alur cerita yang menegangkan.'
        ]
    ];

    public function getAuthors() {
        return $this->authors;
    }
}

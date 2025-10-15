<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'id' => 1,
            'name' => 'Leila S. Chudori',
            'bio' => 'Penulis asal Indonesia yang dikenal dengan karya sastra bertema politik dan sejarah.'
        ]);

        Author::create([
            'id' => 2,
            'name' => 'Arthur Conan Doyle',
            'bio' => 'Penulis asal Inggris, pencipta tokoh detektif legendaris Sherlock Holmes.'
        ]);

        Author::create([
            'id' => 3,
            'name' => 'Honobu Yonezawa',
            'bio' => 'Penulis asal Jepang yang terkenal dengan seri misteri ringan Hyouka.'
        ]);

        Author::create([
            'id' => 4,
            'name' => 'James Dashner',
            'bio' => 'Penulis novel fiksi ilmiah dan petualangan, dikenal lewat seri The Maze Runner.'
        ]);

        Author::create([
            'id' => 5,
            'name' => 'Haro Aso',
            'bio' => 'Mangaka asal Jepang, pencipta seri Alice in Borderland dengan tema survival dan psikologis.'
        ]);

    }
}

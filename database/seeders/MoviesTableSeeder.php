<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'The Matrix',
                'synopsis' => 'Un hacker descubre la verdad sobre la realidad y lucha contra máquinas.',
                'year' => 1999,
                'cover' => 'matrix.jpg',
            ],
            [
                'title' => 'Titanic',
                'synopsis' => 'Historia de amor a bordo del famoso barco que se hunde.',
                'year' => 1997,
                'cover' => 'titanic.jpg',
            ],
            [
                'title' => 'Inception',
                'synopsis' => 'Un ladrón roba secretos entrando en los sueños de las personas.',
                'year' => 2010,
                'cover' => 'inception.jpg',
            ],
            [
                'title' => 'Avengers: Endgame',
                'synopsis' => 'Los héroes restantes intentan deshacer el daño causado por Thanos.',
                'year' => 2019,
                'cover' => 'endgame.jpg',
            ],
            [
                'title' => 'Jurassic Park',
                'synopsis' => 'Un parque temático con dinosaurios clonados se descontrola.',
                'year' => 1993,
                'cover' => 'jurassic_park.jpg',
            ],
            [
                'title' => 'The Lion King',
                'synopsis' => 'Un joven león debe reclamar su reino tras la muerte de su padre.',
                'year' => 1994,
                'cover' => 'lion_king.jpg',
            ],
            [
                'title' => 'Forrest Gump',
                'synopsis' => 'Un hombre con un gran corazón vive momentos históricos sin quererlo.',
                'year' => 1994,
                'cover' => 'forrest_gump.jpg',
            ],
            [
                'title' => 'Star Wars: A New Hope',
                'synopsis' => 'Luke Skywalker se une a la lucha contra el Imperio Galáctico.',
                'year' => 1977,
                'cover' => 'star_wars.jpg',
            ],
            [
                'title' => 'The Dark Knight',
                'synopsis' => 'Batman enfrenta al Joker en una batalla por la justicia en Gotham.',
                'year' => 2008,
                'cover' => 'dark_knight.jpg',
            ],
            [
                'title' => 'Back to the Future',
                'synopsis' => 'Un adolescente viaja accidentalmente al pasado y cambia la historia.',
                'year' => 1985,
                'cover' => 'back_future.jpg',
            ],
        ];

        DB::table('movies')->insert($movies);
    }
}

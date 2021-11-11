<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            'FilmNaam' => 'Community',
            'Genres' => 'Comedyseries, Amerikaanse series',
            'JaarUitgebracht' => '2009',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('movies')->insert([
            'FilmNaam' => 'Rick & Morty',
            'Genres' => 'Scifi-series, Comedyseries, Amerikaanse series',
            'JaarUitgebracht' => '2013',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('movies')->insert([
            'FilmNaam' => 'DOTA: Dragons blood',
            'Genres' => 'Actieanime, scifi- en fantasyanime',
            'JaarUitgebracht' => '2021',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('movies')->insert([
            'FilmNaam' => 'The Hobbit: An Unexpected Journey',
            'Genres' => 'Films gebaseerd op een boek, Actiefilms',
            'JaarUitgebracht' => '2012',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);
    }
}

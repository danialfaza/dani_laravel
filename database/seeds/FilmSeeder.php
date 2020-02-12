<?php

use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crud')->insert([
        	'judul' => 'Dilan',
        	'isi' => 'Ini Film dilan looo',
        	'gambar'=> 'dilan.jpg'
        	      ]);
        	
    }
}

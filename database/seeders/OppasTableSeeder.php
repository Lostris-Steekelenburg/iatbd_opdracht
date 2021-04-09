<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OppasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oppas')->insert([
            "naam_oppas" => "Harald",
            "last_name" => "Steekelenburg",
            "email" => "Harald@gmail.com",
            "password" => bcrypt("Harald"),
            "image" =>"/img/huis_1.jpg",

        ]);

        DB::table('oppas')->insert([
            "naam_oppas" => "Delilah",
            "last_name" => "Steekelenburg",
            "email" => "Delilah@gmail.com",
            "password" => bcrypt("Delilah"),
            "image" =>"/img/huis_2.jpg",

        ]);

        DB::table('oppas')->insert([
            "naam_oppas" => "Yvonne",
            "last_name" => "Tomeij",
            "email" => "Yvonne@gmail.com",
            "password" => bcrypt("Yvonne"),
            "image" =>"/img/huis_3.jpg",

        ]);

        DB::table('oppas')->insert([
            "naam_oppas" => "Megumi",
            "last_name" => "Kato",
            "email" => "Megumi@gmail.com",
            "password" => bcrypt("Megumi"),
            "image" =>"/img/huis_4.jpg",

        ]);
    }
}

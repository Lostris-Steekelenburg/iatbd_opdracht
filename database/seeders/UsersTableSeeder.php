<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Lostris",
            "email" => "lostristroi@gmail.com",
            "password" => bcrypt("Lostris2002"),
            "role" => "Admin",

        ]);

        DB::table('users')->insert([
            "name" => "Michael",
            "email" => "Michael@gmail.com",
            "password" => bcrypt("Michael"),

        ]);

        DB::table('users')->insert([
            "name" => "Merlijn Beekman",
            "email" => "Merlijn@gmail.com",
            "password" => bcrypt("Merlijn"),

        ]);

        DB::table('users')->insert([
            "name" => "Harald Steekelenburg",
            "email" => "Harald@gmail.com",
            "password" => bcrypt("Harald"),

        ]);

        DB::table('users')->insert([
            "name" => "Delilah Steekelenburg",
            "email" => "Delilah@gmail.com",
            "password" => bcrypt("Delilah"),

        ]);

        DB::table('users')->insert([
            "name" => "Yvonne Tomeij",
            "email" => "Yvonne@gmail.com",
            "password" => bcrypt("Yvonne"),

        ]);

        DB::table('users')->insert([
            "name" => "Megumi Kato",
            "email" => "Megumi@gmail.com",
            "password" => bcrypt("Megumi"),

        ]);
    }
}

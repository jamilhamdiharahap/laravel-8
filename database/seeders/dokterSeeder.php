<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            "nama" => "Hamdi Harahap",
            "alamat" => "padangsidimpuan",
            "telepon" => "085249402252",
        ]);
    }
}

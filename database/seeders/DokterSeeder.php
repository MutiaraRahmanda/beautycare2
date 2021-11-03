<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $dokters = [
            [
                'nama' => '',
                'specialist' => '',
                'image' => '',
                'jadwal' => '',

            ],

        ];

        DB::table('dokters')->insert($dokters);
    }
}

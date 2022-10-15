<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Visi;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Visi::create([
            'visi' =>
            'Menjadi PPID terdepan dalam melaksanakan pelayanan informasi publik melalui pelayanan informasi yang cepat dan akurat sesuai dengan ketentuan peraturan perundang-undangan yang berlaku'
        ]);
    }
}

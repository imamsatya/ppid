<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Misi;

class MisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Misi::create(
            [

                'misi' =>
                'Memberikan pelayanan informasi publik dengan cepat dan tepat sesuai ketentuan peraturan yang berlaku'
            ],

            [
                'misi' =>
                'Menyediakan sumber daya manusia yang kompeten, santun serta bertanggung jawab dalam pelayanan informasi'
            ],

            [
                'misi' => 'Menyediakan fasilitas pelayanan informasi yang prima berupa sistem dan infrastruktur pelayanan informasi publik yang modern dan mendukung'
            ]

        );
    }
}

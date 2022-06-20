<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
        'nama'=> 'Aditya Pratama',
        'nim'=> '1462000179',
        'alamat'=> 'Sidoarjo',
        'tempatlahir'=> 'Lamongan',
        'jeniskelamin'=> 'Laki-laki',
        'kewarganegaraan'=> 'indonesia',
        'umur'=> '20',
        ]);
    }
}

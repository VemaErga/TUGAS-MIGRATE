<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
      DB::table('mahasiswa')->insert([
    [
        'nim' => '23104410077',
        'nama' => 'Vema Erga AS',
        'prodi' => 'Teknik Informatika',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nim' => '23104410078',
        'nama' => 'A',
        'prodi' => 'Sistem Informasi',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nim' => '23104410079',
        'nama' => 'B',
        'prodi' => 'Teknik Komputer',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nim' => '23104410080',
        'nama' => 'C',
        'prodi' => 'Teknik Elektro',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nim' => '23104410081',
        'nama' => 'D',
        'prodi' => 'Teknik Mesin',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    
]);

    }
}

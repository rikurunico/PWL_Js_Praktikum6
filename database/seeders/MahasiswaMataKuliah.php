<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaMataKuliah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa_matakuliah = [
            ['mahasiswa_id' => 1, 'matakuliah_id' => 1, 'nilai' => 'A'],
            ['mahasiswa_id' => 1, 'matakuliah_id' => 2, 'nilai' => 'A'],
            ['mahasiswa_id' => 1, 'matakuliah_id' => 3, 'nilai' => 'A'],
            ['mahasiswa_id' => 1, 'matakuliah_id' => 4, 'nilai' => 'A']
        ];
    }
}

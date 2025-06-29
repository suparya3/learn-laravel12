<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_teacher')->insert([
            [
                'kd_guru' => '1001',
                'nama' => 'Budi Santoso',
                'mapel' => 'Matematika',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Pendidikan No. 10, Jakarta',
            ],
            [
                'kd_guru' => '1002',
                'nama' => 'Siti Aminah',
                'mapel' => 'Bahasa Indonesia',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Ilmu No. 20, Jakarta',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //query untuk menambah data ke tabel tb_student
        DB::table('tb_student')->insert([
            [
                'nisn' => '24001',
                'nama' => 'John Doe',
                'kelas' => '10A',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Contoh Alamat No. 1, Jakarta',
            ],
            [
                'nisn' => '24002',
                'nama' => 'Jane Smith',
                'kelas' => '10B',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Contoh Alamat No. 2, Jakarta',
            ],
        ]);
    }
}

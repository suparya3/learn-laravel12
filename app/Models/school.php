<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //inisialisasi table student
    protected $table = 'table_student';

    //inisialisasi primary key dalam table student
    protected $primaryKey = 'id';
    

    //inisialisasi data yang bisa diisi
    protected $fillable = [
        'nama',
        'nisn',
        'kelas',
        'jenis_kelamin',
        'alamat'
    ];

    //inisialisasi data yang tidak bisa diisi
    protected $guarded = [
        'id'
    ];
}

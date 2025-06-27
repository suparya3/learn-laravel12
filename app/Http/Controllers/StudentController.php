<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Assuming you have a Student model

class StudentController extends Controller
{
    public function getstudent(){
        $data = [
            'nama' => 'John Doe',
            'nisn' => '123456789',
            'kelas' => '10 A',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Contoh Alamat No. 123'
        ];
        
        return  view('pages.student',compact('data'));
    }

    public function addstudent(){
        return view('pages.addstudent');
    }
}

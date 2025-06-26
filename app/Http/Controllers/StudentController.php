<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Assuming you have a Student model

class StudentController extends Controller
{
    public function index(){
        return  view('pages.student');
    }
}

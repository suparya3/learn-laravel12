<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getteacher(){
        return view('pages.teacher');
    }
    public function addteacher(){

        return view('pages.addteacher');
    }
}

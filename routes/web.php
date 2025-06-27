<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $biodata = [
        'nama' => 'Suparya',
        'nim' => '24110199',
        'kelas' => 'I-2024',
    ];
    return view('pages.home',$biodata);
});
// Route::get('/home',function (){
//     $biodata = [
//         'nama' => 'Suparya',
//         'nim' => '24110199',
//         'kelas' => 'I-2024',
//     ];
//     return view('pages.home',$biodata);
// });
//register
Route::view('/register','pages.register');

// Login
Route::view('/login','pages.login');

//teacher
Route::view('/teacher','pages.teacher');
Route::get('/teacher',[TeacherController::class,'getteacher']);
Route::get('/teacher/addteacher',[TeacherController::class,'addteacher']);

//major
Route::view('/major','pages.major');

//class
Route::view('/class','pages.class');

//student
Route::get('/student',[StudentController::class,'getstudent']);
Route::get('/student/addstudent',[StudentController::class,'addstudent']);


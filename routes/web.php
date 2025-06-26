<?php

use App\Http\Controllers\StudentController;
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

Route::view('/register','pages.register');
Route::view('/login','pages.login');
Route::view('/teacher','pages.teacher');
Route::view('/major','pages.major');
Route::view('/class','pages.class');
Route::get('/student',[StudentController::class,'index']);


<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Livewire\Auth\Login;
use App\Livewire\ClassLivewire;
use App\Livewire\StudentLivewire;
use App\Livewire\TeacherLivewire;
use App\Models\TeacherModel;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    //login
    Route::get('/login', Login::class)->name('login');
    Route::get('/signin', Login::class)->name('auth.login');
});
Route::get('/test', function () {
    // Tampilkan semua data sesi saat ini 
    dd(session()->all());
    // dd(url('/'));
    // Menjalankan perintah shell dan mendapatkan hasilnya
    $username = shell_exec('whoami');

    // Menampilkan hasil
    // return nl2br(htmlspecialchars($username)); // Mengubah newline menjadi <br> dan mengamankan outputz
    // testing database write
    $test =  TeacherModel::create([
        'name' => '1',
        'nik' => '1',
        'gender' => 'L',
        'birth_place' => '1',
        'birth_date' => '1',
        'religion' => 'Islam',
        'address' => '1',
    ]);
    var_dump($test);
    die();
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', StudentLivewire::class)->name('dashboard');
    Route::get('/student', StudentLivewire::class)->name('student');
    Route::get('/teacher', TeacherLivewire::class)->name('teacher');
    Route::get('/class', ClassLivewire::class)->name('class');
});


// Route::get('/student', function () {
//     return view('students.index');
// });
// Route::get('/teacher', function () {
//     return view('teachers.index');
// });
// Route::get('/class', function () {
//     return view('classes.index');
// });

// Route::resource('students', StudentController::class);
// Route::resource('teachers', TeacherController::class);
// Route::resource('classes', ClassController::class);

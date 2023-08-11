<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DataController::class, 'index']);

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/dashboard-student', function () {
    return view('dashboard_student');
})->name('dashboard_student');

Route::get('/learning-student', function () {
    return view('learning_student');
})->name('learning_student');

Route::get('/material-detail', function () {
    return view('material_detail');
})->name('material_detail');

// Route Node JS
require __DIR__ . '/nodejs_routes.php';

// Route Aplas

// Route Flutter

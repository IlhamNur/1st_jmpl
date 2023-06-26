<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BukutamuCRUDController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BukutamuCRUDController::class, 'index'])->name('home');

Route::resource('bukutamus', BukutamuCRUDController::class);

Auth::routes();

// Auth::routes(['verify' => true]);

// Route::middleware(['2fa'])->group(function () {

//     Route::get('/home', [BukutamuCRUDController::class, 'index'])->name('home');
//     Route::post('/2fa', function () {
//         return redirect(route('home'));
//     })->name('2fa');
// });

// Route::get('/complete-registration', [RegisterController::class, 'completeRegistration'])->name('complete.registration');

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\FontendController;
use App\Http\Controllers\RegisterInfoController;

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

Route::get('/form-one', [FontendController::class, 'FormOne'])->name('form.one');
Route::get('/form-two', [FontendController::class, 'FormTwo'])->name('form.two');
Route::get('/form-three', [FontendController::class, 'FormThree'])->name('form.three');
Route::get('/form-four', [FontendController::class, 'FormFour'])->name('form.four');
Route::get('/pdf-text', [FontendController::class, 'PdfText'])->name('pdf.text');

Route::get('/payment/page', [FontendController::class, 'PaymentPage'])->name('payment.page');


Route::post('/register/info', [RegisterInfoController::class, 'RegisterInfo'])->name('register.info');
Route::post('/payment/info', [RegisterInfoController::class, 'PaymentInfo'])->name('payment.info');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
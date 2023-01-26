<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('/one-stop-solution', function () {
    return view('one-stop-solution');
})->name('one-stop-solution');
Route::get('/Digital-marketing-services', function () {
    return view('Digital-marketing-services');
})->name('Digital-marketing-services');
Route::get('/vfx-&-Animation', function () {
    return view('vfx-&-Animation');
})->name('vfx-&-Animation');
Route::get('/videography-Photography', function () {
    return view('videography-Photography');
})->name('videography-Photography');
Route::get('/graphical-solution', function () {
    return view('graphical-solution');
})->name('graphical-solution');
Route::get('/mobile-Application-development', function () {
    return view('mobile-Application-development');
})->name('mobile-Application-development');
Route::get('/software-development', function () {
    return view('software-development');
})->name('software-development');
Route::get('/web-development', function () {
    return view('web-development');
})->name('web-development');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/concern', function () {
    return view('concern');
})->name('concern');
Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/mission-vision', function () {
    return view('mission-vision');
})->name('mission-vision');
Route::get('/company-overview', function () {
    return view('company-overview');
})->name('company-overview');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
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
Route::post('/contact',[ContactController::class,'store'])->name('addContact');
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
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/slider',[SliderController::class,'index'])->name('addSliderPage');
    Route::post('/add/slider',[SliderController::class,'store'])->name('addSlider');
    Route::get('/slider/list',[SliderController::class,'show'])->name('sliderList');
    Route::post('/update/slider',[SliderController::class,'update'])->name('updateSlider');
    Route::post('/delete/slider',[SliderController::class,'destroy'])->name('deleteSlider');

    Route::get('/add/team',[TeamController::class,'index'])->name('addTeamPage');
    Route::post('/add/team',[TeamController::class,'store'])->name('addTeam');
    Route::get('/team/list',[TeamController::class,'show'])->name('teamList');
    Route::post('/update/team',[TeamController::class,'update'])->name('updateTeam');
    Route::post('/delete/team',[TeamController::class,'destroy'])->name('deleteTeam');

    Route::get('/catagory',[CatagoryController::class,'index'])->name('addCatagoryPage');
    Route::post('/add/catagory',[CatagoryController::class,'store'])->name('addCatagory');
    Route::get('/catagory/list',[CatagoryController::class,'show'])->name('catagoryList');
    Route::post('/update/catagory',[CatagoryController::class,'update'])->name('updateCatagory');
    Route::post('/delete/catagory',[CatagoryController::class,'destroy'])->name('deleteCatagory');

    Route::get('/add/portfolio',[PortfolioController::class,'index'])->name('addPortfolioPage');
    Route::post('/add/portfolio',[PortfolioController::class,'store'])->name('addPortfolio');
    Route::get('/portfolio/list',[PortfolioController::class,'show'])->name('portfolioList');
    Route::post('/update/portfolio',[PortfolioController::class,'update'])->name('updatePortfolio');
    Route::post('/delete/portfolio',[PortfolioController::class,'destroy'])->name('deletePortfolio');

    Route::get('/add/gallery',[GalleryController::class,'index'])->name('addGalleryPage');
    Route::post('/add/gallery',[GalleryController::class,'store'])->name('addGallery');
    Route::get('/gallery/list',[GalleryController::class,'show'])->name('galleryList');
    Route::post('/update/gallery',[GalleryController::class,'update'])->name('updateGallery');
    Route::post('/delete/gallery',[GalleryController::class,'destroy'])->name('deleteGallery');

    Route::get('/contact/list',[ContactController::class,'show'])->name('contactList');
    Route::post('/delete/contact',[ContactController::class,'destroy'])->name('deletecontact');

    Route::get('/product',[ProductController::class,'index'])->name('addProductPage');
    Route::post('/add/product',[ProductController::class,'store'])->name('addProduct');
    Route::get('/product/list',[ProductController::class,'show'])->name('productList');
    Route::post('/update/product',[ProductController::class,'update'])->name('updateProduct');
    Route::post('/delete/product',[ProductController::class,'destroy'])->name('deleteProduct');

    Route::get('/client',[ClientController::class,'index'])->name('addClientPage');
    Route::post('/add/client',[ClientController::class,'store'])->name('addClient');
    Route::get('/client/list',[ClientController::class,'show'])->name('clientList');
    Route::post('/update/client',[ClientController::class,'update'])->name('updateClient');
    Route::post('/delete/client',[ClientController::class,'destroy'])->name('deleteClient');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\InquiryController;
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

Route::permanentRedirect('/en', '/');
Route::permanentRedirect('/fr', '/');
Route::permanentRedirect('/fr/nos-clubs-camps', '/');
Route::permanentRedirect('/fr/our-approach-4', '/');
Route::permanentRedirect('/fr/notre-maternelle', '/');
Route::permanentRedirect('/fr/log-in', '/');
Route::permanentRedirect('/fr/nos-locaux/galerie-photos', '/');

Route::get('/', function () {
    return view('home');
});


Route::get('/en', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/pk1', function () {
    return view('pk1');
});


Route::get('/pk2', function () {
    return view('pk2');
});
Route::get('/pk3', function () {
    return view('pk3');
});


Route::get('/pk4', function () {
    return view('pk4');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blogDetail');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/our-mission', function () {
    return view('mission');
});

Route::get('/our-values', function () {
    return view('values');
});

Route::get('/our-vision', function () {
    return view('vision');
});

Route::get('/preschool-club', function () {
    return view('preschoolClub');
});
Route::get('/adventure-club', function () {
    return view('adventureClub');
});


Route::get('/privacy-policy', function () {
    return view('privacyPolicy');
});


Route::get('/summer-camp', function () {
    return view('summerCamp');
});
Route::get('/preschool-camp', function () {
    return view('preschoolCamp');
});
Route::get('/terms-of-service', function () {
    return view('termsOfService');
});

Route::post('inquiries', [InquiryController::class, 'store'])->name('inquiries.store');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SalesController;

// =============================================
// PRAKTIKUM 1 - Basic Routing
// =============================================

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'NIM: 254107023003 - Nama: Joni Yoga Kusuma';
});

// =============================================
// PRAKTIKUM 1 - Route Parameters
// =============================================

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-: ' . $commentId;
});

// =============================================
// PRAKTIKUM 2 - Single Action Controller
// =============================================

Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

// Resource Controller
Route::resource('photos', PhotoController::class);

// Route match & any
Route::match(['get', 'post'], '/specialUrl', function () {
    return 'Halo, ini adalah halaman spesial dengan method GET atau POST';
});

Route::any('/spesial/Mahasiswa', function () {
    return 'Halo, ini adalah halaman spesial untuk Mahasiswa';
});

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


// =============================================
// PRAKTIKUM 3 - View
// =============================================

Route::get('/greeting', [WelcomeController::class, 'greeting']);


// =============================================
// SOAL PRAKTIKUM - Aplikasi POS
// =============================================

// 1. Halaman Home
Route::get('/', HomeController::class);

// 2. Halaman Products (route prefix)
Route::prefix('category')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// 3. Halaman User (route param)
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// 4. Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PropertyController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/layanan', [PageController::class, 'services'])->name('services');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::get('/produk', [PageController::class, 'products'])->name('products');
Route::get('/produk/{id}', [PageController::class, 'productDetail'])->name('products.detail');
Route::post('/kirim-pesan', [ContactController::class, 'send'])->name('kirim.pesan');
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');
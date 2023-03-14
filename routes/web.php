<?php

use App\Http\Livewire\VirtualCard\FormGenerator;
use App\Http\Livewire\VirtualCard\Profile;
use App\Http\Livewire\VirtualCard\Qrcode;
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

Route::get('/', FormGenerator::class)->name('home');
Route::get('/{slug}', Profile::class)->name('virtual-card');
Route::get('/qrcode/{slug}', Qrcode::class)->name('qrcode');

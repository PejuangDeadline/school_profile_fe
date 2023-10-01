<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\KoleksiFotoController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [HomepageController::class, 'homepageinstitutions'])->name('homepage');
Route::get('/{grade_name}', [BranchController::class, 'index'])->name('branch');
Route::get('/info/koleksifoto', [KoleksiFotoController::class, 'index'])->name('koleksifoto');
Route::get('/info/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/info/kegiatan/detail/{titleslug}', [KegiatanController::class, 'detail'])->name('kegiatan.detail');
Route::get('/info/kontak', [ContactController::class, 'index'])->name('contact');

Route::get('/info/search', [SearchController::class, 'search'])->name('search');

// Route::post('/info/search',[SearchController::class, 'search'])->name('search');

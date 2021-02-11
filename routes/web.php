<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlasticController;
use App\Http\Controllers\NoticiaController;

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
    return view('welcome');
})->name('inicio');
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/plasticos', [PlasticController::class, 'index'])->name('plasticos.get');
Route::get('/plasticos/create', [PlasticController::class, 'create'])->name('plasticos.create');
Route::post('/plasticos', [PlasticController::class, 'store'])->name('plasticos.post');
Route::get('/plasticos/{id}', [PlasticController::class, 'show'])->where('id', '[0-9]+')->name('plasticos.show');
Route::put('/plasticos/{id}', [PlasticController::class, 'update'])->where('id', '[0-9]+')->name('plasticos.put');
Route::delete('/plasticos/{id}', [PlasticController::class, 'destroy'])->where('id', '[0-9]+')->name('plasticos.delete');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.get'); 
Route::get('/noticia/{id}', [NoticiaController::class, 'show'])->where('id', '[0-9]+')->name('noticia.show');
Route::get('/noticia/create', [NoticiaController::class, 'create'])->name('noticia.create');
Route::post('/noticia', [NoticiaController::class, 'store'])->name('noticia.post');
Route::get('/noticia/edit/{id}', [NoticiaController::class, 'edit'])->where('id', '[0-9]+')->name('noticia.edit');
Route::put('/noticia/{id}', [NoticiaController::class, 'update'])->where('id', '[0-9]+')->name('noticia.put');
Route::delete('/noticia/{id}', [NoticiaController::class, 'destroy'])->where('id', '[0-9]+')->name('noticia.delete');


/*Route::get('/crear', function () {
    return view('create');
})->name('create');*/

////////////////Route::get('/lista', [PlasticController::class, 'getAll'])->name('plasticos.getAll');
/*Route::get('/header', function () {
    return view('header');
});*/

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/lista', [PlasticController::class, 'getAll'])->name('plasticos.getAll');
Route::middleware(['auth:sanctum', 'verified'])->get('/listaNoticias', [NoticiaController::class, 'getAll'])->name('noticias.getAll');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
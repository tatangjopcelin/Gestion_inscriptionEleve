<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EleveController;


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


Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles',[ArticleController::class, 'store'])->name('articles.store');
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::put('/article/{id}', [ArticleController::class, 'update'])->name('articles.update');

Route::get('/eleves', [EleveController::class, 'index'])->name('eleves.index');
Route::get('/eleves/create', [EleveController::class, 'create'])->name('eleves.create');
Route::post('/eleves',[EleveController::class, 'store'])->name('eleves.store');
Route::delete('/eleves/{id}', [EleveController::class, 'destroy'])->name('eleves.destroy');
Route::put('/eleves/{id}', [EleveController::class, 'update'])->name('eleves.update');
Route::get('/eleves/show/{id}', [EleveController::class, 'show'])->name('eleves.show');
Route::get('/eleves/edit/{id}', [EleveController::class, 'edit'])->name('eleves.edit');

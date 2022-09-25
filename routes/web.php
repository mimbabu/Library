<?php
use App\Http\Controllers\StudentController;
use App\http\Controllers\Backend\PagesController;
use App\http\Controllers\Book\BookuploadController;
use App\http\Controllers\Book\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\IssuereturnController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [BookController::class, 'bookshow']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('/student', StudentController::class);




Route::get('/book',[BookuploadController::class,'index']);
        Route::get('/upload',[BookuploadController::class,'create']);
        Route::post('/store',[BookuploadController::class,'store']);
        Route::get('/edit-book/{id}',[BookuploadController::class,'edit']);
        Route::get('/delete-book/{id}',[BookuploadController::class,'destroy']);
        Route::get('/show-book/{id}',[BookuploadController::class,'show']);





        Route::get( '/admin', [PagesController::class,'index']);

        Route::resource('/books', BookController::class);

        Route::resource('/categories', CategoryController::class);
        Route::resource('/issuereturns', IssuereturnController::class);
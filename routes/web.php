<?php

use App\Http\Controllers\UserController;
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

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'allUsers')->name('allusers');
    Route::post('/add', 'addUsers')->name('adduser');
    // Route::get('/adduser', 'addPage')->name('addpage');
    Route::post('/update/{id}', 'updateUser')->name('updateuser');
    Route::get('/updateuser/{id}', 'updatePage')->name('updatepage');
    Route::get('/delete/{id}', 'deleteUser')->name('deleteuser');
});
Route::get('/add', function () {
    return view('add');
})->name('adduser.view');
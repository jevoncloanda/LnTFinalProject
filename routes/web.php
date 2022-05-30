<?php

use App\Http\Controllers\ItemController;
use App\Http\Middleware\IsAdminMiddleware;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ItemController::class, 'getHomePage'])->name('getHomePage');

Route::get('/get-items', [ItemController::class, 'getItems'])->name('getItems');

Route::get('/view-image/{id}', [ItemController::class, 'viewImage'])->name('viewImage');

Route::group(['middleware' => IsAdminMiddleware::class], function(){
    Route::get('/create-item', [ItemController::class, 'getCreateItem'])->name('getCreateItem');
    Route::post('/create-item', [ItemController::class, 'createItem'])->name('createItem');
    Route::get('/update-item/{id}', [ItemController::class, 'getItemById'])->name('getItemById');
    Route::patch('/update-item/{id}', [ItemController::class, 'updateItem'])->name('updateItem');
    Route::delete('/delete-item/{id}', [ItemController::class, 'deleteItem'])->name('deleteItem');
});

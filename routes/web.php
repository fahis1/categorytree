<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
    return view('dashboard');
});
Route::get('/test', function () {

    return view('test');
});
// Route::get('/get-category-tree', 'CategoryController@getCategoryTree');

Route::get('/get-category-tree', [CategoryController::class, 'getCategoryTree']);
// routes/web.php
Route::get('/get-category-data/{categoryId}', [CategoryController::class, 'getCategoryData']);
Route::get('/addsub', [CategoryController::class, 'addsub']);
Route::get('/addroot', [CategoryController::class, 'addroot']);
Route::get('/update', [CategoryController::class, 'update']);
Route::get('/delete', [CategoryController::class, 'delete']);
Route::get('/seo', [CategoryController::class, 'seo']);
Route::get('/image', [CategoryController::class, 'image']);

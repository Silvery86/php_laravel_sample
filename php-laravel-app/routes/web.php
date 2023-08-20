<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
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

Route::get('/',[
    PagesController::class,
    'index'
]);
Route::get('/about',[
    PagesController::class,
    'about'
]);
// Route::get('products',[
//     ProductsController::class,
//     'index'
// ]) -> name('products');
// how to validate id only interger
// Route::get('/products/{productName}/{id}',[
//     ProductsController::class,
//     'detail'
// ]) -> where([
//     'productName'=> '[a-zA-Z0-9]+',
//     'id' => '[0-9]+',
// ]);

/* Example for route
Route::get('/', function () {
    return view('home');
});
Route::get('/users', function () {
    return 'This is user page';
});

Route::get('foods', function () {
    return ['apple', 'grape', 'watermelon'];
});

Route::get('/aboutMe', function () {
    return response() -> json([
        'name' => 'Nguyen Bac Giang',
        'email' => 'giang8692@gmail.com'
    ]);
});

Route::get('/something', function () {
    return redirect('/');
});
/*
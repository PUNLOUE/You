<?php

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', function () {
    $posts = [
        ['title' => 'Post 1', 'content' => 'Content for service 1'],
        ['title' => 'Post 2', 'content' => 'Content for service 2'],
        ['title' => 'Post 3', 'content' => 'Content for service 3'],
    ];
    return view('service.post', ['posts' => $posts]);
});
Route::get('/products/{id}', function ($id) {
    $product = [
        'id' => $id,
        'name' => 'Product ' . $id,
        'description' => 'Description for product ' . $id,
        'price' => 100,
    ];
    return view('service.product', compact('product'));
});


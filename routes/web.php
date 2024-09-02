<?php

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

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello Word';
});

Route::get('/world', function () {
    return 'World';
});

/*Route::get('/about', function () {
    return 'Nama: Bagus Tejo Waluyo, NIM: 2141762076';
}); */ 

Route::get('/about', function () {
    $nama = 'Bagus Tejo';
    $nim = '2141762076'; 
    return "Nama: $nama, NIM: $nim";
});

//1/2
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', 
    function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

/*Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});*/

// View Routes
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

//PRAKTIKUM 2 CONTROLLER




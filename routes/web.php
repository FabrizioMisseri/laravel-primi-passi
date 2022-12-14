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

Route::get('/', function () {
    $data = [
        'helloWorld' => 'HELLO WORLD',
        'greetingArray' => [
            'ciao',
            'sono',
            'Fabrizio',
        ],
        'navbar' => [
            'menu1',
            'menu2',
            'contacts',
            'about-us',
        ],
    ];
    return view('home', $data);
})->name('home');


Route::get('/menu1', function () {
    $data = [];
    return view('menu1', $data);
})->name('menu1');


Route::get('/menu2', function () {
    $data = [];
    return view('menu2', $data);
})->name('menu2');


Route::get('/about-us', function () {
    $data = [];
    return view('about-us', $data);
})->name('about-us');


Route::get('/contacts', function () {
    $data = [];
    return view('contacts', $data);
})->name('contacts');

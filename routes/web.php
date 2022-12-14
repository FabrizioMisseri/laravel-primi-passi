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
    ];
    return view('home', $data);
})->name('home');

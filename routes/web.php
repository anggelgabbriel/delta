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
//    return view('welcome1');
    return view('welcome');
});


Route::get('/notification', function () {
    $user = auth()->user();

    error_log("aehiauehiauheuiahneiuashneiusaeh");
    return (new \App\Notifications\CustomVerifyEmail($user))
        ->toMail($user);
//    return (new InvoicePaid($invoice))
//        ->toMail($invoice->user);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

<?php

use App\Models\Message;
use Illuminate\Http\Request;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::put('/form', function (Request $request) {
    $request->validate([
        'name' => ['required'],
        'email' => ['required', 'email'],
        'content' => ['required'],
    ]);

    Message::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'content' => $request->input('content'),
    ]);

    return redirect()->route('thank-you-page');

})->name('form');

Route::get('/thank-you', function () {
    return view('thankyou');
})->name('thank-you');

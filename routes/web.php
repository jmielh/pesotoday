<?php

use App\Models\User;
use Inertia\Inertia;
use App\Mail\Welcome;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HomeController;

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

// Route::get('/testmail', function () {
//     $user = User::find(1);
//     $order = Order::find(1);
//     return view('emails.transfer-submit', ['user' => $user, 'order' => $order]);
// });
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/updatetasa', [HomeController::class, 'updateTasaForm']);
Route::post('/updatetasa', [HomeController::class, 'updateTasa']);
Route::post('/transfer', [HomeController::class, 'transfer']);
Route::get('/transfer', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::post('/payment', [HomeController::class, 'payment']);
Route::get('/payment', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/payment/order/{slug}', [HomeController::class, 'await'])->name('paymentAwait');
Route::post('/payment/check', [HomeController::class, 'confirmPayment'])->name('confirmPayment');

Route::get('/order/{slug}', [HomeController::class, 'showOrder'])->name('showOrder');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

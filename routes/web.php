<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\BookingController;
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

Route::middleware('auth:sanctum')->group(function () {

    // Dashboard
    Route::get('/', [dashboard::class, 'index'])->name('dashboard');

    // Google URL
    Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
    Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

    // Items
    Route::get('items', [ItemsController::class, 'index'])->name('items');
    Route::get('items/add', [ItemsController::class, 'addPage'])->name('addItemsPage');
    Route::post('items/add', [ItemsController::class, 'post'])->name('addItems');
    Route::get('items/edit/{id}', [ItemsController::class, 'edit'])->name('editItems');
    Route::get('items/deleteitems/{id}', [ItemsController::class, 'delete'])->name('deleteItems');

    // Booking
    Route::get('bookingitems', [BookingController::class, 'index'])->name('bookingitems');
    Route::post('bookingitems/add', [BookingController::class, 'post'])->name('addBookingitems');
});

<?php

use App\Http\Controllers\ProfileController;
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

#*********************************#

# -------  Public Routes :  -------

#- Participate :
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/events', [\App\Http\Controllers\EventController::class, 'index'])->name('event__user.index');
Route::post('/events/search', [\App\Http\Controllers\EventController::class, 'search'])->name('event.search');
Route::get('/events/{event:title}', [\App\Http\Controllers\EventController::class, 'show'])->name('event__user.show');

#*********************************#

Route::middleware('auth')->group(function () {

    Route::middleware('role:admin')->group(function () {
        #- Admin :
        Route::resource('/admin/category', \App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('/admin/user', \App\Http\Controllers\Admin\UserController::class);
        Route::get('/admin/event', [\App\Http\Controllers\Admin\EventController::class, 'index'])->name('admin.event');
        Route::post('/admin/event', [\App\Http\Controllers\Admin\EventController::class, 'validateEvent']);
        Route::get('/admin', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    });

    Route::middleware('role:organizer')->group(function () {
        #- Organiser :
        Route::resource('/organizer/event', \App\Http\Controllers\Organizer\EventController::class);
        Route::get('/organizer/reservation', [\App\Http\Controllers\Organizer\ReservationController::class, 'index'])->name('reservation.index');
        Route::post('/organizer/reservation', [\App\Http\Controllers\Organizer\ReservationController::class, 'update'])->name('reservation.update');
        Route::get('/organizer', [\App\Http\Controllers\Organizer\DashboardController::class, 'index']);

    });

});


Route::middleware('auth')->group(function () {
    #- Participate :
    Route::get('/events/reserve/{event:id}', [\App\Http\Controllers\EventController::class, 'reserve'])->name('event__user.reserve');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

<?php

    use Laravel\Fortify\Fortify;
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
    return view('welcome');
});



// a group of routes that are only accessible to authenticated users
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::prefix('panel')->group(function () {
        Route::get ('/', function () {
            return view("panel/index");
        })->name('panel.index');

        Fortify::loginView(function () {
            return view('panel/auth/login');
        });

        Fortify::registerView(function () {
            return view('panel/auth/register');
        });

        Route::get('/profile', function () {
            return view('panel/profile/index');
        })->name('panel.profile');

    });

});


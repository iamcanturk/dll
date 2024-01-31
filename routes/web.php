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

        Route::resource('home', App\Http\Controllers\HomeController::class);

        Route::resource('service', App\Http\Controllers\ServiceController::class);

        Route::resource('domain', App\Http\Controllers\DomainController::class);

        Route::resource('offer' , App\Http\Controllers\OfferController::class);

        Route::resource('cabinet', App\Http\Controllers\CabinetController::class);

        Fortify::loginView(function () {
            return view('panel/auth/login');
        });

        Fortify::registerView(function () {
            return view('panel/auth/register');
        });

        Route::resource('profile', App\Http\Controllers\ProfileController::class);



    });

});


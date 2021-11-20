<?php

use App\Http\Controllers\StorageController;
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

use App\Http\Controllers\LoginController;
use App\View\Components\Registration;

Route::group(['name' => 'index'], function () {
    Route::get('/', function () {
        return view('app.views.index.index');
    })->name('.index');
});

Route::group(['name' => 'library'], function () {
    Route::get('/library', function () {
        return view('app.views.library.index');
    })->name('.library');
});

Route::group(['name' => 'storage'], function () {
    Route::get('/storage', [StorageController::class, 'index'])
        ->name('.storage');
});

Route::group(['name' => 'support'], function () {
    Route::get('/support', function () {
        return view('app.views.support.index');
    })->name('.support');
});

Route::group(['name' => 'donate'], function () {
    Route::get('/donate', function () {
        return view('app.views.donate.index');
    })->name('.donate');
});

Route::group(['name' => 'ratings'], function () {
    Route::get('/ratings', function () {
        return view('app.views.ratings.index');
    })->name('.ratings');
});

Route::group(['name' => 'forums'], function () {
    Route::get('/forums', function () {
        return view('app.views.forums.index');
    })->name('.forums');
});

Route::get('/login', function () {
    return view('app.views.login.index');
})->name('.login');

Route::post('/login', [
    LoginController::class, 'authenticate'
])->name('.login');


Route::middleware(['auth'])->group(function () {
    Route::get('/manage', function () {
        return view('app.views.manage.index');
    })->name('.manage');
});

/*** Группа - шаблоны **/
Route::prefix('template')->name('.template')->group(function () {

    /*** Шаблон окна - registration **/
    Route::get('/registration', function () {
        return app(Registration::class)->render();
    })->name('.registration');

    /*** Шаблон окна - restore **/
    Route::get('/restore', function () {
        return view('components.restore');
    })->name('.restore');

    /*** Шаблон окна - verification **/
    Route::get('/verification', function () {
        return view('components.verification');
    })->name('.verification');

    /*** Шаблон окна - developers **/
    Route::get('/developers', function () {
        return view('components.developers');
    })->name('.developers');

    /*** Шаблон окна - event-records **/
    Route::get('/records', function () {
        return view('components.event-records');
    })->name('.records');

});


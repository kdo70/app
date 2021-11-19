<?php

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
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/', function () {
        return view('app.views.index.index');
    })->name('index');

    Route::get('/library', function () {
        return view('app.views.library.index');
    })->name('library');

    Route::get('/storage', function () {
        return view('app.views.storage.index');
    })->name('storage');

    Route::get('/support', function () {
        return view('app.views.support.index');
    })->name('support');

    Route::get('/donate', function () {
        return view('app.views.donate.index');
    })->name('donate');

    Route::get('/ratings', function () {
        return view('app.views.ratings.index');
    })->name('ratings');

    Route::get('/forums', function () {
        return view('app.views.forums.index');
    })->name('forums');

    Route::get('/login', function () {
        return view('app.views.login.index');
    })->name('login');

    Route::post('/login', [
        LoginController::class, 'authenticate'
    ])->name('login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/manage', function () {
        return view('app.views.manage.index');
    })->name('manage');
});

/*** Группа - шаблоны **/
Route::prefix('template')->group(function () {

    /*** Шаблон окна - registration **/
    Route::get('/registration', function () {
        return (new Registration())->render();
        return \Illuminate\Support\Facades\View::make('components.registration')->render();
        return view('components.registration', app(Registration::class)->data());
    })->name('template.registration');

    /*** Шаблон окна - restore **/
    Route::get('/restore', function () {
        return view('components.restore');
    })->name('template.restore');

    /*** Шаблон окна - verification **/
    Route::get('/verification', function () {
        return view('components.verification');
    })->name('template.verification');

    /*** Шаблон окна - developers **/
    Route::get('/developers', function () {
        return view('components.developers');
    })->name('template.developers');

    /*** Шаблон окна - event-records **/
    Route::get('/records', function () {
        return view('components.event-records');
    })->name('template.records');

});


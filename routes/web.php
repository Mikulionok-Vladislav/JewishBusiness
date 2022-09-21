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
    return view('welcome');
})->name('welcome');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Routes candidates
|--------------------------------------------------------------------------
*/

Route::get('add-resume',[\App\Http\Controllers\Candidates\CandidatesController::class, 'addresume'])
    ->name('addresume');

Route::post('//',[\App\Http\Controllers\Candidates\CandidatesController::class, 'store'])
    ->name('resume.add-resume');

Route::get('browsejob',[\App\Http\Controllers\Candidates\CandidatesController::class,'browseJob'])
    ->name('browsejob');
/*
|--------------------------------------------------------------------------
| Routes blog
|--------------------------------------------------------------------------
*/

Route::get('blog',[\App\Http\Controllers\Blog\BlogController::class, 'blog'])
    ->name('blog');

/*
|--------------------------------------------------------------------------
| Account
|--------------------------------------------------------------------------
*/

Route::get('account/{id}/resume',[\App\Http\Controllers\Account\AccountController::class, 'resume'])
    ->name('resume');

Route::get('account',[\App\Http\Controllers\Account\AccountController::class, 'account'])
    ->name('account');

Route::get('account/notifications',[\App\Http\Controllers\Account\AccountController::class, 'notifications'])
    ->name('notifications');



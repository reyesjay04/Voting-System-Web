<?php

use App\Models\Voters;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('/voters', [App\Http\Controllers\VotersController::class, 'voters'])->name('voters');

Route::any('/regvoters', [App\Http\Controllers\VotersController::class, 'store']);

Route::any('/candidate', [App\Http\Controllers\CandidateController::class, 'candidate'])->name('candidate');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::any('/import', [App\Http\Controllers\InsertController::class, 'import'])->name('import');
Route::any('/importExportView', [App\Http\Controllers\InsertController::class, 'importExportView']);

Route::get('voters/list', [Voters::class, 'getVoters'])->name('students.list');


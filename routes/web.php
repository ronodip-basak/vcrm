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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/lead/new', 'App\Http\Controllers\LeadController@create')->name('lead.new');

Route::middleware(['auth:sanctum', 'verified'])->post('/lead', 'App\Http\Controllers\LeadController@store')->name('lead.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/lead/{lead}', 'App\Http\Controllers\LeadController@show')->name('lead.show');

//Route::middleware(['auth:sanctum', 'verified'])->get('/lead/{lead}', 'App\Http\Controllers\LeadController@show')->name('lead.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/followups', 'App\Http\Controllers\FollowupController@index')->name('followup.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/followups/all', 'App\Http\Controllers\FollowupController@indexAll')->name('followup.all');
Route::middleware(['auth:sanctum', 'verified'])->get('/followups/new/{lead}', 'App\Http\Controllers\FollowupController@create')->name('followup.add');
Route::middleware(['auth:sanctum', 'verified'])->get('/followups', 'App\Http\Controllers\FollowupController@store')->name('followup.save');
Route::middleware(['auth:sanctum', 'verified'])->get('/lead/{lead}/edit', 'App\Http\Controllers\LeadController@edit')->name('lead.edit');

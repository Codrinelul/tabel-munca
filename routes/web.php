<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveTable;

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

Route::get('/livetable', [LiveTable::class, 'index']);
Route::get('/livetable/fetch_data', [LiveTable::class, 'fetch_data']);
Route::post('/livetable/add_data', [LiveTable::class, 'add_data'])->name('livetable.add_data');
Route::post('/livetable/update_data', [LiveTable::class, 'update_data'])->name('livetable.update_data');
Route::post('/livetable/delete_data', [LiveTable::class, 'delete_data'])->name('livetable.delete_data');
// Route::get('/livetable', 'LiveTable@index');
// Route::get('/livetable/fetch_data', 'LiveTable@fetch_data');
// Route::post('/livetable/add_data', 'LiveTable@add_data')->name('livetable.add_data');
// Route::post('/livetable/update_data', 'LiveTable@update_data')->name('livetable.update_data');
// Route::post('/livetable/delete_data', 'LiveTable@delete_data')->name('livetable.delete_data');

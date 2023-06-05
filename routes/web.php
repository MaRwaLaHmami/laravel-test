<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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
Route::get('/marwa', function () {
    return view('welcome');
});
Route::get('/new', function () {
    return view('new');
});
// Route::get('/new1', function () {
//     return view('new1');
// });
//
// o akhir haja
// hia  route o howa lmas2oul 3la chemin dyal app kamla  ohowa li kisaweb hada lien

// Route::get('/data/count', 'adminController@getdataCount')->name('data.count')->name('data.count');had methode sehiha ms khas n3ety chemin omafiyach
Route::get('/new1', [adminController::class,"getdataCount"]);//hadi nichan kahtkhdem


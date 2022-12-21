<?php

use App\Http\Controllers\ProfileController;
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

// home route
Route::get('/', function () {
    $data = [
        "links" => config('comics.links'),
        "dcComics" => config('comics.dcComics'),
        "dc" => config('comics.dc'),
        "sites" => config('comics.sites'),
        "shop" => config('comics.shop'),
    ];
    return view('home', $data);
})->name('home');



// comics route
Route::get('/comics', function () {
    $data = [
        "links" => config('comics.links'),
        "dcComics" => config('comics.dcComics'),
        "dc" => config('comics.dc'),
        "sites" => config('comics.sites'),
        "shop" => config('comics.shop'),
        "films" => config('comics.films')
    ];

    return view('comics', $data);
})->name('comics');
?>
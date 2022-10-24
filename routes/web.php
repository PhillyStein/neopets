<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Species;
use App\Models\Pet;

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

// All species
Route::get('/', function() {
    return view('species', [
        'heading' => 'All Species',
        'species' => Species::all(),
    ]);
});

// Single species
route::get('/species/{id}', function($id) {
    return view('specie', [
        'specie' => Species::find($id),
    ]);
});

// All user's pets
route::get('/my/pets}', function() {
    return view('pets', [
        'pets' => Pet::all(),
    ]);
});

// User's pet by id
route::get('/my/pets/{id}', function($id) {
    return view('pet', [
        'pet' => Pet::find($id),
    ]);
});


/*
Route::get('/hello', function() {
    return response('<h1>Hello World</h1>', 200)
    ->header('Content-Type', 'text/plain');
});

Route::get('/species/{id}', function($id){
    return response('Species ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    return $request->name . ' ' . $request->species;
});
*/
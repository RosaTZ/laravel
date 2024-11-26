<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebasController;

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

//parametro obligatorio

// Route::get('/pelicula/{titulo}', function($titulo) {
//    return view('pelicula', array('titulo' => $titulo));
// });


//parametro opcional

// Route::get('/pelicula/{titulo}/{year?}', function($titulo = 'no hay una pelicula seleccionada', $year = 2019) {


//     return view('pelicula', array(
//         'titulo' => $titulo,
//     'year' => $year
//     ));
//  })->where(array(
// 'titulo' => '[a-zA-Z]+',
// 'year' => '[0-9]+'
//  ));

//  Route::get('/listado-peliculas', function(){
// $titulo = 'Listado de peliculas';
//     return view('peliculas.listado', array(
//         'titulo' => $titulo
//     ));
//  });

 //otra opción aparte de pasarle un array, se puede usar with

//  Route::get('/listado-peliculas', function(){
//     $titulo = 'Listado de peliculas';
//     $listado = array('batman', 'spiderman');
//         return view('peliculas.listado')
//         ->with('titulo', $titulo)
//         ->with('listado', $listado);
//      });


//      Route::get('/contact', function () {
//         // return redirect()->route('contact2');
//          return view('contact', ['name' => 'Andres']);
//      });

//      Route::get('/contact2', function () {
//          return view('contact2');
//      })-> name('contact2');

//      use Illuminate\Support\Facades\Http;

    //  $response = Https::get('https://pokeapi.co/api/v2/pokemon/ditto');

    //  var_dump($response);

    Route::get('/test', [pruebasController::class,'index']);
    Route::get('/otro/{post}', [pruebasController::class,'otro']);

    Route::resource('post', pruebasController::class);
<?php

use Illuminate\Support\Facades\Auth;
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

/* Route::get('/', function () {
    return view('index');
}); */


/* Rutas FrontEnd */
Route::get('/', [App\Http\Controllers\InicioController::class, 'inicio'])->name('inicio');
Route::get('/terapias', [App\Http\Controllers\InicioController::class, 'terapias'])->name('terapias');
Route::get('/blog', [App\Http\Controllers\InicioController::class, 'blog']);
Route::GET('/blog/{post}',[App\Http\Controllers\InicioController::class, 'post'])->name('post');

Route::get('/quien-soy', function () {
    return view('quiensoy');
})->name('quiensoy');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

/* Rutas FrontEnd Ingles */
Route::get('/en', [App\Http\Controllers\InicioController::class, 'inicioIngles'])->name('inicio-ingles');
Route::get('/en/about-us', function () {
    return view('ingles.quiensoy');
})->name('quiensoy-ingles');
Route::get('/en/therapies', [App\Http\Controllers\InicioController::class, 'terapiasIngles'])->name('terapias-ingles');
Route::get('/en/blog', [App\Http\Controllers\InicioController::class, 'blogIngles'])->name('blog-ingles');
Route::get('/en/blog/{post}',[App\Http\Controllers\InicioController::class, 'postIngles'])->name('post-ingles');

Route::get('/en/contact', function () {
    return view('ingles.contacto');
})->name('contacto-ingles');

/* Rutas FrontEnd Italiano */
Route::get('/it', [App\Http\Controllers\InicioController::class, 'inicioItaliano'])->name('inicio-italiano');

Route::get('/it/su-di-me', function () {
    return view('italiano.quiensoy');
})->name('quiensoy-italiano');

Route::get('/it/terapie', [App\Http\Controllers\InicioController::class, 'terapiasItaliano'])->name('terapias-italiano');
Route::get('/it/blog', [App\Http\Controllers\InicioController::class, 'blogItaliano'])->name('blog-italiano');
Route::get('/it/blog/{post}',[App\Http\Controllers\InicioController::class, 'postItaliano'])->name('post-italiano');

Route::get('/it/contatto', function () {
    return view('italiano.contacto');
})->name('contacto-italiano');



Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/form', [App\Http\Controllers\InicioController::class, 'formulario'])->name('formulario');

Route::get('/storage-link',function(){
    
    if(file_exists(public_path('storage'))){
        return 'el directorio ya existe';
    }

    $this->laravel->make('files')->link(
        storage_path('app/public'), public_path('storage')
    );

    return 'directorio creado correctamente.';
});


Route::post('/formulario', [App\Http\Controllers\MailController::class, 'getMail'])->name('form');

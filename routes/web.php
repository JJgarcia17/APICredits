<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CreditController;

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

//Probando Fetch para cargar los datos sin recargar la pagina 

// Route::get('/crud-fetch', function () {
//     return view('credits.home');
// });

//Rutas de la vista para observar los datos de la API
//CREAD
Route::post('/crud/{id?}' , [CreditController::class, 'store'])->name('save');
//READ
Route::get('/crud/{id?}' , [CreditController::class, 'view'])->name('crud');
//UPDATE
Route::patch('/crud/{id}' , [CreditController::class, 'update'])->name('update');
//DELETE
Route::delete('/crud/{id}' , [CreditController::class, 'destroy'])->name('destroy');
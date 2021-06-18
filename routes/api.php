<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CreditController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/credits',[CreditController::class,'all']);
Route::get('/credits/{id?}',[CreditController::class,'read']);
// Route::get('/amount' , [CreditController::class, 'amount']);
Route::get('/amount/{id?}' , [CreditController::class, 'amount']);
Route::get('/client/{id?}' , [ClientController::class, 'allUserName'])->name('all-user-name');

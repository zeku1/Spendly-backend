<?php

use App\Http\Controllers\Api\V1\IncomesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix([
    'prefix' => 'v1', 
    'namespace' => 'App\Http\Controllers\Api\V1',
    'middleware' => 'auth:sanctum'
],function(){

    /*
        Income endpoint
        'url/api/v1/incomes' 
    */
    Route::resource('incomes',IncomesController::class);

});

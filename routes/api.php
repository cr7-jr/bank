<?php

use Illuminate\Http\Request;

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

//get the account information
Route::get('getAccountInformation/{id_bank}', "API\wellcomeController@getAccountInformation");
// Check for a bank account
Route::get('checkRegister/{idBAnk}/idNumber/{idNumber}', 'API\wellcomeController@checkRegister');

Route::get('checkInformation/{user}/value/{value}', 'API\wellcomeController@checkInformation');

Route::get('getReceipt/{receipt}', 'API\receiptController@show');

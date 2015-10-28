<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*xsm, 20151020, add.*/
Route::any('/recharge', 'RechargeController@test');
/*xsm, 20151021, add.*/
Route::any('/setMenu', 'RechargeController@setMenu');

<?php

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

/*
|---------------------------------------------------------------
|           storage files
|---------------------------------------------------------------
|
|
|
*/





/*
|---------------------------------------------------------------
|           Efaktury
|---------------------------------------------------------------
|
|
|
*/
Route::group([
    'middleware'=>'roles',
    'roles' => 'Administrator','Dostawy']
    ,function () {
        Route::get('/Efaktury',[
            'uses'=>'EfakturyController@index',
            'as'=>'efaktury.index']);
        Route::post('/Efaktury/create',[
            'uses'=>'EfakturyController@create',
            'as'=>'efaktury.create']);
    });
/*
|---------------------------------------------------------------
|           PZ
|---------------------------------------------------------------
|
|
|
*/

Route::group([
    'middleware' => 'roles',
    'roles'=>['Administrator','Dostawy']
    ],function () {
        Route::get('/Pz',[
            'uses'=>'PzController@index',
            'as'=>'pz.index']);

        Route::post('/Pz/create',[
            'uses' => 'PzController@create',
            'as' => 'pz.create']);
    });
/*
|---------------------------------------------------------------
|           Transport
|---------------------------------------------------------------
|
|
|
*/

Route::group([
    'middleware' => 'roles',
    'roles' => ['Administrator','User']
    ], function() {
        Route::get('/Transport', [
            'uses' => 'TransportController@index',
            'as' => 'transport.index']);
        
        Route::post('/Transport/create', [
            'uses' => 'TransportController@create',
            'as' => 'transport.create']);

        Route::post('/Transport/byDate',[
            'uses'=>'TransportController@byDate',
            'as'=>'transport.byDate']);

        Route::get('/Transport/edit/{id}',[
            'uses'=>'TransportController@edit',
            'as'=>'transport.edit']);
        Route::put('/Transport/update/{id}',[
            'uses'=>'TransportController@update',
            'as'=>'transport.update']);

    });
Route::group([
    'middleware' => 'roles',
    'roles' => ['Administrator','Dyrektor logistyki','logistyka']
    ], function() {
        Route::get('/Transport/assign/{date}', [
            'uses' => 'TransportController@assign',
            'as' => 'transport.assign']);
        Route::put('/Transport/assignUpdate/{id}',[
            'uses'=> 'TransportController@assignUpdate',
            'as'=>'transport.assignUpdate']);
    });





/*
|---------------------------------------------------------------
|           Produkcja
|---------------------------------------------------------------
|
|
|
*/
Route::group([
    'middleware'=>'roles',
    'roles'=>['Administrator','Prefabrykacja','Dyrektor Prefabrykacji']
    ], function () {
        Route::get('/Produkcja',[
            'uses'=>'ProductionController@index',
            'as'=>'production.index']);
        Route::post('/Produkcja/create',[
            'uses'=>'ProductionController@create',
            'as'=>'production.create']);
        Route::get('/Produkcja/file/{id}/{filename}',function ($id , $filename)
        {

            $filepath= storage_path().'/app/hide/'.$id.'/'.$filename;
            $fileContents = File::get($filepath);
            return Response::download($filepath);

        },['uses' => 'ProductionController@file',
        'as' => 'production.file']);
         });






/*
|---------------------------------------------------------------
|           Prefabrykacja
|---------------------------------------------------------------
|
|
|
*/

Route::group([
    'middleware' => 'roles',
    'roles' => ['Administrator','Prefabrykacja','Dyrektor Prefabrykacji']
    ], function() {

        Route::get('/Prefabrykacja', [
            'uses' => 'PrefabrykacjaController@index',
            'as' => 'prefabrykacja.index']);

    });


Route::group([
    'middleware' => 'roles',
    'roles' => ['Administrator','Dyrektor Prefabrykacji']
    ], function() {


        Route::post('/Prefabrykacja/create', [
            'uses' => 'PrefabrykacjaController@create',
            'as' => 'prefabrykacja.create']);

        Route::post('/Prefabrykacja/store', [
            'uses' => 'PrefabrykacjaController@store',
            'as' => 'prefabrykacja.store']);
    });


/*
|---------------------------------------------------------------
|           Other
|---------------------------------------------------------------
|
|
|
*/


Route::get('/home', 'HomeController@index', [
    'uses' => 'HomeController@index',
    'as' => 'home']);

Route::get('/', 'HomeController@index', [
    'uses' => 'HomeController@index',
    'as' => 'home.index']);


Route::get('error','ErrorsController@noPermissions')->name('noPermissions');


/*
|---------------------------------------------------------------
|           Auth
|---------------------------------------------------------------
|
|
|
*/

        // Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        // Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        // Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        // Route::post('password/reset', 'Auth\ResetPasswordController@reset');


/*Route::get('/home', 'HomeController@index')->name('home');*/

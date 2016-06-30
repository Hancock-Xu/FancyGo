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

Route::get('/', 'Admin\BasicSiteInfoController@index');
Route::get('/about', 'BasicSiteInfoController@about');

Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');

Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');

Route::post('Admin\upload', 'Admin\UploadController@upload');
Route::delete('Admin\delete', 'Admin\UploadController@delete');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group([
	'namespace'=>'Admin',
	'middleware'=>'auth'], function(){
	
	Route::resource('job','JobController');
	
	Route::resource('company','CompanyController');
	Route::post('company/verify_company_email', 'CompanyController@verifyEditRequestEmail');
	
	Route::get('company/verify_edit_company_email/{id}', 'CompanyController@getValidatedEditRequestEmail');
	
//	Route::get('company/verify_create_company_email/')
	Route::get('company/delete/{id}','CompanyController@deleteJob');
	
//	Route::resource('apartment','ApartmentController');

	Route::get('/profile/edit', 'ProfileController@edit');
	Route::post('/profile/update', 'ProfileController@update');
	Route::get('/profile/updated','ProfileController@updateSucceed');
	Route::get('/profile/company', 'ProfileController@company');
	Route::post('/profile/company/delete', 'ProfileController@deleteCompany');


});


Route::auth();

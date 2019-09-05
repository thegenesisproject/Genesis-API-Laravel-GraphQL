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

Route::group(['middleware' => ['auth:api']], function (){

	/**
	 * Resources API Endpoints
	 */
	Route::get('users/me', 'UserController@currentUser'); // currently authenticated user
	
	// Route::get('users/me', 'Users\UserController@current')
	// 	->middleware('scopes:change-settings,update-self'); // currently authenticated user (with scopes)

	/// universal resources (important, re-usable)
    Route::resource('users', 'UserController'); // Users API endpoint
	Route::resource('admins', 'AdminController'); // Admins API endpoint (User with administrator priviledges) 
	// Route::resource('managers', 'ManagerController'); // Managers API endpoint (User with manager priviledges) 

	/// global resources (app-agnostic, re-usable)
	// Route::resource('categories', 'CategoryController'); // Categories management API
	// Route::resource('units', 'UnitController'); // Units management API
	// Route::resource('countries', 'CountriesController'); // Countries management API

	/// app-specific
	// Route::resource('agents', 'AgentController'); // Agents API endpoint
});

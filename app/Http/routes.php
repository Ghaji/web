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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/', ['uses' => 'NavigationController@mainIndex', 'as' => 'home']);
// Route::get('/', ['uses' => 'NavigationController@index', 'as' => 'home']);

// Route::get('/home', 'HomeController@index');
Route::get('/home', 'NavigationController@mainIndex');
Route::get('/single/{slug}', ['as' => 'single.show', 'uses' => 'HomeController@show'] );
Route::get('/list', ['as' => 'list.listshow', 'uses' => 'HomeController@listshow'] );
Route::get('/news', ['as' => 'news', 'uses' => 'HomeController@news'] );
Route::get('/events', ['as' => 'events', 'uses' => 'HomeController@events'] );
Route::get('/job-vacancy', ['as' => 'job-vacancy', 'uses' => 'HomeController@jobVacancy'] );
Route::get('/sales-of-forms', ['as' => 'sales-of-forms', 'uses' => 'HomeController@salesForms'] );
Route::get('/advertisement', ['as' => 'advertisement', 'uses' => 'HomeController@advertisement'] );
Route::get('/inugural-lectures', ['as' => 'inugural-lectures', 'uses' => 'HomeController@inuguralLectures'] );
Route::get('/conferences', ['as' => 'conferences', 'uses' => 'HomeController@conferences'] );

// Authentication routes...
Route::get('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login', ['as' => 'loginPost', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register', ['as' => 'registerPost', 'uses' => 'Auth\AuthController@postRegister']);

// Routes for megalinks with there pages
Route::get('/ujay-campus-fm', ['as' => 'page.showUjayCampusFm', 'uses' => 'HomeController@showUjayCampusFm']);
Route::get('/ujay-magazine', ['as' => 'page.showUjayMagazine', 'uses' => 'HomeController@showUjayMagazine']);
Route::get('/ujay-live-streaming', ['as' => 'page.showUjayLiveStreaming', 'uses' => 'HomeController@showUjayLiveStreaming']);
Route::get('/ujay-sports', ['as' => 'page.showUjaySports', 'uses' => 'HomeController@showUjaySports']);
Route::get('/miss-ujay', ['as' => 'page.showMissUjay', 'uses' => 'HomeController@showMissUjay']);
Route::get('/sug-day', ['as' => 'page.showSugDay', 'uses' => 'HomeController@showSugDay']);

Route::group(['middlewareGroups' => ['web']], function () {

	Route::auth();

	// Admin routes for the dashboard which is for authenticated user...
	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

	// User Avatar Route
	Route::get('avatar', 'UserController@avatar');
	Route::post('avatar', 'UserController@update_avatar');

	// User Profile Route
	Route::get('profile', 'UserController@profile');
	Route::put('profile/{id}', ['as' => 'profile', 'uses' => 'UserController@profile_update']);

	// User Settings Route
	Route::get('setting', 'UserController@setting');

	// User setting Route
	// For Role
	// Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middlewareGroups' => ['permission:role-list|role-create|role-edit|role-delete']]);
	// Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middlewareGroups' => ['permission:role-create']]);
	// Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middlewareGroups' => ['permission:role-create']]);
	// Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	// Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middlewareGroups' => ['permission:role-edit']]);
	// Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middlewareGroups' => ['permission:role-edit']]);
	// Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middlewareGroups' => ['permission:role-delete']]);

	// Roles Resource route
	Route::resource('roles', 'RoleController');

	// Permissions Resource route
	Route::resource('permissions', 'PermissionController');

	// Menu Resource for admin
	Route::resource('menu', 'NavigationController');

	// Submenu Resource for admin
	Route::resource('submenu', 'SubNavigationController');

	// Pages Resource for admin
	Route::get('pages/createFaculty', 'PageController@createFaculty');
	Route::get('pages/createDepartment', 'PageController@createDepartment');
	Route::get('pages/createSpecialPage', 'PageController@createSpecialPage');
	Route::resource('pages', 'PageController');
	
	// Faculty Resource for admin
	Route::resource('facultiess', 'FacultyController');

	// Departments Resource for admin
	Route::resource('departmentss', 'DepartmentController');

	// Users Resource for admin
	Route::resource('users', 'UserController');

	// News Resource for admin
	Route::resource('newss', 'NewController');

	// Images Resource for admin
	Route::resource('/images', 'ImageController');

	Route::get('myform',array('as'=>'myform','uses'=>'HomeController@myform'));

	Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'HomeController@myformAjax'));
	   
});

// This Route is for Faculties
// Route::get('/faculties/{slug}', ['as' => 'page.show', 'uses' => 'PageController@show']);

// This Route is for Departments
// Route::get('/departments/{slug}', ['as' => 'page.show', 'uses' => 'PageController@show']);

// could be page/{slug} or only slug
Route::get('/library', ['as' => 'page.library', 'uses' => 'PageController@Library']);

// could be page/{slug} or only slug
Route::get('/library/{slug}', ['as' => 'page.showLibrary', 'uses' => 'PageController@showLibrary']);

// could be page/{slug} or only slug
Route::get('/{slug}', ['as' => 'page.showpages', 'uses' => 'PageController@showPages']);

// show faculty pages or department under faculty {faculty}/{slug}
Route::get('/{faculty}/{slug}', ['as' => 'page.showFacultyPage', 'uses' => 'PageController@showFacultyPages']);

// show department pages or programme under department {faculty}/{department}/{slug}
Route::get('/{faculty}/{department}/{slug}', ['as' => 'page.showDepartments', 'uses' => 'PageController@showDepartmentPages']);



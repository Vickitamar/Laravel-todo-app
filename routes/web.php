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

Route::get('/', function () { // / means homepage
    return view('welcome');
});

// Route::get('/new', function () {  //what we want to call the pathway
//     return view('new'); // the name of the view blade
// });


Route::get('/new', [
	'uses' => 'PagesController@new' //uses this controller for /new page @new is the name of the method created in PagesController
]);

Route::get('/todo', [
	'uses' => 'TodosController@index',

	'as' => 'todos'
]);

Route::post('/create/todo', [
	'uses' => 'TodosController@store'
]);

Route::get('/todo/delete/{id}', [ //can pass {id} in as a p now in the controller
	'uses' => 'TodosController@delete',

	'as' => 'todo.delete' //name of the route
]);

Route::get('/todo/update/{id}', [ //can pass {id} in as a p now in the controller
	'uses' => 'TodosController@update',

	'as' => 'todo.update' //name of the route
]);

Route::post('/todo/save/{id}', [
	'uses' => 'TodosController@save',

	'as' => 'todos.save'
]);

Route::get('/todo/completed/{id}', [ //can pass {id} in as a p now in the controller
	'uses' => 'TodosController@completed',

	'as' => 'todo.completed' //name of the route
]);












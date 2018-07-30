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

Route::get('/', function(){
    return view('bienvenidos');
})->name('bienvenido')->middleware('auth');

 Route::group(['middleware'=>['auth', 'role']], function(){
     
    Route::get('/clients', 'ClientController@getIndex')->name('clients.index');
    Route::get('/clients/view/{id}', 'ClientController@getView');
    Route::get('/clients/create', 'ClientController@getCreate')->name('create_client');
    Route::post('/clients/create', 'ClientController@postCreate');
    Route::get('/clients/edit/{id}', 'ClientController@getEdit');
    Route::put('/clients/edit/{id}', 'ClientController@putEdit');
    Route::delete('/clients/delete/{id}','ClientController@deleteDelete');


    Route::get('/users', 'UserController@getIndex')->name('users.index');
    Route::get('/users/view/{id}', 'UserController@getView')->name('users.view');
    Route::get('/users/create', 'UserController@getCreate');
    Route::post('/users/create', 'UserController@postCreate');
    Route::get('/users/edit/{id}', 'UserController@getEdit');
    Route::put('/users/edit/{id}', 'UserController@putEdit');
    Route::delete('/users/delete/{id}', 'UserController@deleteDelete');

    Route::get('/projects', 'ProjectController@getIndex')->name('projects.index');
    Route::get('/projects/intern', 'ProjectController@getIntern')->name('projects.intern');
    Route::get('/projects/comer', 'ProjectController@getComer')->name('projects.comer');
    Route::get('/projects/view/{id}', 'ProjectController@getSingle');
    Route::get('/projects/edit/{id}', 'ProjectController@getEdit');
    Route::put('/projects/edit/{id}', 'ProjectController@putEdit');
    Route::get('/projects/finish/{id}', 'ProjectController@putFinish')->name('project.finish');;
    Route::get('/projects/create', 'ProjectController@getCreate')->name('projects.create');
    Route::post('/projects/create', 'ProjectController@postCreate');
    Route::delete('/projects/delete/{id}', 'ProjectController@deleteDelete');

    Route::get('/notes', 'NoteController@getIndex')->name('notes.index');
    Route::get('/notes/view/{id}', 'NoteController@getSingle');
    Route::get('/notes/edit/{id}', 'NoteController@getEdit');
    Route::put('/notes/edit/{id}', 'NoteController@putEdit');
    Route::get('/notes/create', 'NoteController@getCreate');
    Route::post('/notes/create', 'NoteController@postCreate');
    Route::delete('/notes/delete/{id}', 'NoteController@deleteDelete');

    Route::get('/reminders', 'ReminderController@getIndex')->name('reminders.index');
    Route::get('/reminders/view/{id}', 'ReminderController@getSingle');
    Route::get('/reminders/edit/{id}', 'ReminderController@getEdit');
    Route::put('/reminders/edit/{id}', 'ReminderController@putEdit');
    Route::get('/reminders/create', 'ReminderController@getCreate')->name('reminders_create');
    Route::post('/reminders/create', 'ReminderController@postCreate');
    Route::delete('/reminders/delete/{id}', 'ReminderController@deleteDelete');

    Route::get('/negociation', 'NegociationController@getIndex')->name('negociation.index');
    Route::get('/negociation/{id}', 'NegociationController@show')->name('negociation.show');
    Route::get('/negociation/getNegociations/{id}', 'NegociationController@getNegociations');
    Route::post('/negociation/postNegociation', 'NegociationController@postNegociation');

    Route::get('/home', 'HomeController@index')->name('home'); 
});

  Auth::routes();

  Route::get('/register', function(){
  })->name('register')->middleware('role');
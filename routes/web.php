<?php

/* user
use App\Http\Controllers\ContactsController;



|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!


Route::get('/', function () {
    return view('contact');
 });

*/




Route::resource('/contact', 'ContactController');


//Route::get('/',"ContactController@index");
//oute::get('/edit/{id}',"ContactController@edit");
//Route::get('/show/{id}',"ContactController@show");
//Route::post('/create',"ContactController@create");
//Route::post('/store',"ContactController@store");
//Route::get('/update',"ContactController@update");






























    /*
Route::get('/',"ContactsController@index");
Route::get('/edit/{id}',"ContactsController@edit");
Route::get('/show/{id}',"ContactsController@show");
Route::get('/create',"ContactsController@create");
Route::post('/store',"ContactsController@store");
Route::post('/update/{id}',"ContactsController@update");

*/














    
/*
    @if ($layout == 'index')
    <div class="container-fluid">
      <section class="col">
       @include("contactslist")
      </section>
      <section class="col"></section>
    </div> 
    
      @elseif($layout == 'create') 
    <div class="container-fluid">
      <section class="col">
       @include("contactslist")
      </section>
      <section class="col">
           </section>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid">
      <section class="col">
       @include("contactslist")
      </section>
      <section class="col"></section>
    </div>
    
    @elseif($layout == 'edit')
    @endif
    */








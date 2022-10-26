<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;



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



Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
   // roal control
   Route::any('rule','App\Http\Controllers\BackEnd_Controller\RuleController@view')->name('rule_control');
   Route::any('rule/edit','App\Http\Controllers\BackEnd_Controller\RuleController@update');
   // dashboard
   Route::any('dashboard','App\Http\Controllers\BackEnd_Controller\DashboardController@dashboard');


   // tutors
   Route::get('tutors','App\Http\Controllers\BackEnd_Controller\TutorsController@addTutors');

   Route::post('tutors/insert','App\Http\Controllers\BackEnd_Controller\TutorsController@tutorsInsert');

   Route::get('tutors/list','App\Http\Controllers\BackEnd_Controller\TutorsController@tutorsList');
   
   
});

    ///////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////
    ///////////////////////// start user route/////////////////////////
    ///////////////////////////////////////////////////////////////////


                        //home
   Route::get('/', 'App\Http\Controllers\FontEnd_Controller\HomeController@home');


                        // showing error page
   Route::get('/404', function () { return abort(404); });                     


   
                
                   
   
 







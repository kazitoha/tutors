<?php

use Illuminate\Support\Facades\Route;



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



Route::middleware(['login.session'])
 ->as('user.')
 ->group(function () {

   Route::get('user/dashboard', 'App\Http\Controllers\FontEnd_Controller\user_panel\loginController@loginDashboard')->name('dashboard');

   Route::get('user/edit', 'App\Http\Controllers\FontEnd_Controller\user_panel\registerUserController@userEdit')->name('edit');
   Route::post('user/update', 'App\Http\Controllers\FontEnd_Controller\user_panel\registerUserController@update')->name('update');

   Route::get('logout', 'App\Http\Controllers\FontEnd_Controller\user_panel\loginController@logOut')->name('log.out');
    
});




                        //home
   Route::get('/', 'App\Http\Controllers\FontEnd_Controller\HomeController@home');
   Route::post('tutors', 'App\Http\Controllers\FontEnd_Controller\TutorsController@tutorsInsert')->name('tutors.insert');
   Route::get('distric', 'App\Http\Controllers\FontEnd_Controller\TutorsController@districtList')->name('district.List');





   // register
   Route::get('register', 'App\Http\Controllers\FontEnd_Controller\user_panel\registerUserController@register')->name('user.register');
   Route::get('register/insert', 'App\Http\Controllers\FontEnd_Controller\user_panel\registerUserController@registerInsert')->name('user.register.insert');


       // user login part
   Route::get('login', 'App\Http\Controllers\FontEnd_Controller\user_panel\loginController@login')->name('user.login');
   Route::post('log/in', 'App\Http\Controllers\FontEnd_Controller\user_panel\loginController@loginCredential')->name('login.credentials'); 

 



   // tutor join
   Route::post('tutors/join', 'App\Http\Controllers\FontEnd_Controller\TutorsController@joinTutors')->name('join.tutors');


                        // showing error page
   Route::get('/404', function () { return abort(404); });

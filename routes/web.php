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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('team', function () {
    return view('team');
});

Route::get('faqs', function () {
    return view('faq');
});

Route::get('contact', function () {
    return view('contact');
});

//Route for Inserting into the Database 
Route::resource('repair', 'RepairsController');

Route::get('admin/register_engineer','EngineersController@showEngineer')->middleware('admin');
Route::post('admin/register_engineer','EngineersController@insertEngineer')->middleware('admin');

//Route to Send Email from Contact Form 
Route::get('/contact', 'SendEmailController@index');
Route::post('/contact/send', 'SendEmailController@send');


//Route for Retrieving from Database
Route::get('admin/completed_request','CompletedController@index')->middleware('admin');
Route::get('admin/pending_request','PendingController@index')->middleware('admin');
Route::get('admin/registered_user','UsersController@index')->middleware('admin');
Route::get('admin/paid_user', 'PaidController@index')->middleware('admin');
Route::get('admin/accredited_engineers', 'AccreditedController@index')->middleware('admin');
Route::get('admin/dashboard', 'AdmindashboardController@indexengr')->middleware('admin');
Route::get('admin/all_track','AlltracksController@index')->middleware('admin');


// Routes for Updating Payments
Route::get('admin/payment_reminder/', 'PaymentsController@index')->middleware('admin');
Route::get('admin/payment_reminder/{id}', 'PaymentsController@index')->middleware('admin');
Route::post('admin/payment_reminder/save', 'PaymentsController@save')->middleware('admin');

// Routes for Updating Track
Route::get('admin/track_details/', 'TracksController@index')->middleware('admin');
Route::get('admin/track_details/{id}', 'TracksController@index')->middleware('admin');
Route::post('admin/track_details/save', 'TracksController@save')->middleware('admin');
Route::get('/deleteUser/{id}', 'TracksController@deleteUser');
Route::resource('track_details/store', 'ReportsController')->middleware('admin');

// Routes for Updating Reports
Route::get('admin/report/', 'ReportsController@index')->middleware('admin');
Route::get('admin/report/{id}', 'ReportsController@index')->middleware('admin');
Route::post('admin/report/save', 'ReportsController@save')->middleware('admin');

// Routes for Users Repair Info
Route::get('track','MytrackController@index');
Route::post('track','MytrackController@search');

Route::get('/allrequest', 'AllrequestController@index')->name('allrequest');
Route::post('/allrequest', 'AllrequestController@search')->name('allrequest');

Route::get('/transaction', 'TransactionController@index')->name('transaction');
Route::post('/transaction', 'TransactionController@search')->name('transaction');

Route::get('/avatar', 'AvatarController@index');
Route::post('/addimage', 'AvatarController@store')->name('addimage');

Route::get('/home', 'PortalController@index')->name('home');

Auth::routes();


Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/update', 'HomeController@update')->name('update');
Route::get('/avatar', 'HomeController@avatar')->name('avatar');
Route::get('/helpdesk', 'HomeController@helpdesk')->name('helpdesk');
Route::get('/complaint', 'HomeController@complaint')->name('complaint');
Route::get('/testimonial', 'HomeController@testimonial')->name('testimonial');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::get('admin/support_message', 'HomeController@support_message')->middleware('admin');



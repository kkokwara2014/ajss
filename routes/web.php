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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', 'AdminController@index')->name('admin.index');


    // Handling all about the Admins
    Route::get('/all', 'AdminController@allAdmins')->name('admin.admins.all');
    Route::get('/create/new', 'AdminController@create')->name('admin.admins.create');
    Route::post('/create/new', 'AdminController@store')->name('admin.admins.store');
    Route::get('/edit/admin/{id}', 'AdminController@edit')->name('admin.admins.edit');
    Route::match(['put', 'patch'], 'update/{id}', 'AdminController@update')->name('admin.admins.update');
    Route::match(['delete'], '/delete/{id}', 'AdminController@destroy')->name('admin.destroy');


    // Managing Editors
    Route::get('/editor/all', 'EditorialController@index')->name('admin.editor.all');
    Route::get('/create/editor', 'EditorialController@create')->name('admin.create.editor');
    Route::post('/save/editor', 'EditorialController@store')->name('admin.store.editor');
    Route::get('/edit/editor/{id}', 'EditorialController@edit')->name('admin.edit.editor');
    Route::match(['put', 'patch'], 'update/{id}', 'EditorialController@update')->name('admin.update.editor');
    Route::match(['delete'], '/delete/editor/{id}', 'EditorialController@destroy')->name('admin.delete.editor');
    Route::get('/editor/details/{id}', 'EditorialController@show')->name('admin.details.editor');

    // Managing Contacts
    Route::get('/contact/all', 'ContactController@index')->name('admin.contact.all');


    Route::get('/conference/all', 'ConferenceController@index')->name('admin.conference.all');


    Route::get('/submitted_paper/all', 'PaperController@index')->name('admin.submittedpaper.all');
});




// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'PagesController@index')->name('index');

Route::get('contact', 'ContactController@showContactUsPage')->name('contact.us');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::get('editorial', 'EditorialController@showEditors')->name('editors');

Route::group(['prefix' => 'publication'], function () {
    Route::get('/submit_paper', 'PaperController@showSubmitPaperForm')->name('submit.paper.form');
    Route::get('/charges', 'PaperController@charges')->name('charges');
    Route::get('/steps', 'PaperController@steps')->name('steps');
    Route::get('/ethics', 'PaperController@ethics')->name('ethics');
    Route::get('/reviewprocess', 'PaperController@reviewprocess')->name('review.process');
    Route::get('/guidelines', 'PaperController@guidelines')->name('guidelines');
    Route::get('/mode_of_payment', 'PaperController@modeofpayment')->name('payment.mode');

    Route::post('/submit_paper', 'PaperController@store')->name('submit.paper');
});

Route::group(['prefix' => 'about'], function () {
    Route::get('/ajssaifpu', 'AboutController@ajssaifpu')->name('ajssaifpu');
    Route::get('/authorship', 'AboutController@authorship')->name('authorship');
    Route::get('/peer-review', 'AboutController@peerreview')->name('peer.review');
    Route::get('/duplicate-publication', 'AboutController@duplicatepublication')->name('duplicate.publication');
    Route::get('/plagiarism', 'AboutController@plagiarism')->name('plagiarism');
});

Route::group(['prefix' => 'conference'], function () {
    Route::get('/call-for-paper', 'ConferenceController@callforpaper')->name('callforpaper');
    Route::get('/future-conference', 'ConferenceController@futureconference')->name('futureconference');
});
Route::group(['prefix' => 'download'], function () {
    Route::get('/more_documents', 'DownloadController@moredocs')->name('download.more');
    Route::get('/file', 'DownloadController@file')->name('download.file');
});

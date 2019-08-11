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

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/','AdminController@index')->name('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/','PagesController@index')->name('index');
Route::get('contact','ContactController@showContactUsPage')->name('contact.us');
Route::get('about','AboutController@index')->name('about.us');
Route::get('editorial','EditorialController@showEditors')->name('editors');
Route::get('publication/submit_paper','JournalController@showSubmitPaperForm')->name('submit.paper.form');

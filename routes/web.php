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
    Route::get('/create/editor','EditorialController@create')->name('admin.create.editor');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/','PagesController@index')->name('index');
Route::get('contact','ContactController@showContactUsPage')->name('contact.us');

Route::get('editorial','EditorialController@showEditors')->name('editors');

Route::group(['prefix'=>'publication'], function(){
    Route::get('/submit_paper','PaperController@showSubmitPaperForm')->name('submit.paper.form');
    Route::get('/charges','PaperController@charges')->name('charges');
    Route::get('/steps','PaperController@steps')->name('steps');
    Route::get('/ethics','PaperController@ethics')->name('ethics');
    Route::get('/reviewprocess','PaperController@reviewprocess')->name('review.process');
    Route::get('/guidelines','PaperController@guidelines')->name('guidelines');
    Route::get('/mode_of_payment','PaperController@modeofpayment')->name('payment.mode');
    Route::get('/check_paper_status','PaperController@paperstatus')->name('paper.status');
    Route::get('/published_paper','PaperController@publishedpaper')->name('published.paper');

});

Route::group(['prefix'=>'about'],function(){
    Route::get('/ajssaifpu','AboutController@ajssaifpu')->name('ajssaifpu');
    Route::get('/authorship','AboutController@authorship')->name('authorship');
    Route::get('/peer-review','AboutController@peerreview')->name('peer.review');
    Route::get('/duplicate-publication','AboutController@duplicatepublication')->name('duplicate.publication');
    Route::get('/plagiarism','AboutController@plagiarism')->name('plagiarism');
});

Route::group(['prefix'=>'conference'],function(){
    Route::get('/call-for-paper','ConferenceController@callforpaper')->name('callforpaper');
    Route::get('/future-conference','ConferenceController@index')->name('futureconference');
   
});

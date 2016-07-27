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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/history', function () {
    return view('pages.about.history');
});
Route::get('/manager', function () {
    return view('pages.about.manager');
});

//      S T A F F     //

Route::get('/familyMidwife', function () {
    return view('pages.about.staff.familyMidwife');
});
Route::get('/adultOld', function () {
    return view('pages.about.staff.adultOld');
});
Route::get('/childTeen', function () {
    return view('pages.about.staff.childTeen');
});
Route::get('/mentalHealth', function () {
    return view('pages.about.staff.mentalHealth');
});

Route::get('/news/student_news/', function () {
    return view('pages.news.StudentNews');
});

Route::get('/contactus', function () {
    return view('pages.contactus.index');
});

//     D R G R E E     //
Route::get('/degree/bachelor', function () {
    return view('pages.degree.bachelor.index');
});
Route::get('/degree/bachelor/curriculum', function () {
    return view('pages.degree.bachelor.curriculum');
});
Route::get('/degree/bachelor/selective', function () {
    return view('pages.degree.bachelor.selective');
});
Route::get('/degree/master', function () {
    return view('pages.degree.master.index');
});



Route::get('/test', function () {
    return view('test.index');
});

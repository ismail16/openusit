<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/about-us', 'Frontend\PagesController@about_us')->name('about_us');
Route::get('/admin/login', 'Frontend\PagesController@login')->name('admin.login');
Route::post('/contact-post', 'Frontend\PagesController@contact_post')->name('contact_post');
Route::get('/student-login', 'Frontend\PagesController@student_login')->name('student_login');
Route::get('/student-apply', 'Frontend\PagesController@student_apply')->name('student_apply');
Route::post('/student-apply-post', 'Frontend\PagesController@student_apply_post')->name('student_apply_post');




Auth::routes();



//Admin Route
Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']], function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'DashboardController@profile')->name('profile');
    Route::resource('student', 'StudentController');
    Route::resource('course', 'CourseController');
    Route::resource('batch', 'BatchController');
    Route::resource('student-course', 'StudentCourseController');
    Route::get('users', 'StudentController@users')->name('users');
    Route::post('certificate', 'StudentController@certificate')->name('certificate');
    Route::get('not-certified', 'StudentController@not_certified')->name('not_certified');
    Route::get('certified', 'StudentController@certified')->name('certified');
    Route::post('payment', 'StudentController@payment')->name('payment');
    Route::post('result', 'StudentController@result')->name('result');
    Route::resource('slider', 'SliderController');
    Route::resource('staff', 'StaffController');
    Route::resource('event', 'EventController');
});

//Student Route
Route::group(['as'=>'student.', 'prefix'=>'student', 'namespace'=>'Student', 'middleware'=>['auth','student']], function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('profile', 'StudentController');
});

// Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
// 	Route::get('/dashboard', 'PagesController@index')->name('dashboard');
// 	Route::resource('category', 'CategoryController');
// 	Route::resource('portfolio', 'PortfolioController');
// 	Route::resource('team-member', 'TeamMemberController');
// 	Route::resource('contact', 'ContactController');
// });


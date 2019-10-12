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

Route::get('/', 'FrontendController@home')->name('home');

// Route::get('/', function () {
//  return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
    Route::get('indexapi', 'admin\HomeController@indexapi');
    Route::get('admin/home', 'admin\HomeController@index')->name('home.index');
    Route::post('admin/home', 'admin\HomeController@store')->name('home.store');
    Route::get('admin/home/{id}/edit', 'admin\HomeController@edit');
    Route::post('admin/home/{id}/update', 'admin\HomeController@update')->name('home.update');
    Route::get('admin/home/{id}/delete', 'admin\HomeController@delete')->name('home.delete');

    Route::get('admin/about', 'admin\AboutController@index')->name('about.index');
    Route::post('admin/about', 'admin\AboutController@store')->name('about.store');
    Route::get('admin/about/{id}/edit', 'admin\AboutController@edit');
    Route::post('admin/about/{id}/update', 'admin\AboutController@update')->name('about.update');
    Route::get('admin/about/{id}/delete', 'admin\AboutController@delete')->name('about.delete');

    Route::get('admin/services', 'admin\ServicesController@index')->name('services.index');
    Route::post('admin/services', 'admin\ServicesController@store')->name('services.store');
    Route::get('admin/services/{id}/edit', 'admin\ServicesController@edit');
    Route::post('admin/services/{id}/update', 'admin\ServicesController@update')->name('services.update');
    Route::get('admin/services/{id}/delete', 'admin\ServicesController@delete')->name('services.delete');

    Route::get('admin/skills', 'admin\SkillsController@index')->name('skills.index');
    Route::post('admin/skills', 'admin\SkillsController@store')->name('skills.store');
    Route::get('admin/skills/{id}/edit', 'admin\SkillsController@edit');
    Route::post('admin/skills/{id}/update', 'admin\SkillsController@update')->name('skills.update');
    Route::get('admin/skills/{id}/delete', 'admin\SkillsController@delete')->name('skills.delete');

    Route::get('admin/education', 'admin\EducationController@index')->name('education.index');
    Route::post('admin/education', 'admin\EducationController@store')->name('education.store');
    Route::get('admin/education/{id}/edit', 'admin\EducationController@edit')->name('education.edit');
    Route::post('admin/education/{id}/update', 'admin\EducationController@update')->name('education.update');
    Route::get('admin/education/{id}/delete', 'admin\EducationController@delete')->name('education.delete');

    Route::get('admin/experience', 'admin\ExperienceController@index')->name('experience.index');
    Route::post('admin/experience', 'admin\ExperienceController@store')->name('experience.store');
    Route::get('admin/experience/{id}/edit', 'admin\ExperienceController@edit')->name('experience.edit');
    Route::post('admin/experience/{id}/update', 'admin\ExperienceController@update')->name('experience.update');
    Route::get('admin/experience/{id}/delete', 'admin\ExperienceController@delete')->name('experience.delete');

    Route::get('admin/work', 'admin\WorkController@index')->name('work.index');
    Route::post('admin/work', 'admin\WorkController@store')->name('work.store');
    Route::get('admin/work/{id}/edit', 'admin\WorkController@edit')->name('work.edit');
    Route::post('admin/work/{id}/update', 'admin\WorkController@update')->name('work.update');

    // POST
    Route::get('admin/post', 'admin\PostController@index')->name('post.index');
    Route::post('admin/post', 'admin\PostController@store')->name('post.store');
    Route::get('admin/post/{id}/edit', 'admin\PostController@edit');
    Route::post('admin/post/{id}/update', 'admin\PostController@update');
    Route::get('admin/post/{id}/delete', 'admin\PostController@delete');

    // KAS
    Route::get('admin/kas', 'admin\KasController@index')->name('kas.index');
    Route::post('admin/kas', 'admin\KasController@store')->name('kas.store');
    Route::get('admin/kas/{id}/edit', 'admin\KasController@edit')->name('kas.edit');
    Route::post('admin/kas/{id}/update', 'admin\KasController@update')->name('kas.update');
    Route::get('admin/kas/{id}/delete', 'admin\KasController@delete')->name('kas.delete');

});
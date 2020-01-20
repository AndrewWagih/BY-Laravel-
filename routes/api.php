<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
Route::middleware('auth:api')->group(function () {
    Route::get('user-details', 'PassportController@details');
 
    Route::resource('products', 'ProductController');
});
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Personal Info
Route::get('view-personal-info/{id}', 'PersonalInfoController@index');
Route::post('add-personal-info', 'PersonalInfoController@store');
Route::post('edit-personal-info', 'PersonalInfoController@update');
Route::post('delete-personal-info', 'PersonalInfoController@destroy');

// Summary
Route::get('view-summary/{id}', 'SummaryController@index');
Route::post('add-summary', 'SummaryController@store');
Route::post('edit-summary', 'SummaryController@update');
Route::post('delete-summary', 'SummaryController@destroy');

//Experience
Route::get('view-experience/{id}', 'ExperienceController@index');
Route::post('add-experience', 'ExperienceController@store');
Route::post('edit-experience', 'ExperienceController@update');
Route::post('delete-experience', 'ExperienceController@destroy');

//Education
Route::get('view-education/{id}', 'EducationController@index');
Route::post('add-education', 'EducationController@store');
Route::post('edit-education', 'EducationController@update');
Route::post('delete-education', 'EducationController@destroy');

//Skills 
Route::get('view-skills/{id}', 'SkillsController@index');
Route::post('add-skills', 'SkillsController@store');
Route::post('edit-skills', 'SkillsController@update');
Route::post('delete-skills', 'SkillsController@destroy');

//Language 
Route::get('view-language/{id}', 'LanguagesController@index');
Route::post('add-language', 'LanguagesController@store');
Route::post('edit-language', 'LanguagesController@update');
Route::post('delete-language', 'LanguagesController@destroy');

//Interests 
Route::get('view-interests/{id}', 'InterestsController@index');
Route::post('add-interests', 'InterestsController@store');
Route::post('edit-interests', 'InterestsController@update');
Route::post('delete-interests', 'InterestsController@destroy');

//Certificates 
Route::get('view-certificate/{id}', 'CertificatesController@index');
Route::post('add-certificate', 'CertificatesController@store');
Route::post('edit-certificate', 'CertificatesController@update');
Route::post('delete-certificate', 'CertificatesController@destroy');

//conferences 
Route::get('view-conference/{id}', 'ConferencesController@index');
Route::post('add-conference', 'ConferencesController@store');
Route::post('edit-conference', 'ConferencesController@update');
Route::post('delete-conference', 'ConferencesController@destroy');

//Courses 
Route::get('view-course/{id}', 'CoursesController@index');
Route::post('add-course', 'CoursesController@store');
Route::post('edit-course', 'CoursesController@update');
Route::post('delete-course', 'CoursesController@destroy');

//publications 
Route::get('view-publications/{id}', 'PublicationsController@index');
Route::post('add-publications', 'PublicationsController@store');
Route::post('edit-publications', 'PublicationsController@update');
Route::post('delete-publications', 'PublicationsController@destroy');


//cv
Route::get('view-cv-personal-info/{userName}', 'PersonalInfoController@cv');
Route::get('view-cv-summary/{userName}', 'SummaryController@cv');
Route::get('view-cv-experience/{userName}', 'ExperienceController@cv');
Route::get('view-cv-education/{userName}', 'EducationController@cv');
Route::get('view-cv-skills/{userName}', 'SkillsController@cv');
Route::get('view-cv-language/{userName}', 'LanguagesController@cv');
Route::get('view-cv-interests/{userName}', 'InterestsController@cv');
Route::get('view-cv-certificate/{userName}', 'CertificatesController@cv');
Route::get('view-cv-conference/{userName}', 'ConferencesController@cv');
Route::get('view-cv-course/{userName}', 'CoursesController@cv');
Route::get('view-cv-publications/{userName}', 'PublicationsController@cv');
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/login', 'LoginController@index');
Route::get('/logout', 'LoginController@logout');
Route::post('/login_process', 'LoginController@login_process');
Route::get('/dashbord', 'LoginController@dashbord');
Route::get('/Profile', 'LoginController@profile');
Route::post('/password-chenge', 'LoginController@profile_process');

// Home page all


Route::get('/Home-Slider', 'LoginController@home_slider');
Route::post('/Home-Slider-Update', 'LoginController@home_slider_update');
Route::post('/Slider-Insert-Process', 'LoginController@slider_insert_process');
Route::get('/Slider-Feature', 'Admin\HomeController@slider_feature');
Route::post('/Slider-Fetcher-Insert', 'Admin\HomeController@slider_feature_insert');
Route::post('/Slider-Fetcher-Insert2', 'Admin\HomeController@slider_feature_insert2');
Route::post('/Schedule-Insert', 'Admin\HomeController@schedule_insert');
Route::get('/Header', 'Admin\HomeController@header');
Route::post('/Header-Insert-Process', 'Admin\HomeController@header_insert_process');
Route::get('/Logo-Details', 'Admin\HomeController@logo_details');
Route::get('/Video', 'Admin\HomeController@video');
Route::post('/video-process', 'Admin\HomeController@video_process');
Route::post('/logo-aboutus', 'Admin\PageController@logo_about_footer');
Route::get('/Newsletter', 'Admin\HomeController@newsletter');
Route::get('/Body-Section', 'Admin\HomeController@body_section');
Route::get('/Team', 'Admin\HomeController@team');
Route::post('/body-section-process', 'Admin\HomeController@body_section_process');
Route::post('/team-section-process', 'Admin\HomeController@team_section_process');
Route::get('/Terms-Condition', 'Admin\HomeController@terms_condition');
Route::get('/Terms-and-Condition', 'Admin\HomeController@terms_condition_show');
Route::post('/Terms-Condition-Process', 'Admin\HomeController@terms_condition_process');
Route::get('/Privacy-Policy', 'Admin\HomeController@privacy_policy');
Route::get('/Privacy-Policys', 'Admin\HomeController@privacy_policys_show');
Route::post('/Privacy-Policy-Process', 'Admin\HomeController@privacy_policy_process');

// news

Route::get('/News-Add', 'Admin\PageController@news_add');
Route::post('/News-Insert-Process', 'Admin\PageController@news_insert_process');
Route::post('/News-Update', 'Admin\PageController@news_update');
Route::get('/news_update_view/{id}', 'Admin\PageController@news_update_view');
Route::get('/activities_update_view/{id}', 'Admin\PageController@activities_update_view');
Route::get('/News-view', 'Admin\PageController@news_view');
Route::get('/News-delete/{id}', 'Admin\PageController@news_delete');
Route::get('/delect-slide/{id}', 'Admin\PageController@delete_slide');


// Activities


Route::get('/Activities', 'Admin\PageController@activities');
Route::POST('/Activities-Insert-Process', 'Admin\PageController@activities_insert_process');
Route::get('/View-Activities', 'Admin\PageController@activities_view_process');
Route::POST('/activities-Update', 'Admin\PageController@activities_update');
Route::get('/activities-delete/{id}', 'Admin\PageController@activities_delete');
Route::get('/activities-slider-delete/{id}', 'Admin\PageController@activities_slider_delete');
Route::get('/Add-Slider-Activities', 'Admin\PageController@add_slider_activities');
Route::post('/Activities-Slider-Update', 'Admin\PageController@activiteis_slider_update');
Route::post('/Activities-Slider-Insert-Process', 'Admin\PageController@insert_slider_activities');


// About 
Route::get('/About-Details-1', 'Admin\HomeController@about_details_1');
Route::post('/About-Details-1-Process', 'Admin\HomeController@about_details_1_process');
Route::get('/About-Details-2', 'Admin\HomeController@about_details_2');
Route::post('/About-Details-2-Process', 'Admin\HomeController@about_details_2_process');
Route::get('/About-Members', 'Admin\HomeController@about_member');
Route::post('/About-Members-Process', 'Admin\HomeController@about_member_process');
Route::get('/About-Galary', 'Admin\HomeController@about_galary');
Route::get('/delect-galary/{id}', 'Admin\HomeController@delete_galary');
Route::post('/galary-process', 'Admin\HomeController@galary_process');

//contact us 
Route::get('/Contact-Details', 'Admin\HomeController@contact_details');
Route::post('/contact-details-Process', 'Admin\HomeController@contact_details_process');
Route::get('/Contact-Messages', 'Admin\HomeController@contact_message');
//Front-End Part

Route::get('/', 'Admin\PageController@index');




Route::post('/Insert-Newsletter', 'Admin\PageController@insert_news_leter');
Route::get('/About-Us', 'Admin\PageController@about_us');
Route::get('/News', 'Admin\PageController@news');
Route::get('/Activities-Page', 'Admin\PageController@activities_page');
Route::get('/Contract-Us', 'Admin\PageController@contract_us_page');
Route::post('/send_message', 'Admin\PageController@send_message');
Route::get('/Activities-Details/{id}/{slug}', 'Admin\PageController@activities_details');
Route::get('/News-Details/{id}/{slug}', 'Admin\PageController@news_details');
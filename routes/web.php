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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/members', 'UsersController');
Route::resource('/bulletin-board', 'AnnouncementsController');
Route::resource('/residents', 'ResidentsController');
Route::resource('/incidentreport', 'IncidentreportController');
Route::resource('/barangay-alert', 'ResidentAlertController');
Route::resource('/achievements', 'AchievementsController');
Route::resource('/health-tips', 'HealthTipsController');

Route::get('/ajax/getAnnouncements', 'AjaxController@getAnnouncements');
Route::get('/ajax/getResidents', 'AjaxController@getResidents');
Route::get('/ajax/getResidentDetail/{id}', 'AjaxController@getResidentDetail');
Route::get('/ajax/getDeleteResident/{id}', 'AjaxController@getDeleteResident');
Route::post('/resident/putUpdateResident', 'AjaxController@putUpdateResident');
Route::get('/ajax/getMembers', 'AjaxController@getMembers');
Route::get('/ajax/getMemberDetails/{id}', 'AjaxController@getMemberDetails');
Route::get('/ajax/deleteMember/{id}', 'AjaxController@deleteMember');
Route::post('/members/postMemberUpdate', 'AjaxController@postMemberUpdate');
Route::get('/ajax/getBarangayAlert', 'AjaxController@getBarangayAlert');
Route::get('/ajax/getIncidentReports', 'AjaxController@getIncidentReports');
Route::get('/ajax/getPositions', 'AjaxController@getPositions');
Route::get('/ajax/setDisapproveResident/{id}', 'AjaxController@setDisapproveResident');
Route::get('/ajax/setApproveResident/{id}', 'AjaxController@setApproveResident');
Route::get('/ajax/getBarangayAlertDetails/{id}', 'AjaxController@getBarangayAlertDetails');
Route::get('/ajax/getCancelAccidentReport/{id}', 'AjaxController@getCancelAccidentReport');
Route::get('/ajax/getSetBarangayAlertDone/{id}', 'AjaxController@getSetBarangayAlertDone');
Route::get('/ajax/deleteAnnouncements/{id}', 'AjaxController@deleteAnnouncements');
Route::get('/ajax/getAnnouncementsDetails/{id}', 'AjaxController@getAnnouncementsDetails');
Route::post('/ajax/update-announcements', 'AjaxController@postUpdateAnnouncements');
Route::get('/ajax/getReportedIncidentsForthisYear', 'AjaxController@getReportedIncidentsForthisYear');
Route::get('/ajax/getHealthTips', 'AjaxController@getHealthTips');

Route::group(['prefix'=>'api'],function(){
	Route::get('getAnnouncements', 'ApiController@getAnnouncements');
	Route::get('getHealthTips', 'ApiController@getHealthTips');
	Route::get('getMyReportHistory/{id}', 'ApiController@getMyReportHistory');
	Route::post('login', 'ApiController@postLogin');
	Route::post('register', 'ApiController@postRegister');
	Route::post('new-report-accident', 'ApiController@postSaveAlert');
	Route::get('announcement-details/{id}', 'ApiController@getAnnouncementsDetails');
});


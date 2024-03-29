<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' =>['checkStaffRegis']], function(){

    Route::get('/', 'HomeController@index');

    Route::get('/Home', 'HomeController@index');

    Route::get('/FAQ', function () {
        return view('FAQ');
    });
    Route::get('/StaffRegistrationForm', function () {
        return view('staffregis');
    });
    Route::post('/Staff', "StaffController@store");

    Route::get('/CompetitionRegistration', function () {
        return view('competitionregis');
    });
    Route::post('/Participant', "ParticipantController@store");

    Route::get('/UploadAnswer', function () {
        return view('uploadanswer');
    });
    Route::post('/Answer', "ParticipantController@uploadCompetition");

    Route::get('/Form/Download', 'DownloadController@dlRegistrationForm');
    Route::get('/Case/{case}', 'DownloadController@dlParticipantCase');
});

//admin site
Route::get('/LoginAdminKompek', function () {
    return view('adminlogin');
});

Route::post('LoginAdminKompek', 'AdminController@find')->middleware('web');

Route::group(['middleware' => ['web', 'adminAuth', 'checkStaffRegis']], function (){

    Route::resource('/AdminKompekPage/Participant', "ParticipantController");
    Route::get('/AdminKompekPage/ParticipantList', "ParticipantController@showByCompetition");
    Route::get('/AdminKompekPage/ParticipantDelete/{id}',"ParticipantController@destroy");

    Route::resource('/AdminKompekPage/Case', 'CasefileController');

    Route::get('/AdminKompekPage/Answer', "ParticipantController@showAnswers");
    Route::get('/AdminKompekPage/AnswerDelete/{id}',"ParticipantController@deleteAnswer");

    Route::resource('/AdminKompekPage/Announcement', "AnnouncementController");
    Route::get('/AdminKompekPage/AnnouncementDelete/{id}', "AnnouncementController@destroy");

    Route::resource('/AdminKompekPage/Staff', "StaffController");
    Route::get('/AdminKompekPage/StaffDelete/{id}', "StaffController@destroy");

    Route::get('/AdminKompekPage/StaffRegisStatus', 'StatusController@changeStatus');

    Route::get('/AdminKompekPage/LogOut', 'AdminController@logOut');
    Route::get('/AdminKompekPage/Download/Participant', 'DownloadController@dlParticipantFile');
    Route::get('/AdminKompekPage/Download/AllAnswer', 'DownloadController@dlAllParticipantAnswer');
    Route::get('/AdminKompekPage/Download/Answer/{participant_school}/{participant_1}/{participant_1_email}', 'DownloadController@dlParticipantAnswer');
});
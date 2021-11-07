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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});





Route::get('/enrollment', function () {
    return view('enrol');
});
Route::get('/about', function () {
    return view('Frontend/about');
});


Route::get('/admission', function () {
    return view('Frontend.admissions');
});


Route::get('/admin', function () {
    return view('admin');
});


Route::get('/adminadd-course', function () {
    return view('Frontend.admin-add-course');
});


Route::get('/add-course', function () {
    return view('add-course');
});


Route::get('/admin-event-add', function () {
    return view('admin-event-add');
});

Route::get('/admin-announcement-add', function () {
    return view('admin-announcement-add');
});



Route::get('/admissionenquiries', function () {
    return view('admission-enquiry');
});




Route::get('/admin-event-all', function () {
    return view('admin-event-all');
});



Route::get('/contact', function () {
    return view('contact');
});



Route::get('/booking', function () {
    return view('Frontend.booking');
});



Route::get('/partners', function () {
    return view('Frontend.partners');
});


Route::get('/academics', function () {
    return view('Frontend.academics');
});

Route::get('/announcements', function () {
    return view('Frontend.announcements');
});

Route::get('/HEINascop', function () {
    return view('Frontend.HEINascop');
});

Route::get('/HIVMNascop', function () {
    return view('Frontend.HIVMNascop');
});

Route::get('/NASCOP', function () {
    return view('Frontend.NASCOP');
});

Route::get('/ARTNascop', function () {
    return view('Frontend.ARTNascop');
});

Route::get('/DDIUNascop', function () {
    return view('Frontend.DDIUNascop');
});


Route::get('/CertificateCourses', function () {
    return view('Frontend.CertificateCourses');
});
Route::get('/elearning', function () {
    return view('Frontend.elearning');
});
Route::get('/EPBIO', function () {
    return view('Frontend.EPIBIO');
});


Route::get('/BiostatisticsCertificate', function () {
    return view('Frontend.BiostatisticsCertificate');
});

Route::get('/CommunityBasedHIVCert', function () {
    return view('Frontend.CommunityBasedHIVCert');
});

Route::get('/CommunicationHIVCert', function () {
    return view('Frontend.CommunicationHIVCert');
});


Route::get('/EpidemiologyCertificate', function () {
    return view('Frontend.EpidemiologyCertificate');
});

Route::get('/Procurement&LogisticsCert', function () {
    return view('Frontend.Procurement&LogisticsCert');
});

Route::get('/HumanResourcesCert', function () {
    return view('Frontend.HumanResourcesCert');
});


Route::get('/ResourcesMobilizationCert', function () {
    return view('Frontend.ResourcesMobilizationCert');
});


Route::get('/EPBIOCert', function () {
    return view('Frontend.EPBIOCert');
});

Route::get('/HEALTHCAREFINANCING', function () {
    return view('Frontend.HEALTHCAREFINANCING');
});

Route::get('/HumanResourcesCert', function () {
    return view('Frontend.HumanResourcesCert');
});



Route::get('/HealthInformaticsCertificate', function () {
    return view('Frontend.HealthInformaticsCertificate');
});


Route::get('/EPBIODiploma', function () {
    return view('Frontend.EPBIODiploma');
});
Route::get('/facilities', function () {
    return view('Frontend.facilities');
});

Route::get('/HealthEconomics', function () {
    return view('Frontend.HealthEconomics');
});

Route::get('/HealthEconomicsDiploma', function () {
    return view('Frontend.HealthEconomicsDiploma');
});

Route::get('/HealthEconomicsDiploma(9 Months Track)', function () {
    return view('Frontend.HealthEconomicsDiploma(9 Months Track)');
});
Route::get('/HealthInformatics', function () {
    return view('Frontend.HealthInformatics');
});

Route::get('/HealthInformaticsDiploma', function () {
    return view('Frontend.HealthInformaticsDiploma');
});


Route::get('/HealthInformaticsDiploma(9 Months Track)', function () {
    return view('Frontend.HealthInformatics(9 Month Track)');
});


Route::get('/MonitoringEvaluation', function () {
    return view('Frontend.MonitoringEvaluation');
});

Route::get('/MeasuringEfficiencyCert', function () {
    return view('MeasuringEfficiencyCert');
});

Route::get('/MonitoringEvaluationDiploma', function () {
    return view('Monitoring&EvaluationDiploma');
});


Route::get('/Monitoring&EvaluationCert', function () {
    return view('Monitoring&EvaluationCert');
});

Route::get('/Monitoring&EvaluationDiploma(9 Month Track)', function () {
    return view('Monitoring&EvaluationDiploma(9 Month Track)');
});

Route::get('/PostGraduateDiploma', function () {
    return view('PostGraduateDiploma');
});

Route::get('/PostMasters', function () {
    return view('PostMasters');
});


Route::get('/ProgramManagement', function () {
    return view('ProgramManagement');
});


Route::get('/principal', function () {
    return view('principal');
});

Route::get('/ProgramManagementCert', function () {
    return view('ProgramManagementCert');
});


Route::get('/ProgramManagementCert', function () {
    return view('ProgrammeManagementCert');
});


Route::get('/ProgramManagementDiploma', function () {
    return view('ProgramManagementDiploma');
});


Route::get('/ProgramManagementDiploma(9 Month Track)', function () {
    return view('ProgramManagementDiploma(9 Month Track)');
});


Route::get('/research', function () {
    return view('research');
});


Route::get('/projects', function () {
    return view('projects');
});
Route::get('/allcourses', function () {
    return view('all-courses');
});


Route::get('/UNITID Certificate', function () {
    return view('UNITID_Certificate');
});




Route::get('/error', function () {
    return view('error');
});



// Route::post('/jobs', function () {
//     return view('/registration/job')->name('jobs');

// });

Route::get('/contact', function () {
    return view('contact');

});
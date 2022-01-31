<?php

use App\Models\course;
use App\Models\TutorDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\classpageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ClassDetailController;
use App\Http\Controllers\SpeakerCampController;

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


Auth::routes();

// HOME & NAVIGATION
Route::get('/', function () {
    $courses = course::paginate(3);
    $speakers = TutorDetail::paginate(3);

    return view('homeNew', ['courses' => $courses], ['speakers'=> $speakers]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', function() {
    return view('aboutus');
});

// CLASS
Route::get('/skill-centre', [classpageController::class, 'index'])->name('classpage');

Route::get('/class-detail/{id}', [classpageController::class, 'classdetail']);
// Route::get('/class-detail/{id_course}', 'classpageController@classdetail');

// Route::get('/class-detail', function() {
//     return view('classdetail');
// });
Route::get('/skill-centre2', function() {
    return view('classpageBundle');
});

Route::get('/class-detail', function() {
    return view('classdetail');
});

Route::get('/class-detailBundle', function() {
    return view('classdetailBundle');
});

Route::get('/classdetail-Bayr', function() {
    return view('classdetailBayar');
});

Route::get('/mentor-dashboard', function() {
    return view('mentorDasbor');
});

Route::get('/classdetail-Bayar', function() {
    return view('classdetailBayar');
});

// SPEAKER
// Route::get('/speaker/learning', function() {
//     return view('speaker/speakerlearning');
// });
// Route::get('/speaker/profile', function() {
//     return view('speaker/profile');
// });
Route::get('/speaker-camp', [SpeakerCampController::class, 'index']);

Route::get('/speaker/profile/{id}', [SpeakerCampController::class, 'speakerProfile']);

Route::get('/speaker/book', function() {
    return view('speaker/book');
});
Route::get('/speaker/book/payment', function() {
    return view('/speaker/pembayaran');
});
Route::get('/speaker/book/payment2', function() {
    return view('/speaker/pembayaranrev3');
});
Route::get('/speaker/book/payment3', function() {
    return view('/speaker/pembayaranrev4');
});
Route::get('/classdetail-bayar', function() {
    return view('classdetailBayar');
});

Route::get('/dashboard', function() {
    return view('/dashboard');
});

Route::get('/settings', function() {
    return view('/settings');
});

Route::get('/resources', function() {
    return view('/resources');
});
Route::get('/resources-materi', function() {
    return view('/resourcesMateri');
});

// certificate
Route::get('/certificates', function() {
    return view('/certificate');
});
Route::get('/certificateSurvey', function() {
    return view('/certificateSurvey');
});
Route::get('/certificateSurvey2', function() {
    return view('/certificateSurvey2');
});

// invoice tutor
Route::get('/invoicetutor', function() {
    return view('/invoicetutor');
});
Route::get('/invoicetutorAfter', function() {
    return view('/invoicetutorAfter');
});

Route::get('/livechat', function() {
    return view('/livechat');
});


Route::post('/coupon/store', [App\Http\Controllers\CouponsController::class, 'store'])->name('coupon.store'); 
Route::delete('/coupon/destroy', [App\Http\Controllers\CouponsController::class, 'destroy'])->name('coupon.destroy'); 


Route::get('/speaker/book/create', [App\Http\Controllers\ProductController::class, 'create'])->name('speaker.book-create');

Route::post('/speaker/book/store', [App\Http\Controllers\ProductController::class, 'store'])->name('speaker.book-store'); 
// ----------------------------Google login ------------------------------
Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'redirect'])->name('login.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'callback']);
// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

Route::get('/contact-us', [ContactUsController::class, 'create'])->name('contact-us-create');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact-us-store');

?>
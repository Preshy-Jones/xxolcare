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

// Route::get('/admin', function () {
//     return view('admin.admin');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/testing', function () {

    $locations = ['Victoria Island', 'Ikoyi', 'Lekki', 'Ajah', 'Ogudu', 'Ikeja GRA', 'Maryland', 'Opebi', 'Magodo', 'Yaba', 'Gbagada', 'Ogba', 'Oba Akran', 'Illupeju', 'Festac', 'Surulere', 'Ojodu', 'Oregun', 'Alausa'];
    $services = ['Home nanny/Baby sitter', 'Care for the aged.', 'Care for people with special needs.'];
    $randKeysService = array_rand($services, 1);
    //   return $randKeysService;
    $randKeysLocation = array_rand($locations, 2);
    $randomService = $services[$randKeysService];
    return $randomService;
    $randomLocations = [$locations[$randKeysLocation[0]], $locations[$randKeysLocation[1]]];

    return auth()->user()->name;
    $TERMII_API_KEY = env('TERMII_API_KEY');
    $termii = new LaraTermii($TERMII_API_KEY);
    return $termii->balance();
    return $value;
    return print_r(app()->make('redis'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/chart', function () {
    return view('charts');
});

Route::get('/partner', function () {
    return view('partner', );
});

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/terms', function () {
    return view('terms');
});

Route::get('/becomexxol', function () {
    return view('becomexxol');
});

Route::get('/bookings', [\App\Http\Controllers\BookingsController::class, 'index']);
Route::get('/bookings/service/{id}', [\App\Http\Controllers\BookingsController::class, 'services'])->middleware('clearservicecache');
Route::get('/bookings/schedule/{id}', [\App\Http\Controllers\BookingsController::class, 'schedules']);
Route::get('/bookings/contactdetails/{id}', [\App\Http\Controllers\BookingsController::class, 'contacts']);
Route::get('/bookings/payment/{id}', [\App\Http\Controllers\BookingsController::class, 'payments'])->name('payment');
Route::get('/bookings/selectxxol/{id}', [\App\Http\Controllers\BookingsController::class, 'selectxxol']);
Route::get('/bookings/bookingdetails/{id}', [\App\Http\Controllers\BookingsController::class, 'bookingdetails']);

Route::put('/contactdetails/{service}/{id}', [\App\Http\Controllers\BookingsController::class, 'contact']);
Route::put('/schedule/{service}/{id}', [\App\Http\Controllers\BookingsController::class, 'schedule']);
Route::post('/service/{service}', [\App\Http\Controllers\BookingsController::class, 'service']);
// Route::post('/payment', [\App\Http\Controllers\BookingsController::class, 'payment']);
// Route::post('/selectxxol', [\App\Http\Controllers\BookingsController::class, 'select']);
//Route::post('/bookingdetails', [\App\Http\Controllers\BookingsController::class, 'bookingdetails']);

// Route::get('/xxolstars', function () {
//     return view('xxolstars.profile');
// });

Route::get('/xxolstars/logout', [\App\Http\Controllers\MainController::class, 'logout'])->name('xxolstars.logout');
Route::post('/xxolstars/save', [\App\Http\Controllers\MainController::class, 'save'])->name('xxolstars.save');
Route::post('/xxolstars/check', [\App\Http\Controllers\MainController::class, 'check'])->name('xxolstars.check');

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/xxolstars/login', [\App\Http\Controllers\MainController::class, 'login'])->name('xxolstars.login');
    Route::get('/xxolstars/register', [\App\Http\Controllers\MainController::class, 'register'])->name('xxolstars.register');
    Route::get('/xxolstars', [\App\Http\Controllers\MainController::class, 'dashboard'])->name('xxolstars.dashboard');
    Route::get('/xxolstars/bookings', [\App\Http\Controllers\MainController::class, 'bookings'])->name('xxolstars.bookings');
    Route::get('/xxolstars/offers', [\App\Http\Controllers\MainController::class, 'offers'])->name('xxolstars.offers');
});

Route::get('/testroute', [\App\Http\Controllers\TestController::class, 'index']);
Route::get('/email', [\App\Http\Controllers\MailController::class, 'sendEmail']);

Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');
// Route::resource('bookings', BookingsController::class);

Auth::routes();

Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard/bookings', [\App\Http\Controllers\HomeController::class, 'bookings'])->name('userbookings');
Route::put('/dashboard/edit/{id}', [\App\Http\Controllers\HomeController::class, 'edit']);

//ADMIN AUTHENTICATION AND ROUTES

Route::get('/admin/logout', [\App\Http\Controllers\AdminAuthenticationController::class, 'logout'])->name('admin.logout');
Route::post('/admin/save', [\App\Http\Controllers\AdminAuthenticationController::class, 'save'])->name('admin.save');
Route::post('/admin/check', [\App\Http\Controllers\AdminAuthenticationController::class, 'check'])->name('admin.check');

Route::group(['middleware' => ['AdminAuthCheck']], function () {
    Route::get('/admin/login', [\App\Http\Controllers\AdminAuthenticationController::class, 'login'])->name('admin.login');
    Route::get('/admin/register', [\App\Http\Controllers\AdminAuthenticationController::class, 'register'])->name('admin.register');
    Route::get('/admin/clients', [\App\Http\Controllers\AdminController::class, 'clients'])->name('admin.clients');
    Route::get('/admin/users', [\App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/jobs', [\App\Http\Controllers\AdminController::class, 'jobs'])->name('admin.jobs');
    Route::get('/admin/finances', [\App\Http\Controllers\AdminController::class, 'finances'])->name('admin.finances');
    Route::get('/admin/xxolstars', [\App\Http\Controllers\AdminController::class, 'xxolstars'])->name('admin.xxolstars');
    Route::get('/admin/documents', [\App\Http\Controllers\AdminController::class, 'documents'])->name('admin.documents');
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/finance/{year}', [\App\Http\Controllers\AdminController::class, 'finance'])->name('admin.finance');
});

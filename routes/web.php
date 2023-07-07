<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterBusinessController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('cleanliness', function () {
    return view('cleanliness');
});
Route::get('business', function () {
    return view('business');
});
Route::get('business2', function () {
    return view('business2');
});
Route::get('catering', function () {
    return view('catering');
});
Route::get('mission', function () {
    return view('mission');
});
Route::get('vision', function () {
    return view('vision');
});
Route::get('Dashboard_admin', function () {
    return view('Dashboard_admin');
})->name('Dashboard_admin');


Route::get('post_business', function () {
    return view('post_business');
});
Route::get('viewBusiness', function () {
    return view('viewBusiness');
});
Route::get('editBusiness', function () {
    return view('editBusiness');
});
Route::get('viewProduct', function () {
    return view('viewProduct');
});
Route::get('registration', function () {
    return view('registration');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register_super', function () {
    return view('register_super');
});
Route::get('customer', function () {
    return view('customer');
});
Route::get('staff', function () {
    return view('staff');
});
Route::get('editStaff', function () {
    return view('editStaff');
});
Route::get('order', function () {
    return view('order');
});




Route::post('/register-business', [RegisterBusinessController::class, 'store'])->name('register-business.store');
// Route::resource('products', 'RegisterBusinessController');
Route::get('viewBusiness', [RegisterBusinessController::class, 'viewBusiness'])->name('viewBusiness');
Route::get('order', [RegisterBusinessController::class, 'Busines'])->name('order');
// Route for displaying the edit form
Route::get('/products/{product}/edit', [RegisterBusinessController::class, 'edit'])->name('products.edit');

// Route for updating the product
Route::put('/products/{product}', [RegisterBusinessController::class, 'update'])->name('products.update');

// Route for displaying the view modal
Route::get('/products/{product}', [RegisterBusinessController::class, 'show'])->name('products.show');

// Route for deleting the product
Route::delete('/products/{product}', [RegisterBusinessController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{product}', [RegisterBusinessController::class, 'show'])->name('products.show');
Route::delete('/products/{id}', [RegisterBusinessController::class, 'destroy'])->name('products.destroy');
Route::get('business', [RegisterBusinessController::class, 'Business'])->name('business');
Route::get('business2', [RegisterBusinessController::class, 'Businez'])->name('business2');
//route for register customer and admin
Route::post('/register/customer', [RegistrationController::class, 'register'])->name('register.customer.submit');
Route::get('/register_super', [RegistrationController::class, 'showRegistrationForm'])->name('register.super');

Route::post('/register/super', [RegistrationController::class, 'registerSuperAdmin'])->name('register.super.submit');
Route::get('staff', [RegistrationController::class, 'staff'])->name('staff');
Route::get('customer', [RegistrationController::class, 'showNormalUsers'])->name('customer');
Route::get('/normal/{id}/edit', [RegistrationController::class, 'edit'])->name('edit.normal');
Route::put('/normal/{id}', [RegistrationController::class, 'update'])->name('update.normal');
Route::delete('/normal/{id}', [RegistrationController::class, 'destroy2'])->name('delete.normal');
// Route for editing a super admin
Route::get('/super/{id}/edit', [RegistrationController::class, 'edit'])->name('edit.super');

// Route for updating a super admin
Route::put('/super/{id}', [RegistrationController::class, 'update'])->name('update.super');

// Route for deleting a super admin
Route::delete('/super/{id}', [RegistrationController::class, 'destroy'])->name('delete.super');
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/products/{product}', [RegisterBusinessController::class, 'show'])->name('products.show');
Route::get('/order/{product}', [RegisterBusinessController::class, 'show2'])->name('order');

// Route::get('/order/{product}', [RegisterBusinessController::class, ' Buss'])->name('order');

Route::post('/submit-order', [OrderController::class, 'store'])->name('submit-order');
Route::post('/save-booking', [OrderController::class, 'saveorder'])->name('saveBooking');


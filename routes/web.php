<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PastryController;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleAdmin;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

// Get Page

Route::get('/', [DashboardController::class, 'getHomePage'])->name('home');

Route::get('/about', [DashboardController::class, 'getAboutPage'])->name('about');

Route::get('/product', [DashboardController::class, 'getProductPage'])->name('product');

Route::get('/contact', [DashboardController::class, 'getContactPage'])->name('contact');

Route::get('/registration', [DashboardController::class, 'getRegistrationPage'])->name('registration');

Route::get('/login', [DashboardController::class, 'getLoginPage'])->name('login');


// Email

Route::post('/send-email', [MailController::class, 'sendEmail'])->name('sendEmail');


// Admin

Route::group(['middleware' => RoleAdmin::class], function () {

    Route::get('/admin', [AdminDashboardController::class, 'getAdminPage'])->name('admin');

    Route::get('/admin/user', [UserController::class,'viewUser'])->name('admin-user');

    Route::delete('/admin/delete-user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

    Route::get('/admin/product', [AdminDashboardController::class, 'adminProductPage'])->name('admin-product');

    Route::get('/admin/product/add-tea', [TeaController::class, 'getTeaPage'])->name('getTeaPage');

    Route::post('/admin/product/add-tea', [TeaController::class, 'addTea'])->name('addTea');

    Route::get('/admin/product/update-tea/{id}', [TeaController::class, 'getUpdateTea'])->name('getUpdateTea');

    Route::patch('/admin/product/update-tea/{id}', [TeaController::class, 'updateTea'])->name('updateTea');

    Route::delete('/admin/product/delete-tea/{id}', [TeaController::class, 'deleteTea'])->name('deleteTea');

    Route::get('/admin/product/add-coffee', [CoffeeController::class, 'getCoffeePage'])->name('getCoffeePage');

    Route::post('/admin/product/add-coffee', [CoffeeController::class, 'addCoffee'])->name('addCoffee');

    Route::get('/admin/product/update-coffee/{id}', [CoffeeController::class, 'getUpdateCoffee'])->name('getUpdateCoffee');

    Route::patch('/admin/product/update-coffee/{id}', [CoffeeController::class, 'updateCoffee'])->name('updateCoffee');

    Route::delete('/admin/product/delete-coffee/{id}', [CoffeeController::class, 'deleteCoffee'])->name('deleteCoffee');

    Route::get('/admin/product/add-pastry', [PastryController::class, 'getPastryPage'])->name('getPastryPage');

    Route::post('/admin/product/add-pastry', [PastryController::class, 'addPastry'])->name('addPastry');

    Route::get('/admin/product/update-pastry/{id}', [PastryController::class, 'getUpdatePastry'])->name('getUpdatePastry');

    Route::patch('/admin/product/update-pastry/{id}', [PastryController::class, 'updatePastry'])->name('updatePastry');

    Route::delete('/admin/product/delete-pastry/{id}', [PastryController::class, 'deletePastry'])->name('deletePastry');
});


// MEMBER ROUTES

Route::get('/user-dashboard', [DashboardController::class, 'getMemberPage'])->name('member');

Route::get('/user-dashboard/update/{id}', [UserController::class, 'getUpdateUser'])->name('getUpdateUser');

Route::patch('/user-dashboard/update/{id}', [UserController::class, 'updateUser'])->name('updateUser');



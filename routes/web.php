<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestInputController;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test-controller/{param1}', [TestController::class, 'index'] );

Route::get('/artikel/{param1}', [ArtikelController::class, 'index'] );

Route::get('/table', [SearchController::class, 'index'] );

route::get('/user',function () {

    return view('crud_user');
});

// route::get('/login', function () {
//     return view('auth.login');
// });

Auth::routes();
route::get('/login', [AuthController::class, 'login'] )->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

// route::get('/login', function () {
//     return view('Auth.login');
// });
// Route::post('/postlogin',[AuthController::class, 'postlogin'])->name('post.login'); 


    


route::get('/forgot-password', [AuthController::class, 'forgot_password'] )->name('forgot.password');

route::get('/testing-input', [TestInputController::class, 'test_input'])-> name('input.get');
route::get('/testing-input-controller', [TestInputController::class, 'form']);
route::get('/testing-input-table', [TestInputController::class, 'table']);

// Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/dashboard', [LayoutController::class, 'dashboard'])->name('dashboard');
// });

Route::get('/admin', [SuperAdminController::class, 'viewadmin'] );
Route::get('/tambahadmin', [SuperAdminController::class, 'admincreate'])->name('admin.create') ;

Route::get('/barang', [BarangController::class, 'index']);






<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('login');
// });


// Route::get('/register', function () {
//     return view('register');
// });
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
     //Accueil pour admin
    Route::get('/dashbord', [AdminController::class, 'index'])->name('admin.dashbord');
     Route::get('/dashbord/users', [AdminController::class, 'users'])->name('admin.users');
     //Accueil admin pour gestion users
     Route::get('dashbord/users/{id}', [AdminController::class, 'editUsers'])->name('admin.editUsers');
     Route::post('dashbord/users', [AdminController::class, 'updateUsers'])->name('admin.updateUsers');

     Route::get('dashbord/desactive/{id}', [AdminController::class, 'desactive'])->name('admin.activeUsers');
     Route::get('dashbord/active/{id}', [AdminController::class, 'active'])->name('admin.desactiveUsers');
     //Accueil admin profile users
     Route::get('/dashbord/usersCreate', [AdminController::class, 'usersCreate'])->name('admin.usersCreate');
     Route::post('/dashbord/usersInstore', [AdminController::class, 'usersInstore'])->name('admin.store');
          //Accueil admin profile users
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('/dashbord', [AdminController::class, 'index'])->name('user.dashbord');
    Route::get('/profile', [AdminController::class, 'profile'])->name('user.profile');
    Route::get('/settings', [AdminController::class, 'settings'])->name('user.settings');
});

<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Users;
use App\Http\Livewire\Logout;
use function Termwind\render;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Register;
use App\Http\Livewire\NewComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Services\Home as serviceHome;

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
Route::get('/home/{name?}', Home::class);
Route::get('/services/home', serviceHome::class); //if both components have same name then use alias
Route::get('/new-component', NewComponent::class);
Route::get('/users', Users::class);
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>['web', 'guest']], function() {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});
Route::group(['middleware'=>['web', 'auth']], function() {
    Route::get('/logout', Logout::class)->name('logout');
    Route::get('/home', Home::class)->name('home');
});

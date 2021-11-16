<?php

use App\Http\Livewire\About\AboutUs;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Crud\AddLoan;
use App\Http\Livewire\Admin\DashBoard;
use App\Http\Livewire\Loan\LoanDisplay;
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
})->name('home');

Route::get('/admin/login', Login::class)->name('admin.auth.login');

Route::get('/loans', LoanDisplay::class)->name('display.loans');
Route::get('/about-us', AboutUs::class)->name('about-us');

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', DashBoard::class)->name('admin.dashboard');
    Route::get('/admin/dashboard/crud/add-loan', AddLoan::class)->name('admin.dashboard.crud.add-loan');

});

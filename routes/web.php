<?php

use App\Livewire\BlogDetail;
use App\Livewire\ShowAbout;
use App\Livewire\ShowBlogPage;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicePage');
Route::get('/service/{id}', ShowService::class)->name('serviceDetailPage');
Route::get('/team', ShowTeamPage::class)->name('teamPage');
Route::get('/blogs', ShowBlogPage::class)->name('blogPage');
Route::get('/blogs/{id}', BlogDetail::class)->name('blogDetail');
Route::get('/about', ShowAbout::class)->name('aboutPage');
Route::get('/contact', ShowContactPage::class)->name('contactPage');

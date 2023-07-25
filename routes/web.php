<?php

use App\Http\Livewire\Events;
use App\Http\Livewire\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\Blog\Faq;
use App\Http\Livewire\Frontend\Home\Home;
use App\Http\Livewire\Frontend\About\About;
use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Livewire\Frontend\Blog\Devotional;

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


Route::get('/admin/users', [ListUsers::class, 'render'])->name('admin.users');
Route::get('/admin', [ListUsers::class, 'index'])->name('admin');
Route::get('/admin/blog', [BlogController::class, 'render'])->name('admin.blog');
Route::get('/admin/blog/create', [BlogController::class, 'addPost'])->name('admin.blog.create');
Route::get('/', [Home::class, 'render']);


Route::get('/home', [Home::class, 'render'])->name('home');
Route::get('/about', [About::class, 'render'])->name('about.page');

//Route::get('/about', About::class)->name('about.page');

Route::get('/events', [Events::class, 'render'])->name('events.page');
Route::get('/devotional', [Devotional::class, 'show'])->name('devotional.page');
Route::get('/devotional/detail', [Devotional::class, 'showDetail'])->name('devotional.details');
Route::get('/faqs', [Faq::class, 'show'])->name('faq.page');
Route::get('/faqs/detail', [Faq::class, 'showDetail'])->name('faq.details');
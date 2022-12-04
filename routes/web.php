<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminPostController;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

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
    return view('home', [
        "title" => "Home",
        "active" => 'home',
        "posts" => Post::latest()->get(),
        'categories' => Category::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami",
        "active" => 'about'
    ]);
});
Route::get('/news', [PostController::class, 'index']);
Route::get('/news/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Kategori Post',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard Post'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::get('/dashboard/categories/checkSlug', [AdminCategorytController::class, 'checkSlug']);
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');

// Route::resource('/dashboard/adminpost', AdminPostController::class);
// Route::get('/dashboard/adminpost/checkSlug', [AdminPostController::class, 'checkSlug']);

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use \App\Http\Controllers\Test\TestController;
use \App\Http\Controllers\PostController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return '<h1>Hello, World!</h1>';
//});

//Route::get('/', function () {
//    $res = 3 + 2;
//    $name = 'John';
////    return view('home')->with('var',$res);
////    return view('home', ['res' => $res, 'name' => $name]);
//    return view('home', compact('res', 'name'));
//})->name('home');

//Route::get('/about', function () {
//    return '<h1>About Page</h1>';
//});

//Route::get('/contact', function () {
//    return view('contact');
//});
//
//Route::post('/send-email', function () {
////    return 'Send Email';
//    if (!empty($_POST)) {
//        dump($_POST);
//    }
//});

//Route::any( '/contact', function () {
//    if (!empty($_POST)) {
//        dump($_POST);
//    }
//    return view('contact');
//});

//Route::match(['post', 'get'], '/contact2', function () {
//    if (!empty($_POST)) {
//        dump($_POST);
//    }
//    return view('contact');
//})->name('contact');

//Route::match(['post', 'get', 'put'], '/contact', function () {
//    if (!empty($_POST)) {
//        dump($_POST);
//    }
//    return view('contact');
//})->name('contact');

//Route::view('/test', 'test', ['test' => 'Test data']);

//Route::redirect('/about', '/contact');
//Route::redirect('/about', '/contact', 301);

// Статус 301 по умолчанию
//Route::permanentRedirect('/about', '/contact');

//Route::get('post/{id}', function ($id) {
//    return "Post $id";
//});

//Route::get('post/{id}/{slug?}', function ($id, $slug = null) {
//    return "Post $id | $slug";
//})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+'])->name('post');

//Route::get('post/{id}/{slug?}', function ($id, $slug = null) {
//    return "Post $id | $slug";
//})->name('post');

//Route::prefix('admin')->name('admin.')->group(function () {
//
//    Route::get('/posts', function () {
//        return 'Posts List';
//    });
//
//    Route::get('/post/create', function () {
//        return 'Post Create';
//    });
//
//    Route::get('/post/{id}/edit', function ($id) {
//        return "Edit post $id";
//    })->name('post');
//
//});

/*
 * Controllers
*/

//Route::get('/', [HomeController::class, 'index']);
//Route::get('/test', [HomeController::class, 'test']);
//Route::get('/test2', [TestController::class, 'index']);
//Route::get('/page/{slug}', [PageController::class, 'show']);
//
//Route::resource('admin/posts', PostController::class)->parameters([
//    'posts' => 'slug'
//]);
//Route::resource('admin/posts', PostController::class)->withTrashed(['create'])->parameters([
//    'posts' => 'slug'
//]);;
//
//Route::fallback(function () {
////    return redirect()->route('home');
//    abort(404, 'Oops! Page not found...');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/page/about', [PageController::class, 'show'])->name('page.about');
Route::get('/create', [HomeController::class, 'create'])->name('posts.create');
Route::post('/', [HomeController::class, 'store'])->name('posts.store');
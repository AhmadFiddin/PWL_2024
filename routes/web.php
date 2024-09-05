<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


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


// 2 ROUTING
// BASIC ROUTING 
// Route Langkah 2
Route::get('/hello', function () {
    return 'Hello World';
});

// Route Langkah 4
Route::get('/world', function () {
    return 'World';
});

// Route Langkah 6
Route::get('/', function () {
    return 'Selamat Datang';
});

// Route Langkah 7
Route::get('/about', function () {
    return 'NIM: 2241760136 <br>NAMA: Ahmad Mimnai Fiddin';
});


// ROUTE PARAMETERS
// Route Langkah 8
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

// Route Langkah 11
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Route Langkah 13
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});
// Route::get('/articles/{id}', function ($id) {
//     // Mengarahkan ke URL eksternal dengan ID sebagai bagian dari query string
//     $url = "https://www.okezone.com/tag/ferdy-sambo?id=$id";
//     return redirect($url);
// });


// OPTIONAL PARAMETER
// Route Langkah 14
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

// Route Langkah 17
Route::get('/user/{name?}', function ($name = 'Jhon') {
    return 'Nama saya ' . $name;
});


// // ROUTE NAME
// Route::get('/user/profile', function () {
//     //
// })->name('profile');
// Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');

// // Generating URLs...
// $url = route('profile');

// // Generating Redirects...
// return redirect()->route('profile');


// // ROUTE GROUP dan ROUTE PREFIXES
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });


// // REDIRECT ROUTES
// Route::redirect('/here', '/there');


// // VIEWS ROUTES
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


// 3 CONTROLLER
// MEMBUAT CONTROLLER
// Controller Langkah 4
Route::get('/hello', [WelcomeController::class, 'hello']);

// Conroller Langkah 6
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

// Controller Langkah 7
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Controller Langkah 9
Route::resource('photos', PhotoController::class);

// Controller Langkah 11
Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);


// 4 VIEW
// MEMBUAT VIEW
// View langkah 2
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Ahmad Mimnai Fiddin']);
// });

// View Langkah 6 modifikasi langkah 2
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Ahmad Mimnai Fiddin']);
// });

// View Langkah 9 modifikasi langkah 2
Route::get('/greeting', [WelcomeController::class, 'greeting']);
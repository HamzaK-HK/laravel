<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\RegisterController;


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
// Route::get('/', function () {
//     return view('posts');
// });

Route::get('/', function(){
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post}', function ($id) {
    return view('post', [
        'post' => Post::findOrFail($id),
    ]);
});
// ->where('post', '[A-Za-z0-9-]+');

// Route::get('register', [RegisterController::class, 'create']);

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Blog;
use App\Models\Client;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClientController;



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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('post/add', function () {
    DB::table('posts')->insert([
        'title' => 'Select DB',
        'body' => 'Aruzhan'
    ]);
});
Route::get('post', [PostController::class, 'index']);
Route::get('post/create', function() {
    return view('post.create');
 
});

Route::post('post/create', [PostController::class, 'store'])->name('add-post');
Route::get('post/{id}', [PostController::class, 'get_post']);



Route::get('blog/add', function() {
    DB::table('blogs')->insert([
        'name' => 'Aruzhan',
        'surname' => 'Zhumabek',
        'age'=>17
    ]);
});
Route::get('blog',  [BlogController::class, 'index']);
Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');
Route::get('blog/{id}', [BlogController::class, 'get_blog']);

Route::get('client/add', function (){
    DB::table('clients')->insert([
        'name' => 'Aruzhan',
        'surname' => 'Zhumabek',
        'age' => 17
    ]);
});
Route::get('client', [ClientController::class, 'index']);
Route::get('client/create', function() {
    return view('client.create');
});
Route::post('client/create', [ClientController::class, 'store'])->name('add-client');
Route::get('client/{id}', [ClientController::class, 'get_client']);

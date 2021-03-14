<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Blog;

use App\Http\Controllers\BlogController;



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
Route::get('post', function () {
    $post = Post::find(1);
    return $post;
});
Route::get('blog/add', function() {
    DB::table('blogs')->insert([
        'name' => 'Aruzhan',
        'surname' => 'Zhumabek',
        'age'=>17
    ]);
});
Route::get('blog',  [BlogController::class, 'index']);


<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
//    return view('welcome');
//    $post=new Post();
//    $post->title ='test title';
//    $post->content='test content';
//    $post->save();

//    Post::create([
//        'title'=>'test title1',
//        'content'=>'test content1'
//    ]);

//    $post=Post::all();
//    dd($post);

//    $post=Post::find(1);
//    dd($post);

//    $post=Post::where('id','<',10)->orderBy('id','DESC')->get();
//    dd($post);

//    $post=Post::find(1);
//    $post->update([
//        'title'=>'updated title',
//        'content'=>'updated content',
//    ]);

//    $post=Post::find(1);
//    $post->title='saved title';
//    $post->content='saved content';
//    $post->save();
//    $post=Post::find(1);

//    $post->delete();

//    Post::destroy(2);

//    Post::destroy(3,5,7);

//    $allPosts=Post::all();
//    dd($allPosts);

//    $featuredPosts=Post::where('is_feature',1)->get();
//    dd($featuredPosts);

//    $fourthPost=Post::find(4);
//    dd($fourthPost);

//    $lastPost=Post::orderBy('id','DESC')->first();
//    dd($lastPost);

    $post=Post::find(9);
    foreach($post->comments as $comment){
        echo $comment->content.'<br>';
    }

});

Route::get('posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('post', [PostsController::class, 'show'])->name('posts.show');
Route::get('contact', [PostsController::class, 'contact'])->name('posts.contact');
Route::get('about', [PostsController::class, 'about'])->name('posts.about');



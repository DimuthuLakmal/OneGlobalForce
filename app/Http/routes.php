<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::resource('socialnetworkcomment', 'CommentController');
Route::resource('equalityofwomencomment', 'CommentController');
Route::resource('economic-developmentcomment', 'CommentController');


Route::resource('socialnetworkreply', 'ReplyController');
Route::resource('equalityofwomenreply', 'ReplyController');
Route::resource('economic-developmentreply', 'ReplyController');

Route::get('/', function () {
    return view('welcome');
});


Route::get('socialnetworking', function () {
    $controller = new App\Http\Controllers\CommentController();
    $list = $controller->searchTopic('socialnetworking');
    $reply_list = array();
    
    foreach($list as $comment){
        $replies= $comment->replys;
        foreach($replies as $reply){
            $reply_list[] = $reply;
        }
    }
    return View::make('socialnetworking')->withComments($list)->withReplies($reply_list);
    
});

Route::get('equalityofwomen', function () {
    $controller = new App\Http\Controllers\CommentController();
    $list = $controller->searchTopic('equalityofwomen');
    $reply_list = array();
    
    foreach($list as $comment){
        $replies= $comment->replys;
        foreach($replies as $reply){
            $reply_list[] = $reply;
        }
    }
    return View::make('equalityofwomen')->withComments($list)->withReplies($reply_list);
    
});

Route::get('economic-development', function () {
    $controller = new App\Http\Controllers\CommentController();
    $list = $controller->searchTopic('economic-development');
    $reply_list = array();
    
    foreach($list as $comment){
        $replies= $comment->replys;
        foreach($replies as $reply){
            $reply_list[] = $reply;
        }
    }
    return View::make('economic-development')->withComments($list)->withReplies($reply_list);
    
});

Route::get('competition', function () {
    return View::make('competition');
});

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
    //
});

<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\sessiionControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestingControler;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;


// Route::get('/layouts', function () {
//     return view('layouts.app');
// });

// Route::resource('/tasks', TaskController::class);

// Route::middleware(EnsureTokenIsValid::class)->controller(UserController::class)->group(function(){
//     Route::get('/',  'first')->name('first');
//     Route::get('/second/{id?}' ,'second')->name('second');
// });

// Route::get('/test',TestingControler::class)->name('test');

// Route::resource('photos',PhotoController::class)->withTrashed();    

// Route::apiResource('posts',PostsController::class);

// Route::singleton('profile',ProfileController::class);



// Route::get('/request-form', function () {
//     return view('request-practice');
// });

// Route::post('/request-test', function (Request $request) {

//     echo $request->input('name')."<br>";
//     echo $request->filled('email')."<br>";
//     echo $request->has('subscribe')."<br>";
//     echo $request->input('country')."<br>";
//     echo $request->input('products.0.name')."<br>";
//     echo $request->hasFile('photo')."<br>";

//     dd([
//         'all_data' => $request->all(),
//     ]);
// });




// Route::get('/response-practice', function (){
//     return view('/response-practice');
// });
// Route::get('/basic-response', function(){
//     return response('this is basic response',200);
// });
// Route::get('json-response', function(){
//     return response()->json([
//         "name"=>"deep",
//         "role"=>"admin"
//     ]);
// });
// Route::get('/redirect-response', function (){
//     return redirect("/request-form");
// });
// Route::get('/header-response',function(){
//     return response("Header example")
//     ->header('X-App-Name', 'LaravelPractice')
//     ->header('X-Version', '1.0');
// });

// Route::get('/download-response', function () {
//     return response()->download(public_path('test.txt'));
// });
// Route::get('/file-response', function () {
//     return response()->file(public_path('test.txt'));
// });



// Route::get('/greeting', function () {
//     return view('greeting')
//     ->with('name', 'Victoria')
//     ->with('role', 'admin');
// });

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });


// Route::get("/", [sessiionControler::class,"index"]);
Route::get("/store_session", [sessiionControler::class,"store"]);
Route::get("/delete_session", [sessiionControler::class,"delete"]);


Route::get('/',[PostController::class,'index']);
Route::get('/post/create', [PostController::class, 'create'])->name('createpost');
Route::post('/post', [PostController::class, 'store'])->name('addpost');
Route::get('/post/editPost/{id}', [PostController::class, 'edit']);
Route::put('/post/updatePost/{id}',[PostController::class, 'update'])->name('edit_post');
Route::get("/deletePost/{id}",[PostController::class,'destroy']);



route::resource('/flights',FlightController::class);


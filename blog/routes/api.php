<?php

use Illuminate\Http\Request;
use App\post;
use App\gallery;
use App\CreateUser;
use App\Blogs;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
     $posts = Post::all();
     return response()->json($posts);
});

Route::middleware('auth:api')->get('/blog', function (Request $request) {
     $blog = FetchBlog::all();
     return response()->json($blog);
});
Route::get('/user/login/{email}/{password}',
	['uses' =>'HomeController@authuser',
     'as' => 'checkuser',
     'middleware'=> 'auth:api'
	]);

Route::post('/users', 
	['uses' => 'HomeController@store',
     'as' => 'newusers'
     
     ]
 );
Route::get('/users', 
     ['uses' => 'HomeController@store',
     'as' => 'newusers'
     
     ]
 );
Route::get('/allusers', function(Request $request){
   $posts = Post::all();
     return response()->json($posts);
});

Route::get('/gallery', function(Request $request){
   $images = gallery::with('likes')->get();
     return response()->json($images);
});

Route::any('/gallery/newlike/', 
     ['uses' => 'HomeController@newlike',
     'as' => 'newgallery'
     
     ]
 ); 
Route::any('/galleryusers/', 
     ['uses' => 'HomeController@GalleryUsers',
     'as' => 'galleryusers'
     
     ]
 );    

Route::get('/singleimage/{id}', function(Request $request, $id){
  
   $images = gallery::with('likes','comments')
                           ->where('id', '=', $id)
                           ->get();
     return response()->json($images);
});

Route::any('/gallery/newcomments', 
     ['uses' => 'HomeController@newcomments',
     'as' => 'newcomment'
     ]
 );
Route::any('/gallery/getcomments/{id}', 
     ['uses' => 'HomeController@getcomments',
     'as' => 'getcomment'
     ]
 );

Route::get('/fetchblogs', function(Request $request){
   $blogs = Blogs::orderBy('id', 'desc')->get();
     return response()->json(['status'=>true, 'postdata'=> $blogs]);
});

Route::post('/imageuploadpage','HomeController@PostImageUploads');

// Insert Posts 

Route::post('/saveposts','HomeController@SavePosts');

// Currunt Posts 

Route::get('/curruntpost/{id}','HomeController@CurruntPosts');

// Delete Post 

Route::post('/deletepost','HomeController@DeletePost');

// Delete Post 

Route::post('/trashpost','HomeController@TrashPost');

// Restore Post 

Route::post('/restorepost','HomeController@PostRestore');


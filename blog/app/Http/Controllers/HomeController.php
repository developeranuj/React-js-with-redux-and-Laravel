<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\likes;
use App\CreateUser;
use App\gallery;
use App\galleryusers;
use App\CreateComments;
use App\BLogs;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
    
 

     $newusers = new CreateUser();
     $users = CreateUser::select('email')
                           ->where('email', '=', $request->data['email'])
                           ->get();
      if ($users->count() > 0){
        return 'email already exists';
       
       } 
      else{
        $newusers->fill([
            'username' => $request->data['username'],
            'email'=> $request->data['email'],
            'user_image'=> $request->data['image'],
            'password'=> $request->data['password']

        ]);

         $newusers->save();

        return response()->json($request);
      }
                        

    }   
    public function authuser(Request $request, $email, $password)
    {
        
        $users = User::select('email','username')
                           ->where('email', '=', $email)
                           ->get();
                          
                 
         if(@$users[0]['email'] != "")  {

            return response()->json($users);
         }   
         else{
            $mess = array(0=>array('email'=>'empty'));
            return response()->json($mess);
         }            

    }

  public function newlike(Request $request)
    {
     

     $totallike = likes::select('userid')->where('image_id', $request->data[0])->where('userid', $request->data[1])->get()->count();

      //dd($totallike);                     

     if($totallike>=1){

             $newlikes = likes::where('image_id', $request->data[0])->where('userid', $request->data[1])->first();
             //$newlikes->likes =  $newlikes->likes-1;
             $newlikes->delete();

     }
     else{

        $newlikes = new likes();
      
        $newlikes->fill([
            'likes'=> 1,
            'image_id'=>$request->data[0],
            'userid' =>$request->data[1]
        ]);

        $newlikes->save();
     }                      
     
    }    

  public function GalleryUsers(Request $request){
     
      $email = $request->data; 
      //return $email;
      $users = User::where('email','=',  $email)
                           ->first();                  
      if($users){
        return response()->json(['status'=>true, 'userdata' =>$users]);
      }
      else{
        $mess = array(0=>array('email'=>'empty'));
         return response()->json(['status'=>false, 'userdata' =>$mess]);
     }                                 
  }

 public function newcomments(Request $request)
    {
    
        $newcomment = new CreateComments();
      
        $newcomment->fill([
            'userid'=> $request->data[0],
            'comments'=>$request->data[1],
            'image_id'=>$request->data[2]
        ]);
        $newcomment->save();
   
    }   

  public function getcomments(Request $request, $id)
    {
    
        $getcomment = CreateComments::select ('comments','userid')
                           ->where('image_id', '=', $id)
                           ->get();

         return response()->json($getcomment);                    
       
    }    

  public function PostImageUploads(request $request){
    
        $destinationPath = "uploads"; // upload path
         $extension = $request->file('file')->getClientOriginalExtension(); // getting image
         $fileName = rand(11111,99999).'.'.$extension; // renameing image
         $request->file('file')->move($destinationPath, $fileName); // uploading file
         $url =  url('/').'/uploads/'.$fileName;
        return response()->json(['status' => true, 'link' => $url ], 200);

  }   


}

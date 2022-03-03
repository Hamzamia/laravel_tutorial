<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = DB::table('posts')->get();
        return view ('posts',compact('posts'));
    }
    public function addPost(){
        return view('add-post');
    }

    public function AddNewpost(Request $request){
        DB::table('posts')->insert([
            'Title'=> $request->title,
            'Body'=>$request->body
        ]);
        return back()->with('post_created)','post has been created');
    }

    public function getPostById($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post-deleted','post has been deleted');
    }
    
}

<?php

namespace App\Http\Controllers;
// use DB;
// use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use View, Input;
session_start();
class PostsController extends Controller
{
    public function managePosts(){
        return view('admin.managePosts');
    }
    public function addPosts(){
        return view('admin.addPosts');
    }
    public function savePosts(Request $request){

        $data= array();
        $data['title']=$request->title;
        $data['author']=$request->author;
        $data['content']=$request->content;
        $data['categoryID']=$request->categoryID;
        $data['imgID']=$request->imgID;

       
        DB::table('posts')->insert($data);

        Session::put('message','Thêm bài viết thành công');
        return Redirect::to('addPosts');
    }
}

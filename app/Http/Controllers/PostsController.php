<?php

namespace App\Http\Controllers;
// use DB;
// use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\postsModel;
use App\Models\posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Subject;
use View, Input;
session_start();
class PostsController extends Controller
{
    public function managePosts(){
        $managePosts= DB::table('posts')->get();
        $allPosts= view('admin.managePosts')->with('managePosts', $managePosts);
        return view('admin.admin_layout')->with('admin.managePosts',$allPosts);
    }
    public function addPosts(){
        $allCategories= DB::table('categories')->get();
        $managerCategory= view('admin.addPosts')->with('allCategories', $allCategories);
        return view('admin.admin_layout')->with('admin.addPosts',$managerCategory);
        // return view('admin.addPosts');
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


    public function editPosts($postID){
        $editPosts= DB::table('posts')->where('postID',$postID)->get();
        $allPosts= view('admin.editPosts')->with('editPosts', $editPosts);
        return view('admin.admin_layout')->with('admin.editPosts',$allPosts);
    }
}

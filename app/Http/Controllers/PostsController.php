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
    public function showCategory($postID){
        $allCategories= DB::table('categories')->where('postID',$postID)->get();
        // $managerCategory= view('admin.editPosts')->with('allCategories', $allCategories);
        // dd($allCategories);
        // return view('admin.editPosts', compact('allCategories'));
        return view('admin.editPosts')->with('allCategories',$allCategories);
        // return Redirect::to('managePosts');
        // return Redirect::to('editPosts/'.$postID);
    }

    public function updatePosts(Request $request, $postID){
        $data=array();
        $data['title']=$request->title;
        $data['author']=$request->author;
        $data['content']=$request->content;
        $data['categoryID']=$request->categoryID;
        $data['imgID']=$request->imgID;
        DB::table('posts')->where('postID',$postID)->update($data);
        Session::put('message','Chỉnh sửa bài viết thành công');
        return Redirect::to('managePosts');

    }

    public function editPosts($postID){
        $editPosts= DB::table('posts')->where('postID',$postID)->get();
        $allPosts= view('admin.editPosts')->with('editPosts', $editPosts);
        return view('admin.admin_layout')->with('admin.editPosts',$allPosts);
    }
    public function deletePosts($postID){
        DB::table('posts')->where('postID',$postID)->delete();
        Session::put('message','Đã xóa bài viết ');
        return Redirect::to('managePosts');
    }
}

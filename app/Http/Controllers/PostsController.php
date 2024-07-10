<?php

namespace App\Http\Controllers;
// use DB;
// use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\postsModel;
use App\Models\categories;
use App\Models\posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Subject;
use View, Input;
session_start();
class PostsController extends Controller
{
        // ----------------------------Admin manager -----------------------------
    public function managePosts(){
        // $managePosts= DB::table('posts')->get();
        $managePosts=posts::all();
        $allPosts= view('admin.managePosts')->with('managePosts', $managePosts);
        return view('admin.admin_layout')->with('admin.managePosts',$allPosts);
    }
    public function showCategory(){
        // $allCategories= DB::table('categories')->where('postID',$postID)->get();
        $allCategories=categories::all();
        $manageCategories= view('admin.managePosts')->with('managePosts', $allCategories);
        // $managerCategory= view('admin.editPosts')->with('allCategories', $allCategories);
        // dd($allCategories);
        // return view('admin.editPosts', compact('allCategories'));
        return view('admin.editPosts')->with('allCategories',$manageCategories);
        // return Redirect::to('managePosts');
        // return Redirect::to('editPosts/'.$postID);
    }
    public function addPosts(){
        $allCategories= DB::table('categories')->get();
        $managerCategory= view('admin.addPosts')->with('allCategories', $allCategories);
        return view('admin.admin_layout')->with('admin.addPosts',$managerCategory);
        // return view('admin.addPosts');
    }
    public function savePosts(Request $request){

        $data= $request->all();
        $post= new posts();
        $post->title=$data['title'];
        $post->author=$data['author'];
        $post->content=$data['content'];
        $post->categoryID=$data['categoryID'];
        $post->imgID=$data['imgID'];
        $post->save();
        // $data= array();
        // $data['title']=$request->title;
        // $data['author']=$request->author;
        // $data['content']=$request->content;
        // $data['categoryID']=$request->categoryID;
        // $data['imgID']=$request->imgID;

       
        // DB::table('posts')->insert($data);

        Session::put('message','Thêm bài viết thành công');
        return Redirect::to('addPosts');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $managePosts = Posts::where('title', 'LIKE', "%$query%")
                            ->orWhere('author', 'LIKE', "%$query%")
                            ->get();

        return view('admin.admin_layout', compact('managePosts'));
    }

    public function updatePosts(Request $request, $postID){
        $data= $request->all();
        $post= posts::find($postID);
        $post->title=$data['title'];
        $post->author=$data['author'];
        $post->content=$data['content'];
        $post->categoryID=$data['categoryID'];
        $post->imgID=$data['imgID'];
        $post->save();
        // $data=array();
        // $data['title']=$request->title;
        // $data['author']=$request->author;
        // $data['content']=$request->content;
        // $data['categoryID']=$request->categoryID;
        // $data['imgID']=$request->imgID;
        // DB::table('posts')->where('postID',$postID)->update($data);
        Session::put('message','Chỉnh sửa bài viết thành công');
        return Redirect::to('managePosts');

    }

    public function editPosts($postID){
        // $editPosts= DB::table('posts')->where('postID',$postID)->get();
        $editPosts=posts::find($postID);
        $allPosts= view('admin.editPosts')->with('editPosts', $editPosts);
        return view('admin.admin_layout')->with('admin.editPosts',$allPosts);
    }
    public function deletePosts($postID){
        DB::table('posts')->where('postID',$postID)->delete();
        Session::put('message','Đã xóa bài viết ');
        return Redirect::to('managePosts');
    }

    // ----------------------------end Admin -----------------------------
    //  --------------------------Main page-------------------------------
    public function Show3NewPost(){
        $posts = posts::orderBy('postID', 'desc')->take(3)->get();
        dd($posts);
        return view('main', compact('posts'));
        // return view('main')->with('posts', $posts);
    }   
}

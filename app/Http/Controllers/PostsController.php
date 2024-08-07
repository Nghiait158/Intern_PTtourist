<?php

namespace App\Http\Controllers;
// use DB;
// use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\postsModel;
use App\Models\categories;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\imgmainpage;
use App\Http\Controllers\Subject;
use View, Input;
session_start();
class PostsController extends Controller
{
        // ----------------------------Admin manager -----------------------------
        public function index(){
            $data = $this->posts();
            return view('posts2', $data);
        }
    
        function posts() {
            $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
            $allPost= Post::orderBy('publishedDate', 'desc')->get();
            $post12first = Post::orderBy('updated_at', 'desc')->take(12)->get();
            $firstPost = Post::orderBy('postID', 'desc')->first();
            $category =categories::all();
            return [
                'latestVideo' => $latestVideo,
                'allPost'=> $allPost,
                'post12first'=>$post12first,
                'firstPost'=>$firstPost,
                'category'=>$category,
            ];
        }   

        public function postDetail($postID){
            $data = $this->postDe($postID);
            return view('postDetail', $data);
        }
            function postDe($postID) {
                $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
                $viewDePost = Post::where('postID', $postID)->first();
                $post4first = Post::orderBy('updated_at', 'desc')->take(4)->get();

                $category =categories::all();
                // dd($viewDePost);
            return [
                'latestVideo' => $latestVideo,
                'viewDePost'=>$viewDePost,
                'post4first'=>$post4first,
                'category'=>$category,
            ];
        }
    

    public function managePosts(){
        // $managePosts= DB::table('posts')->get();
        // $managePosts=Post::all();
        $managePosts = Post::orderBy('publishedDate', 'desc')->get();
        $allPosts= view('admin.managePosts')->with('managePosts', $managePosts);
        // dd($managePosts);
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
        $post= new Post();
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
        $managePosts = Post::where('title', 'LIKE', "%$query%")
                            ->orWhere('author', 'LIKE', "%$query%")
                            ->get();

        return view('admin.admin_layout', compact('managePosts'));
    }

    public function updatePosts(Request $request, $postID){
        $data= $request->all();
        $post= Post::find($postID);
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
        $editPosts=Post::find($postID);
        $allPosts= view('admin.editPosts')->with('editPosts', $editPosts);
        return view('admin.admin_layout')->with('admin.editPosts',$allPosts);
    }
    public function deleteDoc($postID){
        DB::table('posts')->where('postID',$postID)->delete();
        Session::put('message','Đã xóa bài viết ');
        return Redirect::to('managePosts');
    }

    // ----------------------------end Admin -----------------------------
    //  --------------------------Main page-------------------------------
    public function show3NewestPost(){
        $managePosts = Post::orderby('postID', 'desc')->take(3)->get();
        // $managePosts = Post::orderby('postID', 'desc')->first();
        
        // // $posts3= DB::table('posts')-> orderBy('postID', 'desc')->take(3)->get();
        // // return view('main',['posts3'=>$posts3]);
        // // return view('main', compact('posts3'));
        
        // $managePosts=Post::all();
        // $allPosts= view('main')->with('managePosts', $managePosts);
        // return view('main')->with('posts',$managePosts);
        
        // $allPost=Post::all();
        // $manage_Post= view('main')->with('allPost', $allPost);
        // return view('layout.header')->with('main',$manage_Post);

        // $managePosts=Post::all();
        // $allPosts= view('admin.managePosts')->with('managePosts', $managePosts);
        // dd($managePosts);
        return view('main', ['posts' => $managePosts]);
    }   
}

<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\imgmainpage;
use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{

    public function index(){
        $data = $this->posts();
        return view('main', $data);
    }

    function posts() {
        $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
        $managePosts = Post::orderby('postID', 'desc')->take(3)->get();
        $category =categories::all();
        return [
            'latestVideo' => $latestVideo,
            'posts' => $managePosts,
            'category'=>$category,
        ];
    }
    
}

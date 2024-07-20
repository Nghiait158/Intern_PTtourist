<?php

namespace App\Http\Controllers;
use App\Models\imgmainpage;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index(){
        $data = $this->posts();
        return view('doc', $data);
    }

    function posts() {
        $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
        return [
            'posts' => [],
            'latestVideo' => $latestVideo,
        ];
    }
}

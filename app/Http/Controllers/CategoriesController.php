<?php

namespace App\Http\Controllers;
// use DB;
// use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\postsModel;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Subject;
use View, Input;
session_start();
class CategoriesController extends Controller
{
    public function manageCategories(){
        // $managePosts= DB::table('posts')->get();
        $manageCategories=categories::all();
        $allCategories= view('admin.managePosts')->with('manageCategories', $manageCategories);
        return view('admin.admin_layout')->with('admin.manageCategories',$allCategories);
    }
    
    public function addCategories(){
        $allCategories= DB::table('categories')->get();
        $managerCategory= view('admin.addCategories')->with('allCategories', $allCategories);
        return view('admin.admin_layout')->with('admin.addCategories',$managerCategory);
        // return view('admin.addPosts');
    }
    public function saveCategories(Request $request){

        $data= $request->all();
        $categories= new categories();
        $categories->name=$data['name'];
        $categories->description=$data['description'];
        $categories->save();
        Session::put('message','Thêm thể loại thành công');
        return Redirect::to('addCategories');
    }
}

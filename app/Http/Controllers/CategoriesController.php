<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // public function index()
    // {
    //     $allCategories= DB::table('categories')->get();
    //     $managerCategory= view('admin.addPosts')->with('allCategories', $allCategories);
    //     return view('admin.admin_layout')->with('admin.addPosts',$managerCategory);
    // }
}

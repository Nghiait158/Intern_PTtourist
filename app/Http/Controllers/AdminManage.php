<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminManage extends Controller
{
    public function index(){
        return view('admin/admin_login');
    }
    public function showAdminContent(){
        return view('admin.admin_content');
    }
}

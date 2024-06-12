<?php

namespace App\Http\Controllers;

use App\Models\imgmainpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminManage extends Controller
{
    // public function index(){
    //     return view('admin/admin_login');
    // }
    public function showAdminContent(){
        return view('admin.admin_content');
    }

    public function index(){
        $video = imgmainpage::where('description', 'imgPath')->first();
        return view('admin.manageImgPage', compact('video'));
    }

    public function uploadVideo(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4|max:10240', // 10MB max size
        ]);

        // Xóa video hiện tại (nếu có)
        $currentVideo = imgmainpage::where('description', 'imgPath')->first();
        if ($currentVideo) {
            Storage::delete($currentVideo->imgPath);
            $currentVideo->delete();
        }

        // Lưu video mới
        $path = $request->file('video')->store('videos', 'public');

        // Lưu thông tin video vào database
        imgmainpage::create([
            'description' => 'background video',
            'imgPath' => $path,
        ]);

        return redirect()->route('admin.manageImgPage')->with('success', 'Video background đã được cập nhật!');
    }
}

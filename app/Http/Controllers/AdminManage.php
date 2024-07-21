<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\imgmainpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
class AdminManage extends Controller
{
    public function showAdminContent(){ 
        return view('admin.admin_content');
    }


    public function manageImgPage(){
        $manageImgPage = imgmainpage::orderBy('imgID', 'desc')->get();
        $allImgPage= view('admin.manageImgPage')->with('manageImgPage', $manageImgPage);
        return view('admin.admin_layout')->with('admin.manageImgPage',$allImgPage);
    }
    public function addImgPage(){
        $allImgPage= DB::table('imgmainpage')->get();
        $managerImgPage= view('admin.add_ImgPage')->with('allImgPage', $allImgPage);
        return view('dashboard')->with('admin.add_ImgPage',$managerImgPage);
    }
    public function saveImgPage(Request $request){

        $data= $request->all();
        $imgPage= new imgmainpage();
        $imgPage->description=$data['description'];
        // $imgPage->imgPath=$data['imgPath'];
        if ($request->hasFile('imgPath')) {
            $get_image = $request->file('imgPath');
            $new_image = rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('frontend/video'), $new_image);
            $imgPage->imgPath = '/frontend/video/' . $new_image;
        }
        $imgPage->save();
        Session::put('message','Thêm hình ảnh/video thành công');
        return Redirect::to('add_ImgPage');
    }
    // public function UploadMethod()
    // {
        
    //     $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
     
    //     return view('main')->with('latestVideo', $latestVideo);
       
    // }
    public function UploadMethod3()
    {
        $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
        return view('recDetail')->with('latestVideo', $latestVideo);
    }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $managePosts = Posts::where('title', 'LIKE', "%$query%")
    //                         ->orWhere('author', 'LIKE', "%$query%")
    //                         ->get();

    //     return view('admin.admin_layout', compact('managePosts'));
    // }

    // public function updatePosts(Request $request, $postID){
    //     $data= $request->all();
    //     $post= posts::find($postID);
    //     $post->title=$data['title'];
    //     $post->author=$data['author'];
    //     $post->content=$data['content'];
    //     $post->categoryID=$data['categoryID'];
    //     $post->imgID=$data['imgID'];
    //     $post->save();
    //     // $data=array();
    //     // $data['title']=$request->title;
    //     // $data['author']=$request->author;
    //     // $data['content']=$request->content;
    //     // $data['categoryID']=$request->categoryID;
    //     // $data['imgID']=$request->imgID;
    //     // DB::table('posts')->where('postID',$postID)->update($data);
    //     Session::put('message','Chỉnh sửa bài viết thành công');
    //     return Redirect::to('managePosts');

    // }

    // public function editPosts($postID){
    //     // $editPosts= DB::table('posts')->where('postID',$postID)->get();
    //     $editPosts=posts::find($postID);
    //     $allPosts= view('admin.editPosts')->with('editPosts', $editPosts);
    //     return view('admin.admin_layout')->with('admin.editPosts',$allPosts);
    // }
    // public function deleteImgPage($imgID){
    //     DB::table('imgmainpage')->where('imgID',$imgID)->delete();
    //     Session::put('message','Đã xóa bài viết ');
    //     return Redirect::to('manageImgPage');
    // }
    public function deleteImgPage($imgID)
    {
        $imgPage = imgmainpage::find($imgID);
        if ($imgPage) {

            $filePath = $imgPage->imgPath;

            $imgPage->delete();

            // Xóa file khỏi folder
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
            Session::put('message', 'Đã xóa video');
        } else {
            Session::put('message', 'Video không tồn tại.');
        }

        // Chuyển hướng về trang quản lý
        return Redirect::to('manageImgPage');
    }




    public function index(){
        $video = imgmainpage::where('description', 'imgPath')->first();
        return view('admin.manageImgPage', compact('video'));
    }
    

    // public function uploadVideo(Request $request)
    // {
    //     $request->validate([
    //         'video' => 'required|mimes:mp4|max:20480',
    //         'description' => 'required|string|max:255',
    //     ]);

    //     $path = $request->file('video')->store('videos', 'public');

    //     $video = new ImgMainPage();
    //     $video->description = $request->description;
    //     $video->imgPath = $path;
    //     $video->save();

    //     return redirect()->route('addImgPage')->with('success', 'Video uploaded successfully.');
    // }
}

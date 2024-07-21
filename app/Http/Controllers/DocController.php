<?php

namespace App\Http\Controllers;
use App\Models\imgmainpage;
use App\Models\Doc;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class DocController extends Controller
{
    public function index(){
        $data = $this->doc();
        return view('docs', $data);
    }

    function doc() {
        $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
        $doc1st = Doc::orderBy('updated_at', 'desc')->first();
        $doc2nd = Doc::orderBy('updated_at', 'desc')->skip(1)->first();
        $doc3rd = Doc::orderBy('updated_at', 'desc')->skip(2)->first();
        $doc4th = Doc::orderBy('updated_at', 'desc')->skip(3)->first();
        $doc5th = Doc::orderBy('updated_at', 'desc')->skip(4)->first();
        $doc6th = Doc::orderBy('updated_at', 'desc')->skip(5)->first();
        $doc7th = Doc::orderBy('updated_at', 'desc')->skip(6)->first();
        $doc8th = Doc::orderBy('updated_at', 'desc')->skip(7)->first();
        $doc10first = Doc::orderBy('updated_at', 'desc')->take(8)->get();
        // $latest4Docs = Doc::orderBy('updated_at', 'desc')->take(4)->get();// không đổi hình đằng sau 
        // $next4LatestDocs = Doc::orderBy('updated_at', 'desc')->skip(4)->take(4)->get();
        return [
            'latestVideo' => $latestVideo,
            'doc1st' => $doc1st,
            'doc2nd' => $doc2nd,
            'doc3rd' => $doc3rd,
            'doc4th' => $doc4th,
            'doc5th' => $doc5th,
            'doc6th' => $doc6th,
            'doc7th' => $doc7th,
            'doc8th' => $doc8th,
            'doc10first'=> $doc10first,
        ];
    }

    public function addDoc(){
        return view('admin.add_Doc');
    }
    public function saveDoc (Request $request){

        $data = $request->all();
        $doc = new Doc();
        $doc->title = $data['title'];

        if ($request->hasFile('file_path')) {
            $get_file = $request->file('file_path');
            $new_file_name = rand(0, 999) . '.' . $get_file->getClientOriginalExtension();
            $get_file->move(public_path('doc'), $new_file_name);
            $doc->file_path = '/doc/' . $new_file_name;
        }

        $doc->save();
        Session::put('message', 'Tải tài liệu lên thành công');
        return Redirect::to('add_Doc');
    }
    public function manageDocs(){
        $allDoc=Doc::orderBy('docID', 'desc')->get();
        // $manageImgPage = imgmainpage::orderBy('imgID', 'desc')->get();
        // $allImgPage= view('admin.manageImgPage')->with('manageImgPage', $manageImgPage);
        // return view('admin.admin_layout')->with('admin.manageImgPage',$allImgPage);
        return view('admin.manageDocs', ['allDoc' => $allDoc]);
    }
    public function deleteDoc($docID){
        $doc = Doc::find($docID);

        // Xóa tệp khỏi thư mục lưu trữ
        $file_path = public_path('doc/' . basename($doc->file_path));
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        // Xóa bản ghi trong cơ sở dữ liệu
        $doc->delete();

        Session::put('message', 'Tài liệu đã được xóa thành công');
        return Redirect::to('manageDocs');
    }
    public function editDoc($docID){
        $editDoc=Doc::find($docID);
        $allDocs= view('admin.editDoc')->with('editDoc', $editDoc);
        return view('dashboard')->with('admin.editDocs',$allDocs);
    }
    public function updateDoc(Request $request, $docID){
        $data= $request->all();
        $doc= Doc::find($docID);
        $doc->title=$data['title'];
        $doc->file_path=$data['file_path'];
        $doc->save();
        Session::put('message','Chỉnh sửa tài liệu thành công');
        return Redirect::to('manageDocs');

    }
}

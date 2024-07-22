<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Recruitments;
use App\Models\imgmainpage;
class recruitmentController extends Controller
{
    public function index(){
        $data = $this->rec();
        return view('rec', $data);
    }
        function rec() {
        $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
        $allRec= Recruitments::orderBy('publishedDate', 'desc')->take(9)->get();
        // dd($allRec);      
        return [
            'latestVideo' => $latestVideo,
            'allRec'=> $allRec,
        ];
    }
    public function recDetail($recruitmentID){
        $data = $this->recDe($recruitmentID);
        return view('recDetail', $data);
    }
        function recDe($recruitmentID) {
            $latestVideo = imgmainpage::orderBy('imgID', 'desc')->first();
            // $viewDeRec=Recruitments::find($recruitmentID);
            $viewDeRec = Recruitments::where('recruitmentID', $recruitmentID)->first();
            // dd($viewDeRec);
        return [
            'viewDeRec'=> $viewDeRec,
            'latestVideo' => $latestVideo,
        ];
    }
   
    public function job_manage(){  //hiển thị danh sách các job 
        $allRecruitments=Recruitments::all();
        $manage_recruitment= view('admin.job_manage')->with('allRecruitments', $allRecruitments);
        return view('admin.admin_layout')->with('admin.job_manage',$manage_recruitment);
    }
    public function add_recruitments(){
        return view('admin.add_recruitments');
    }


    public function saveRecruitment(Request $request){
        $data= $request->all();
        $recruiment= new Recruitments();
        $recruiment->position=$data['position'];
        $recruiment->description=$data['description'];
        $recruiment->requirements=$data['requirements'];
        $recruiment->contactInfo=$data['contactInfo'];
        $recruiment->numsOfRecruits=$data['numsOfRecruits'];
        $recruiment->workPlace=$data['workPlace'];
        $recruiment->dateStartWork=$data['dateStartWork'];
        $recruiment->benefits=$data['benefits'];
        $recruiment->academicLevel=$data['academicLevel'];
        $recruiment->age=$data['age'];
        $recruiment->request_Doc=$data['request_Doc'];



        $recruiment->save();
        

        Session::put('message','Thêm bài viết thành công');
        return Redirect::to('add_recruitments');
    }
}

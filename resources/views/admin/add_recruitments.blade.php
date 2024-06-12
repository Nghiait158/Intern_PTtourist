@extends('dashboard')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm bài tuyển dụng vào cơ sở dữ liệu  
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/saveRecruitment')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="position">Tên vị trí(position)</label>
                            <input type="text" class="form-control" name="position"  id="position" placeholder="Tên vị trí" >
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả(description)</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Mô tả">
                        </div>
                        <div class="form-group">
                            <label for="requirements">Yêu Cầu(requirements)</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="requirements" id="requirements" placeholder="Yêu cầu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="contactInfo">Thông tin liên hệ(contactInfo)</label>
                            <input type="text" name="contactInfo" class="form-control" id="contactInfo" placeholder="Thông tin liên hệ">
                        </div>
                        <div class="form-group">
                            <label for="numsOfRecruits">Số lượng tuyển(numsOfRecruits)</label>
                            <input type="text" name="numsOfRecruits" class="form-control" id="numsOfRecruits" placeholder="Số lượng tuyển">
                        </div>
                        <div class="form-group">
                            <label for="workPlace">Nơi làm việc(workPlace)</label>
                            <input type="text" name="workPlace" class="form-control" id="workPlace" placeholder="Nơi làm việc">
                        </div>
                        <div class="form-group">
                            <label for="dateStartWork">Ngày bắt đầu làm việc(dateStartWork)</label>
                            <input type="text" name="dateStartWork" class="form-control" id="dateStartWork" placeholder="Ngày bắt đầu làm việc">
                        </div>
                        <div class="form-group">
                            <label for="benefits">Phúc lợi(benefits)</label>
                            <input type="text" name="benefits" class="form-control" id="benefits" placeholder="Phúc lợi">
                        </div>
                        <div class="form-group">
                            <label for="age">Yêu cầu độ tuổi(age)</label>
                            <input type="text" name="age" class="form-control" id="age" placeholder="Yêu cầu độ tuổi">
                        </div>
                        <div class="form-group">
                            <label for="academicLevel">Bằng cấp(academicLevel)</label>
                            <input type="text" name="academicLevel" class="form-control" id="academicLevel" placeholder="Bằng cấp">
                        </div>
                        <div class="form-group">
                            <label for="request_Doc">Tài liệu yêu cầu(request_Doc)</label>
                            <input type="text" name="request_Doc" class="form-control" id="request_Doc" placeholder="Tài liệu yêu cầu">
                        </div>


                        {{-- <div class="form-group">
                            @csrf
                        
                            <label for="categoryID">Ngày đăng(categoryID)</label>
                            <select class="form-control" name="categoryID">
                                @foreach($allCategories as $key =>$category)
                                 <option value="{{ $category->categoryID }}">{{ $category->name }}</option>
                                @endforeach
                            </select> --}}
                            {{-- <input type="text" name="categoryID" class="form-control" id="categoryID" placeholder="Tác Giả"> --}}
                        {{-- </div> --}}
                        {{-- <div class="form-group">
                            <label for="tag">Từ khóa(tag)</label>
                            <input type="text" name="tag" class="form-control" id="tag" placeholder="tag">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="imgID">Image </label>
                            <input type="text" name="imgID" class="form-control" id="tag" placeholder="Image Name">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="exampleInputPassword1">Image Name</label>
                              <select name="imgID" class="form-control input-sm m-bot15">
                                    <option value="0"></option>
                                    <option value="1">Ẩn</option>
                                    
                            </select>
                        </div> --}}
                       
                        <button type="submit" name="addPosts" class="btn btn-info">Thêm bài viết tuyển dụng</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection

@extends('dashboard')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm bài viết vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/savePosts')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Tên bài viết(title)</label>
                            <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="title"  id="title" placeholder="Tên Bài viết " >
                        </div>
                        <div class="form-group">
                            <label for="author">Tác giả(author)</label>
                            <input type="text" name="author" class="form-control" id="author" placeholder="Tác Giả">
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung bài viết(content)</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="content" id="content" placeholder="Mô tả bài viết"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoryID">Thể loại(categoryID)</label>
                            <input type="text" name="categoryID" class="form-control" id="categoryID" placeholder="Tác Giả">
                        </div>
                        {{-- <div class="form-group">
                            <label for="tag">Từ khóa(tag)</label>
                            <input type="text" name="tag" class="form-control" id="tag" placeholder="tag">
                        </div> --}}
                        <div class="form-group">
                            <label for="imgID">Image </label>
                            <input type="text" name="imgID" class="form-control" id="tag" placeholder="Image Name">
                        </div>

                        {{-- <div class="form-group">
                            <label for="exampleInputPassword1">Image Name</label>
                              <select name="imgID" class="form-control input-sm m-bot15">
                                    <option value="0"></option>
                                    <option value="1">Ẩn</option>
                                    
                            </select>
                        </div> --}}
                       
                        <button type="submit" name="addPosts" class="btn btn-info">Thêm bài viết </button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection

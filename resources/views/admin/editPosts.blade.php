@extends('dashboard')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật bài viết vào cơ sở dữ liệu  
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">
                    @foreach($editPosts as $key-> $edit_value)

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/updatePosts')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Tên bài viết(title)</label>
                            <input type="text" value="{{ $edit_value -> title }}"  class="form-control"  onkeyup="ChangeToSlug();" name="title"  id="title" placeholder="Tên Bài viết " >
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
                            @csrf
                        
                            <label for="categoryID">Thể loại(categoryID)</label>
                            <select class="form-control" name="categoryID">
                                @foreach($allCategories as $key =>$category)
                                {{-- @foreach($managePosts as $key =>$post) --}}
                                 <option value="{{ $category->categoryID }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="categoryID" class="form-control" id="categoryID" placeholder="Tác Giả"> --}}
                        </div>
                        <div class="form-group">
                            <label for="imgID">Image </label>
                            <input type="text" name="imgID" class="form-control" id="tag" placeholder="Image Name">
                        </div>
                        
                       
                        <button type="submit" name="updatePosts" class="btn btn-info">cập nhật bài viết </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>
</div>    
@endsection

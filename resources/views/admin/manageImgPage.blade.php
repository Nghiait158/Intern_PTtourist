@extends('dashboard')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Quản lí hình ảnh, Video Background Page
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                        ?>
      @if (session('success'))
          <p style="color: green;">{{ session('success') }}</p>
      @endif
  
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              
            </th>
            {{-- <th></th> --}}
            <th>Mô tả hình ảnh/Video</th>
            <th>Đường dẫn</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($managerImgPage as $key =>$imgPage)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="imgPage[]"><i></i></label></td>
            <td>{{ $imgPage -> description }}</td>
            <td><span class="text-ellipsis">{{ $imgPage -> imgPath }}</span></td>
            <td>
              {{-- <a href="{{ URL::to('/editPosts/'.$post->postID) }}" class="active styling-edit" ui-toggle-class=""> --}}
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              {{-- <a onclick="return confirm('Bạn có chắc là muốn xóa bài viết này ko?')" href="{{ URL::to('/deletePosts/'.$post->postID) }}" class="active styling-edit" ui-toggle-class=""> --}}
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>


    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
             {{-- {!!$all_category_product->links()!!} --}}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
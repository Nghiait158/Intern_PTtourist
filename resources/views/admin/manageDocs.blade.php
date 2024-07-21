@extends('dashboard')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê tài liệu
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          {{-- <form action="{{ URL::to('/searchPosts') }}" method="GET">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="submit">Go!</button>
            </span>
          </form> --}}
        </div>
      </div>
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            {{-- <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th> --}}
             
            <th>ID tài liệu </th>
            <th>Tên tài liệu </th>
            <th>Ngày cập nhật mới nhất </th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($allDoc as $key =>$doc)
          <tr>
            {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
            <td>{{ $doc -> docID }}</td>
            <td><span class="text-ellipsis">{{ $doc -> title }}</span></td>
            <td><span class="text-ellipsis">{{ $doc -> updated_at }}</span></td>

            <td>
              <a href="{{ URL::to('/editDoc/'.$doc->docID) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa bài viết này ko?')" href="{{ URL::to('/deleteDoc/'.$doc->docID) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>


    </div>

  </div>
</div>
@endsection
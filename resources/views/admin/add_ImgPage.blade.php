@extends('dashboard')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Thay đổi Video Background
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                        ?>
      {{-- <h1>Thay đổi Video Background</h1> --}}

      @if (session('success'))
          <p style="color: green;">{{ session('success') }}</p>
      @endif
  
      <form action="{{ URL::to('/saveImgPage') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="video">Chọn video mới:</label>
          <div class="form-group">
            <label for="description">Mô tả(description)</label>
            <input type="text" class="form-control" name="description"  id="description" placeholder="Mô tả" >
          </div>
          <input type="file" name="imgPath" id="imgPath" accept="video/mp4" required> 
          
          <button type="submit">Upload Video</button>
      </form>
  
    

    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
     
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
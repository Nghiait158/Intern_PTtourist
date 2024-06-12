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
      <h1>Thay đổi Video Background</h1>

      @if (session('success'))
          <p style="color: green;">{{ session('success') }}</p>
      @endif
  
      <form action="{{ URL::to('/uploadVideo') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="video">Chọn video mới:</label>
          <input type="file" name="video" accept="video/mp4" required>
          <button type="submit">Upload Video</button>
      </form>
  
      @if ($video)
          <h2>Video hiện tại:</h2>
          <video width="320" height="240" controls>
              <source src="{{ Storage::url($video->imgPath) }}" type="video/mp4">
              Trình duyệt của bạn không hỗ trợ video tag.
          </video>
      @endif
      <!-----import data---->
      {{-- <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
          @csrf
          
        <input type="file" name="file" accept=".xlsx"><br>

       <input type="submit" value="Import file Excel" name="import_csv" class="btn btn-warning">
      </form> --}}

    <!-----export data---->
       {{-- <form action="{{url('export-csv')}}" method="POST">
          @csrf
       <input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success">
      </form> --}}


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
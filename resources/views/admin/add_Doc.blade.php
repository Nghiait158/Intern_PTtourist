@extends('dashboard')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm tài liệu vào cơ sở dữ liệu  
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
                        <form action="{{ URL::to('/saveDoc') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Tên tài liệu(title)</label>
                            <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="title"  id="title" placeholder="Tên tài liệu" >
                        </div>
                            <label>File:</label>
                            <input type="file" id="file_path" name="file_path" required>
                        <br>
                        <button type="submit">Thêm tài liệu </button>
                        </form>
                    
                    
                    {{-- <form action="{{ URL::to('/saveDoc') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Tên tài liệu(title)</label>
                            <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="title"  id="title" placeholder="Tên tài liệu" >
                        </div>
                            <input type="file" id="file_path" name="file_path" required>
                        
                        <button type="submit">Upload Video</button>
                    </form> --}}
                </div>
                </div>
            </section>
</div>    
@endsection

@extends('dashboard')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật tài liệu vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/updateDoc/'.$editDoc-> docID)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Tên tài liệu(title)</label>
                                <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="title"  id="title" placeholder="Tên tài liệu " >
                            </div>
                                <label>File:</label>
                                <input type="file" id="file_path" name="file_path" required>
                            <br>
                            <button type="submit">Cập nhật tài liệu </button>                     
                        </form>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </section>
</div>    
@endsection

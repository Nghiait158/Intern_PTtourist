@extends('dashboard')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thể loại vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveCategories')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Tên thể loại(name)</label>
                            <input type="text"  class="form-control" name="name"  id="name" placeholder="Tên thể loại" >
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả(description)</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Mô tả">
                        </div>



                        <button type="submit" name="addPosts" class="btn btn-info">Thêm thể loại </button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection

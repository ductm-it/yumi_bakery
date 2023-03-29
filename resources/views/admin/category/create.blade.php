@extends('layouts.master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm Mới Danh Mục Sản Phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Create</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body no-padding">

                            <form role="form" action="" method="POST">
                                @csrf
                                <div class="col-md-8">
                                    <div class="form-group {{ $errors->first('c_name') ? ' has-error' : '' }}">
                                        <label for="name">Name<span class="text-danger">(*)</span></label>
                                        <input type="text" class="form-control" name="c_name" placeholder="Name...">
                                        @if ($errors->first('c_name'))
                                            <span class="text-danger">{{ $errors->first('c_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-12">
                                    <div class="box-footer text-center">
                                        <a href=" {{ route('admin.category.index')}} " class="btn btn-danger">Quay Lại <i class="fa fa-undo"></i></a>
                                        <button type="submit" class="btn btn-success" onclick="succes_toastr()" id="add">Submit <i class="fa fa-save"></i></button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
    </section>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/toastr.min.css">
<script src="js/toastr.min.js"></script>
<link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script>

<script>

    // function succes_toastr(){
    //     toastr_success('Succes messege');
    // }

    $(document).ready(function(){
        $("#add").click(function(){
            toastr.info('If all three of these are referenced correctly, then this should toast should pop-up.');
      });

    });


</script>

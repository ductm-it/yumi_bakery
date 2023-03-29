@extends('layouts.master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập Nhật Từ Khóa
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Keyword</a></li>
            <li class="active">Update</li>
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
                                    <div class="form-group {{ $errors->first('k_name') ? ' has-error' : '' }}">
                                        <label for="name">Name<span class="text-danger">(*)</span></label>
                                        <input type="text" class="form-control" value="{{ $keyword-> k_name}}" name="k_name" placeholder="Name...">
                                        @if ($errors->first('k_name'))
                                            <span class="text-danger">{{ $errors->first('k_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group {{ $errors->first('k_name') ? ' has-error' : '' }}">
                                        <label for="name">Description</label>
                                        <textarea class="form-control" name="k_description" placeholder="Description..." rows="3">{{ $keyword-> k_description }}</textarea>
                                        @if ($errors->first('k_description'))
                                            <span class="text-danger">{{ $errors->first('k_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box-footer text-center" style="margin-top:20px">
                                        <a href=" {{ route('admin.keyword.index')}} " class="btn btn-danger">Quay Lại <i class="fa fa-undo"></i></a>
                                        <button type="submit" class="btn btn-success">Submit <i class="fa fa-save"></i></button>

                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
    </section>
</div>
@endsection

@extends('layouts.master_admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản Lý Product
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('admin.product.index') }}">Product</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><a href=" {{ route('admin.product.create')}} " class="btn btn-primary">Add New <i class="fa fa-plus"></i></a></h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body no-padding">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th style="width: 10px">STT</th>
                                        <th>Name</th>
                                        <th>Avatar</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Hot</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @if(isset($products))
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->pro_name }}</td>
                                            <td>
                                                <img src="{{ pare_url_file($product -> pro_avatar) }}" style="width:80px">
                                            </td>
                                            <td>{{ number_format($product->pro_price , 0, '', '.') }} VND</td>
                                            <td>{{ $product->pro_description }}</td>
                                            <td>
                                                @if($product-> pro_hot == 1)
                                                    <a href="{{ route('admin.product.hot', $product -> id)}}" class = "label label-info">Hot</a>
                                                @else
                                                    <a href="{{ route('admin.product.hot', $product -> id)}}" class = "label label-default">None</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if($product-> pro_active == 1)
                                                    <a href="{{ route('admin.product.active', $product -> id)}}" class = "label label-info">Active</a>
                                                @else
                                                    <a href="{{ route('admin.product.active', $product -> id)}}" class = "label label-default">Hide</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.product.update', $product -> id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a>
                                                <a href="{{ route('admin.product.delete', $product -> id) }}" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $products->links(); }}
                    </div>
                </div>
        </div>
    </section>
@endsection

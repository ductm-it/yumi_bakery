@extends('layouts.master_admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản Lý User
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('admin.user.index') }}">User</a></li>
            <li class="active">List</li>
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
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th style="width: 10px">STT</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        {{-- <th>Phone</th> --}}
                                        <th>Action</th>
                                    </tr>
                                    @if(isset($users))
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            {{-- <td>{{ $user->phone }}</td> --}}
                                            <td>
                                                <a href="{{ route('admin.user.update', $user -> id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a>
                                                <a href="{{ route('admin.user.delete', $user -> id) }}" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        {{ $products->links(); }}
                    </div> --}}
                </div>
        </div>
    </section>
@endsection

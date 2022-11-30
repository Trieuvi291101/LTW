@extends('layout')
@section('content')

<link rel="stylesheet"  type="text/css" href="css/product.css">
<div class="container" style="justify-content: center; align-items: center;">
            
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 70px; margin-top: 30px">
@if( $errors-> any())
    <div class="elert elert-danger">
        <ul>
            @foreach($errors-> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Mã NV</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">Ngày tạo</th>
                    <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $user as $u)
                        <tr>
                            <th scope="row">NV{{$u->id}}</th>
                            <td> {{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->gender_id}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->birthday}}</td>
                            <td>{{$u->user_role}}</td>
                            <td>{{$u->created_at}}</td>
                            <td>
                                <div class="dropdown notification-list">
                                    <a  class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                                        <span class="pro-user-name ml-1" >
                                            <i class="material-icons" style="color: lightgray">settings</i>
                                        </span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a href="#" class="dropdown-item notify-item">
                                            
                                            <span class="badge ">Sửa</span>
                                        </a>
                                        <a href="#" class="dropdown-item notify-item">
                                            
                                            <span class="badge">Xóa</span>
                                        </a>
                                    </div>           
                                </div>        
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
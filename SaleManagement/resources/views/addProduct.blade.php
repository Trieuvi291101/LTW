
@extends('layout')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                                   
                            @if( $errors-> any())
                                <div class="elert elert-danger">
                                    <ul>
                                        @foreach($errors-> all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h4 >Thêm sản phẩm</h4>
                            <form method ="POST" action ="{{route('insert')}}" enctype="multipart/form-data" class="form-horizontal">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Tên sản phẩm</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="price">Giá</label>
                                    <div class="col-lg-8">
                                    <input type="number" name="price" id="price" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Số lượng</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="num" id="num" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="manufacturer">Nhà cung cấp</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="manufacturer" id="manufacturer" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="example-textarea">Mô tả</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" name="description" id="description" rows="5" placeholder="Tối đa 255 ký tự"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Loại sản phẩm</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="categoryId" id="categoryId">
                                            @foreach($category as $c)
                                                <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="fileUpload">Ảnh sản phẩm</label>
                                    <div class="col-lg-8">
                                        <input type="file" name="fileUpload" id="fileUpload" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button style="cursor: pointer; font-size: 14px" type="submit" class="float-right btn btn-success btn-rounded col-lg-2">Thêm sản phẩm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
             <!-- end row -->
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>Buttons example</b></h4>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
@stop
@extends('layout')
@section('content')
<link rel="stylesheet"  type="text/css" href="css/product.css">
<div class="container-fluid">
    <div class="userDetail">
        <label>Mã: {{auth()->user()->id}}</label> <br>
        <label>Tên: {{auth()->user()->name}}</label> <br>
        <br>
    </div>
</div>
@stop
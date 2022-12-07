@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="userDetail">
        <label>Mã: {{auth()->user()->id}}</label> <br>
        <label>Tên: {{auth()->user()->name}}</label> <br>
        <br>
    </div>
</div>
@stopsection
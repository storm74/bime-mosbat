@extends('layouts.admin')
@section('header-links')
    <link rel="stylesheet" href="{{asset('admin_assets/dist/css/dropzone.css')}}">
@endsection
@section('page-header')
    آپلود تصویر
@endsection
@section('main-content')
    {!! Form::open(['method'=>'PATCH','action'=>'AdminMediasController@store','class'=>'dropzone']) !!}
    {!! Form::close() !!}
@endsection
@section('footer-links')
    <script src="{{asset('admin_assets/js/dropzone.js')}}"></script>
@endsection
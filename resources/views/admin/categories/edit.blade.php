@extends('layouts.admin')
@section('header-links')
    <!-- DataTables CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection()
@section('page-header')
    ویرایش دسته بندی
@endsection()
@section('main-content')
<div class="row">
    {!! Form::open(['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id],'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name','عنوان دسته بندی') !!}
        {!! Form::text('name',$category->name,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('ویرایش',['name'=>'submit','class'=>'btn btb-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
    @endsection
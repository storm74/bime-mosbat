@extends('layouts.admin')
@section('page-header')
    افزودن مقاله جدید
@endsection()
@section('main-content')
    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files' => true]) !!}
    <div class="col-lg-8">
        <div class="form-group">
            {!! Form::label('title','عنوان') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','متن مقاله') !!}
            {!! Form::textarea('content',null,['class'=>'form-control','rows'=>'25']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('discription','توضیحات متا') !!}
            {!! Form::textarea('discription',null,['class'=>'form-control','rows'=>'7']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('افزودن',['name'=>'submit','class'=>'btn btn-primary']) !!}
        </div>

    </div>

    <div class="col-lg-4">
        @include('admin.includes.error_alert')

        <div class="form-group">
            {!! Form::label('photo_id','تصویر شاخص') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id',' دسته بندی') !!}
            {!! Form::select('category_id',$all_cat, null, ['placeholder' => 'دسته بندی نوشته را انتخاب کنید','class'=>'form-control','style'=>'padding:3px 12px; font-size:85%']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status',' وضعیت') !!}
            {!! Form::select('status', [1 => 'منتشر شده',0 => 'پیش نویس'], null, ['placeholder'=>'انتشار دهیم یا پیش نویس بماند؟!','class'=>'form-control','style'=>'padding:3px 12px; font-size:85%']) !!}
        </div>
    </div>
    {!! Form::close() !!}
    @include('admin.includes.tinyeditor')

@endsection()
@extends('layouts.admin')
@section('page-header')
    ویرایش نوشته
@endsection()
@section('main-content')
    {!! Form::open(['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files' => true]) !!}
    <div class="col-lg-8">
        <div class="form-group">
            {!! Form::label('title','عنوان') !!}
            {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','متن مقاله') !!}
            {!! Form::textarea('content',$post->content,['class'=>'form-control','rows'=>'25','style'=>'direction:rtl']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('discription','توضیحات متا') !!}
            {!! Form::textarea('discription',$post->discription,['class'=>'form-control','rows'=>'7','direction'=>'rtl']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('به روزرسانی',['name'=>'submit','class'=>'btn btn-primary']) !!}
        </div>

    </div>

    <div class="col-lg-4">
        @include('admin.includes.error_alert')
        <div style="padding: 0 1px 11px 0;">

            @if($post->photo)
                <h3 class="green" style="margin-bottom: 20px; font-family: yekan">تصویر شاخص فعلی نوشته</h3>
                <img style="width: 100%" src="{{asset($post->photo->post_image())}}" alt="">
            @else
                <img style="width: 100%" src="{{asset('admin_assets/images/icons/profile_placeholder.png')}}" alt="">
                <p class="seondary-color">لطفا تصویری برای نوشته خود انتخاب نمایید</p>
            @endif
        </div>
        <hr class="green">
        <div class="form-group">
            {!! Form::label('photo_id','تصویر شاخص') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id',' دسته بندی') !!}
            {!! Form::select('category_id',$all_cat, $post->category ? $post->category_id : '', ['placeholder' => 'دسته بندی نوشته را انتخاب کنید','class'=>'form-control','style'=>'padding:3px 12px; font-size:85%']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status',' وضعیت') !!}
            {!! Form::select('status', [1 => 'منتشر شده',0 => 'پیش نویس'], $post->status, ['class'=>'form-control','style'=>'padding:3px 12px; font-size:85%']) !!}
        </div>
    </div>
    {!! Form::close() !!}
    @include('admin.includes.tinyeditor')

@endsection()
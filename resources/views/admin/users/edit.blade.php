@extends('layouts.admin')
@section('page-header')
ویرایش کاربر
@endsection()
@section('main-content')
    <div class="col-lg-3">
        <div style="padding: 0 1px 11px 0;">
            <h3 class="green">{{$user->name}}</h3>
        @if($user->photo)
                <img style="width: 100%" src="{{asset($user->photo->path)}}" alt="">
            @else
                <img style="width: 100%" src="{{asset('admin_assets/images/icons/profile_placeholder.png')}}" alt="">
                <p class="seondary-color">لطفا تصویری برای پروفایل خود انتخاب نمایید</p>
        @endif
        </div>
        <hr class="green">
        @include('admin.includes.error_alert')
    </div>
    <div class="col-lg-9" style="margin-top: 3rem">
        {!! Form::open(['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files' => true]) !!}
            <div class="form-group">
            {!! Form::label('name','نام و نام خانوادگی') !!}
            {!! Form::text('name',$user->name ,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name','انتخاب تصویر پروفایل') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role',' سطح کاربری') !!}
            {!! Form::select('role', [1 => 'مدیر کل',2 => 'ویرایشگر',3 => 'نویسنده',4 => 'مشارکت کننده',5 => 'مشترک',], $user->role->id, ['placeholder' => 'سطح کاربری را انتخاب نمایید','class'=>'form-control','style'=>'padding:3px 12px; font-size:85%']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active',' وضعیت') !!}
            {!! Form::select('is_active', [1 => 'فعال',0 => 'غیرفعال'], $user->is_active, ['class'=>'form-control','style'=>'padding:3px 12px; font-size:85%']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','آدرس پست الکترونیک ( نام کاربری )') !!}
            {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','رمز عبور') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('ویرایش',['name'=>'submit','class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection
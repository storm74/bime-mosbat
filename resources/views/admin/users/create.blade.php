@extends('layouts.admin')
@section('page-header')
    افزودن کابر جدید
@endsection()
@section('main-content')
    <div class="col-lg-8">
       {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files' => true]) !!}
           <div class="form-group">
               {!! Form::label('name','نام و نام خانوادگی') !!}
               {!! Form::text('name',null,['class'=>'form-control']) !!}
           </div>
        <div class="form-group">
            {!! Form::label('photo_id','تصویر پروفایل') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
            <div class="form-group">
                    {!! Form::label('role',' سطح کاربری') !!}
                    {!! Form::select('role', [1 => 'مدیر کل',2 => 'ویرایشگر',3 => 'نویسنده',4 => 'مشارکت کننده',5 => 'مشترک',], null, ['placeholder' => 'سطح کاربری را انتخاب نمایید','class'=>'form-control','style'=>'padding:3px 12px; font-size:85%']) !!}
                </div>
        <div class="form-group">
            {!! Form::label('is_active',' وضعیت') !!}
            {!! Form::select('is_active', [1 => 'فعال',0 => 'غیرفعال'], 0, ['class'=>'form-control','style'=>'padding:3px 12px; font-size:85%']) !!}
        </div>
            <div class="form-group">
                    {!! Form::label('email','آدرس پست الکترونیک ( نام کاربری )') !!}
                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                </div>
            <div class="form-group">
                    {!! Form::label('password','رمز عبور') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                   <div class="form-group">
                       {!! Form::submit('افزودن',['name'=>'submit','class'=>'btn btn-primary']) !!}
                   </div>

           {!! Form::close() !!}
    </div>
    <div class="col-lg-4">
@include('admin.includes.error_alert')
    </div>

@endsection()
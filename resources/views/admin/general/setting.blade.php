@extends('layouts.admin')
@section('header-links')
@endsection()
@section('page-header')
    تنظیمات عمومی وبسایت
@endsection
@section('main-content')

    {!! Form::open(['method'=>'post', 'action'=>'AdminGeneralController@setting','class'=>'form','id'=>'setting-form']) !!}
    <div class="form-group">
        {!! Form::label('title','عنوان اصلی سایت',['class'=>'form-input']) !!}
        {!! Form::text('title',$data!=false ? $data->title : null,['class'=>'form-control','placeholder'=>'']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('meta_description_1','توضیحات متای سایت',['class'=>'form-input']) !!}
        {!! Form::text('meta_description_1',$data!=false ? $data->meta_description_1 : null,['class'=>'form-control','placeholder'=>'']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('meta_description_2','توضیحات سامانه',['class'=>'form-input']) !!}
        {!! Form::text('meta_description_2',$data!=false ? $data->meta_description_2 : null,['class'=>'form-control','placeholder'=>'']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address','آدرس شرکت',['class'=>'']) !!}
        {!! Form::textarea('address',$data!=false ? $data->address : null,['class'=>'form-control','placeholder'=>'']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('call_1','شماره تماس :',['class'=>'']) !!}
        {!! Form::text('call_1',$data!=false ? $data->call_1 : null,['class'=>'form-control','placeholder'=>'','dir'=>'ltr']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('call_2','شماره تماس :',['class'=>'']) !!}
        {!! Form::text('call_2',$data!=false ? $data->call_2 : null,['class'=>'form-control','placeholder'=>'','dir'=>'ltr']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email_1','آدرس ایمیل(شماره 1) :',['class'=>'']) !!}
        {!! Form::email('email_1',$data!=false ? $data->email_1 : null,['class'=>'form-control','placeholder'=>'youremail@gmail.com','dir'=>'ltr']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email_2','آدرس ایمیل(شماره 2) :',['class'=>'']) !!}
        {!! Form::email('email_2',$data!=false ? $data->email_2 : null,['class'=>'form-control','placeholder'=>'youremail@gmail.com','dir'=>'ltr']) !!}
    </div>
    <div class="form-group">
{{--        {!! Form::submit('ذخیره اطلاعات',['class'=>'btn btn-primary','style'=>'float:right','onclick'=>'saeed_ajax2("setting-form","result",null)']) !!}--}}
        {!! Form::submit('ذخیره اطلاعات',['class'=>'btn btn-primary','style'=>'float:right','id'=>'save']) !!}
        <div id="result" style="line-height: 32px;color: green;">

        </div>
        <script>
            var save = document.querySelector("#save");
            save.addEventListener('click',function (evt) {saeed_ajax("setting-form","result",null)},false);
        </script>
    </div>
    <style>
        #result{overflow-x: hidden}
    </style>
    {!! Form::close() !!}
@endsection()
@section('footer-links')
@endsection()
{{--@section('page-header')--}}
{{--@endsection()--}}
{{--@section('page-header')--}}
{{--@endsection()--}}
{{--@section('page-header')--}}
{{--@endsection()--}}
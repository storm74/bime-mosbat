@extends('layouts.admin')
@section('page-header')
   افزودن شرکت بیمه جدید
@endsection()
@section('main-content')
    {!! Form::open(['method'=>'POST','action'=>'AdminInsuranceController@store','files' => true]) !!}
    <div class="col-lg-8">
        <div class="form-group">
            {!! Form::label('name','نام شرکت') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('branches',' تعداد شعب پرداخت خسارت') !!}
            {!! Form::text('branches',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('satisfaction','سطح رضایت مشتریان شرکت ( نمره از 10 )') !!}
            {!! Form::text('satisfaction',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('time_to_ok','سرعت شرکت در پرداخت خسارت ( نمره از 10 )') !!}
            {!! Form::text('time_to_ok',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('افزودن',['name'=>'add_insurance','class'=>'btn btn-primary']) !!}
        </div>

    </div>

    <div class="col-lg-4">
        @include('admin.includes.error_alert')
        <div class="form-group">
            {!! Form::label('photo_id','لوگو شرکت') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

@endsection()
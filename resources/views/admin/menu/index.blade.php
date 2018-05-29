@extends('layouts.admin')
{{--@section('header-links')--}}
{{--@endsection()--}}
@section('page-header')
    ایجاد و ویرایش منو
@endsection
@section('main-content')
    {!! Menu::render() !!}
    @endsection
@section('footer-links')
    {!! Menu::scripts() !!}
@endsection()
@extends('layouts.blog')
@section('body')
    @include('includes.blog-single-page')
@endsection
@section('footer-style')
    <link rel="stylesheet" href="{{asset('front_assets/programmer_css/blog-home.css')}}">
@endsection
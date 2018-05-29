@extends('layouts.blog')
@section('sidebar')
    @include('includes.blog-sidebar')
@endsection
@section('body')
@include('includes.blog-category-posts-section')
@endsection
@section('footer-style')
    <link rel="stylesheet" href="{{asset('front_assets/programmer_css/blog-home.css')}}">
    @endsection
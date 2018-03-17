@extends('layouts.blog')
@section('body')
@include('includes.blog-home-posts-section')
@endsection
@section('footer-style')
    <link rel="stylesheet" href="{{asset('front_assets/programmer_css/blog-home.css')}}">
    @endsection
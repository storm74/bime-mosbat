@extends('layouts.insurance_result')
@section('sidebar')
    @include('includes.third-siebar-result')
@endsection
@section('body')

    <div id="third-result">
        @include('includes.third-single-body')
    </div>
@endsection

@section('footer-style')
    <script src="{{asset('admin_assets/js/ajax.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front_assets/programmer_css/result-page.css')}}">
@endsection
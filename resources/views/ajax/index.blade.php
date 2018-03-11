@extends('layouts.admin')
@section('header-links')

@endsection
@section('page-header')
تست فناوری ای جکس در لاراول
@endsection
@section('main-content')

    {!! Form::open(['method'=>'POST','action'=>'TestAjaxController@test','id'=>'form','name'=>'form-test']) !!}
        <div class="form-group">
            {!! Form::label('search','عنوان موضوع') !!}
            {!! Form::text('search',null,['id'=>'search','class'=>'form-control','placeholder'=>'متن خود را جستجو کنید...']) !!}
        </div>
                <div class="form-group">
                    {!! Form::submit('افزودن',['name'=>'submit','class'=>'btn btb-primary']) !!}
                </div>
        {!! Form::close() !!}
    <div>
        <h1 id="result">
        </h1>
    </div>
    <hr>

        <div id="hale" style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>سامانه اطلاع رسانی هوشمند : </strong>
            اوووو کارت درسته پسر
        </div>
@endsection
@section('footer-links')
    <script>
        $(document).ready(function () {
            $('#search').keyup(function () {
                var search =$('#search').val();
//                var url =$('#form').attr('action');
                $.ajax({
                    url:'./ajax/back',
                    data:{search:search, _token: '{{csrf_token()}}'},
                    type:'POST',
                    success:function (data) {
                        if (!data.error){
                            $('#result').html(data);
                        }
                    }
                });

            });
//            $('#form').submit(function (event) {
//                event.preventDefault();
//                var postData = $(this).serialize();
//                var url = $(this).attr('action');
//                $.post(url,postData, function (table_data) {
//                    $('#result').html(table_data);
////                    $('#car-company').val('');
////                    $('#car-model').val('');
//                });
//
//            });//add-car-form submit function
        })
    </script>
    @endsection

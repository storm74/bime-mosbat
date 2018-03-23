@extends('layouts.admin')
@section('header-links')

@endsection
@section('page-header')
   دیدگاه ها
@endsection
@section('main-content')

   @include('admin.includes.index_comments_table')
   {{--<div id="result">--}}

   {{--</div>--}}
   {{--{!! Form::open(['method'=>'POST','action'=>'PostCommentsController@indexTable','id'=>'test']) !!}--}}
   {{--{!! Form::close() !!}--}}
   {{--<script>--}}
       {{--updateComents('test');--}}
       {{--function updateComents(formId) {--}}
           {{--// $('#test').submit(function (event) {--}}
           {{--//     event.preventDefault();--}}
               {{--var url = $('#'+formId).attr('action');--}}
               {{--$.ajax({--}}
                   {{--url: url,--}}
                   {{--data:{_token: '{{csrf_token()}}'},--}}
                   {{--type:'POST',--}}
                   {{--success: function (show_comments) {--}}
                       {{--if(!show_comments.error){--}}
                           {{--$('#result').html(show_comments);--}}
                           {{--// data = show_comments;--}}
                           {{--// console.log(show_comments);--}}
                       {{--}--}}
                   {{--}--}}
               {{--});--}}
           {{--$.ajax.send();--}}
           {{--// });--}}
       {{--}//updateCars--}}
   {{--</script>--}}


@endsection
@section('footer-links')
    <script src="{{asset('admin_assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true,
                select: {
                    style: 'single'
                }
            });
        });
    </script>
@endsection
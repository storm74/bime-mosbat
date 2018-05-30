@extends('layouts.admin')
@section('header-links')
    <!-- DataTables CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
    <style>
        th {
            padding: 5px 5px 7px 5px !important;
        }
    </style>
@endsection()
@section('page-header')
    ویرایش دسته بندی

@endsection
@section('main-content')
    <div class="row">
        <div class="col-lg-6">
            <h5 class="mb-4">
                <i class="fa fa-hand-o-left orange hover_black"></i> <a class="orange hover_black" href="{{route('personal-car-list')}}">بازگشت به صفحه لیست خودروهای شخصی</a>
            </h5>
            {!! Form::open(['target'=>'_blank','id'=>'update-car-category-form','method'=>'POST','action'=>'AdminInsuranseController@personalCarCategoryUpdate']) !!}
            <input type="hidden" name="id" value="{{$car_category->id}}">
            <div class="form-group">
                <lable >عنوان دسته خودرو را تغیر دهید :  </lable>
                <input value="{{$car_category->family}}" id="edit-category-input" style="margin-top: 1rem;" type="text" class="form-control" name="family" placeholder="به عنوان مثال عنوان پژوه دسته خوبی برای 206 و سمند می باشد">
            </div>
            {!! Form::submit('ویرایش',['name'=>'update-car-category','class'=>'btn btn-primary','style'=>'float:right','id'=>'update-car-category']) !!}
            <div id="result" style="line-height: 32px;color: green; overflow-x: hidden">
            </div>
            <script>
                var saveBadane = document.querySelector("#update-car-category");
                saveBadane.addEventListener('click', function (evt) {
                    saeed_ajax("update-car-category-form", "result", null)
                }, false);
            </script>
            {!! Form::close() !!}
        </div>
        {{--./car-add--}}
    </div>
    {{--./row--}}
@endsection
@section('footer-links')
    <script>
        $(document).ready(function() {
            $('#dataTables-example1').DataTable({
                responsive: true,
                select: {
                    style: 'single'
                }
            });
        });
        $(document).ready(function() {
            $('#dataTables-example2').DataTable({
                responsive: true,
                select: {
                    style: 'single'
                }
            });
        });
    </script>
    <script src="{{asset('admin_assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
@endsection
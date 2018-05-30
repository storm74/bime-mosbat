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
    ویرایش خودرو شخصی
    {{$car->carFamily ? $car->carFamily->family : 'از نوع دسته بندی نشده'}}
    {{$car->name}}
@endsection
@section('main-content')
    <div class="row">
        <div class="col-lg-6">
            <h5 class="mb-4">
                   <i class="fa fa-hand-o-left orange hover_black"></i> <a class="orange hover_black" href="{{route('personal-car-list')}}">بازگشت به صفحه لیست خودروهای شخصی</a>
            </h5>
            {!! Form::open(['target'=>'_blank','id'=>'car-update','method'=>'POST','action'=>'AdminInsuranseController@personalCarUpdate']) !!}
            <input type="hidden" name="id" value="{{$car->id}}">
            <div class="form-group">
                <lable >مدل خودروی مورد نظر را وارد نمایید :  </lable>
                <input value="{{$car->name}}" id="add-car-input" style="margin-top: 1rem;" type="text" class="form-control" name="name" placeholder="دقت داشته باشید که ابتدا بایستی دسته بندی خودرو را وارد کرده باشید">
            </div>
            <div class="form-group">
                <lable >این خودرو در کدام دسته بندی قرار می گیرد :  </lable>
                <select required name="car_category_id" id="">
                    @foreach($car_category as $family)
                        <option {{$car->carFamily == $family ? "selected":""}} value="{{$family->id}}">{{$family->family}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <lable >مشخصات خودرو موردنیاز جهت محاسبه حق بیمه :  </lable>
                <select style="margin-top: 1rem; padding: 0px 6px 0 0;" name="detail" id="" class="form-control">
                    <option value="lfs">کمتر از چهارسیلندر</option>
                    <option value="gfs">بیشتر از چهارسیلندر</option>
                    <option value="ofs">سایر چهارسیلند ها</option>
                    <option value="pps">پیکان، پراید و سمند</option>
                </select>
            </div>
            {!! Form::submit('ویرایش',['name'=>'car_update','class'=>'btn btn-primary','style'=>'float:right','id'=>'update-car']) !!}
            <div id="result" style="line-height: 32px;color: green; overflow-x: hidden">

            </div>
            <script>
                var saveBadane = document.querySelector("#update-car");
                saveBadane.addEventListener('click', function (evt) {
                    saeed_ajax("car-update", "result", null)
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
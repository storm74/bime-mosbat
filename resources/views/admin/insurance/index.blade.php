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
    لیست بیمه ها
@endsection
@section('main-content')
    <div style="margin-top: 20px" class="panel panel-default">
        <div class="panel-heading">
            نمایش لیست بیمه های شرکت
        </div>
        <!-- /.panel-heading -->
        @if(Session::has('deleted_insurance'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('deleted_insurance')}}
            </div>
        @endif
        @if(Session::has('added_insurance'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('added_insurance')}}
            </div>
        @endif
        @if(Session::has('updated_insurance'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('updated_insurance')}}
            </div>
        @endif
        <p class="sucsess"></p>
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th><input type="checkbox"></th></th>
                    <th>  آیدی</th>
                    <th>لوگوی شرکت</th>
                    <th>نویسنده</th>
                    <th>  نام شرکت بیمه</th>
                    <th>رضایت</th>
                    <th>شعب پرداخت</th>
                    <th>زمان پرداخت</th>
                    <th>تاریخ افزودن</th>
                    <th>تاریخ ویرایش</th>
                    <th> ویرایش</th>
                    <th>  حذف</th>
                </tr>
                </thead>
                <tbody class="fa_number">
                @if($insurances)
					<?php $i=1; ?>
                    @foreach($insurances as $insurance)
                        @if($i % 2 == 0)
							<?php $table_class="even gradeC" ?>
                        @else
							<?php $table_class="odd gradeX" ?>
                        @endif

                        <tr class={{$table_class}}>
                            <td><input type="checkbox"></td>
                            <td>{{$insurance->id}}</td>
                            <td class="center">
                                @if($insurance->photo)
                                    <img src="{{asset($insurance->photo->insurance_image())}}" alt="">
                                @else
                                    <h5>عکسی موجود نیست</h5>
                                @endif
                            </td>
                            <td class="center">{{$insurance->user->name}}</td>
                            {{--<td class="center">نویسنده</td>--}}
                            <td>{{$insurance->name}}</td>
                            <td>{{$insurance->satisfactory ? $insurance->satisfactory : 'اطلاعات موجود نیست'}}</td>
                            <td>{{$insurance->branches ? $insurance->branches : 'اطلاعات موجود نیست'}}</td>
                            <td>{{$insurance->time_to_ok ? $insurance->time_to_ok : 'اطلاعات موجود نیست'}}</td>
                            <?php
                            $created_at = $insurance->created_at;
                            $updated_at = $insurance->updated_at;
                            $date_create = jDate::forge($created_at)->format('%d %B %Y');
                            $date_update =jDate::forge($updated_at)->ago();
                            ?>
                            <td class="center">{{$date_create}}</td>
                            <td class="center">{{$date_update}}</td>
                            <td class="center"><a href="{{route('insurance.edit',['id'=>$insurance->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>


                            {!! Form::open(['method'=>'DELETE','action'=>['AdminInsuranceController@destroy','id'=>$insurance->id]]) !!}
                            <td class="center">
                                {!! Form::button("<i class='fa fa-trash red fa-2x' aria-hidden='true'></i>",['type'=>'submit','aria-hidden'=>"true",'data-toggle'=>'modal','data-target'=>'#delete','style'=>'background: none;border: none;']) !!}
                            </td>


                            {{--<td class="center"><a href="{{route('users.destroy',['id'=>$post->id])}}"><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></a></td>--}}
                            {!! Form::close() !!}






                        </tr>
						<?php $i = $i +1; ?>
                    @endforeach
                @endif
                </tbody>
            </table>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
@endsection()
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
@endsection()
{{--@section('page-header')--}}
{{--@endsection()--}}
{{--@section('page-header')--}}
{{--@endsection()--}}
{{--@section('page-header')--}}
{{--@endsection()--}}
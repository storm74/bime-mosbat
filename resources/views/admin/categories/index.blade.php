@extends('layouts.admin')
@section('header-links')
    <!-- DataTables CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection()
@section('page-header')
    دسته بندی ها
@endsection()
@section('main-content')
    <div style="margin-top: 20px; overflow: auto;" class="panel panel-default">
        <div class="panel-heading">
            نمایش دسته بندی نوشته های سایت
        </div>
        <!-- /.panel-heading -->
        @if(Session::has('deleted_category'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('deleted_category')}}
            </div>
        @endif
        @if(Session::has('added_category'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('added_category')}}
            </div>
        @endif
        @if(Session::has('updated_category'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('updated_category')}}
            </div>
        @endif
        <p class="sucsess"></p>
        <div class="col-lg-4" style="margin-top: 15px">
            <h2 class="green" style="font-size: 120%; font-family: yekan">افزودن دسته بندی</h2>
            <hr>
            <div style="padding-right: 10px" class="row">
    {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store','files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name','عنوان دسته بندی') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('افزودن',['name'=>'submit','class'=>'btn btb-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>

        </div>
        <div class="col-lg-8">
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th><input type="checkbox"></th></th>
                        <th>  آیدی</th>
                        <th>  عنوان</th>
                        <th>  تاریخ ایجاد </th>
                        <th>  تاریخ ویرایش </th>
                        <th> ویرایش</th>
                        <th>  حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($categories)
				        <?php $i=1; ?>
                        @foreach($categories as $categor)
                            @if($i % 2 == 0)
						        <?php $table_class="even gradeC" ?>
                            @else
						        <?php $table_class="odd gradeX" ?>
                            @endif

                            <tr class={{$table_class}}>
                                <td><input type="checkbox"></td>
                                <td>{{$categor->id}}</td>
                                <td class="center">{{$categor->name}}</td>
                                <?php
                                $created_at = $categor->created_at;
                                $updated_at = $categor->updated_at;
                                $date_create = jDate::forge($created_at)->format('%d %B %Y');
                                $date_update =jDate::forge($updated_at)->ago();
                                ?>
                                <td class="center fa_number">{{$date_create}}</td>
                                <td class="center fa_number">{{$date_update}}</td>
                                <td class="center"><a href="{{route('categories.edit',['id'=>$categor->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>


                                {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy','id'=>$categor->id]]) !!}

                                <td class="center">
                                    {!! Form::button("<i class='fa fa-trash red fa-2x' aria-hidden='true'></i>",['type'=>'submit','style'=>'background: none;border: none;']) !!}
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

    </div>
    <!-- /.panel -->
    </div>
    <!-- /.panel-default -->
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
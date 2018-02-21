@extends('layouts.admin')
@section('header-links')
    <!-- DataTables CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection()
@section('page-header')
     کاربران
@endsection()
@section('main-content')
    <div style="margin-top: 20px" class="panel panel-default">
        <div class="panel-heading">
            نمایش کاربران سایت
        </div>
        <!-- /.panel-heading -->
        @if(Session::has('deleted_user'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('deleted_user')}}
            </div>
            @endif
        @if(Session::has('added_user'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('added_user')}}
            </div>
        @endif
        @if(Session::has('updated_user'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('updated_user')}}
            </div>
        @endif
        <p class="sucsess"></p>
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th><input type="checkbox"></th></th>
                    <th>  آیدی</th>
                    <th>  نام و نام خانوادگی</th>
                    <th>  نام کاربری</th>
                    <th>  تصویر پروفایل</th>
                    <th>  تاریخ ثبت نام </th>
                    <th>  سطح کابری </th>
                    <th>  وضعیت </th>
                    <th> ویرایش</th>
                    <th>  حذف</th>
                </tr>
                </thead>
                <tbody>
                @if($users)
                    <?php $i=1; ?>
                    @foreach($users as $user)
                        @if($i % 2 == 0)
                            <?php $table_class="even gradeC" ?>
                            @else
	                        <?php $table_class="odd gradeX" ?>
                        @endif

                <tr class={{$table_class}}>
                    <td><input type="checkbox"></td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td class="center">{{$user->email}}</td>
                    <td class="center">
                    @if($user->photo)
                            <img src="{{asset($user->photo->user_image())}}" alt="">
                        @else
                        <h5>عکسی موجود نیست</h5>
                        @endif
                    </td>

                    <td class="center" style="direction: ltr">{{$user->created_at->diffForHumans()}}</td>
                    <td class="center">{{$user->role->name}}</td>
                    @if($user->is_active ==1)
                        <td class="center green">فعال</td>
                    @else
                        <td class="center red">غیر فعال</td>
                     @endif
                    <td class="center"><a href="{{route('users.edit',['id'=>$user->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>




                        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy','id'=>$user->id]]) !!}

                    <td class="center">
                        {!! Form::button("<i class='fa fa-trash red fa-2x' aria-hidden='true'></i>",['type'=>'submit','style'=>'background: none;border: none;']) !!}
                    </td>

                    {{--<td class="center"><a href="{{route('users.destroy',['id'=>$user->id])}}"><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></a></td>--}}
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
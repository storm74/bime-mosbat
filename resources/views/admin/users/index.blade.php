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
                            <img src="{{asset($user->photo->path)}}" alt="">
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
                    <td class="center"><a href="{{route('users.destroy',['id'=>$user->id])}}"><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></a></td>
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
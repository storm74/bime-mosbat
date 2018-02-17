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
                    @foreach($users as $user)
                <tr class="odd gradeX">
                    <td><input type="checkbox"></td>
                    <td>$user->id</td>
                    <td>مطلب تست 1</td>
                    <td class="center"><img src="{{asset('admin_assets/images/profiles/1.jpg')}}" alt=""></td>
                    <td class="center">96/12/2</td>
                    <td class="center">مدیر کل</td>
                    <td class="center green">فعال</td>
                    <td class="center"><a href=""><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>
                    <td class="center"><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></td>
                </tr>
                @endforeach
                @endif
                <tr class="even gradeC">
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td>مطلب باحال</td>
                    <td class="center"><img src="{{asset('admin_assets/images/profiles/2.jpg')}}" alt=""></td>
                    <td class="center">96/12/10</td>
                    <td class="center">مدیر کل</td>
                    <td class="center green">فعال</td>
                    <td class="center"><a href=""><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>
                    <td class="center"><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></td>
                </tr>
                <tr class="odd gradeX">
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td>مطلب تست 1</td>
                    <td class="center"><img src="{{asset('admin_assets/images/profiles/1.jpg')}}" alt=""></td>
                    <td class="center">96/12/2</td>
                    <td class="center">مدیر کل</td>
                    <td class="center red">غیر فعال</td>
                    <td class="center"><a href=""><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>
                    <td class="center"><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></td>
                </tr>
                <tr class="even gradeC">
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td>مطلب تست 2</td>
                    <td class="center"><img src="{{asset('admin_assets/images/profiles/2.jpg')}}" alt=""></td>
                    <td class="center">96/12/10</td>
                    <td class="center">مدیر کل</td>
                    <td class="center green">فعال</td>
                    <td class="center"><a href=""><a href=""><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></a></td>
                    <td class="center"><a href=""><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></a></td>
                </tr>
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
@endsection()
{{--@section('page-header')--}}
{{--@endsection()--}}
{{--@section('page-header')--}}
{{--@endsection()--}}
{{--@section('page-header')--}}
{{--@endsection()--}}
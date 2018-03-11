@extends('layouts.admin')
@section('page-header')
   {{Auth::user()->name." "."به پنل کاربری شاتل وب خوش آمدی"}}
@endsection
@section('main-content')
    <div style="margin-top: 20px" class="panel panel-default">
        <div class="panel-heading">
            خلاصه ای از رویداد های وبسایت
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            @include('admin.includes.shomarande')
            @include('admin.includes.index_insurance_table')
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

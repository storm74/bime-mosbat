@extends('layouts.admin')
@section('header-links')

@endsection
@section('page-header')
    دیدگاه های نوشته
    " {{$title}} "
@endsection
@section('main-content')

    @include('admin.includes.show_comments_table_post')

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
@extends('layouts.admin')
@section('header-links')
    <!-- DataTables CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    مقالات
@endsection
@section('main-content')
    <div style="margin-top: 20px" class="panel panel-default">
        <div class="panel-heading">
            نمایش مقالات و نوشته های سایت
        </div>
        <!-- /.panel-heading -->
        @if(Session::has('deleted_post'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('deleted_post')}}
            </div>
        @endif
        @if(Session::has('added_post'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('added_post')}}
            </div>
        @endif
        @if(Session::has('updated_post'))
            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                {{session('updated_post')}}
            </div>
        @endif
        <p class="sucsess"></p>
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>  آیدی</th>
                    <th>  نویسنده</th>
                    <th>عنوان مقاله</th>
                    <th>دسته بندی</th>
                    <th>  تصویر شاخص</th>
                    <th>  تاریخ ثبت نام </th>
                    <th>  تاریخ ویرایش </th>
                    <th>  وضعیت </th>
                    <th>  دیدگاه ها </th>
                    <th> ویرایش</th>
                    <th>  حذف</th>
                </tr>
                </thead>
                <tbody class="fa_number">
                @if($posts)
					<?php $i=1; ?>
                    @foreach($posts as $post)
                        @if($i % 2 == 0)
							<?php $table_class="even gradeC" ?>
                        @else
							<?php $table_class="odd gradeX" ?>
                        @endif

                        <tr class={{$table_class}}>
                            <td><input type="checkbox"></td>
                            <td>{{$post->id}}</td>
                            <td class="center">{{$post->user->name}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->category ? $post->category->name : 'دسته بندی نشده'}}</td>
                            <td class="center">
                                @if($post->photo)
                                    <img src="{{asset($post->photo->post_image())}}" alt="">
                                @else
                                    <h5>عکسی موجود نیست</h5>
                                @endif
                            </td>
                            <?php
                            $created_at = $post->created_at;
                            $updated_at = $post->updated_at;
                            $date_create = jDate::forge($created_at)->format('%d %B %Y');
                            $date_update =jDate::forge($updated_at)->ago();
                            ?>

                            <td class="center">{{$date_create}}</td>
                            <td class="center">{{$date_update}}</td>
                            @if($post->status ==1)
                                <td class="center green">منتشر شده</td>
                            @else
                                <td class="center red">پیش نویس</td>
                            @endif
                            <td class="center"><a class="fa_number" href="{{route('comments.show',['id'=> $post->id])}}">{{count($post->postComments)}}</a></td>
                            >
                            <td class="center"><a href="{{route('posts.edit',['id'=>$post->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>

                            {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy','id'=>$post->id]]) !!}

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
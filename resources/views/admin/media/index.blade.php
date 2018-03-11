<?php include resource_path('admin-functions/functions.php'); ?>
@extends('layouts.admin')
@section('header-links')
@endsection()
@section('page-header')
فایل های تصویری
@endsection
@section('main-content')
    <style>
        .img-box img{
            width: 100%;

        }
        #insurances .img-box img {
            width: 100%;
            max-height: 332px;
            margin-bottom: 4px;
        }
        .tab-pane{
            padding-top: 1.5rem;
        }
        .tab-pane .caption{
            background: #e3f2fd;
            padding: .5rem;
        }
    </style>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                فایل های چند رسانه ای
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#posts" data-toggle="tab" aria-expanded="true">نوشته ها</a>
                    </li>
                    <li class=""><a href="#insurances" data-toggle="tab" aria-expanded="false">بیمه ها</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="posts">
                        <div class="row">
                            @foreach($posts as $post)
                                @if($post->photo)
                               <div class="img-box col-lg-3">
                                   <?php $post_image = $post->photo->post_image();
                                   $size = filesize($post_image)
                                   ?>
                                <img src="{{asset($post->photo->post_image())}}" alt="">
                                <div class="caption">
                                    <h3 class="yekan">{{$post->title}}</h3>
                                    <small >نویسنده:</small>
                                    <small class="dark-blue">{{$post->user->name}}</small>
                                    <br>
                                    <small>دسته بندی : </small>
                                    <small class="dark-blue">{{$post->category->name}} </small>
                                    <br>
                                    <small>حجم تصویر : </small>
                                    <small class="dark-blue">{{formatSizeUnits($size)}} </small>
                                    <a href="{{route('posts.edit',['id'=>$post->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a>
                                    @if(number_format($size / 1024, 2)>200)
                                        <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>سامانه اطلاع رسانی هوشمند : </strong>
                                            حجم تصویر انتخابی نوشته شما بیش تر از حد استاندارد می باشد و ممکن است سرعت لود سایت  را پایین بیاورد!! لطفا حجم عکس خود را با روش های استاندارد به حداقل برسانید.
                                        </div>
                                        @endif
                                </div>
                            </div>
                            {{--./img-box--}}
                                @endif
                            @endforeach
                        </div>
                        <!--.row-->
                     </div>
                    {{--./posts pane--}}
                    <div class="tab-pane fade" id="insurances">
                        @foreach($insurances as $insurance)
                            @if($insurance->photo)
                                <div class="img-box col-lg-3">
                                    <img src="{{asset($insurance->photo->insurance_image())}}" alt="">
                                    <?php $in_size = filesize($insurance->photo->insurance_image()); ?>
                                    <div class="caption">
                                        <h3 class="yekan">{{$insurance->name}}</h3>
                                        <small >نویسنده:</small>
                                        <small class="dark-blue">{{$insurance->user->name}}</small>
                                        <br>
                                        <small>حجم آیکون : </small>
                                        <small class="dark-blue">{{formatSizeUnits($in_size)}} </small>
                                            <a href="{{route('insurance.edit',['id'=>$insurance->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a>
                                        @if(number_format($in_size / 1024, 2)>60)
                                            <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                                                حجم آیکون انتخابی شما بیشتر از حد استاندارد است. از یک آیکون در سایز 60*60 استفاده کنید.
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{--./img-box--}}
                            @endif
                        @endforeach
                    </div>
                    {{--./insurances pane--}}
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>

@endsection()
@section('footer-links')
@endsection()
{{--@section('page-header')--}}
{{--@endsection()--}}
{{--@section('page-header')--}}
{{--@endsection()--}}
{{--@section('page-header')--}}
{{--@endsection()--}}
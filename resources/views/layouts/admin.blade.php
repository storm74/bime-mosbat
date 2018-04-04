<!DOCTYPE html>
<html lang="fa">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>پیشخوان برنزی شاتل وب 24</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('admin_assets/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('admin_assets/dist/css/fonts.css')}}">
    <link href="{{asset('admin_assets/dist/css/diamond-admin.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/dist/css/rtl/bootstrap-rtl.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('admin_assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('header-links')

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand IRANSans fa_number" href="index.html">پیشخوان برنزی شاتل وب 24</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>تیم فنی شاتل وب :</strong>
                                <span class="pull-right text-muted">
                                        <em class="fa_number green">1396/12/23</em>
                                    </span>
                            </div>
                            <div>جهت تکمیل بخش های مربوط به بیمه پنل مدیریتی، لطفا اطلاعات مورد نیاز را به بخش پشتیبانی شاتل وب تحویل دهید.</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>پیام دیگری موجود نیست</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu l2 dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>بیمه شخص ثالث</strong>
                                    <span class="pull-left text-muted fa_number">90% تکمیل شده است</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only fa_number">90% تکمیل شده است</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>بیمه بدنه</strong>
                                    <span class="pull-left text-muted fa_number">60% تکمیل شده است</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only fa_number">60% تکمیل شده است</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>بیمه آتش سوزی</strong>
                                    <span class="pull-left text-muted fa_number">70% تکمیل شده است</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only fa_number">70% تکمیل شده است</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>قسمت مقالات</strong>
                                    <span class="pull-left text-muted fa_number">93 درصد تکمیل شده است</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                                        <span class="sr-only fa_number">93 درصد تکمیل شده است</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    {{--<li>--}}
                        {{--<a class="text-center" href="#">--}}
                            {{--<strong>See All Tasks</strong>--}}
                            {{--<i class="fa fa-angle-right"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu l3 dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> نسخه 1 پنل مدیریتی الماس
                                <span class="pull-right text-muted small fa_number">اسفند ماه 96</span>
                            </div>
                        </a>
                    </li>
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<div>--}}
                                {{--<i class="fa fa-twitter fa-fw"></i> 3 New Followers--}}
                                {{--<span class="pull-right text-muted small">12 minutes ago</span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<div>--}}
                                {{--<i class="fa fa-envelope fa-fw"></i> Message Sent--}}
                                {{--<span class="pull-right text-muted small">4 minutes ago</span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<div>--}}
                                {{--<i class="fa fa-tasks fa-fw"></i> New Task--}}
                                {{--<span class="pull-right text-muted small">4 minutes ago</span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<div>--}}
                                {{--<i class="fa fa-upload fa-fw"></i> Server Rebooted--}}
                                {{--<span class="pull-right text-muted small">4 minutes ago</span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                        {{--<a class="text-center" href="#">--}}
                            {{--<strong>See All Alerts</strong>--}}
                            {{--<i class="fa fa-angle-right"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu l4 dropdown-user">
                    <li><a href="{{route('users.edit',['id'=>Auth::user()->id])}}"><i class="fa fa-user fa-fw"></i> پروفایل کاربری</a>
                    </li>
                    {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>--}}
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            خروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar yekan" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="جستجو...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a class="hover_shadow" href="{{route('home')}}"><i class="fa fa-dashboard fa-fw orange"></i> وبسایت</a>
                    </li>
                    <li>
                        <a class="hover_shadow" href="{{route('admin_index')}}"><i class="fa fa-dashboard fa-fw orange"></i> پیشخوان</a>
                    </li>
                    <li>
                        <a class="hover_shadow" href="#"><i style="transform: rotate(180deg)" class="fa fa-list orange" aria-hidden="true"></i>  لیست شرکت های بیمه<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('insurance.index')}}"> مشاهده همه</a>
                            </li>
                            <li>
                                <a href="{{route('insurance.create')}}"> افزودن</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a class="hover_shadow" href="#"><i style="transform: rotate(180deg)" class="fa fa-list orange" aria-hidden="true"></i>  بیمه شخص ثالث و بدنه<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a id="personal-car-list" href="{{route('personal-car-list')}}"> مشاهده لیست خودروهای شخصی</a>
                            </li>
                            <li>
                                <a href="{{route('admin.fire')}}"> مشاهده لیست خودروهای باری</a>
                            </li>
                            <li>
                                <a href="{{route('admin.fire')}}"> مشاهده لیست خودروهای مخصوص حمل و نقل</a>
                            </li>
                            <li>
                                <a href="{{route('admin.fire')}}"> افزودن</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a class="hover_shadow" href="{{route('admin.fire')}}"><i class="fa fa-life-ring orange" aria-hidden="true"></i> بیمه عمر</a>
                    </li>
                    <li>
                        <a class="hover_shadow" href="{{route('admin.fire')}}"><i class="fa fa-fire-extinguisher orange" aria-hidden="true"></i> بیمه آتش سوزی</a>
                    </li>
                    <li>
                        <a class="hover_shadow" href="#"><i class="fa fa-user orange" aria-hidden="true"></i>  کاربران  <span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('users.index')}}"> مشاهده همه</a>
                            </li>
                            <li>
                                <a href="{{route('users.create')}}"> افزودن</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a class="hover_shadow" href="#"><i class="fa fa-user orange" aria-hidden="true"></i>  پرونده های چند رسانه ای  <span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('media.index')}}"> مشاهده همه</a>
                            </li>
                            <li>
                                <a href="{{route('admin.media.upload')}}"> افزودن</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a class="hover_shadow" href="#"><i style="transform: rotate(180deg)" class="fa fa-file-pdf-o orange" aria-hidden="true"></i>  نوشته ها<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('posts.index')}}"> مشاهده همه مقالات</a>
                            </li>
                            <li>
                                <a href="{{route('posts.create')}}"> افزودن</a>
                            </li>
                            <li>
                                <a href="{{route('comments.index')}}"> دیدگاه ها</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a class="hover_shadow" href="{{route('categories.index')}}"><i class="fa fa-archive orange" aria-hidden="true"></i>  دسته بندی ها </a>
                    </li>
                    {{--<li>--}}
                   {{----}}
                        {{--<a class="hover_shadow" href="#"><i class="fa fa-sitemap fa-fw orange"></i> گزینه ای دیگر<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a class="hover_black" href="#">Second Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="hover_black" href="#">Second Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="hover_green" href="#">Third Level <span class="fa arrow"></span></a>--}}
                                {{--<ul class="nav nav-third-level">--}}
                                    {{--<li>--}}
                                        {{--<a class="hover_green"  href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="hover_green"  href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="hover_green"  href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="hover_green"  href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<!-- /.nav-third-level -->--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="admin-result">
                        <h1 id="page-header"  class="page-header">
                            @yield('page-header')
                        </h1>
                        @yield('main-content')
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@yield('footer')

<!-- jQuery -->
<script src="{{asset('admin_assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin_assets/dist/js/persianumber.js')}}"></script>
@yield('footer-links')
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('admin_assets/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->

<script src="{{asset('admin_assets/dist/js/sb-admin-2.js')}}"></script>
<script src="{{asset('admin_assets/js/ajax.js')}}"></script>
<script src="{{asset('admin_assets/js/admin-ajax-reqeuests.js')}}"></script>
<script>
    <!-- persiaNumber script -->
    $(document).ready(function() {
        $('.fa_number').persiaNumber();
    });
</script>

</body>

</html>

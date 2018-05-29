<div class="row">
    <div class="col-lg-12">
        <style>
            .font-left{
                float: left;
                position: relative;
                left: 4rem;
            }
        </style>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3 font-left">
                            <i class="fa fa-car fa-5x" aria-hidden="true" style="font-size: 4.5em"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge fa_number'>{{\App\personal_car_list::all()->count()}}</div>
                            <div style="font-size: 80%">خودروهای تحت پوشش</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('personal-car-list')}}">
                    <div class="panel-footer">
                        <span class="pull-left">جزئیات بیشتر</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3 font-left">
                            <i class="fa fa-life-ring fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge fa_number'>{{\App\Insurance::all()->count()}}</div>
                            <div style="font-size: 80%">شرکت های بیمه</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('insurance.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">جزئیات بیشتر</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3 font-left">
                            <i class="fa fa-file-text fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge fa_number'>{{\App\Post::all()->count()}}</div>
                            <div style="font-size: 80%"> نوشته های سایت</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('posts.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">جزئیات بیشتر</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3 font-left">
                            <i class="fa fa-archive fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge fa_number'>{{\App\Category::all()->count()}}</div>
                            <div style="font-size: 80%" >دسته بندی ها</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('categories.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">جزئیات بیشتر</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row shomarande ha -->
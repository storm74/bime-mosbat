<div class="theiaStickySidebar">
    <div class="all-content " style="padding-bottom: 15px;height:auto;-webkit-box-shadow: 0 10px 6px -2px #777;
-moz-box-shadow: 0 10px 6px -2px #777;
box-shadow: 0 2px 6px -2px #777;background-color: #fff !important ;width: 98%;margin-top:2.4%;  -moz-border-radius: 2px;
                    -webkit-border-radius: 2px;
                    border-radius: 2px;">

        <hr>
        <div class="titlle-content" style="margin-top: 2%; color: #57BC72 ;  padding-left: 10%;  padding-right: 3% ; direction: rtl">
            <img src="{{asset('front_assets/pic-video/term.png')}}" width="35" height="35" style="float: right">
            <h2 style="padding-right: 3% "> مقایسه بیمه آتش سوزی </h2></div>
        <hr>
        </p>
        <div id="root">
            <div>
                <div class="ant-layout">
                    <div class="no-class ant-layout-content">
                        <div>
                            <div class="container container-car-body compare-form fadeIn">

                                <div class="ant-row" style="margin-left: -7.5px; margin-right: -7.5px;">
                                    <div class="ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-17"
                                         style="    padding-right: 3%;
    opacity: 1;
    width: 97%;">
                                           <div>
                                               <div id="table-wrapper">
                                                   <div class="spinner absolute-center" style="display: none;"></div>
                                                   <div id="table-body" class="ant-row">
                                                      <div class="ant-row">
                                                        <div class="ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24" style="padding-left: 0px; padding-right: 0px;">
                                                            <div data-show="true" class="ant-alert ant-alert-info ant-alert-no-icon"><span class="ant-alert-message">
                                                                </span><span class="ant-alert-description"></span></div>
                                                        </div>
                                                    </div>
                                                       {{--./ant-row-tavajjoh-box--}}
                                                       @for($i=0;$i<$n ; $i++)
                                                           <?php
                                                                $insurance = \App\Insurance::findOrFail($fire_insrance_factor[$i]['insurance_id'])
                                                           ?>
                                                       {{--./shurue box namyesh--}}
                                                         <div class="ant-row-flex ant-row-flex-middle itemList hasgift">
                                                        <div class="DiscountBox"></div>
                                                        <div class="ant-col-xs-24 ant-col-sm-4 ant-col-md-4 ant-col-lg-4"><a href="#" target="_blank"><img id="LogoImg" alt="البرز" width="70" src="{{asset($insurance->photo->insurance_image())}}"></a>
                                                        </div>
                                                        <div id="tariff_text0" class="ant-col-xs-24 ant-col-sm-15 ant-col-md-15 ant-col-lg-14">
                                                            <div class="progress-result progressPrice">
                                                                <div class="ant-progress ant-progress-line ant-progress-status-active ant-progress-small">
                                                                    <div>
                                                                        <div class="ant-progress-outer">
                                                                            <div class="ant-progress-inner">
                                                                                <div class="ant-progress-bg" style="width: 8.95772%; height: 6px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span class="maxtariff"><span>بیشترین قیمت</span></span><span class="mintariff"><span>کمترین قیمت</span></span><span class="show showprice"><span class="">{{number_format($capital * $fire_insrance_factor[$i]['factor'],0,'/',',')}}</span><sum> تومان</sum></span>
                                                            </div>
                                                        </div>
                                                        <div class="comparebtncol ant-col-xs-24 ant-col-sm-6 ant-col-md-6">
                                                            <button id="order-btn0" data-toggle="modal" type="button" class="ant-btn btn-order-new ant-btn-lg"><span> سفارش</span>
                                                            </button>
                                                        </div>
                                                        <div class="ant-col-xs-6 ant-col-sm-6 ant-col-md-6"></div>
                                                        <div class="clearfix"></div>
                                                        <div class="slideUpDow" onclick="myFunction{{$i+1}}()">اطلاعات بیشتر</div>
                                                    </div>
                                                            <div class="subBoxList col-md-12 " id="myDIV{{$i+1}}" style="height:  100%;">
                                                                         <div class="ant-row">
                                                            <div class="ant-col-xs-24 ant-col-sm-12 fa_number">مبلغ پایه بیمه
                                                                :{{number_format($capital * $fire_insrance_factor[$i]['factor'],0,'/',',')}}
                                                            </div>
                                                            {{--<div class="ant-col-xs-24 ant-col-sm-12">سهم از بازار : 5 درصد--}}
                                                            {{--</div>--}}
                                                            {{--<div class="ant-col-xs-24 ant-col-sm-12">مبلغ تخفیف بیمه :--}}
                                                                {{--2,103,908--}}
                                                            {{--</div>--}}
                                                            {{--<div class="ant-col-xs-24 ant-col-sm-12">پرداخت خسارت سیار :--}}
                                                                {{--<span></span></div>--}}
                                                            {{--<div class="ant-col-xs-24 ant-col-sm-12">میزان شکایت مشتریان :--}}
                                                                {{--33--}}
                                                            {{--</div>--}}
                                                            <div class="ant-col-xs-24 ant-col-sm-12">رضایت مشتری (نمره از 10) :
                                                                {{$insurance->satisfaction}}
                                                            </div>
                                                            <div class="ant-col-xs-24 ant-col-sm-12">تعداد مراکز پرداخت خسارت :
                                                                {{$insurance->branches}}
                                                            </div>
                                                            <div class="ant-col-xs-24 ant-col-sm-12">مدت زمان پاسخگویی و پرداخت خسارت :
                                                                {{$insurance->time_to_ok}}
                                                                روز
                                                            </div>
                                                            {{--<div class="ant-col-xs-24 ant-col-sm-12">سطح توانگری مالی :--}}
                                                                {{--<ul class="ant-rate ant-rate-disabled" tabindex="-1">--}}
                                                                    {{--<li class="ant-rate-star ant-rate-star-full">--}}
                                                                        {{--<div class="ant-rate-star-first"><i class="anticon anticon-star"></i></div>--}}
                                                                        {{--<div class="ant-rate-star-second"><i class="anticon anticon-star"></i></div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li class="ant-rate-star ant-rate-star-full">--}}
                                                                        {{--<div class="ant-rate-star-first"><i class="anticon anticon-star"></i></div>--}}
                                                                        {{--<div class="ant-rate-star-second"><i class="anticon anticon-star"></i></div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li class="ant-rate-star ant-rate-star-full">--}}
                                                                        {{--<div class="ant-rate-star-first"><i class="anticon anticon-star"></i></div>--}}
                                                                        {{--<div class="ant-rate-star-second"><i class="anticon anticon-star"></i></div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li class="ant-rate-star ant-rate-star-zero">--}}
                                                                        {{--<div class="ant-rate-star-first"><i class="anticon anticon-star"></i></div>--}}
                                                                        {{--<div class="ant-rate-star-second"><i class="anticon anticon-star"></i></div>--}}
                                                                    {{--</li>--}}
                                                                {{--</ul>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="ant-col-xs-24 ant-col-sm-24"><a href="#" target="_blank">سوالات متداول بیمه شخص ثالث</a></div>--}}
                                                            <div class="clearfix ant-col-xs-24 ant-col-sm-12"></div>
                                                        </div>
                                                            </div>
                                                       {{--#/myDIV1--}}
                                                           @endfor
                                                </div>
                                            </div>
                                            {{--#/table-wrapper--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #myDIV1, #myDIV2, #myDIV3 , #myDIV4 , #myDIV5, #myDIV6 {
            display: none ;
        }
    </style>
    <script>
        function myFunction1() {
            var x = document.getElementById("myDIV1");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        function myFunction2() {
            var x = document.getElementById("myDIV2");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        function myFunction3() {
            var x = document.getElementById("myDIV3");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        function myFunction4() {
            var x = document.getElementById("myDIV4");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        function myFunction5() {
            var x = document.getElementById("myDIV5");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        function myFunction6() {
            var x = document.getElementById("myDIV6");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

    </script>


</div>
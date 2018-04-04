@extends('layouts.home')
@section('third-insurance')
    <style>
        .dropdown-content{
            z-index: 100;
        }
    </style>
    <script>
        function dropDown(id) {
            // document.getElementById(id).classList.toggle("show");
            $('#'+id).slideToggle();
        }
        function carModelSet(id,data) {

            var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
            document.getElementById(id+"-set").innerHTML = dataCollection;
            // document.getElementById(id).classList.toggle("show");
            $('#'+id).slideToggle();
            // console.log(data);
        }
    </script>
    <div class="row">
        <ul>
            <li>
                <div class="dropdown1">

                    <button id="car_model-third-set" onclick="dropDown('car_model-third')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> نوع خودرو <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                    <div id="car_model-third" class="dropdown-content">
                        <input type="text" placeholder="جست جو  ... " id="myInput1" onkeyup="">
                        <a data="پراید" onclick="carModelSet('car_model-third',this.getAttribute('data'))"  href="#pride">پراید</a>
                        <a data="پژو 405" onclick="carModelSet('car_model-third',getAttribute('data'))"  href="#pejo405">پژو 405</a>
                        <a data="پژو آردی" onclick="carModelSet('car_model-third',getAttribute('data'))"  href="#pejoardi">پژو آردی</a>
                        <a data="پیکان" onclick="carModelSet('car_model-third',getAttribute('data'))"  href="#pekan">پیکان</a>
                        <a data="دنا" onclick="carModelSet('car_model-third',getAttribute('data'))" href="#dena">دنا</a>
                        <a data="پراید" onclick="carModelSet('car_model-third',getAttribute('data'))"  href="#samand">سمند </a>
                        <a data="سمند" onclick="carModelSet('car_model-third',getAttribute('data'))" href="#pejopars">پژو پارس</a>
                    </div>
                </div>
            </li>


            <li>
                <div class="dropdown2">

                    <button id="car-noa-third-party-set" onclick="dropDown('car-noa-third-party')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}">  مدل خودرو <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                    <div id="car-noa-third-party" class="dropdown-content">
                        <input type="text" placeholder="جست جو  ... " id="myInput2" onkeyup="">
                        <a data="نوع 1" onclick="carModelSet('car-noa-third-party',this.getAttribute('data'))" href="#model1">نوع 1</a>
                        <a data="نو 2" onclick="carModelSet('car-noa-third-party',this.getAttribute('data'))" href="#model2">نوع 2</a>
                    </div>
                </div>
            </li>


            <li>
                <div class="dropdown3">

                    <button id="third-party-produce-set" onclick="dropDown('third-party-produce')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> سال تولید <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                    <div id="third-party-produce" class="dropdown-content">
                        <input type="text" placeholder="جست جو  ... " id="myInput3" onkeyup="">
                        <a data="1380" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1380">سال 1380</a>
                        <a data="1381" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1381">سال 1381</a>
                        <a data="1382" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1382">سال 1382</a>
                        <a data="1383" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1383">سال 1383</a>
                        <a data="1384" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1384">سال 1384</a>
                        <a data="1385" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1385">سال 1385</a>
                        <a data="1386" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1386">سال 1386</a>
                        <a data="1387" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1387">سال 1387</a>
                        <a data="1388" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1388">سال 1388</a>
                        <a data="1389" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1389">سال 1389</a>
                        <a data="1390" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1390">سال 1390</a>
                        <a data="1391" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1391">سال 1391</a>
                        <a data="1392" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1392">سال 1392</a>
                        <a data="1393" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1393">سال 1393</a>
                        <a data="1394" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1394">سال 1394</a>
                        <a data="1395" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1394">سال 1395</a>
                        <a data="1396" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1394">سال 1396</a>
                        <a data="1397" onclick="carModelSet('third-party-produce',this.getAttribute('data'))" href="#1394">سال 1397</a>

                    </div>
                </div>

            </li>


            <li>
                <div class="dropdown4">

                    <button id="third-party-takhfif-set" onclick="dropDown('third-party-takhfif')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> تخفیف عدم خسارت <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                    <div id="third-party-takhfif" class="dropdown-content">
                        <input type="text" placeholder="جست جو  ... " id="myInput4" onkeyup="">
                        {{--<a href="#takhfifadmekhesarat">تخفیف عدم خسارت</a>--}}
                        <a data="بدون خسارت" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#bdoonkhesarat">بدون خسارت</a>
                        <a data="1 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#1year">1 سال</a>
                        <a data="2 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#2year">2 سال</a>
                        <a data="3 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#3year">3 سال</a>
                        <a data="4 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#4year">4 سال</a>
                        <a data="5 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#5year">5 سال</a>
                        <a data="6 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#6year">6 سال</a>
                        <a data="7 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#7year">7 سال</a>
                        <a data="8 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#8year">8 سال</a>
                        <a data="9 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#9year">9 سال</a>
                        <a data="10 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#10year">10 سال</a>
                        <a data="11 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#10year">11 سال</a>
                        <a data="12 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#10year">12 سال</a>
                        <a data="13 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#10year">13 سال</a>
                        <a data="14 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#10year">14 سال</a>
                        <a data="بیش از 14 سال" onclick="carModelSet('third-party-takhfif',this.getAttribute('data'))" href="#bishaz10">بیش از 14 سال</a>

                    </div>
                </div>

            </li>


            <li>
                {{--<div class="dropdown5">--}}

                    {{--<button onclick="dropDown()" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> تاریخ انقضاء بیمه <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>--}}
                    {{--<div id="myDropdown5" class="dropdown-content">--}}
                        {{--<input type="text" placeholder="جست جو  ... " id="myInput5" onkeyup="filterFunction5()">--}}
                        {{--<a href="#takhfifadmekhesarat">تخفیف عدم خسارت</a>--}}
                        {{--<a href="#bdoonkhesarat">بدون خسارت</a>--}}
                        {{--<a href="#1year">1 سال</a>--}}
                        {{--<a href="#2year">2 سال</a>--}}
                        {{--<a href="#3year">3 سال</a>--}}
                        {{--<a href="#4year">4 سال</a>--}}
                        {{--<a href="#5year">5 سال</a>--}}
                        {{--<a href="#6year">6 سال</a>--}}
                        {{--<a href="#7year">7 سال</a>--}}
                        {{--<a href="#8year">8 سال</a>--}}
                        {{--<a href="#9year">9 سال</a>--}}
                        {{--<a href="#10year">10 سال</a>--}}
                        {{--<a href="#bishaz10">بیش از 10 سال</a>--}}

                    {{--</div>--}}
                {{--</div>--}}

            </li>
            <li>

                <a href="#">

                    <button class="dropbtn btnenter"><img src="{{asset('front_assets/pic-video/search.png')}}"> مقایسه کن ... !  </button>
                </a>


            </li>


        </ul>
    </div>
    <div class="row">

        <div class="matnenter col-lg-12" >
            <div class="tozihat p1 col-lg-3" ><h3>♦ مقایسه و انتخاب بهترین بیمه</h3><br><p>قیمت و سایر مشخصات هر شرکت بیمه رو مقایسه کنید و اگر نیاز به مشاوره داشتید از بیمه‌بازار بپرسید </p></div>
            <div class="tozihat p2 col-lg-3" ><h3>♦ درخواست خرید و تکمیل اطلاعات</h3><br><p>بعد از انتخاب بهترین بیمه، اطلاعاتی که برای صدور بیمه نامتون لازمه رو وارد کنید و زمان ارسال رو انتخاب کنید</p></div>
            <div class="tozihat p3 col-lg-3" ><h3>♦ صدور و ارسال بیمه‌نامه</h3><br><p>با پرداخت حق بیمه، سفارش شما کامل می‌شه. بیمه‌بازار بیمه‌نامه شمارو به نشونیتون ارسال می‌کنه</p></div>
            <div class="tozihat p3 col-lg-3" ><h3>♦ تحویل در محل</h3><br><p>در صورت ثبت سفارش قبل از ساعت 3 بعد از ظهر، می‌تونید همون روز بیمه‌نامتون رو از پیک بیمه‌بازار تحویل بگیرید</p></div>
        </div>

    </div>
    @endsection
@section('fire-insurance')
    {!! Form::open(['method'=>'POST','action'=>'FrontInsuranceController@fireInsuranceResultPage','id'=>'fireInsuranceAjax','target'=>'_blank']) !!}
    <input type="hidden" name="metr_sakht_hazine" value="1000000">
    <div class="row">
        <style>
            .pad-l-4{
                margin-left: .5rem !important;
            }
            .pad-l-4 .saeed-input{
                max-width: 100% !important;
            }
        </style>
        <ul>
            <li class="pad-l-4">
                    <div class="form-group">
                        <label style="color: #1a691d" for="exampleFormControlSelect1"> سازه ساختمانی : </label>
                        <select  style="height: calc(2.25rem + 11px)" required class="form-control saeed-input" name="saze" id="exampleFormControlSelect1">
                            <option disabled>انتخاب کنید...</option>
                            <option value="ef">اسکلت فلزی</option>
                            <option value="eb">اسکلت بتنی</option>
                        </select>
                    </div>
            </li>
            <li class="pad-l-4">
                <div class="form-group">
                    <label style="color: #1a691d" for="car_model"class="ant-form-item-required">
                        متراژ ساختمان :<i style="color: red;" class="fas fa-question-circle"></i>
                    </label>
                    <input required name="metr" type="text" placeholder="متراژ ساختمان" class="form-control saeed-input">
                </div>
            </li>
            <li class="pad-l-4">
                <div class="form-group">
                    <label style="color: #1a691d" for="car_model"class="ant-form-item-required">
                        ارزش لوازم منزل :<i style="color: red;" class="fas fa-question-circle"></i>
                    </label>
                    <input required name="lavazem" type="text" placeholder="ارزش لوازم منزل" class="form-control saeed-input">
                </div>
            </li>

            <li>

                    <button style="top: 2.5rem; position: relative;"  type="submit" name="submit" class="dropbtn btnenter"><img src="{{asset('front_assets/pic-video/search.png')}}"> مقایسه کن ... !  </button>

                {!! Form::close() !!}
            </li>


        </ul>
    </div>
    @endsection
@section('page4-posts-section')
    @include('includes.hompage-post-section')


@endsection
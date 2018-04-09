<script>
    function dropDown(id) {
        // document.getElementById(id).classList.toggle("show");
        $('#'+id).slideToggle();
    }
    function carFamilySet(id,data,Url,familyId) {
        var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
        document.getElementById(id+"-set").innerHTML = dataCollection;
        // document.getElementById(id).classList.toggle("show");
        $("#familyId").val(familyId);
        $('#'+id).slideToggle();
        $.ajax({
            url:Url,
            type:'GET',
            success:function (personalCarList) {
                if (!personalCarList.error){
                    // $('#car-noa-third-party').html(personalCarList);
                    // $(personalCarList).appendTo('#car-noa-third-party');
                    $('#car-noa-third-party').html(personalCarList);
                    // console.log($('#'+Result));
                }
            }
        });
        //ajax call
        // console.log(data);
    }

    function carModelSet(id,data,modelId1) {

        var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
        document.getElementById(id+"-set").innerHTML = dataCollection;
        $("#modelId").val(modelId1);
        // document.getElementById(id).classList.toggle("show");
        $('#'+id).slideToggle();
        // console.log(data);
    }
    function carProductSet(id,data) {

        var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
        document.getElementById(id+"-set").innerHTML = dataCollection;
        $("#productYear").val(data);
        // document.getElementById(id).classList.toggle("show");
        $('#'+id).slideToggle();
        // console.log(data);
    }
    function carَApplicationSet(id,data,data_set) {
        var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data_set +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
        document.getElementById(id+"-set").innerHTML = dataCollection;
        $("#car-aplication").val(data);
        // document.getElementById(id).classList.toggle("show");
        $('#'+id).slideToggle();
        // console.log(data);
    }
    function carOffSet(id,data,year) {

        var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
        document.getElementById(id+"-set").innerHTML = dataCollection;
        $("#takhfifiKhesarat").val(year);
        // document.getElementById(id).classList.toggle("show");
        $('#'+id).slideToggle();
        // console.log(data);
    }
    // function submiThirdPartyInsurance() {
    //     $('#third-party-submit').click(function () {
    //         $('form#third-party-form').submit();
    //     })
    // }
</script>

<div class="theiaStickySidebar" style="z-index: 10000">
    <div class="all-sidebar " style=" margin-bottom: 5%;
padding-bottom: 5%;
 -moz-border-radius: 2px;
                    -webkit-border-radius: 2px;
                    border-radius: 2px;-webkit-box-shadow: 0 10px 6px -2px #777;
-moz-box-shadow: 0 10px 6px -2px #777;
box-shadow: 0 2px 6px -2px #777;background-color: #fff !important ;width: 90%;margin-right:5%;">
        <div class="sid-serche col-lg-12"style="background-color: #57BC72 !important ;z-index: 10; height: auto ;margin-top: 10%">
            <form>
                <input class="search" type="text" id="search" placeholder="جستجو ... اینتر بزنید" required
                       style="border-radius: 1%;">
            </form>
        </div>
        <div class="sid-category col-lg-11" style="z-index: 10; height: auto ;margin-top: 1%;">
            <div class="titlle-sid-content" style="padding: 20px">
                {!! Form::open(['target'=>'_blank','id'=>'third-party-form','method'=>'POST','action'=>'FrontInsuranceController@thirdpartyInsuranceAjax']) !!}
                <input type="hidden" id="familyId" name="familyId" value="">
                <input type="hidden" id="modelId" name="modelId" value="">
                <input type="hidden" id="productYear" name="productYear" value="">
                <input type="hidden" id="car-aplication" name="carApplication" value="">
                <input type="hidden" id="takhfifiKhesarat" name="off" value="">
                <button onclick="saeed_ajax('third-party-form','third-result',null)"  type="submit" name="submit" id="button-mohasebe" class="btn btn-outline-success">محاسبه بیمه</button>
            </div>
            {!! Form::close() !!}

            <style>
                .form-control {
                    font-size: 13px
                }

                .collapse-content {
                    /*padding-right: 20px;*/
                }

                label {
                    /*padding-top: 15px;*/
                    color: #444444;
                    margin-top: 5%;
                }

                .collapse-content-box {
                    margin-right: 10%
                }
                .dropdown-content{
                    background-color: rgb(76, 175, 80) !important;
                    width: 100% !important;
                    position: inherit !important;
                    z-index: 100;
                }

            </style>
            <ul class="sid-content">
                <li>
                    <div class="dropdown1">
                        <button id="car_application-set" onclick="dropDown('car_application')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> کاربری خودرو <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                        <div id="car_application" class="dropdown-content">
                                <a data_set ="شخصی"  data="personal" onclick="carَApplicationSet('car_application',this.getAttribute('data'),this.getAttribute('data_set'))" >شخصی</a>
                                <a data_set ="مخصوص آموزش رانندگی"  data="edu" onclick="carَApplicationSet('car_application',this.getAttribute('data'),this.getAttribute('data_set'))" >مخصوص آموزش رانندگی</a>
                                <a data_set ="تاکسی درزون شهری"  data="t_in" onclick="carَApplicationSet('car_application',this.getAttribute('data'),this.getAttribute('data_set'))" >تاکسی درزون شهری</a>
                                <a data_set ="تاکسی برون شهری"  data="t_out" onclick="carَApplicationSet('car_application',this.getAttribute('data'),this.getAttribute('data_set'))" >تاکسی برون شهری</a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="dropdown1">
                        <button id="car_model-third-set" onclick="dropDown('car_model-third')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> نوع خودرو <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                        <div id="car_model-third" class="dropdown-content">
                            <?php
                            if(isset($data)){
                                $family_id = $data['family_id'];
                                $family = $data['family'];
                            }
                            ?>
                            @if(isset($data))
                                <script>
                                    var Uri = "{{route('modelSet',['id'=>$family_id])}}";
                                    var data = "{{$family}}";
                                    var family_id = "{{$family_id}}";
                                    carFamilySet('car_model-third',data ,Uri ,family_id);
                                    $(document).ready(function () {
                                        dropDown('car_model-third')
                                        $("#familyId").val({{$family_id}});
                                    })

                                </script>
                                @endif
                            @foreach($carFamily as $family)
                                <a family_id ="{{$family->id}}" Url="{{route('modelSet',['id'=>$family->id])}}" data="{{$family->family}}" onclick="carFamilySet('car_model-third',this.getAttribute('data'),this.getAttribute('Url'),this.getAttribute('family_id'))" >{{$family->family}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>


                <li>
                    <div class="dropdown2">

                        <button id="car-noa-third-party-set" onclick="dropDown('car-noa-third-party')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}">
                            @if(isset($data))
                                {{$data['model']}}
                                <script>
                                    $(document).ready(function () {
                                        $("#modelId").val({{$data['model_id']}});
                                    })
                                </script>
                                @else
                                مدل خودرو
                                @endif
                            <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                        <div id="car-noa-third-party" class="dropdown-content">
                            {{--<div id="carModelResult">--}}

                            {{--</div>--}}
                            {{--<a data="نوع 1" onclick="carModelSet('car-noa-third-party',this.getAttribute('data'))" href="#model1">نوع 1</a>--}}
                            {{--<a data="نو 2" onclick="carModelSet('car-noa-third-party',this.getAttribute('data'))" href="#model2">نوع 2</a>--}}
                        </div>
                    </div>
                </li>


                <li>
                    <div class="dropdown3">


                        <button id="third-party-produce-set" onclick="dropDown('third-party-produce')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}">سال
                            @if(isset($data))
                                {{$data['productYear']}}
                                <script>
                                    $(document).ready(function () {
                                        $("#productYear").val({{$data['productYear']}});
                                    })
                                </script>
                            @else
                                سال تولید
                            @endif
                            <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                        <div id="third-party-produce" class="dropdown-content">
                            {{--<input type="text" placeholder="جست جو  ... " id="myInput3" onkeyup="">--}}
                            <a data="1380" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1380">سال 1380</a>
                            <a data="1381" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1381">سال 1381</a>
                            <a data="1382" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1382">سال 1382</a>
                            <a data="1383" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1383">سال 1383</a>
                            <a data="1384" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1384">سال 1384</a>
                            <a data="1385" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1385">سال 1385</a>
                            <a data="1386" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1386">سال 1386</a>
                            <a data="1387" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1387">سال 1387</a>
                            <a data="1388" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1388">سال 1388</a>
                            <a data="1389" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1389">سال 1389</a>
                            <a data="1390" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1390">سال 1390</a>
                            <a data="1391" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1391">سال 1391</a>
                            <a data="1392" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1392">سال 1392</a>
                            <a data="1393" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1393">سال 1393</a>
                            <a data="1394" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1394">سال 1394</a>
                            <a data="1395" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1394">سال 1395</a>
                            <a data="1396" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1394">سال 1396</a>
                            <a data="1397" onclick="carProductSet('third-party-produce',this.getAttribute('data'))" href="#1394">سال 1397</a>

                        </div>
                    </div>

                </li>


                <li>
                    <div class="dropdown4">

                        <button id="third-party-takhfif-set" onclick="dropDown('third-party-takhfif')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}">
                            @if(isset($data))
                                سال
                                {{$data['off']}}
                                <script>
                                    $(document).ready(function () {
                                        $("#takhfifiKhesarat").val({{$data['off']}});
                                    })
                                </script>
                            @else
                                تخفیف عدم خسارت
                            @endif
                            <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                        <div id="third-party-takhfif" class="dropdown-content">
                            {{--<input type="text" placeholder="جست جو  ... " id="myInput4" onkeyup="">--}}
                            {{--<a href="#takhfifadmekhesarat">تخفیف عدم خسارت</a>--}}
                            <a year="0" data="بدون خسارت" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'))" href="#bdoonkhesarat">بدون خسارت</a>
                            <a year="1" data="1 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#1year">1 سال</a>
                            <a year="2" data="2 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#2year">2 سال</a>
                            <a year="3" data="3 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#3year">3 سال</a>
                            <a year="4" data="4 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#4year">4 سال</a>
                            <a year="5" data="5 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#5year">5 سال</a>
                            <a year="6" data="6 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#6year">6 سال</a>
                            <a year="7" data="7 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#7year">7 سال</a>
                            <a year="8" data="8 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#8year">8 سال</a>
                            <a year="9" data="9 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#9year">9 سال</a>
                            <a year="10" data="10 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#10year">10 سال</a>
                            <a year="11" data="11 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#10year">11 سال</a>
                            <a year="12" data="12 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#10year">12 سال</a>
                            <a year="13" data="13 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#10year">13 سال</a>
                            <a year="14" data="14 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#10year">14 سال</a>
                            <a year="m14" data="بیش از 14 سال" onclick="carOffSet('third-party-takhfif',this.getAttribute('data'),this.getAttribute('year'))" href="#bishaz10">بیش از 14 سال</a>

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
            </ul>
        </div>
        </form>
        <style>
            .sid-content li {
                padding-top: 2%;
                font-size: 13px;
                margin-right: 10%;
                color: #666666 !important;
                padding-bottom: 5%
            }

            #submit {
                width: 30px;
                height: 20px
            }

            .form-wrapper {
                width: 450px;
                padding: 8px;
                margin: 100px auto;
                overflow: hidden;
                border-width: 1px;
                border-style: solid;
                border-color: #dedede #bababa #aaa #bababa
                -moz-box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444
                -webkit-box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444
                box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                border-radius: 10px;
                background-color: #f6f6f6
                background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8))
                background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8)
                background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8)
                background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8)
                background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8)
                background-image: linear-gradient(top, #f6f6f6, #eae8e8)
            }

            form input[type="text"] {
                border: 1px solid #57bc72;
            }

            .form-wrapper #search {
                width: 330px;
                height: 20px;
                padding: 10px 5px;
                float: left;
                direction: rtl;
                border: 1px solid #ccc
                -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff
                -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff
                box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
            }

            .form-wrapper #search:focus {
                outline: 0;
                border-color: #aaa
                -moz-box-shadow: 0 1px 1px #bbb inset;
                -webkit-box-shadow: 0 1px 1px #bbb inset;
                box-shadow: 0 1px 1px #bbb inset;
            }

            .form-wrapper #search::-webkit-input-placeholder {
                color: #999
                font-weight: normal;

            }

            .form-wrapper #search:-moz-placeholder {
                color: #999
                font-weight: normal;
                text-align: right;

            }

            .form-wrapper #search:-ms-input-placeholder {
                color: #999
                font-weight: normal;

            }

            .form-wrapper #submit {
                float: right;

                height: 42px;
                width: 100px;
                padding: 0;
                cursor: pointer;
                color: #fafafa
                text-transform: uppercase;
                background-color: #D70411
                background-image: -webkit-gradient(linear, left top, left bottom, from(#A5030D), to(#D70411))
                background-image: -webkit-linear-gradient(top, #D70411, #A5030D)
                background-image: -moz-linear-gradient(top, #D70411, #A5030D)
                background-image: -ms-linear-gradient(top, #D70411, #A5030D)
                background-image: -o-linear-gradient(top, #D70411, #A5030D)
                background-image: linear-gradient(top, #D70411, #A5030D)
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                text-shadow: 0 1px 0 rgba(0, 0, 0, .3);
                -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #fff
                -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #fff
                box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #fff
            }

            .form-wrapper #submit:hover,
            .form-wrapper #submit:focus {
                background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3))
                background-image: -webkit-linear-gradient(top, #A5030D, #D70411)
                background-image: -moz-linear-gradient(top, #A5030D, #D70411)
                background-image: -ms-linear-gradient(top, #A5030D, #D70411)
                background-image: -o-linear-gradient(top, #A5030D, #D70411)
                background-image: linear-gradient(top, #A5030D, #D70411)
            }

            .form-wrapper #submit:active {
                outline: 0;
                -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
                -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
                box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
            }

            .form-wrapper #submit::-moz-focus-inner {
                border: 0;
            }

        </style>
    </div>
</div>
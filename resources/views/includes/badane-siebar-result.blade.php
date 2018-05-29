<script>
    function dropDown(id) {
        // document.getElementById(id).classList.toggle("show");
        $('#'+id).slideToggle();
    }
    function carFamilySetBadane(id,data,Url,familyId) {
        var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
        document.getElementById(id+"-set").innerHTML = dataCollection;
        // document.getElementById(id).classList.toggle("show");
        $("#familyId-badane").val(familyId);
        $('#'+id).slideToggle();
        $.ajax({
            url:Url,
            type:'GET',
            success:function (personalCarList) {
                if (!personalCarList.error){
                    // $('#car-noa-third-party').html(personalCarList);
                    // $(personalCarList).appendTo('#car-noa-third-party');
                    $('#car-noa-badane').html(personalCarList);
                    // console.log($('#'+Result));
                }
            }
        });
        //ajax call
        // console.log(data);
    }
    function carModelSetBadane(id,data,modelId1) {

        var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
        document.getElementById(id+"-set").innerHTML = dataCollection;
        $("#modelId-badane").val(modelId1);
        // document.getElementById(id).classList.toggle("show");
        $('#'+id).slideToggle();
        // console.log(data);
    }
    function carProductSetBadane(id,data) {

        var dataCollection = "<img src=\"{{asset('front_assets/pic-video/car-2.png')}}\"> "+ data +"  <img class=\"img2\" src=\"{{asset('front_assets/pic-video/chevron-right.png')}}\">";
        document.getElementById(id+"-set").innerHTML = dataCollection;
        $("#productYear-badane").val(data);
        // document.getElementById(id).classList.toggle("show");
        $('#'+id).slideToggle();
        // console.log(data);
    }
    // function submiBadaneInsurance() {
    //     $('#badane-submit').click(function () {
    //         $('form#badane-form').submit();
    //     })
    // }
    function valueAdd() {
        var valueData = document.querySelector('#badane-value-set').value;
        document.querySelector('#badane-value').value = valueData;
    }
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
                {!! Form::open(['target'=>'_blank','id'=>'badane-form','method'=>'POST','action'=>'FrontInsuranceController@badaneInsuranceResultAjax']) !!}
                <input type="hidden" id="familyId-badane" name="familyIdBadane" value="">
                <input type="hidden" id="modelId-badane" name="modelIdBadane" value="">
                <input type="hidden" id="productYear-badane" name="productYearBadane" value="">
                <input type="hidden" id="badane-value" name="value" value="">
                {{--<input type="hidden" id="takhfifiKhesarat" name="off" value="">--}}
                <button onclick="saeed_ajax('badane-form','badane-result',null);" type="submit" name="submit" id="badane-submit" class="btn btn-outline-success">محاسبه بیمه</button>

                {!! Form::close() !!}
            </div>


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
                    <style>
                        .badane-value{
                            border: 2px solid #55ab53;
                            height: 50px;
                            margin-left: 25px;
                            border-radius: 4px;
                            color: #fff;
                            background: #55ab53;
                            font-size: 15px;
                            -webkit-text-fill-color: #fdfbfb;
                            padding-right: 5px;
                        }
                        .badane-span{
                            color: #b1adab;
                            padding-left: 6px;
                        }
                    </style>
                    <span class="badane-span">ارزش خودرو: </span>  <input onkeyup="valueAdd()" id="badane-value-set" placeholder="ارزش خودرو به تومان ..." class="badane-value" type="text">
                </li>
                <li>
                    <div class="dropdown1">
                        <button id="car_model-badane-set" onclick="dropDown('car_model-badane')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> نوع خودرو <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                        <div id="car_model-badane" class="dropdown-content">
                            <?php
                            if(isset($data)){
                                $family_id = $data['family_id'];
                                $family = $data['family'];
                            }
                            ?>
                            @if(isset($data))
                                <script>
                                    var Uri = "{{route('modelSetBadane',['id'=>$family_id])}}";
                                    var data = "{{$family}}";
                                    var family_id = "{{$family_id}}";
                                    carFamilySetBadane('car_model-badane',data ,Uri ,family_id);
                                    $(document).ready(function () {
                                        dropDown('car_model-badane')
                                        $("#familyId-badane").val({{$family_id}});
                                    })
                                </script>
                                @endif
                            @foreach($carFamily as $family)
                                <a family_id ="{{$family->id}}" Url="{{route('modelSetBadane',['id'=>$family->id])}}" data="{{$family->family}}" onclick="carFamilySetBadane('car_model-badane',this.getAttribute('data'),this.getAttribute('Url'),this.getAttribute('family_id'))" >{{$family->family}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>


                <li>
                    <div class="dropdown2">

                        <button id="car-noa-badane-set" onclick="dropDown('car-noa-badane')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}">
                            @if(isset($data))
                                {{$data['model']}}
                                <script>
                                    $(document).ready(function () {
                                        $("#modelId-badane").val({{$data['model_id']}});
                                    })
                                </script>
                                @else
                                مدل خودرو
                                @endif
                            <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                        <div id="car-noa-badane" class="dropdown-content">
                            {{--<div id="carModelResult">--}}

                            {{--</div>--}}
                            {{--<a data="نوع 1" onclick="carModelSet('car-noa-third-party',this.getAttribute('data'))" href="#model1">نوع 1</a>--}}
                            {{--<a data="نو 2" onclick="carModelSet('car-noa-third-party',this.getAttribute('data'))" href="#model2">نوع 2</a>--}}
                        </div>
                    </div>
                </li>


                <li>
                    <div class="dropdown3">


                        <button id="badane-produce-set" onclick="dropDown('badane-produce')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}">سال
                            @if(isset($data))
                                {{$data['productYear']}}
                                <script>
                                    $(document).ready(function () {
                                        $("#productYear-badane").val({{$data['productYear']}});
                                    })
                                </script>
                            @else
                                سال تولید
                            @endif
                            <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                        <div id="badane-produce" class="dropdown-content">
                            {{--<input type="text" placeholder="جست جو  ... " id="myInput3" onkeyup="">--}}
                            <a data="1380" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1380">سال 1380</a>
                            <a data="1381" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1381">سال 1381</a>
                            <a data="1382" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1382">سال 1382</a>
                            <a data="1383" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1383">سال 1383</a>
                            <a data="1384" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1384">سال 1384</a>
                            <a data="1385" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1385">سال 1385</a>
                            <a data="1386" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1386">سال 1386</a>
                            <a data="1387" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1387">سال 1387</a>
                            <a data="1388" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1388">سال 1388</a>
                            <a data="1389" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1389">سال 1389</a>
                            <a data="1390" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1390">سال 1390</a>
                            <a data="1391" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1391">سال 1391</a>
                            <a data="1392" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1392">سال 1392</a>
                            <a data="1393" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1393">سال 1393</a>
                            <a data="1394" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1394">سال 1394</a>
                            <a data="1395" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1394">سال 1395</a>
                            <a data="1396" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1394">سال 1396</a>
                            <a data="1397" onclick="carProductSetBadane('badane-produce',this.getAttribute('data'))" href="#1394">سال 1397</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
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
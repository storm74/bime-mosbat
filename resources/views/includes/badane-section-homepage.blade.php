<script>
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
    function submiBadaneInsurance() {
        var valueData = document.querySelector('#badane-value-set').value;
        document.querySelector('#badane-value').value = valueData;
        $('form#badane-form').submit();
    }
</script>
{!! Form::open(['target'=>'_blank','id'=>'badane-form','method'=>'POST','action'=>'FrontInsuranceController@badaneInsuranceResultPage']) !!}
<input type="hidden" id="familyId-badane" name="familyIdBadane" value="">
<input type="hidden" id="modelId-badane" name="modelIdBadane" value="">
<input type="hidden" id="productYear-badane" name="productYearBadane" value="">
<input type="hidden" id="badane-value" name="value" value="">
{{--<input type="hidden" id="takhfifiKhesarat" name="off" value="">--}}
{!! Form::close() !!}
<div class="row">
    <ul>
        <li>
            <div class="dropdown1">



                <button id="car_model-badane-set" onclick="dropDown('car_model-badane')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> نوع خودرو <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                <div id="car_model-badane" class="dropdown-content">
                    <input type="text" placeholder="جست جو  ... " id="myInput1" onkeyup="">
                    @foreach($carFamily as $family)
                        <a family_id ="{{$family->id}}" Url="{{route('modelSetBadane',['id'=>$family->id])}}" data="{{$family->family}}" onclick="carFamilySetBadane('car_model-badane',this.getAttribute('data'),this.getAttribute('Url'),this.getAttribute('family_id'))" >{{$family->family}}</a>
                    @endforeach
                </div>
            </div>
        </li>


        <li>
            <div class="dropdown2">

                <button id="car-noa-badane-set" onclick="dropDown('car-noa-badane')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}">  مدل خودرو <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                <div id="car-noa-badane" class="dropdown-content">
                    <input type="text" placeholder="جست جو  ... " id="myInput2" onkeyup="">
                    {{--<div id="carModelResult">--}}

                    {{--</div>--}}
                    {{--<a data="نوع 1" onclick="carModelSet('car-noa-third-party',this.getAttribute('data'))" href="#model1">نوع 1</a>--}}
                    {{--<a data="نو 2" onclick="carModelSet('car-noa-third-party',this.getAttribute('data'))" href="#model2">نوع 2</a>--}}
                </div>
            </div>
        </li>


        <li>
            <div class="dropdown3">

                <button id="badane-produce-set" onclick="dropDown('badane-produce')" class="dropbtn"><img src="{{asset('front_assets/pic-video/car-2.png')}}"> سال تولید <img class="img2" src="{{asset('front_assets/pic-video/chevron-right.png')}}"></button>
                <div id="badane-produce" class="dropdown-content">
                    <input type="text" placeholder="جست جو  ... " id="myInput3" onkeyup="">
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
            <span class="badane-span">ارزش خودرو: </span>  <input id="badane-value-set" placeholder="ارزش خودرو به تومان ..." class="badane-value" type="text">
        </li>
        <li >

            <a href="#" onclick="submiBadaneInsurance()">
                <button id="badane-submit" class="dropbtn btnenter"><img src="{{asset('front_assets/pic-video/search.png')}}"> مقایسه کن ... !  </button>
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

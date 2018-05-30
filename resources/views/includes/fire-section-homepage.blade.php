{!! Form::open(['method'=>'POST','action'=>'FrontInsuranceController@fireInsuranceResultPage','id'=>'fireInsuranceAjax','target'=>'_blank']) !!}
<input type="hidden" name="metr_sakht_hazine" value="1000000">
<div class="row">
    <ul>
        <style>
            .fire-select{
                width: 120px;
                padding-bottom: 11px !important;
                padding-right: 14px !important;
                border: 2px solid #55ab53 !important;
                height: 50px !important;
                margin-left: 25px !important;
                border-radius: 4px !important;
                color: #fff !important;
                background: #55ab53 !important;
                font-size: 15px !important;
                -webkit-text-fill-color: #fdfbfb !important;
                box-shadow: none !important;
            }
        </style>
        <li>
            <select  style="height: calc(2.25rem + 11px)" required class="fire-select" name="saze" id="exampleFormControlSelect1">
                <option disabled>انتخاب کنید...</option>
                <option value="ef">اسکلت فلزی</option>
                <option value="eb">اسکلت بتنی</option>
            </select>
        </li>
        <li>
            <span class="badane-span">متراژ ساختمان : </span>  <input name="metr" placeholder="متراژ ساختمان ..." class="badane-value" type="text">
        </li>
        <li>
            <span class="badane-span">ارزش لوازم منزل : </span>  <input name="lavazem" placeholder="ارزش لوازم منزل ..." class="badane-value" type="text">
        </li>

        <li>

            <button  type="submit" name="submit" class="dropbtn btnenter"><img src="{{asset('front_assets/pic-video/search.png')}}"> مقایسه کن ... !  </button>

            {!! Form::close() !!}
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

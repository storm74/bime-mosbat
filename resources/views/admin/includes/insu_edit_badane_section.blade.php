<div class="row">
    <div class="alert-info">
        <p style="padding: 10px;">
            توجه نمایید که جهت کارکرد مناسب سیتم بایستی پارامترهای موجود برای محاسبه را به دقت پر نمایید و از خالی گذاشتن پرامترها پرهیز نمایید
        </p>
    </div>
    {!! Form::open(['method'=>'POST','action'=>'AdminInsuranceController@badaneEdit','id'=>'badane-form']) !!}
    <input type="hidden" name="id" value="{{$insurance->id}}">
    {{--<form action="">--}}
    <div class="col-lg-8">
        <h2 class="page-header">تعرفه پایه خودروها چهارسیلندر و کمتر </h2>
        <div class="form-group">
            {!! Form::label('lfsl_20','تعرفه پایه ارزش کمتر از 20 میلیون') !!}
            {!! Form::text('lfsl_20',$badane->lfsl_20,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lfsm_20','تعرفه پایه ارزش مازاد بر 20 میلیون') !!}
            {!! Form::text('lfsm_20',$badane->lfsm_20,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lfsm_50','تعرفه پایه ارزش مازاد بر 50 میلیون') !!}
            {!! Form::text('lfsm_50',$badane->lfsm_50,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lfsm_100','تعرفه پایه ارزش مازاد بر 100 میلیون') !!}
            {!! Form::text('lfsm_100',$badane->lfsm_100,['class'=>'form-control']) !!}
        </div>
            {{--انتهای چهارسیلندر و کمتر--}}
        <h2 class="page-header">تعرفه پایه خودروها چهارسیلندر و کمتر </h2>
        <div class="form-group">
            {!! Form::label('gfsl_20','تعرفه پایه ارزش کمتر از 20 میلیون') !!}
            {!! Form::text('gfsl_20',$badane->gfsl_20,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gfsm_20','تعرفه پایه ارزش مازاد بر 20 میلیون') !!}
            {!! Form::text('gfsm_20',$badane->gfsm_20,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gfsm_50','تعرفه پایه ارزش مازاد بر 50 میلیون') !!}
            {!! Form::text('gfsm_50',$badane->gfsm_50,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gfsm_100','تعرفه پایه ارزش مازاد بر 100 میلیون') !!}
            {!! Form::text('gfsm_100',$badane->gfsm_100,['class'=>'form-control']) !!}
        </div>
        {{--انتهای بیش تر از چهارسیلندر--}}
        <h2 class="page-header">تعرفه خودروهای مسافرکشی شخصی، آژانس و تاکسی ها : </h2>
        <div class="form-group">
            {!! Form::label('taxi_keraye','تعرفه افزوده شده برای اتومبیل های سواری کرایه و تاکسی : ') !!}
            {!! Form::text('taxi_keraye',$badane->taxi_keraye,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('edu_azhans_khaty','تعرفه افزوده شده برای اتومبیل های ویژه آژانس و تعلیم رانندگی و کرایه خطی  : ') !!}
            {!! Form::text('edu_azhans_khaty',$badane->edu_azhans_khaty,['class'=>'form-control']) !!}
        </div>
        <h2 class="page-header">تعرفه های تخفیف بیمه :  </h2>
        <div class="form-group">
            {!! Form::label('off_1','تعرفه کاهشی برای 1 سال تخفیف بیمه :') !!}
            {!! Form::text('off_1',$badane->off_1,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('off_2','تعرفه کاهشی برای 2 سال تخفیف بیمه :') !!}
            {!! Form::text('off_2',$badane->off_2,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('off_3','تعرفه کاهشی برای 3 سال تخفیف بیمه :') !!}
            {!! Form::text('off_3',$badane->off_3,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('off_4','تعرفه کاهشی برای 4 سال تخفیف بیمه :') !!}
            {!! Form::text('off_4',$badane->off_4,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('off_5','تعرفه کاهشی برای 5 سال تخفیف بیمه :') !!}
            {!! Form::text('off_5',$badane->off_5,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('off_6','تعرفه کاهشی برای 6 سال تخفیف بیمه :') !!}
            {!! Form::text('off_6',$badane->off_6,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('off_7','تعرفه کاهشی برای 7 سال تخفیف بیمه :') !!}
            {!! Form::text('off_7',$badane->off_7,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('off_m_7','تعرفه تخفیف برای خودروهایی با 8 سال تخفیف و بیشتر') !!}
        {!! Form::text('off_m_7',$badane->off_m_7,['class'=>'form-control']) !!}
        </div>
        <h2 class="page-header">تعرفه افزایشی مربوط به سال ساخت : </h2>
        <div class="form-group">
            {!! Form::label('year_5','  تعرفه افزوده سالانه برای خودروهایی با عمر کمتر از 5 سال') !!}
            {!! Form::text('yearl_5',$badane->yearl_5,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('year_510','  تعرفه افزوده سالانه برای خودروهایی با عمر بین 5 تا 10 سال') !!}
            {!! Form::text('year_510',$badane->year_510,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('yearm_10','  تعرفه افزوده سالانه برای خودروهایی با عمر بیش از 10 سال') !!}
            {!! Form::text('yearm_10',$badane->yearm_10,['class'=>'form-control']) !!}
        </div>
        <h2 class="page-header">تعرفه افزایشی مربوط به پوشش های تکمیلی : </h2>
        <div class="form-group">
            {!! Form::label('asid','  تعرفه افزوده پوشش تکمیلی پاشیده شدن اسید و مواد شیمیایی') !!}
            {!! Form::text('asid',$badane->asid,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('shishe','  تعرفه افزوده پوشش تکمیلی شکست شیشه') !!}
            {!! Form::text('shishe',$badane->shishe,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('seil_va_zelzele','  تعرفه افزوده پوشش تکمیلی سیل و زلزله') !!}
            {!! Form::text('seil_va_zelzele',$badane->seil_va_zelzele,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('serghat_dar_ja','  تعرفه افزوده پوشش تکمیلی سرقت درجا') !!}
            {!! Form::text('serghat_dar_ja',$badane->serghat_dar_ja,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('p_navasanat','  تعرفه افزوده پوشش تکمیلی نوسانات بازار') !!}
            {!! Form::text('p_navasanat',$badane->p_navasanat,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ayyab_zahab','  تعرفه افزوده پوشش تکمیلی ایاب ذهاب') !!}
            {!! Form::text('ayyab_zahab',$badane->ayyab_zahab,['class'=>'form-control']) !!}
        </div>
        <h2 class="page-header">تعرفه افزایشی سایر موارد : </h2>
        <div class="form-group">
            {!! Form::label('varedat','  تعرفه افزوده واردات') !!}
            {!! Form::text('varedat',$badane->varedat,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('hesab_boland_moddat','  تعرفه افزوده حساب بلند مدت') !!}
            {!! Form::text('hesab_boland_moddat',$badane->hesab_boland_moddat,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('life_insurance','  تعرفه افزوده بیمه عمر') !!}
            {!! Form::text('life_insurance',$badane->life_insurance,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('new','  تعرفه کاهشی خودرو صفر کیلومتر') !!}
            {!! Form::text('new',$badane->new,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('ویرایش',['name'=>'add_insurance','class'=>'btn btn-primary','style'=>'float:right','id'=>'save-badane']) !!}
            <div id="result" style="line-height: 32px;color: green; overflow-x: hidden">

            </div>
            <script>
                var saveBadane = document.querySelector("#save-badane");
                saveBadane.addEventListener('click',function (evt) {saeed_ajax("badane-form","result",null)},false);
            </script>
        </div>

    </div>
    <div class="col-lg-4">

        <div style="padding: 0 1px 11px 0;">
            <h2 class="page-header">ملاحظات مورد نیاز : </h2>
        </div>
        @include('admin.includes.error_alert')
    </div>
    {!! Form::close() !!}
</div>
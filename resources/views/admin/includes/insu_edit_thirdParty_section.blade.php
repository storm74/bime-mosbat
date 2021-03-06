<div class="row">
    <div class="alert-info">
        <p>
            توجه نمایید که جهت کارکرد مناسب سیتم بایستی پارامترهای موجود برای محاسبه بیمه شخص ثالث را به دقت پر نمایید و از خالی گذاشتن پرامترها پرهیز نمایید
        </p>
    </div>
    {!! Form::open(['method'=>'POST','action'=>'AdminInsuranceController@thirdPartyEdit']) !!}
    <input type="hidden" name="id" value="{{$insurance->id}}">
    {{--<form action="">--}}
    <div class="col-lg-8">
        <h2 class="page-header">خودروهای سواری : </h2>
        <div class="form-group">
            {!! Form::label('lfs','قیمت پایه بیمه خودروهای کمتر از چهار سیلندر') !!}
            {!! Form::text('lfs',$thirdParty->lfs,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('g4s','قیمت پایه بیمه خودروهای بیشتر از چهار سیلندر') !!}
            {!! Form::text('g4s',$thirdParty->g4s,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('pps','قیمت پایه بیمه خودروهای پراید، پیکان، سپند ') !!}
            {!! Form::text('pps',$thirdParty->pps,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('o4s','قیمت پایه بیمه سایر خودروهای چهار سیلندر ') !!}
            {!! Form::text('o4s',$thirdParty->o4s,['class'=>'form-control']) !!}
        </div>
        <h2 class="page-header">تعرفه خودروهای مسافرکشی شخصی، آژانس و تاکسی ها : </h2>
        <div class="form-group">
            {!! Form::label('t_in','تعرفه افزوده شده برای تاکسی ها، آزانس ها و مسافرکشی های شخصی درون شهری : ') !!}
            {!! Form::text('t_in',$thirdParty->t_in,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('t_out','تعرفه افزوده شده برای تاکسی ها، آزانس ها و مسافرکشی های شخصی برون شهری : ') !!}
            {!! Form::text('t_out',$thirdParty->t_out,['class'=>'form-control']) !!}
        </div>
        <h2 class="page-header">خودروهای باری :  </h2>
        <div class="form-group">
            {!! Form::label('bl_1','قیمت پایه برای خودروهای باری با ظرفیت کمتر از 1 تن :') !!}
            {!! Form::text('bl_1',$thirdParty->bl_1,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('b_13','قیمت پایه برای خودروهای باری با ظرفیت 1 تا 3 تن :') !!}
            {!! Form::text('b_13',$thirdParty->b_13,['class'=>'form-control fa_number']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('b_35','قیمت پایه برای خودروهای باری با ظرفیت 3 تا 5 تن :') !!}
            {!! Form::text('b_35',$thirdParty->b_35,['class'=>'form-control fa_number']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('b_510','قیمت پایه برای خودروهای باری با ظرفیت بین 5 تا 10 تن :') !!}
            {!! Form::text('b_510',$thirdParty->b_510,['class'=>'form-control fa_number']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('b_1020','قیمت پایه برای خودروهای باری با ظرفیت بین 10 تا 20 تن :') !!}
            {!! Form::text('b_1020',$thirdParty->b_1020,['class'=>'form-control fa_number']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('b_m20','قیمت پایه برای خودروهای باری با ظرفیت بیشتر از 20 تن :') !!}
            {!! Form::text('b_m20',$thirdParty->b_m20,['class'=>'form-control fa_number']) !!}
        </div>
        <h2 class="page-header">خودرو های مسافربری : </h2>
        <div class="form-group">
            {!! Form::label('tr_7',' تعرفه افزوده برای خودروهای مسافربری با ظرفیت 7 نفر') !!}
            {!! Form::text('tr_7',$thirdParty->tr_7,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tr_9','  تعرفه افزوده برای خودروهای مسافربری با ظرفیت 9 نفر') !!}
            {!! Form::text('tr_9',$thirdParty->tr_9,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tr_10','  تعرفه افزوده برای خودروهای مسافربری با ظرفیت 10 نفر') !!}
            {!! Form::text('tr_10',$thirdParty->tr_10,['class'=>'form-control']) !!}
        </div>
        <h2 class="page-header">سال ساخت : </h2>
        <div class="form-group">
            {!! Form::label('sakhtm_15','  تعرفه افزوده برای خودروهایی با عمر بیش از 15 سال') !!}
            {!! Form::text('sakhtm_15',$thirdParty->sakhtm_15,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sakhtm_20','  تعرفه افزوده برای خودروهایی با عمر بیش از 20 سال') !!}
            {!! Form::text('sakhtm_20',$thirdParty->sakhtm_20,['class'=>'form-control']) !!}
        </div>
        {{--<h2 class="page-header">سال تخفیف : </h2>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('off_1','تعرفه تخفیف برای خودروهایی با 1 سال تخفیف') !!}--}}
            {{--{!! Form::text('off_1',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('off_2','تعرفه تخفیف برای خودروهایی با 2 سال تخفیف') !!}--}}
            {{--{!! Form::text('off_2',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('off_3','تعرفه تخفیف برای خودروهایی با 3 سال تخفیف') !!}--}}
            {{--{!! Form::text('off_3',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('off_4','تعرفه تخفیف برای خودروهایی با 4 سال تخفیف') !!}--}}
            {{--{!! Form::text('off_4',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('off_5','تعرفه تخفیف برای خودروهایی با 5 سال تخفیف') !!}--}}
            {{--{!! Form::text('off_5',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('off_6','تعرفه تخفیف برای خودروهایی با 6 سال تخفیف') !!}--}}
            {{--{!! Form::text('off_6',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('off_7','تعرفه تخفیف برای خودروهایی با 7 سال تخفیف') !!}--}}
            {{--{!! Form::text('off_7',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('off_8','تعرفه تخفیف برای خودروهایی با 8 سال تخفیف و بیشتر') !!}--}}
            {{--{!! Form::text('off_8',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}


        <div class="form-group">
            {!! Form::submit('ویرایش',['name'=>'add_insurance','class'=>'btn btn-primary']) !!}
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
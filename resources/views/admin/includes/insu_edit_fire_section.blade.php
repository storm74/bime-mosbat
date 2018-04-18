<div class="row">
    <div class="alert-info">
        <p>
            توجه نمایید که جهت کارکرد مناسب سیتم بایستی پارامترهای موجود برای محاسبه بیمه آتش را به دقت پر نمایید و از خالی گذاشتن پرامترها پرهیز نمایید
        </p>
    </div>
    {!! Form::open(['method'=>'POST','action'=>'AdminInsuranceController@fireEdit']) !!}
    <input type="hidden" name="id" value="{{$insurance->id}}">
    {{--<form action="">--}}
    <div class="col-lg-8">
        <div class="form-group">
            {!! Form::label('base','تعرفه پایه بیمه آتش سوزی') !!}
            {!! Form::text('base',$fire->base,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ef','تعرفه پوشش زلزله برای اسکلت فلزی') !!}
            {!! Form::text('ef',$fire->ef,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('eb','تعرفه پوشش زلزله برای اسکلت بتنی') !!}
            {!! Form::text('eb',$fire->eb,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tl','تعرفه پوشش ترکیدگی لوله ') !!}
            {!! Form::text('tl',$fire->tl,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nz','تعرفه پوشش نشست زمین  ') !!}
            {!! Form::text('nz',$fire->nz,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('shm5','تعرفه پوشش سقوط هواپیما با فاصله بیشتر از 5 کیلومتر : ') !!}
            {!! Form::text('shm5',$fire->shm5,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('shl5','تعرفه پوشش سقوط هواپیما با فاصله کمتر از 5 کیلومتر ') !!}
            {!! Form::text('shl5',$fire->shl5,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('storm','تعرفه پوشش خسارات ناشی از طوفان') !!}
            {!! Form::text('storm',$fire->storm,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('flood','تعرفه پوشش خسارات ناشی از سیل :') !!}
            {!! Form::text('flood',$fire->flood,['class'=>'form-control fa_number']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('s_va_sh','تعرفه پوشش خسارات ناشی از سرقت و شکست حرص') !!}
            {!! Form::text('s_va_sh',$fire->s_va_sh,['class'=>'form-control fa_number']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('rain','تعرفه پوشش خسارات ناشی از باران :') !!}
            {!! Form::text('rain',$fire->rain,['class'=>'form-control fa_number']) !!}
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
<div class="row">
    {!! Form::open(['method'=>'PATCH','action'=>['AdminInsuranceController@update',$insurance->id],'files' => true]) !!}
    <div class="col-lg-8">
        <div class="form-group">
            {!! Form::label('name','نام شرکت') !!}
            {!! Form::text('name',$insurance->name,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('branches',' تعداد شعب پرداخت خسارت') !!}
            {!! Form::text('branches',$insurance->branches,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('satisfaction','سطح رضایت مشتریان شرکت ( نمره از 10 )') !!}
            {!! Form::text('satisfaction',$insurance->satisfaction,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('time_to_ok','سرعت شرکت در پرداخت خسارت ( نمره از 10 )') !!}
            {!! Form::text('time_to_ok',$insurance->time_to_ok,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('ویرایش',['name'=>'add_insurance','class'=>'btn btn-primary']) !!}
        </div>

    </div>
    <div class="col-lg-4">
        @include('admin.includes.error_alert')
        <div style="padding: 0 1px 11px 0;">

            @if($insurance->photo)
                <h3 class="green" style="margin-bottom: 20px; font-family: yekan">لوگوی شرکت</h3>
                <img style="width: 100%" src="{{asset($insurance->photo->insurance_image())}}" alt="">
            @else
                <img style="width: 100%" src="{{asset('admin_assets/images/icons/profile_placeholder.png')}}" alt="">
                <p class="seondary-color">لطفا لوگوی شرکت بیمه را آپلود کنید</p>
            @endif
        </div>
        <hr>
        <div class="form-group">
            {!! Form::label('photo_id','لوگو شرکت') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
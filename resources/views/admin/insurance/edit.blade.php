@extends('layouts.admin')
@section('page-header')
{{"ویرایش مشخصات شرکت بیمه"." ".$insurance->name}}
@endsection()
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{"مشخصات کلی و تعرفه های محاسباتی بیمه"." ".$insurance->name}}
                </div>
                <!-- .panel-heading -->
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#general">مشخصات عمومی</a>
                                </h4>
                            </div>
                            <div id="general" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    @include('admin.includes.insu_edit_generall_section')
                                    {{--./edit general data of insurance company--}}
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#thirdParty">تعرفه ها و قیمت های پایه بیمه شخص ثالث</a>
                                </h4>
                            </div>
                            <div id="thirdParty" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="danger" style="background: red; color: #fff; padding: 20px;">
                                        اطلاعات مربوط به بیمه شخص ثالٍ و بدنه به دلیل کمبود اطلاعات تکمیل نشده است!
                                        <br>
                                        لطفا اطلاعات مورد نیاز را به بخش پشتیبانی شاتل وب تحویل دهید.
                                    </div>
                                    @include('admin.includes.insu_edit_thirdParty_section')
                                    {{--./edit Third Party of insurance company--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection()
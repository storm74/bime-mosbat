
<div class="theiaStickySidebar" style="z-index: 10000">
    <div class="all-sidebar " style=" margin-bottom: 5%;
padding-bottom: 5%;
 -moz-border-radius: 2px;
                    -webkit-border-radius: 2px;
                    border-radius: 2px;-webkit-box-shadow: 0 10px 6px -2px #777;
-moz-box-shadow: 0 10px 6px -2px #777;
box-shadow: 0 2px 6px -2px #777;background-color: #fff !important ;width: 90%;margin-right:5%;">
        <div class="sid-serche col-lg-12"
             style="background-color: #57BC72 !important ;z-index: 10; height: auto ;margin-top: 10%">
            <form>
                <input class="search" type="text" id="search" placeholder="جستجو ... اینتر بزنید" required
                       style="border-radius: 1%;">
            </form>
        </div>
        {!! Form::open(['method'=>'POST','action'=>'FrontInsuranceController@fireInsuranceResultAjax','id'=>'fireInsuranceAjax']) !!}
        <div class="sid-category col-lg-11" style="z-index: 10; height: auto ;margin-top: 1%;">
            <div class="titlle-sid-content" style="padding: 20px">
                <button onclick="saeed_ajax('fireInsuranceAjax','fire-result',null)" type="submit" name="submit" id="button-mohasebe" class="btn btn-outline-success">محاسبه بیمه</button>
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


            </style>
            <ul class="sid-content ">
                <div class="collapse-content collapse-content-active" role="tabpanel">
                    <div class="collapse-content-box">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                            <div class="ant-row-flex ant-row-flex-space-between ">
                                <div class="col-xs-11 col-sm-11 col-md-5 col-lg-11 ">
                                    <div class="ant-row ant-form-item ant-form-no-margin  ">
                                        <div class="ant-form-item-label"><label for="car_brand"
                                                                                class="ant-form-item-required"
                                                                                title="نوع سازه">
                                                نوع سازه
                                            </label></div>
                                        <div class="ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control">
                                                <select required name="saze" class="form-control">
                                                   <?php
                                                    if(isset($data)){
                                                        $saze = $data['saze'];
                                                    }else{
                                                        $saze = null;
                                                    }
                                                       ?>
                                                    <option disabled {{isset($data) ? null : "selected"}}>انتخاب</option>
                                                    <option {{$saze == "ef" ? "selected" : null}} value="ef">اسکلت فلزی</option>
                                                    <option {{$saze == "eb" ? "selected" : null}} value="eb">اسکلت بتنی</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-11 col-sm-11 col-md-5 col-lg-11 ">
                                    <div class="ant-row ant-form-item ant-form-no-margin">
                                        <div class="ant-form-item-label">
                                            <label for="car_model"class="ant-form-item-required">
                                                متراژ ساختمان <i style="color: red;" class="fas fa-question-circle"></i>
                                            </label></div>
                                        <div class="ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control">
                                                <input {{isset($data) ? "value = ".$data['metr'] : ""}} required name="metr" type="text" placeholder="متراژ ساختمان" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-11 col-sm-11 col-md-5 col-lg-11 ">
                                    <div class="ant-row ant-form-item ant-form-no-margin">
                                        <div class="ant-form-item-label">
                                            <label for="car_model"class="ant-form-item-required">
                                                ارزش لوازم منزل <i style="color: red;" class="fas fa-question-circle"></i>
                                            </label></div>
                                        <div class="ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control">
                                                <input {{isset($data) ? "value = ".$data['lavazem'] : ""}} required name="lavazem" type="text" placeholder="ارزش لوازم منزل" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-11 col-sm-11 col-md-5 col-lg-11 ">
                                    <div class="ant-row ant-form-item ant-form-no-margin">
                                        <div class="ant-form-item-label">
                                            <label for="car_model"class="ant-form-item-required">
                                                هزینه ساخت هر متر مربع بنا <i style="color: red;" class="fas fa-question-circle"></i>
                                            </label></div>
                                        <div class="ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control">
                                                <input {{isset($data) ? "value = ".$data['metr_sakht_hazine'] : ""}} required name="metr_sakht_hazine" type="text" placeholder="هزینه ساخت هر متر مربع" class="form-control">
                                            </div>
                                        </div>
                                        <div class="alert alert-info">
                                            <strong>توضیحات :</strong> هزینه ای که امروز برای ساخت بنایی مانند ساختمان شما، نیاز است بپردازید
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-11 col-sm-11 col-md-5 col-lg-11 ">
                                    <div class="ant-row ant-form-item ant-form-no-margin">
                                        <div class="ant-form-item-label">
                                            <label for="car_model"class="ant-form-item-required">
                                                پوشش های اضافی<i style="color: red;" class="fas fa-question-circle"></i>
                                            </label></div>
                                        <div class="ant-form-item-control-wrapper">
                                            <div class="ant-form-item-control">
                                                <div class="form-group">
                                                    <label style="padding-left: 1rem;display: inline-block !important;" for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="zaminlarze"  type="checkbox" value="1">
                                                        زمین لرزه
                                                    </label>
                                                    <label style="padding-left: 1rem;display: inline-block !important" for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="tl"  type="checkbox" value="1">
                                                        ترکیدگی لوله
                                                    </label>
                                                    <label style="padding-left: 1rem;display: inline-block !important" for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="nz"  type="checkbox" value="1">
                                                        نشست زمین
                                                    </label>
                                                    <label style="padding-left: 1rem;display: inline-block !important" for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="shl5"  class="fa_number" type="checkbox" value="1">
                                                        سقوط هواپیما با فاصله کمتر از 5 کیلومتر
                                                    </label>
                                                    <label for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="shm5" type="checkbox" value="1">
                                                        سقوط هواپیما با فاصله بیشتر از 5 کیلومتر
                                                    </label>
                                                    <label style="padding-left: 1rem;display: inline-block !important" for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="storm" type="checkbox" value="1">
                                                        طوفان
                                                    </label>
                                                    <label style="padding-left: 1rem;display: inline-block !important" for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="flood" type="checkbox" value="1">
                                                        سیل
                                                    </label>
                                                    <label style="padding-left: 1rem;display: inline-block !important" for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="s_va_sh" type="checkbox" value="1">
                                                        سرقت و شکسن حرص
                                                    </label>
                                                    <label style="padding-left: 1rem;display: inline-block !important" for="">
                                                        <input style="padding-left: 1rem;display: inline-block !important" name="rain" type="checkbox" value="1">
                                                        ضایعات ناشی از برف و باران
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    {{--<button onclick="saeed_ajax('fireInsuranceAjax','fire-result',null)" type="submit" name="submit" id="button-mohasebe" class="btn btn-outline-success">محاسبه بیمه</button>--}}
                                                    {{--<button  type="submit" name="submit"  class="btn btn-outline-success">محاسبه بیمه</button>--}}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
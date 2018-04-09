@extends('layouts.admin')
@section('header-links')
    <!-- DataTables CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
    <style>
        th {
            padding: 5px 5px 7px 5px !important;
        }
    </style>
@endsection()
@section('page-header')
    لیست خودروهای شخصی وارد شده به سیستم بیمه یاب
@endsection
@section('main-content')
    <div class="row">
        <div class="col-lg-5">
            <h3 class="page-header green" style="line-height: 35px;">
                افزودن دسته بندی جدید برای خودروهای شخصی :
            </h3>
            <div id="add-car-category-result">

            </div>

            {!! Form::open(['target'=>'_blank','id'=>'car-category-add','method'=>'POST','action'=>'AdminInsuranseController@personalCarsCategoryAdd']) !!}
            <div class="form-group">
                <lable >عنوان دسته خودرو را وارد نمایید :  </lable>
                <input id="add-category-input" style="margin-top: 1rem;" type="text" class="form-control" name="family" placeholder="به عنوان مثال عنوان پژوه دسته خوبی برای 206 و سمند می باشد">
            </div>
            <button onclick="saeed_ajax('car-category-add','add-car-category-result','add-category-input')" type="submit" name="submit" id="button-mohasebe" class="btn btn-primaryn">افزودن دسته</button>
            {!! Form::close() !!}

        </div>
        {{--./car-category-add--}}
        <div class="col-lg-6">
            <h3 class="page-header green" style="line-height: 35px;">
                افزودن خودروی جدید :
            </h3>
            <div id="add-car-result">

            </div>

            {!! Form::open(['target'=>'_blank','id'=>'car-add','method'=>'POST','action'=>'AdminInsuranseController@personalCarsAdd']) !!}
            <div class="form-group">
                <lable >مدل خودروی مورد نظر را وارد نمایید :  </lable>
                <input id="add-car-input" style="margin-top: 1rem;" type="text" class="form-control" name="name" placeholder="دقت داشته باشید که ابتدا بایستی دسته بندی خودرو را وارد کرده باشید">
            </div>
            <div class="form-group">
                <lable >این خودرو در کدام دسته بندی قرار می گیرد :  </lable>
                <select required name="car_category_id" id="">
                    @foreach($car_category as $family)
                        <option value="{{$family->id}}">{{$family->family}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <lable >مشخصات خودرو موردنیاز جهت محاسبه حق بیمه :  </lable>
                <select style="margin-top: 1rem; padding: 0px 6px 0 0;" name="detail" id="" class="form-control">
                    <option value="lfs">کمتر از چهارسیلندر</option>
                    <option value="gfs">بیشتر از چهارسیلندر</option>
                    <option value="ofs">سایر چهارسیلند ها از چهارسیلندر</option>
                    <option value="pps">پیکان، پراید و سمند</option>
                </select>
            </div>
            <button onclick="saeed_ajax('car-add','add-car-result','add-car-input')" type="submit" name="submit" id="button-mohasebe" class="btn btn-primaryn">افزودن خودرو</button>
            {!! Form::close() !!}

        </div>
        {{--./car-add--}}
    </div>
    {{--./row--}}
    <div class="row">
        <div class="col-lg-5" >
            <h3 class="page-header green" style="line-height: 35px;">
                لیست دسته بندی خودروهای شخصی :
            </h3>
            @if(Session::has('deleted_category'))
                <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>سامانه اطلاع رسانی هوشمند : </strong>
                    {{session('deleted_category')}}
                </div>
            @endif
            @if(Session::has('added_category'))
                <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>سامانه اطلاع رسانی هوشمند : </strong>
                    {{session('added_category')}}
                </div>
            @endif
            @if(Session::has('updated_category'))
                <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-success alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>سامانه اطلاع رسانی هوشمند : </strong>
                    {{session('updated_category')}}
                </div>
            @endif
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example1">
                    <thead>
                    <tr>
                        <th><input type="checkbox"></th></th>
                        <th>  آیدی</th>
                        <th>  عنوان دسته بندی</th>
                        <th> ویرایش</th>
                        <th>  حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($car_category)
                        <?php $i=1; ?>
                        @foreach($car_category as $categor)
                            @if($i % 2 == 0)
                                <?php $table_class="even gradeC" ?>
                            @else
                                <?php $table_class="odd gradeX" ?>
                            @endif

                            <tr class={{$table_class}}>
                                <td><input type="checkbox"></td>
                                <td>{{$categor->id}}</td>
                                <td class="center">{{$categor->family}}</td>

                                <td class="center"><a href="#"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>


                                {!! Form::open(['method'=>'POST','action'=>['AdminInsuranseController@personalCarCategoryDelete','id'=>$categor->id]]) !!}
                                {{--<input type="hidden" name="cat_id" value="{{$categor->id}}">--}}
                                <td class="center">
                                    {!! Form::button("<i class='fa fa-trash red fa-2x' aria-hidden='true'></i>",['type'=>'submit','style'=>'background: none;border: none;']) !!}
                                </td>

                                {{--<td class="center"><a href="{{route('users.destroy',['id'=>$post->id])}}"><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></a></td>--}}
                                {!! Form::close() !!}

                            </tr>
                            <?php $i = $i +1; ?>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        {{--./car-category-list-table--}}
        <div class="col-lg-6">
            <h3 class="page-header green" style="line-height: 35px;">
                لیست  خودروهای شخصی :
            </h3>
            @if(Session::has('deleted_car'))
                <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>سامانه اطلاع رسانی هوشمند : </strong>
                    {{session('deleted_car')}}
                </div>
            @endif

            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example2">
                    <thead>
                    <tr>
                        <th><input type="checkbox"></th></th>
                        <th>  آیدی</th>
                        <th>  مدل خودرو</th>
                        <th>دسته بندی خودرو</th>
                        <th> ویرایش</th>
                        <th>  حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($personal_car_list)
                        <?php $i=1; ?>
                        @foreach($personal_car_list as $car)
                            @if($i % 2 == 0)
                                <?php $table_class="even gradeC" ?>
                            @else
                                <?php $table_class="odd gradeX" ?>
                            @endif

                            <tr class={{$table_class}}>
                                <td><input type="checkbox"></td>
                                <td>{{$car->id}}</td>
                                <td class="center">{{$car->name}}</td>
                                <td class="center">{{$car->carFamily ? $car->carFamily->family : 'دسته بندی موردنظر موجود نیست!'}}</td>

                                <td class="center"><a href="{{route('categories.edit',['id'=>$car->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>


                                {!! Form::open(['method'=>'POST','action'=>'AdminInsuranseController@personalCarDelete']) !!}
                                <input name="id" type="hidden" value="{{$car->id}}">
                                <td class="center">
                                    {!! Form::button("<i class='fa fa-trash red fa-2x' aria-hidden='true'></i>",['type'=>'submit','style'=>'background: none;border: none;']) !!}
                                </td>

                                {{--<td class="center"><a href="{{route('users.destroy',['id'=>$post->id])}}"><i class="fa fa-trash red fa-2x" aria-hidden="true"></i></a></td>--}}
                                {!! Form::close() !!}

                            </tr>
                            <?php $i = $i +1; ?>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
        </div>
        {{--./car-list-table--}}


    </div>

    @endsection
@section('footer-links')
    <script>
        $(document).ready(function() {
            $('#dataTables-example1').DataTable({
                responsive: true,
                select: {
                    style: 'single'
                }
            });
        });
        $(document).ready(function() {
            $('#dataTables-example2').DataTable({
                responsive: true,
                select: {
                    style: 'single'
                }
            });
        });
    </script>
    <script src="{{asset('admin_assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
    @endsection
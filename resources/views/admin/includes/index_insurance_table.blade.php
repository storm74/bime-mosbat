<div class="container full-width">
    <hr>
    <h1 class="page-header">لیست شرکت های بیمه</h1>
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr>
            <th><input type="checkbox"></th></th>
            <th>  آیدی</th>
            <th>لوگوی شرکت</th>
            <th>نویسنده</th>
            <th>  نام شرکت بیمه</th>
            <th>رضایت</th>
            <th>شعب پرداخت</th>
            <th>زمان پرداخت</th>
            <th>تاریخ افزودن</th>
            <th>تاریخ ویرایش</th>
            <th> ویرایش</th>
            <th>  حذف</th>
        </tr>
        </thead>
        <tbody class="fa_number">
        @if($insurances)
            <?php $i=1; ?>
            @foreach($insurances as $insurance)
                @if($i % 2 == 0)
                    <?php $table_class="even gradeC" ?>
                @else
                    <?php $table_class="odd gradeX" ?>
                @endif

                <tr class={{$table_class}}>
                    <td><input type="checkbox"></td>
                    <td class="fa_number">{{$insurance->id}}</td>
                    <td class="center">
                        @if($insurance->photo)
                            <img src="{{asset($insurance->photo->insurance_image())}}" alt="">
                        @else
                            <h5>عکسی موجود نیست</h5>
                        @endif
                    </td>
                    <td class="center">{{$insurance->user->name}}</td>
                    {{--<td class="center">نویسنده</td>--}}
                    <td>{{$insurance->name}}</td>
                    <td class="fa_number">{{$insurance->satisfactory ? $insurance->satisfactory : 'اطلاعات موجود نیست'}}</td>
                    <td class="fa_number">{{$insurance->branches ? $insurance->branches : 'اطلاعات موجود نیست'}}</td>
                    <td class="fa_number"  >{{$insurance->time_to_ok ? $insurance->time_to_ok : 'اطلاعات موجود نیست'}}</td>
                    <?php
                    $created_at = $insurance->created_at;
                    $updated_at = $insurance->updated_at;
                    $date_create = jDate::forge($created_at)->format('%d %B %Y');
                    $date_update = jDate::forge($updated_at)->ago();
                    ?>
                    <td class="center">{{$date_create}}</td>
                    <td class="center">{{$date_update}}</td>
                    <td class="center"><a href="{{route('insurance.edit',['id'=>$insurance->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>


                    {!! Form::open(['method'=>'DELETE','action'=>['AdminInsuranceController@destroy','id'=>$insurance->id]]) !!}
                    <td class="center">
                        {!! Form::button("<i class='fa fa-trash red fa-2x' aria-hidden='true'></i>",['type'=>'submit','aria-hidden'=>"true",'data-toggle'=>'modal','data-target'=>'#delete','style'=>'background: none;border: none;']) !!}
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
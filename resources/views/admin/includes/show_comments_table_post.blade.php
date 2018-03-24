@if(Session::has('deleted_user'))
    <div style="line-height: 26px;font-size: 106%;font-family: yekan;" class="alert alert-danger alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>سامانه اطلاع رسانی هوشمند : </strong>
        {{session('deleted_comment')}}
    </div>
@endif
<div class="container full-width">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr>
            <th><input type="checkbox"></th></th>
            <th>  آیدی</th>
            <th>نویسنده</th>
            <th>نوشته شده در</th>
            <th>آدرس ایمیل</th>
            <th>متن دیدگاه</th>
            <th>وضعیت</th>
            <th>تاریخ ارسال</th>
            {{--<th> ویرایش</th>--}}
            <th>  حذف</th>
        </tr>
        </thead>
        <tbody class="fa_number">
        @if($comments)
            <?php $i=1;$modal_id = 0;  ?>
            @foreach($comments as $comment)
                <?php $modal_id += 1; ?>
                @if($i % 2 == 0)
                    <?php $table_class="even gradeC" ?>
                @else
                    <?php $table_class="odd gradeX" ?>
                @endif

                <tr class={{$table_class}}>
                    <td><input type="checkbox"></td>
                    <td class="fa_number">{{$comment->id}}</td>
                    <td class="center">{{$comment->author}}</td>
                    <td class="fa_number"><a target="_blank" href="{{route('blog-single',['id'=>$comment->post_id,"title"=>$comment->post->title])}}">{{$comment->post->title}}</a></td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->text}}</td>
                    <?php
                    $comment->status==0 ? $status = "پذیرفتن" : $status = "رد دیدگاه";
                    $comment->status==0 ? $status_class = "btn btn-danger" : $status_class = "btn btn-success";
                    ?>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="{{$status_class}}" data-toggle="modal" data-target="#exampleModal{{$modal_id}}">
                            {{$status}}
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$modal_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal{{$modal_id}}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal{{$modal_id}}Label">سامانه اطلاع رسانی هوشمند</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            آیا از اجرای دستور مطمئن هستید؟( شایدم اتفاقی دستتون خورده!)
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a type="button" class="btn btn-outline-success " data-dismiss="modal">انصراف</a>
                                        {!! Form::open(['method'=>'POST','action'=>'PostCommentsController@approve','style'=>'display:initial','id'=>'approveComment']) !!}
                                        <input type="hidden" value="{{$comment->id}}" name="id">
                                        {!! Form::button("ذخیره اطلاعات",['type'=>'submit','aria-hidden'=>"true",'style'=>'background: none;border: none;']) !!}
                                        {{--<a name="submit" onclick="saeed_ajax('approveComment',null,null,null)" type="submit" class="btn btn-outline-success">ذخیره اطلاعات</a>--}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </td>
                    <?php
                    $created_at = $comment->created_at;
                    $updated_at = $comment->updated_at;
                    $date_create = jDate::forge($created_at)->format('%d %B %Y');
                    ?>
                    <td class="center">{{$date_create}}</td>
                    {{--<td class="center"><a href="{{route('posts.edit',['id'=>$comment->id])}}"><i class="fa fa-edit green fa-2x" aria-hidden="true"></i></a></td>--}}
                    <td>
                        <!-- Button trigger modal -->
                        {{--<button type="button" class="" data-toggle="modal" data-target="#exampleModalDelete{{$modal_id}}">--}}
                            <i style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalDelete{{$modal_id}}" class='fa fa-trash red fa-2x' aria-hidden='true'></i>
                        {{--</button>--}}

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalDelete{{$modal_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalDelete{{$modal_id}}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalDelete{{$modal_id}}Label">سامانه اطلاع رسانی هوشمند</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            توجه داشته باشید که با حذف این دیدگاه تمامی پاسخ های به این دیدگاه نیز حذف می شود.
                                            <br>
                                            آیا از اجرای دستور مطمئن هستید؟( شایدم اتفاقی دستتون خورده!)

                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a type="button" class="btn btn-outline-success " data-dismiss="modal">انصراف</a>
                                        {!! Form::open(['method'=>'DELETE','action'=>['PostCommentsController@destroy','id'=>$comment->id],'style'=>'display:initial']) !!}
                                        {!! Form::button("ذخیره اطلاعات",['type'=>'submit','aria-hidden'=>"true",'style'=>'background: none;border: none;']) !!}
                                        {{--<a name="submit" onclick="saeed_ajax('approveComment',null,null,null)" type="submit" class="btn btn-outline-success">ذخیره اطلاعات</a>--}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </td>
{{--                    {!! Form::open(['method'=>'DELETE','action'=>['PostCommentsController@destroy','id'=>$comment->id]]) !!}--}}
                    {{--<td class="center">--}}
                        {{--{!! Form::button("<i class='fa fa-trash red fa-2x' aria-hidden='true'></i>",['type'=>'submit','aria-hidden'=>"true",'data-toggle'=>'modal','data-target'=>'#delete','style'=>'background: none;border: none;']) !!}--}}
                    {{--</td>--}}
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
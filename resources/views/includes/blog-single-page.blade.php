@if(isset($post))
            <div class="theiaStickySidebar" style="margin-bottom: 3rem;">
                <div class="all-content blog-home-div ">
                    <div class="pic-content" style="width: 100%; height: auto;padding: 1%"><img src="{{asset($post->photo->post_image())}}" style="width: 100%; max-height: 100%;"></div>
                    <hr>
                    <div class="titlle-content" style="color: #444444 ;  padding-left: 10%;  padding-right: 3% ; direction: rtl">
                        <h2> {{$post->title}} </h2>
                        <small>نویسنده :</small>
                        <small>{{$post->user->name}}</small>
                        <?php
                        // format the timestamp
                           $created_at = $post->created_at;
                           $updated_at = $post->updated_at;
                           $date_update =jDate::forge($updated_at)->ago();
                           $date_create = jDate::forge($created_at)->format('%d %B سال %Y');
                        ?>
                        <small class="padding-right-1"><i class="fas fa-calendar-alt"></i></small>
                        <small>{{$date_create}}</small>
                        <small class="padding-right-1">آخرین به روزرسانی : </small>
                        <small>{{$date_update}}</small>
                        <hr>
                    </div>

                    <div class="content-content" style="text-align:justify;color: #666666 ;direction: rtl;padding: 3% ; font-size: 13px; line-height: 2.1em">
                        {!! $post->content !!}
                    </div>
                </div>
                {{--comment section--}}
                @include('admin.includes.blog-single-comment-section')
            </div>
    {{--./theiaStickySidebar--}}
@endif


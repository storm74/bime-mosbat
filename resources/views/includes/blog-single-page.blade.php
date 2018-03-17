@if(isset($post))
            <div class="theiaStickySidebar">
                <div class="all-content blog-home-div ">
                    <div class="pic-content" style="width: 100%; height: auto;padding: 1%"><img src="{{asset($post->photo->post_image())}}" style="width: 100%; max-height: 100%;"></div>
                    <hr>
                    <div class="titlle-content" style="color: #444444 ;  padding-left: 10%;  padding-right: 3% ; direction: rtl">
                        <h2> {{$post->title}} </h2>
                        <small>نویسنده :</small>
                        <small>{{$post->user->name}}</small>
                        <small class="padding-right-9">تاریخ انتشار : </small>
                        <small>{{$post->created_at->diffForHumans()}}</small>
                        <hr>

                    </div>

                    <div class="content-content" style="text-align:justify;color: #666666 ;direction: rtl;padding: 3% ; font-size: 13px; line-height: 2.1em"> <p>
                            {{$post->content}}
                        </p>
                    </div>

                </div>
            </div>

@endif
<script>

</script>

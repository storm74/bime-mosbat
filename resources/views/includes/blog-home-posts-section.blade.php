@if(isset($posts))
    <?php $n=0; ?>
    @foreach($posts as $post)
        @if($post->status==1)
<div class="theiaStickySidebar">
    <div class="all-content blog-home-div ">
        <div class="pic-content" style="width: 100%; height: auto;padding: 1%"><img src="{{asset($post->photo->post_image())}}" style="width: 100%; max-height: 100%;"></div>
        <hr>
        <div class="titlle-content" style="color: #444444 ;  padding-left: 10%;  padding-right: 3% ; direction: rtl"><h2> {{$post->title}} </h2></div>

        <div class="content-content" style="text-align:justify;color: #666666 ;direction: rtl;padding: 3% ; font-size: 13px; line-height: 2.1em"> <p>
                {!! str_limit($post->content,690,' ...') !!}
            </p>
            <a  href="{{route('blog-single',['slug'=>$post->slug])}}" class="btn btn-outline-success float-left xs-full-width blog-home-button">ادامه مطلب</a>
            {{--<div class="like-print" style="color: #444444 ;  float: left; padding-bottom: 5%; margin-bottom: 2%">--}}
                {{--<ul>--}}
                    {{--<li><a href="#"> <img src="{{asset('front_assets/pic-video/chat.png')}}" width="30" height="30">  </a></li>--}}
                    {{--<li><a href="#"> <img src="{{asset('front_assets/pic-video/heart.png')}}" width="30" height="30">  </a></li>--}}
                    {{--<li><a href="#"> <img src="{{asset('front_assets/pic-video/print.png')}}" width="30" height="30">  </a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>

    </div>
</div>
<?php $n=$n+1 ?>
@endif
@endforeach

    @if($n==0)
        <h1 class="center" style="margin-right:-10%; background: #F44336; padding: 200px; border-radius: 3px; color: #fff;">
            مطلبی منتشر نشده است
        </h1>

    @endif

@endif

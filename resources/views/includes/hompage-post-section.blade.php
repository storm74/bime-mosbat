<section class="slide kenBurns page4 after" data-title=" آخرین مقالات و اخبار وبلاگ " name="page4">
    <div class="container-fixed">

        <div class="row">
            <div class="homepic col-lg-12">

                <div class="titlepage4 col-lg-12 ">

                    آخرین مقالات و اخبار وبلاگ
                </div>
                <div class="blogpost col-lg-12 ">


                    @if(isset($posts))
                        <?php $n=0; ?>
                        @foreach($posts as $post)

                            @if($post->status==1 && $n<3)
                        <a href="#"><ul>
                                <li>
                                    <div class="picblog"><img src="{{$post->photo->post_image()}}"></div>
                                    <div class="titleblog"><h3>{{$post->title}}</h3></div>
                                    <div class="contentblog"><p>
                                           {{str_limit($post->content,290,' ...')}}
                                        </p></div>
                                </li>
                            </ul>
                        </a>
                                <?php $n=$n+1 ?>
                            @endif
                        @endforeach
                        @if($n==0)

                                    <h1 class="center" style="margin-right:-10%; background: #F44336; padding: 200px; border-radius: 3px; color: #fff;">
                                        مطلبی منتشر نشده است
                                    </h1>



                            @endif
                        @endif
                </div>
                <a href="{{route('blog-home')}}"><div class="moreblog col-lg-12"><p>
                            نمایش بیشتر ...
                        </p> </div> </a>

            </div>

        </div>
    </div>
</section>
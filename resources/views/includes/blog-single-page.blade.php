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

                    <div class="content-content" style="text-align:justify;color: #666666 ;direction: rtl;padding: 3% ; font-size: 13px; line-height: 2.1em"> <p>
                            {{$post->content}}
                        </p>
                    </div>
                </div>
                {{--./allcontent--}}
                {{--./start comment section--}}
                {{--//comment add--}}
                <div id="comments" class="blog-home-div">
                    <h2 class="padding-bottom-3 pad-lg-10">دیدگاهی ارسال نمایید:</h2>

                    <div class="pad-lg-10">
                        <div style="display: hidden" id="result">

                        </div>
                        {!! Form::open(['method'=>'POST','action'=>'PostsController@commentStore','id'=>'commentsend']) !!}
                        <input type="hidden" value="{{$post->id}}" name="post_id">
                        @if(Auth::check())
                            <?php $user = $user = Auth::user();
                            $is_user = true;
                            $isAdmin = $user->isAdmin();
                            ?>
                        @else
                            <?php $is_user = false ?>
                        @endif
                        @if($is_user==false)
                            <div class="form-group">
                                <label for="author">نام :</label>
                                <input required="" type="text" class="form-control" name="author" value="">
                            </div>
                            <div class="form-group">
                                <label for="email">آدرس ایمیل شما :</label>
                                <input required="" type="email" class="form-control" name="email" value="">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="text">متن دیدگاه : </label>
                            <textarea id="commentSendEmpty" name="text" class="form-control" rows="3"></textarea>
                        </div>
                        <button onclick="saeed_ajax('commentsend','result','commentSendEmpty')" id="commentsendbtn" type="submit" name="submit" class="btn btn-outline-success">ارسال دیدگاه</button>
                        {!! Form::close() !!}
                    </div>
                        {{--ajax-request--}}


                </div>
                {{--#/comments--}}
               {{--all comment show section--}}
                <div id="all-comment-show" class="blog-home-div">
                    <div class="container">
                        <div class="row">
                            <!-- Contenedor Principal -->
                            <div class="comments-container">
                                @if(count($post->postComments)==0)
                                    <h4 class="alert alert-success">
                                        اولین فردی باشید که نظر خود را در مورد این نوشته منتشر می نماید
                                    </h4>
                                    @else
                                    <ul id="comments-list" class="comments-list">
                                        @foreach($post->postComments as $comment)
                                            <li>
                                                <div class="comment-main-level">
                                                    <!-- Avatar -->
                                                    <?php
                                                    $comment->author == $post->user->name ? $author=true:$author=false;?>
                                                    <div class="comment-avatar"><img src="{{$author ? asset($post->user->photo->user_image()):""}}" alt=""></div>
                                                    <!-- first level comment -->
                                                    <div class="comment-box">
                                                        <div class="comment-head">

                                                            <h6 class="comment-name {{$author ? "by-author" : "nothing"}}"><a href="">{{$comment->author}}</a></h6>
                                                            <span>{{jDate::forge($comment->created_at)->ago()}}</span>
                                                            <i class="fa fa-reply"></i>
                                                            <i class="fa fa-heart"></i>
                                                        </div>
                                                        <div class="comment-content">
                                                            {{$comment->text}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--reply list of comments -->
                                                <ul class="comments-list reply-list">
                                                    @foreach($comment->replies as $reply)
                                                        <?php
                                                        $reply->author == $post->user->name ? $r_author=true:$r_author=false;
                                                        ?>
                                                            <li>
                                                                <!-- Avatar -->
                                                                <div class="comment-avatar"><img src="{{$r_author ? asset($post->user->photo->user_image()):""}}" alt=""></div>
                                                                <!-- reply first level -->
                                                                <div class="comment-box">
                                                                    <div class="comment-head">
                                                                        <h6 class="comment-name {{$r_author ? "by-author" : "nothing"}}"><a href="">{{$reply->author}}</a></h6>
                                                                        <span>{{jDate::forge($reply->created_at)->ago()}}</span>
                                                                        <i class="fa fa-reply"></i>
                                                                        <i class="fa fa-heart"></i>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        {{$reply->text}}
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach

                                                </ul>
                                            </li>
                                            @endforeach

                                        {{--<li>--}}
                                            {{--<div class="comment-main-level">--}}
                                                {{--<!-- Avatar -->--}}
                                                {{--<div class="comment-avatar"><img src="" alt=""></div>--}}
                                                {{--<!-- Contenedor del Comentario -->--}}
                                                {{--<div class="comment-box">--}}
                                                    {{--<div class="comment-head">--}}
                                                        {{--<h6 class="comment-name by-author"><a href="">سعید باباپور</a></h6>--}}
                                                        {{--<span>hace 20 minutos</span>--}}
                                                        {{--<i class="fa fa-reply"></i>--}}
                                                        {{--<i class="fa fa-heart"></i>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="comment-content">--}}
                                                        {{--متن دیدگاه--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<!-- Respuestas de los comentarios -->--}}
                                            {{--<ul class="comments-list reply-list">--}}
                                                {{--<li>--}}
                                                    {{--<!-- Avatar -->--}}
                                                    {{--<div class="comment-avatar"><img src="" alt=""></div>--}}
                                                    {{--<!-- Contenedor del Comentario -->--}}
                                                    {{--<div class="comment-box">--}}
                                                        {{--<div class="comment-head">--}}
                                                            {{--<h6 class="comment-name"><a href="">Lorena Rojero</a></h6>--}}
                                                            {{--<span>hace 10 minutos</span>--}}
                                                            {{--<i class="fa fa-reply"></i>--}}
                                                            {{--<i class="fa fa-heart"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="comment-content">--}}
                                                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</li>--}}

                                                {{--<li>--}}
                                                    {{--<!-- Avatar -->--}}
                                                    {{--<div class="comment-avatar"><img src="" alt=""></div>--}}
                                                    {{--<!-- Contenedor del Comentario -->--}}
                                                    {{--<div class="comment-box">--}}
                                                        {{--<div class="comment-head">--}}
                                                            {{--<h6 class="comment-name by-author"><a href="">Agustin Ortiz</a></h6>--}}
                                                            {{--<span>hace 10 minutos</span>--}}
                                                            {{--<i class="fa fa-reply"></i>--}}
                                                            {{--<i class="fa fa-heart"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="comment-content">--}}
                                                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--./container--}}
                </div>
                {{--all comment show section--}}

            </div>
    {{--./theiaStickySidebar--}}
@endif





<div class="theiaStickySidebar">
    <div class="all-content " style="padding-bottom: 15px;height:auto;-webkit-box-shadow: 0 10px 6px -2px #777;
-moz-box-shadow: 0 10px 6px -2px #777;
box-shadow: 0 2px 6px -2px #777;background-color: #fff !important ;width: 98%;margin-top:2.4%;  -moz-border-radius: 2px;
                    -webkit-border-radius: 2px;
                    border-radius: 2px;">
        <div class="row">
<div style="color: #0c0c0c" class="col-lg-12">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
@if(Auth::user())
<h4 style="padding: 21px 38px 0px 0;" > {{ Auth::user()->name }} خوش آمدید </h4>
            <a style="margin: 18px 0 0px 42px;float: left;" class="p-pbutton" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                خروج
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
@endif





</div>
<div class="u-column1 col-lg-5 " style="    margin-right: 5%;">
    <img src="{{asset('front_assets/pic-video/user.png')}}" width="50" height="50"> <h2>ورود</h2>
    <hr>

    <form method="post" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <p class="p-username">
            <label for="username">آدرس ایمیل <span class="required">*</span></label>
            <input type="text" class="" name="email" id="email" name="email" placeholder="ایمیل را وارد نمایید ..." value="" required autofocus>
        </p>
        <p class="p-username {{ $errors->has('email') ? ' has-error' : '' }}">
            @if ($errors->has('email'))
                <span  class="help-block">
                    <h6 style="color: darkred">{{ $errors->first('email') }}</h6>
                </span>
            @endif
        </p>
        <p class="p-password">
            <label for="password">رمز عبور  <span class="required">*</span></label>
            <input class="" type="password" name="password" id="password" name="password" required placeholder="رمز عبور خود را وارد نمایید ...">
        </p>
        <p class="p-password {{ $errors->has('password') ? ' has-error' : '' }}">
            @if ($errors->has('password'))
                <span  class="help-block">
                    <h6 style="color: darkred">{{ $errors->first('password') }}</h6>
                </span>
            @endif
        </p>


        <p class="p-form-row">
            <input type="submit" class="p-pbutton" value="ورود">
            <label for="remember" class="inline">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> مرا به خاطر بسپار
            </label>
        </p>
        <a href="#"><input type="submit" class="p-pbutton" name="login" value="فراموشی رمز عبور"></a>

        </p>


    </form>
</div>
<div class="u-column1 col-lg-5 " style=" margin-right: 5%;">
    <img src="{{asset('front_assets/pic-video/add-user.png')}}" width="50" height="50"> <h2>ثبت نام </h2>
    <hr>

    <form class="login" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <p class="name">
            <label for="name">نام و نام خانوادگی <span class="required">*</span></label>
            <input type="text" class="" name="name" id="name" placeholder="نام کامل خود را وارد نمایید ..."  value="{{ old('name') }}" required autofocus>
        </p>
        <p class="p-username {{ $errors->has('name') ? ' has-error' : '' }}">
            @if ($errors->has('name'))
                <span  class="help-block">
                    <h6 style="color: darkred">{{ $errors->first('name') }}</h6>
                </span>
            @endif
        </p>
        <p class="email">
            <label for="email">آدرس ایمیل <span class="required">*</span></label>
            <input type="text" class="" name="email" value="{{ old('email') }}" required id="username" placeholder="نام کاربری یا ایمیل را وارد نمایید ...">
        </p>
        <p class="p-username {{ $errors->has('email') ? ' has-error' : '' }}">
            @if ($errors->has('email'))
                <span  class="help-block">
                    <h6 style="color: darkred">{{ $errors->first('email') }}</h6>
                </span>
            @endif
        </p>
        <p class="p-password">
            <label for="password">رمز عبور  <span class="required">*</span></label>
            <input class="" type="password" name="password" id="password" placeholder="رمز عبور خود را وارد نمایید ...">
        </p>
        <p class="p-username {{ $errors->has('password') ? ' has-error' : '' }}">
            @if ($errors->has('password'))
                <span  class="help-block">
                    <h6 style="color: darkred">{{ $errors->first('password') }}</h6>
                </span>
            @endif
        </p>
        <p class="p-password">
            <label for="password">تکرار رمز عبور  <span class="required">*</span></label>
            <input class="" type="password" name="password_confirmation" required id="password" placeholder="رمز عبور خود را وارد نمایید ...">
        </p>


        <p class="p-form-row">
            <input type="submit" class="p-pbutton" name="login" value="ثبت نام">

        </p>


    </form>
</div>
        </div>
        <style>
            p .resetpass{padding: 10%; color: #666666}
            .u-column1 img{float: right; }
            .u-column1{ padding-top: 5%;margin-bottom: 5%;}
            .login    {padding-right: 5%;margin-bottom: 5%;padding-top: 5%; border: solid 1px rgba(187, 187, 187, 0.46);
                border-radius: 2px; }
            .u-column1 h2 {color:#57BC72; }
            .p-username label, .p-password label, .p-form-row label{color: #666666;font-size: 14px; }
            .p-form-row input {background-color: #57BC72 ; border-radius: 2px; border: solid 1px #57BC72}
            .p-pbutton  {background-color: #57BC72 ; border-radius: 2px; border: solid 1px #57BC72}
            .p-pbutton { color: #fff;
                padding-top: 8px;
                padding-bottom: 8px;
                padding-left: 15px;
                padding-right: 15px;
                border-radius: 2px;}
        </style>

    </div>



</div>
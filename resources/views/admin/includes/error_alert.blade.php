@if(count($errors) >0)
    <style>
        .diamond_alert{
            font-size: 90%;
            line-height: 30px;
        }
        .diamond_alert ul {
            list-style: none; /* Remove list bullets */
            padding: 0;
            margin: 0;
        }

        .diamond_alert ul li {
            padding-left: 16px;
        }

        .diamond_alert ul li:before {
            font-family: FontAwesome;
            /*content: "\f06a";*/
            content: "\f12a";
            font-size: 125%;
            padding-left: 8px;
            color: red;
        }
    </style>
    <p class="secondary-color">لطفا ملاحظات زیر را اعمال کنید و یا در صورت نیاز با اپراتور تماس بگیرید</p>
    <div class="diamond_alert alert alert-danger">
        <ul>
            @foreach($errors ->all() as $error)
                <li class="fa_number">{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

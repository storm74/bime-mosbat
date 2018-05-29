{!! Form::open(['method'=>'POST','action'=>'FrontInsuranceController@fireInsuranceResultPage','id'=>'fireInsuranceAjax','target'=>'_blank']) !!}
<input type="hidden" name="metr_sakht_hazine" value="1000000">
<div class="row">
    <ul>
        <li>
            <select  style="height: calc(2.25rem + 11px)" required class="form-control saeed-input" name="saze" id="exampleFormControlSelect1">
                <option disabled>انتخاب کنید...</option>
                <option value="ef">اسکلت فلزی</option>
                <option value="eb">اسکلت بتنی</option>
            </select>
        </li>
        <li>
            <span class="badane-span">متراژ ساختمان : </span>  <input name="metr" placeholder="متراژ ساختمان ..." class="badane-value" type="text">
        </li>
        <li>
            <span class="badane-span">ارزش لوازم منزل : </span>  <input name="lavazem" placeholder="ارزش لوازم منزل ..." class="badane-value" type="text">
        </li>

        <li>

            <button  type="submit" name="submit" class="dropbtn btnenter"><img src="{{asset('front_assets/pic-video/search.png')}}"> مقایسه کن ... !  </button>

            {!! Form::close() !!}
        </li>


    </ul>
</div>
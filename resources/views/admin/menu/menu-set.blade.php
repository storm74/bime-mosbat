@extends('layouts.admin')
{{--@section('header-links')--}}
{{--@endsection()--}}
@section('page-header')
        سفارشی سازی منوهای سایت
@endsection
@section('main-content')

    @foreach($places as $place)
    {!! Form::open(['method'=>'POST','action'=>'MenuController@menuPlaceUpdate','class'=>'form-inline']) !!}
    <div class="form-group" style="padding: 20px;">
        <label clas for="">{{$place->place_name}} : </label>
        <input type="hidden" name="place_id" value="{{$place->id}}">
        <select style="padding: 0px 10px 0px 0;" class="form-control" name="menu_id" id="">

            <option {{$place->menu_id==null ? "selected" : ""}} value="" disabled  >منوی موردنظر را انتخاب کنید</option>
            @foreach($menus as $menu)

                <option {{$place->menu_id==$menu->id ? "selected" : ""}} value="{{$menu->id}}">
                    {{$menu->name}}
                </option>
            @endforeach
        </select>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">به روزرسانی</button>
        </div>

    </div>
    {{--./form-group--}}

    </form>
    {{--./form--}}
    @endforeach
@endsection
@section('footer-links')
@endsection()
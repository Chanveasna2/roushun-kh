@extends('frontend.fragement.layout')

@section('content1')
    <div class="container" id="aboutus">
        <div class="row">
            <div class="col-md-7">
                @foreach($sys_static as $sys_statics)
                <h4 class="title">{{$sys_statics->static_name}}</h4>
                <p class="about_company">{{$sys_statics->static_value_first}}</p>

            </div>
            <div class="col-md-5 hovereffect" id="about1">
                <img src="{{$sys_statics->photo->file}}" class="image1">
            </div>
            @endforeach
        </div>
    </div>
    <div class="container" id="mission">
        <div class="row">
            @foreach($sys_static2 as $sys_statics)
            <div class="col-md-5 hovereffect" id="about2">
                <img src="{{$sys_statics->photo->file}}"  class="image2">
            </div>
            <div class="col-md-7">

                <h4 class="title" id="title_vision">{{$sys_statics->static_name}}</h4>
                <p class="vision">{{$sys_statics->static_value_first}}</p>
                @endforeach
                    @foreach($sys_static3 as $sys_statics)
                    <h4 class="title">{{$sys_statics->static_name}}</h4>
                <p class="mission">{{$sys_statics->static_value_first}}</p>
                    @endforeach
            </div>
        </div>
    </div>
@stop

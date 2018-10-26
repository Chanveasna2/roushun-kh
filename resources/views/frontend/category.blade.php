@extends('frontend.fragement.layout')

@section('content1')
    <!----------------សាប៊ូកក់សក់---------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><b>សាប៊ូកក់សក់</b></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
                        {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                @foreach($pro as $pro)
                                    <div class="col-sm-4">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="{{$pro->photo->file}}" class="img-responsive img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>{{$pro->pro_name}}</h4>
                                                <p class="item-price"><strike></strike> <span>${{$pro->prices}}</span></p>
                                                <a href="#" class="btn btn-primary">View detail</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container">--}}
                {{--<div id="myCarousel123" class="carousel slide" data-ride="carousel" >--}}
                    {{--<!-- Carousel indicators -->--}}
                {{--<ol class="carousel-indicators">--}}
                {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
                {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
                {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
                {{--</ol>--}}
                {{--<!-- Wrapper for carousel items -->--}}
                    {{--<div class="carousel-inner row" role="listbox">--}}
                        {{--<div class="item carousel-item col-md-3 active">--}}
                            {{--<div class="thumb-wrapper">--}}
                                {{--<div class="img-box">--}}
                                    {{--<img src="" class="img-responsive img-fluid" alt="slide">--}}
                                {{--</div>--}}
                                {{--<div class="thumb-content">--}}
                                    {{--<h4>1</h4>--}}
                                    {{--<p class="item-price"><strike></strike> <span>1</span></p>--}}
                                    {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--@foreach($pro as $pros)--}}
                            {{--<div class="item carousel-item col-md-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="{{$pros->photo->file}}" class="img-responsive img-fluid" alt="slide">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>{{$pros->pro_name}}</h4>--}}
                                            {{--<p class="item-price"><strike></strike> <span>${{$pros->prices}}</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                    {{--<!-- Carousel controls -->--}}
                    {{--<a class="carousel-control left carousel-control-prev" href="#myCarousel123" role="button" data-slide="prev">--}}
                        {{--<i class="fa fa-angle-left"></i>--}}
                    {{--</a>--}}
                    {{--<a class="carousel-control right carousel-control-next" href="#myCarousel123" role="button" data-slide="next">--}}
                        {{--<i class="fa fa-angle-right"></i>--}}
                    {{--</a>--}}
                {{--</div>--}}
    {{--</div>--}}







    <!----------------សាប៊ូលាងខ្លួន---------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><b>សាប៊ូលាងខ្លួន</b></h2>
                <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        {{--<li data-target="#myCarousel2" data-slide-to="1"></li>--}}
                        {{--<li data-target="#myCarousel2" data-slide-to="2"></li>--}}
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                @foreach($pro1 as $pro)
                                <div class="col-sm-4">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img src="{{$pro->photo->file}}" class="img-responsive img-fluid" alt="">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>{{$pro->pro_name}}</h4>
                                            <p class="item-price"><strike></strike> <span>${{$pro->prices}}</span></p>
                                            <a href="#" class="btn btn-primary">View detail</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                        {{--<div class="item carousel-item">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/berry.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Sony Play Station</h4>--}}
                                            {{--<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/green.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Macbook Pro</h4>--}}
                                            {{--<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/berry.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Bose Speaker</h4>--}}
                                            {{--<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/green.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Galaxy S8</h4>--}}
                                            {{--<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item carousel-item">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/yellow.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Apple iPhone</h4>--}}
                                            {{--<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/berry.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Canon DSLR</h4>--}}
                                            {{--<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel2" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel2" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <!----------------សាប៊ូលាងចាន---------------------->
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<h2><b>សាប៊ូលាងចាន</b></h2>--}}
                {{--<div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="0">--}}
                    {{--<!-- Carousel indicators -->--}}
                    {{--<ol class="carousel-indicators">--}}
                        {{--<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>--}}
                        {{--<li data-target="#myCarousel3" data-slide-to="1"></li>--}}
                        {{--<li data-target="#myCarousel3" data-slide-to="2"></li>--}}
                    {{--</ol>--}}
                    {{--<!-- Wrapper for carousel items -->--}}
                    {{--<div class="carousel-inner">--}}
                        {{--<div class="item carousel-item active">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/red.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Apple iPad</h4>--}}
                                            {{--<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/white.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Sony Headphone</h4>--}}
                                            {{--<p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/black.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Macbook Air</h4>--}}
                                            {{--<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/red.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Nikon DSLR</h4>--}}
                                            {{--<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item carousel-item">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/white.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Sony Play Station</h4>--}}
                                            {{--<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/black.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Macbook Pro</h4>--}}
                                            {{--<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/red.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Bose Speaker</h4>--}}
                                            {{--<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/white.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Galaxy S8</h4>--}}
                                            {{--<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item carousel-item">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/black.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Apple iPhone</h4>--}}
                                            {{--<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="thumb-wrapper">--}}
                                        {{--<div class="img-box">--}}
                                            {{--<img src="/images/category_product/red.png" class="img-responsive img-fluid" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="thumb-content">--}}
                                            {{--<h4>Canon DSLR</h4>--}}
                                            {{--<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>--}}
                                            {{--<a href="#" class="btn btn-primary">View detail</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Carousel controls -->--}}
                    {{--<a class="carousel-control left carousel-control-prev" href="#myCarousel3" data-slide="prev">--}}
                        {{--<i class="fa fa-angle-left"></i>--}}
                    {{--</a>--}}
                    {{--<a class="carousel-control right carousel-control-next" href="#myCarousel3" data-slide="next">--}}
                        {{--<i class="fa fa-angle-right"></i>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@stop

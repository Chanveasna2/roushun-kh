@extends('frontend.fragement.layout')

    @section('content1')

        {{--<div class="container">--}}
            {{--<img src="/images/under_maintenance.png" class="mx-auto d-block" id="mainenance">--}}
        {{--</div>--}}
        <div class="container-fluid" style="padding: 0px; margin: 0px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/rwhite.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/rblack.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/rred.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="container" style="background-color: #ea262a;border-top-right-radius: 10px;border-top-left-radius: 10px;margin-top: 10px">
            <div style="background-color: #ea262a; height: 30px;margin-top: 10px;color: white;">LOGO COLLECTION</div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 ">
                        <img src="/images/1.jpg" class="img-responsive img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <img src="/images/2.jpg" class="img-responsive img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="background-color: #07a7db;border-top-right-radius: 10px;border-top-left-radius: 10px;margin-top: 10px">
            <div style="background-color: #07a7db; height: 30px;margin-top: 10px; color: white;">All Products</div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    @foreach($pro as $pro)
                        <div class="col-md-3 item">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{$pro->photo->file}}" class="img-responsive img-fluid">
                            </div>
                            <div class="thumb-content">
                                <h4>{{$pro->pro_name}}</h4>
                                <p class="item-price"><strike></strike> <span>${{$pro->prices}}</span></p>
                            </div>
                        </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>

    @stop

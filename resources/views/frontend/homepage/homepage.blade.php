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
        <div class="container" style="margin-top: 30px">
            <div class="row">
                @foreach($promotion as $prom)
                <div class="col-md-4 w-auto">
                    <figure class="imghvr-push-up">
                            <img src="{{$prom->photo->file}}">
                        <figcaption>
                            <img src="{{$prom->photo->file}}" data-toggle="modal" data-target="#{{$prom->promo_name}}">
                        </figcaption>
                    </figure>
                </div>


                <!---------------Model--------------->
                    <div class="modal fade" id="{{$prom->promo_name}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$prom->promo_name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>{{$prom->desc}}</p>
                                    <img src="{{$prom->photo->file}}">
                                </div>
                                {{--<div class="modal-footer">--}}
                                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    <!--------------End-Model--------------->
                @endforeach
            </div>
            <hr>
        </div>


        {{--<div class="container" style="margin-top: 30px;">--}}
           {{--<div class="row">--}}
               {{--<div class="col-md-12">--}}
                  {{--<h2 style="color:#07a7db;text-align: left;">Popular Products</h2>--}}
               {{--</div>--}}
           {{--</div>--}}

           {{--<div class="row">--}}
               {{--@foreach($pro_popular as $pross)--}}
                   {{--<div class="col-lg-3 hovereffect" style="padding-right: 0px">--}}
                       {{--<img src="{{$pross->photo->file}}" class="img-responsive img-fluid w-100" style="height: 250px">--}}
                       {{--<div class="overlay">--}}
                           {{--<a class="info" href="#">WelCome</a>--}}
                       {{--</div>--}}
                   {{--</div>--}}
               {{--@endforeach--}}
           {{--</div>--}}

        {{--</div>--}}

        <div class="container" style="margin-top: 50px;">
            <div class="row w-auto">
                @foreach($pro_popular as $prod)
                    <div class="col-md-3" style="height: 100%">
                        <figure class="card card-product hovereffect">
                            <div class="img-wrap"><img src="{{$prod->photo->file}}" data-toggle="modal" data-target="#exampleModal2"></div>
                            <figcaption class="info-wrap" style="padding-bottom: 0px">
                                <h4 class="title">{{$prod->pro_name}}</h4>
                                <p class="desc" >{{str_limit($prod->desc,50)}}</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#roushun{{$prod->id}}">View Detail</button>
                                <div class="price-wrap h5">
                                    <span class="price-new">${{$prod->prices}}</span> <del class="price-old"></del>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- bottom-wrap.// -->
                        </figure>
                    </div> <!-- col // -->

                    <!---------------Model--------------->
                    <div class="modal fade" id="roushun{{$prod->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">{{$prod->pro_name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>{{$prod->desc}}</p>
                                    <img src="{{$prod->photo->file}}">
                                </div>
                                {{--<div class="modal-footer">--}}
                                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    <!--------------End-Model--------------->

                @endforeach
            </div> <!-- row.// --><hr>
        </div> <!---------end contianer---------->




        <div class="container" style="margin-top: 10px;margin-bottom: 30px">
            <div class="row">
                <div class="col-md-4 w-auto">
                    @foreach($sys_static as $sys_static)
                    <h5 style="color:blue; margin-top: 10px">{{$sys_static->static_name}}</h5>
                    <img src="{{$sys_static->photo->file}}" style="width: 290px;height: 190px">
                        @endforeach
                </div>
                <div class="col-md-4 w-auto">
                    <h5 style="color:blue; margin-top: 10px">ដៃគូចែកចាយ</h5>
                    <img src="images/distribution-map.png" style="width: 290px;height: 190px">
                </div>

                <div class="col-md-4 w-auto">
                    <h5 style="color:blue;margin-top: 10px">ផលិតផល</h5>
                    <iframe width="290px" height="190px" src="https://www.youtube.com/embed/VLMD0WR9Y6g"  allow="autoplay;" >
                    </iframe>
                </div>
            </div>
        </div>

    @stop

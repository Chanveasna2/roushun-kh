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
                <div class="col-md-4 w-auto">
                    <figure class="imghvr-push-up">
                            <img src="images/promotion/promotion1.png">
                        <figcaption>
                            <img src="images/promotion/promotion2.png">
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 w-auto" >
                    <figure class="imghvr-push-down">
                            <img src="images/promotion/promotion2.png">
                        <figcaption>
                            <img src="images/promotion/promotion1.png">
                        </figcaption>
                    </figure>

                </div>
                <div class="col-md-4 w-auto" >
                    <img src="images/promotion/promotion3.png">
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 30px;">
           <div class="row">
               <div class="col-md-12">
                  <h2 style="color:#07a7db;text-align: left;">Popular Products</h2>
               </div>
           </div>

           <div class="row">
               @foreach($pros as $pross)
                   <div class="col-lg-3 hovereffect" style="padding-right: 0px">
                       <img src="/images/1.jpg" class="img-responsive img-fluid w-100" style="height: 250px">
                       <div class="overlay">
                           <a class="info" href="#">WelCome</a>
                       </div>
                   </div>
               @endforeach
                   {{--<div class="col-lg-6" style="padding-left: 0px">--}}
                       {{--<img src="/images/500.png" class="img-responsive img-fluid w-100" style="height: 250px">--}}
                   {{--</div>--}}
                   {{--<div class="col-lg-6 " style="padding-right: 0px">--}}
                       {{--<img src="/images/2.jpg" class="img-responsive img-fluid w-100" style="height: 250px">--}}
                   {{--</div>--}}
                   {{--<div class="col-lg-6" style="padding-left: 0px">--}}
                       {{--<img src="/images/1.jpg" class="img-responsive img-fluid w-100" style="height: 250px">--}}
                   {{--</div>--}}
           </div>

        </div>

        <div class="container" style="margin-top: 50px;">
            <div class="row w-auto">
                @foreach($pro as $pro)
                    <div class="col-md-4">
                        <figure class="card card-product">
                            <div class="img-wrap"><img src="{{$pro->photo->file}}"></div>
                            <figcaption class="info-wrap">
                                <h4 class="title">{{$pro->pro_name}}</h4>
                                <p class="desc">{{$pro->desc}}</p>
                                <div class="rating-wrap">
                                    <div class="label-rating"></div>
                                    <div class="label-rating"></div>
                                </div> <!-- rating-wrap.// -->
                            </figcaption>
                            <div class="bottom-wrap">
                                <a href="#" class="btn btn-sm btn-primary float-right">View Detail</a>
                                <div class="price-wrap h5">
                                    <span class="price-new">${{$pro->prices}}</span> <del class="price-old"></del>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- bottom-wrap.// -->
                        </figure>
                    </div> <!-- col // -->
                @endforeach
                </div> <!-- row.// -->
            <hr>
            </div> <!---------end contianer---------->




        <div class="container" style="margin-top: 10px;margin-bottom: 30px">
            <div class="row">
                <div class="col-md-4 w-auto">
                    <h5 style="color:blue; margin-top: 10px">អំពីក្រុមហ៊ុន</h5>
                    <img src="images/other/home-box-1.png" style="width: 290px;height: 190px">
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

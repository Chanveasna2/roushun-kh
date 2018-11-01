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
                    @foreach($slide1 as $slide)
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{$slide->photo?$slide->photo->file :'https://via.placeholder.com/1024x256'}}" alt="{{$slide->slide_name}}">
                    </div>
                    @endforeach
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

        <!---- Promotion ---->
        <div class="container" style="margin-top: 30px">
            <div class="row">
                @foreach($promotion as $prom)
                <div class="col-md-4 w-auto">
                    <figure class="imghvr-push-up">
                            <img  src="{{$prom->photo->file}}" style="width: 303.33px">
                        <figcaption>
                            <img src="{{$prom->photo->file}}" data-toggle="modal" data-target="#cam{{$prom->id}}">
                        </figcaption>
                    </figure>
                </div>


                <!---------------Model--------------->
                    <div class="modal fade" id="cam{{$prom->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <!---- Promotion End ---->

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

        <!---- Popular Product --->
        <div class="container" style="margin-top: 50px;">
            <div class="row w-auto">
                @foreach($pro_popular as $prod)
                    <div class="col-md-3" style="height: 100%">
                        <figure class="card card-product hovereffect">
                            <div class="img-wrap"><img src="{{$prod->photo->file}}" data-toggle="modal" data-target="#exampleModal2"></div>
                            <figcaption class="info-wrap" style="padding-bottom: 0px">
                                <h4 class="title">{{$prod->pro_name}}</h4>
                                <p class="desc" >{{str_limit($prod->desc,40)}}</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#roushun{{$prod->id}}">View Detail</button>
                                <div class="price-wrap h5">
                                    <span class="price-new">${{$prod->prices}}</span> <del class="price-old"></del>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- bottom-wrap.// -->
                        </figure>
                    </div> <!-- col // -->
                @endforeach
            </div> <!-- row.// --><hr>
        </div> <!---------end contianer---------->

        @foreach($pro_popular as $product)
            <!---------------Model--------------->
            {{--<div class="modal fade" id="roushun{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">--}}
                {{--<div class="modal-dialog" role="document">--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header">--}}
                            {{--<h5 class="modal-title" id="exampleModalLabel2">{{$product->pro_name}}</h5>--}}
                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                {{--<span aria-hidden="true">&times;</span>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body">--}}
                            {{--<div >--}}
                                {{--<div>{{$product->desc}}LOVELOVELOVELOVELOVELOVELOVELOVELOVELOVELOVELOVELOVE</div>--}}
                                {{--<img src="{{$product->photo->file}}">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                        {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="modal fade product_view" id="roushun{{$product->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            <h3 class="modal-title">{{$product->pro_name}}</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 product_img">
                                    <img src="{{$product->photo->file}}" class="img-responsive">
                                </div>
                                <div class="col-md-6 product_content">
                                    <h4>Product Code: <span>{{$product->pro_code}}</span></h4>
                                    {{--<div class="rating">--}}
                                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                                        {{--<span class="glyphicon glyphicon-star"></span>--}}
                                        {{--(10 reviews)--}}
                                    {{--</div>--}}
                                    <p>{{$product->desc}}</p>
                                    <h3 class="cost"><span class="glyphicon glyphicon-usd"></span><b>តម្លៃ ​</b>​​​${{$product->prices}}<small class="pre-cost"><span class="glyphicon glyphicon-usd"></span></small></h3>
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                                            {{--<select class="form-control" name="select">--}}
                                                {{--<option value="" selected="">Color</option>--}}
                                                {{--<option value="black">Black</option>--}}
                                                {{--<option value="white">White</option>--}}
                                                {{--<option value="gold">Gold</option>--}}
                                                {{--<option value="rose gold">Rose Gold</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                        {{--<!-- end col -->--}}
                                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                                            {{--<select class="form-control" name="select">--}}
                                                {{--<option value="">Capacity</option>--}}
                                                {{--<option value="">16GB</option>--}}
                                                {{--<option value="">32GB</option>--}}
                                                {{--<option value="">64GB</option>--}}
                                                {{--<option value="">128GB</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                        {{--<!-- end col -->--}}
                                        {{--<div class="col-md-4 col-sm-12">--}}
                                            {{--<select class="form-control" name="select">--}}
                                                {{--<option value="" selected="">QTY</option>--}}
                                                {{--<option value="">1</option>--}}
                                                {{--<option value="">2</option>--}}
                                                {{--<option value="">3</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                        {{--<!-- end col -->--}}
                                    {{--</div>--}}
                                    {{--<div class="space-ten"></div>--}}
                                    {{--<div class="btn-ground">--}}
                                        {{--<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>--}}
                                        {{--<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Add To Wishlist</button>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------End-Model--------------->
        @endforeach
        <!----End Popular Product --->



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

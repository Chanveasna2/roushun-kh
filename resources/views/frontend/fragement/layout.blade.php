<!DOCTYPE html>
<html lang="en">
<title>Roushun Cambodia</title>
<style>
    .dropdown:hover .dropdown-menu{display: block;}
</style>

<head>

    @include('frontend.fragement.style')

</head>
<body>
    <div class="container" style="height: 100px">
        <div class="row" id="header">
            @foreach($sys_logo as $logo)
            <div id="logo">
                <a href="/"><img src="{{$logo->photo?$logo->photo->file:'https://via.placeholder.com/400x65'}}"></a>
            </div>
            @endforeach
            @foreach($sys_adv as $adv)
            <div id="adv">
                <img src="{{$adv->photo?$adv->photo->file:'https://via.placeholder.com/285x30'}}">
            </div>
            @endforeach
        </div>
    </div><!----end logo----->


   <!---------Navbar--------------->
    <div class="container-fluid color-background" id="navbar-menu">
        <div class="container">
            <!-- menu navbar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand fas fa-home" href="/" style="color: white;"></a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about-products')}}">អំពីផលិតផល<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="{{ url('/product-category') }}">ប្រភេទផលិតផល</a>
                            <ul class="dropdown-menu" style="background-color: #07a7db;margin-top: 0px">
                                <li class="nav-item"> <a class="nav-link" href="#">សាប៊ូកក់សក់</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">សាប៊ូលាងខ្លួន</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/distribution-network')}}">ដៃគូចែកចាយ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about-us') }}">អំពីក្រុមហ៊ុន</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact-us') }}">ទំនាក់ទំនង</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white;border-color: white">Search</button>
                    </form>
                </div>
            </nav>
            <!-- end navbar -->

        </div>
    </div>
    <!--------end container-fluid Navbar--------------->

    @yield('content1')


    <!-- Footer -->
    <section id="footer" >
        <div class="container" style="margin-top: -40px" >
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <!-- <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>ព័ត៌មានថ្មីៗ & សេចក្តីប្រកាស</h5>
                    <p style="color: white;">បច្ចុប្បន្នពុំទាន់មានព័ត៌មានថ្មីៗនោះទេ
                        សូមចូលមកមើលម្តងទៀតនៅពេលខាងមុខនេះ។</p>
                </div> -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    @foreach($sys_footerLeft as $footLeft)
                        <h5>{{$footLeft->static_name}}</h5>
                        <a href="{{url('/about-products')}}"><p style="color: white;">{{$footLeft->static_value_first}}</p></a>
                        <a href="{{url('/about-us')}}" ><p style="color: white;">{{$footLeft->static_value_second}}</p></a>
                        <a  href="{{url('/distribution-network')}}"><p style="color: white;">{{$footLeft->static_value_third}}</p></a>
                    @endforeach
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    @foreach($sys_s as $sys)
                    <h5>{{$sys->static_value_first}}៖</h5>
                    <p style="color: white;">{{$sys->static_value_second}}</p>
                    <p style="color: white;">{{$sys->static_value_third}}</p>
                        @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/roushuncambodia" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">© 2018, Roushun Cambodia, All Rights Reserved.</p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- ./Footer -->


@include('frontend.fragement.footerjs')
</body>
</html>

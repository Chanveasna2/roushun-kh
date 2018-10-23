<!DOCTYPE html>
<html lang="en">
<title>Roushun Cambodia</title>

<head>

    @include('frontend.fragement.style')

</head>
<body>
    <div class="container" style="height: 100px">
        <div class="row" id="header">
            <div id="logo">
                <a href="/"><img src="/images/logo.png"></a>
            </div>
            <div id="adv">
                <img src="/images/adv.gif">
            </div>
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
                            <a class="nav-link" href="#">អំពីផលិតផល<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ដៃគូចែកចាយ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">អំពីក្រុមហ៊ុន</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ទំនាក់ទំនង</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ប្រភេទផលិតផល</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
        <div class="container" >
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>ព័ត៌មានថ្មីៗ & សេចក្តីប្រកាស</h5>
                    <p style="color: white;">បច្ចុប្បន្នពុំទាន់មានព័ត៌មានថ្មីៗនោះទេ
                        សូមចូលមកមើលម្តងទៀតនៅពេលខាងមុខនេះ។</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>អំពីក្រុមហ៊ុន</h5>
                    {{--<ul class="list-unstyled quick-links">--}}
                        {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>--}}
                        {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>--}}
                        {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>--}}
                        {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>--}}
                        {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>--}}
                    {{--</ul>--}}
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>អាសយដ្ឋាន៖</h5>
                    <p style="color: white;">អាសយដ្ឋាន៖ សង្កាត់ គីឡូម៉ែត្រលេខ៦

                        ខណ្ឌ ឬស្សីកែវ រាជធានីភ្នំពេញ</p>
                    <p style="color: white;">លេខទូរស័ព្ទ: 010 463 463​ /
                        016 475 799</p>
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

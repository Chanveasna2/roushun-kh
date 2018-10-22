<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.fragement.style')

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/images/ROUSHUNLOGOwhite.png"  height="60px" class="d-inline-block align-top" alt="">
            </a>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="container">
            <nav class="nav">
                <a class="nav-link active col-sm-12 col-lg col-md-4" href="#">ទំព័រដើម</a>
                <a class="nav-link col-lg col-sm-12 col-md-4" href="#">អំពីក្រុមហ៊ុន</a>
                <a class="nav-link col-lg col-sm-12 col-md-4" href="#">អំពីផលិតផល</a>
                <a class="nav-link col-lg col-sm-12 col-md-4" href="#">ដៃគូរចែកចាយ</a>
                <a class="nav-link col-lg col-sm-12 col-md-4" href="#">ទំនាក់ទំនង</a>
                <a class="nav-link col-lg col-sm-12 col-md-4" href="#">ការងារ</a>
                <a class="nav-link col-lg col-sm-12 col-md-4" href="#">ព័ត៌មានថ្មីៗ</a>
            </nav>
        </div>
    </div>
    @yield('content1')

@include('frontend.fragement.footerjs')
</body>
</html>

<!-- Topbar Start -->
{{--<div class="container-fluid py-2 d-none d-lg-flex">--}}
{{--    <div class="container">--}}
{{--        <div class="d-flex justify-content-between">--}}
{{--            <div>--}}
{{--                <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>--}}
{{--                <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>--}}
{{--            </div>--}}
{{--            <nav class="breadcrumb mb-0">--}}
{{--                <a class="breadcrumb-item small text-body" href="about.html#">Career</a>--}}
{{--                <a class="breadcrumb-item small text-body" href="about.html#">Support</a>--}}
{{--                <a class="breadcrumb-item small text-body" href="about.html#">Terms</a>--}}
{{--                <a class="breadcrumb-item small text-body" href="about.html#">FAQs</a>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Topbar End -->


<!-- Brand Start -->
<div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
    <div class="container pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <i class="bi bi-telephone-inbound fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Call Now</h5>
                    <span>+91-172-0000000</span>
                </div>
            </div>
            <a href="{{route('index')}}" class="h1 text-white mb-0">Lolitika Mandal <span class="text-dark">Lab</span></a>
            <div class="d-flex">
                <i class="bi bi-envelope fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Mail Now</h5>
                    <span>lab@lolitikamlab.in</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->


<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="{{route('index')}}" class="navbar-brand d-lg-none">
                <h1 class="text-primary m-0">Lolitika Mandal <span class="text-dark">Lab</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{route('index')}}" class="nav-item nav-link {{Route::currentRouteName()==='index'?'active':''}}">Home</a>
                    <a href="{{route('research')}}" class="nav-item nav-link {{Route::currentRouteName()==='research'?'active':''}}">Research</a>
                    <a href="{{route('publications')}}" class="nav-item nav-link {{Route::currentRouteName()==='publications'?'active':''}}">Publications</a>
                    <a href="{{route('members')}}" class="nav-item nav-link {{Route::currentRouteName()==='members'?'active':''}}">Members</a>
                    <a href="{{route('photos')}}" class="nav-item nav-link {{Route::currentRouteName()==='photos'?'active':''}}">Photos</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link {{Route::currentRouteName()==='contact'?'active':''}}">Contact</a>
{{--                    <div class="nav-item dropdown">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>--}}
{{--                        <div class="dropdown-menu bg-light m-0">--}}
{{--                            <a href="#" class="dropdown-item">Features</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="ms-auto d-none d-lg-flex">
                    <a class="btn btn-sm-square btn-primary ms-2" href="{{route('index')}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href="{{route('index')}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href="{{route('index')}}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href="{{route('index')}}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->




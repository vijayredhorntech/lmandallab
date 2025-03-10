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
<div class="container-fluid pt-4 pb-5 d-none d-lg-flex" style="background-color: black; width: 100%;">
    <div class="container pb-2" style="background-color: black;">
        <div class="d-flex align-items-center justify-content-between h-100">
            <!-- Left Image (Flipped) -->
            <div style="transform: scaleX(-1);">
                <img src="{{ asset('assets/images/banner/Picture1.png') }}" alt="Left Image" style="height: 200px;">
            </div>

            <!-- Title (Centered) -->
            <div class="text-center">
                <a href="{{route('index')}}" class="h1 text-white mb-0" style="background-color: black;">Developmental Genetics Laboratory</a>
            </div>
            
            <!-- Right Image (Normal) -->
            <div>
                <img src="{{ asset('assets/images/banner/Picture1.png') }}" alt="Right Image" style="height: 200px;">
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
                    <a href="{{route('collaborator')}}" class="nav-item nav-link {{Route::currentRouteName()==='collaborator'?'active':''}}">Collaborator</a>
{{--                    <div class="nav-item dropdown">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>--}}
{{--                        <div class="dropdown-menu bg-light m-0">--}}
{{--                            <a href="#" class="dropdown-item">Features</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->




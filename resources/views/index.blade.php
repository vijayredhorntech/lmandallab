<x-app-layout>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url({{asset('assets/images/testimonial.jpg')}}) center center no-repeat;">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">LMandal Lab</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid" src="{{asset('assets/images/about-1.jpg')}}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{asset('assets/images/about-2.jpg')}}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{asset('assets/images/about-3.jpg')}}">
                        </div>
                        <div class="col-6">
                            <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                <div class="icon-box-light">
                                    <i class="bi bi-award text-dark"></i>
                                </div>
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">10</h1>
                                <small class="fs-5 text-white">Years Experience</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Trusted Lab Experts and Latest Lab Technologies</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-100" src="{{asset('assets/images/carousel-1.jpg')}}" alt="Image">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="{{asset('assets/images/carousel-2.jpg')}}" alt="Image">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3">Cell Fate</h5>
                        <p class="mb-0">Characterising  networks of transcription factors regulating the progression of fate in developing tissue</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-people text-dark"></i>
                        </div>
                        <h5 class="mb-3">Patterning</h5>
                        <p class="mb-0">Exploring signaling centers at the borders of the cortical neuroepithelium </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-headphones text-dark"></i>
                        </div>
                        <h5 class="mb-3">Connectivity</h5>
                        <p class="mb-0">Following the development of major axonal tracts in the forebrain</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


</x-app-layout>

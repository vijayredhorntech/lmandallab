<x-app-layout>

    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" style="height: 500px; object-fit: cover" src="{{asset('assets/images/banner/2.png')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Genetics Laboratory at IISER (MOHALI)</h1>
                                    {{--                                    <p class="mb-5 animated slideInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus.</p>--}}
                                    {{--                                    <a href="index.html" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <img class="w-100" style="height: 500px; object-fit: cover" src="{{asset('assets/images/banner/3.png')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Genetics Laboratory at IISER (MOHALI)</h1>
{{--                                    <p class="mb-5 animated slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus.</p>--}}
{{--                                    <a href="index.html" class="btn btn-primary py-3 px-5 animated slideInLeft">Explore More</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" style="height: 500px; object-fit: cover" src="{{asset('assets/images/banner/4.png')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Genetics Laboratory at IISER (MOHALI)</h1>
                                    {{--                                    <p class="mb-5 animated slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus.</p>--}}
                                    {{--                                    <a href="index.html" class="btn btn-primary py-3 px-5 animated slideInLeft">Explore More</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
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
    <!-- Carousel End -->

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
                    <h1 class="display-6 mb-4">Genetics Laboratory at IISER (MOHALI)</h1>
                    <p class="mb-4">Developmental  Genetics  Laboratory  at  IISER  (MOHALI)  is  interested  in  Hematopoiesis, Cardiogenesis and Molecular pathways in stem and progenitor cell development.</p>
                    <p class="mb-4"><u>Ongoing Project:</u> Molecular genetic dissection of signaling pathways involved in hematopoietic niche maintenance in Drosophila. A proposal funded by WELLCOME DBT Alliance.</p>
                    <p class="mb-4">Stem cells are the source of virtually all highly differentiated cells that are replenished during the lifetime of an animal. The critical balance between stem and differentiated cell populations is crucial  for  the  long-term  maintenance  of  functional  tissue  types. A microenvironment  that  is supportive of stem cells is commonly referred to as a stem cell niche. Although, several signaling molecules emanating from the niche has been identified for regulation of stem cell state and function, the information regarding niche maintenance is still in its infancy. We are interested to know the mechanistic basis of niche maintenance.</p>
{{--                        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">--}}
{{--                            <div class="carousel-inner">--}}
{{--                                <div class="carousel-item active">--}}
{{--                                    <img class="w-100" src="{{asset('assets/images/carousel-1.jpg')}}" alt="Image">--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img class="w-100" src="{{asset('assets/images/carousel-2.jpg')}}" alt="Image">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">--}}
{{--                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                <span class="visually-hidden">Previous</span>--}}
{{--                            </button>--}}
{{--                            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">--}}
{{--                                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                <span class="visually-hidden">Next</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
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

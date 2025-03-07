<x-app-layout>

    @php
        // Data Arrays
        $labPhotos = [
            ['src' => '1.jpg', 'title' => 'Lolitika Mandal Lab'],
            ['src' => '2.jpg', 'title' => 'Lolitika Mandal Lab'],
            ['src' => '3.jpg', 'title' => 'Lolitika Mandal Lab'],
            ['src' => '4.jpg', 'title' => 'Lolitika Mandal Lab'],
            ['src' => '6.jpg', 'title' => 'Lolitika Mandal Lab'],
            ['src' => '7.jpg', 'title' => 'Lolitika Mandal Lab']
        ];

        $confocalImages = [
            ['src' => '1.jpg', 'title' => 'Lolitika Mandal Lab', 'description' => 'This is a confocal image description 1'],
            ['src' => '2.jpg', 'title' => 'Lolitika Mandal Lab', 'description' => 'This is a confocal image description 2'],
            ['src' => '3.jpg', 'title' => 'Lolitika Mandal Lab', 'description' => 'This is a confocal image description 3'],
            ['src' => '4.jpg', 'title' => 'Lolitika Mandal Lab', 'description' => 'This is a confocal image description 4'],
            ['src' => '6.jpg', 'title' => 'Lolitika Mandal Lab', 'description' => 'This is a confocal image description 5'],
            ['src' => '7.jpg', 'title' => 'Lolitika Mandal Lab', 'description' => 'This is a confocal image description 6']
        ];
    @endphp

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" background: linear-gradient(rgba(3, 27, 78, .4), rgba(3, 27, 78, .4)), url({{asset('assets/images/banner/2.png')}}) center center no-repeat; background-position: center; background-size: cover ">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Photos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Photos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Lab Photos Section -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            <h2 class="text-center mb-4">Lab Photos</h2>
            <div class="row g-4">
                @foreach($labPhotos as $photo)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{asset('assets/images/gallery/'.$photo['src'])}}" target="_blank">
                                <img class="img-fluid w-100" style="height: 300px; object-fit: cover" src="{{asset('assets/images/gallery/'.$photo['src'])}}" alt="">
                            </a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">{{ $photo['title'] }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Confocal Images Section -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            <h2 class="text-center mb-4">Confocal Images</h2>
            <div class="row g-4">
                @foreach($confocalImages as $image)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{asset('assets/images/gallery/'.$image['src'])}}" target="_blank">
                                <img class="img-fluid w-100" style="height: 300px; object-fit: cover" src="{{asset('assets/images/gallery/'.$image['src'])}}" alt="">
                            </a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">{{ $image['title'] }}</h5>
                            <p class="mt-2">{{ $image['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>

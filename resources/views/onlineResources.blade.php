<x-app-layout>
    @php
        $OnlineResources = [
            [
                'name' => 'FlyBase',
                'link' => 'https://flybase.org/',
            ],
            [
                'name' => 'Bloomington Drosophila Stock Center (BDSC)',
                'link' => 'https://bdsc.indiana.edu/',
            ],
            [
                'name' => 'Interactive Fly',
                'link' => 'https://www.sdbonline.org/sites/fly/aimain/1aahome.htm',
            ],
            [
                'name' => 'SDB Online',
                'link' => 'https://www.sdbonline.org/',
            ],
            [
                'name' => 'Droso 4 Schools',
                'link' => 'https://droso4schools.wordpress.com/',
            ],
            [
                'name' => 'DSHB (Developmental Studies Hybridoma Bank)',
                'link' => 'https://dshb.biology.uiowa.edu/',
            ],
            [
                'name' => 'Kyoto Drosophila Stock Center',
                'link' => 'https://kyotofly.kit.jp/cgi-bin/stocks/index.cgi',
            ],
            [
                'name' => 'Vienna Drosophila Resource Center (VDRC)',
                'link' => 'https://shop.vbc.ac.at/vdrc_store/',
            ],
        ];
    @endphp

    <!-- Banner/Header Section -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(3, 27, 78, .4), rgba(3, 27, 78, .4)), url({{ asset('assets/images/banner/1.png') }}) center center no-repeat; background-position: center; background-size: cover">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Online Resources</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Online Resources</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Online Resources Content (Not in a tab pane) -->
    <div class="container py-5">
        <table class="table table-hover text-dark">
            <thead class="table-dark">
                <tr>
                    <th>Resource Name</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($OnlineResources as $resource)
                    <tr class="text-black">
                        <td>{{ $resource['name'] }}</td>
                        <td><a href="{{ $resource['link'] }}" target="_blank">{{ $resource['link'] }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
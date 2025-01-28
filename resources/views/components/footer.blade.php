<!-- Footer Start -->
<div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 py-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="{{route('index')}}" class="navbar-brand">
                    <h1 class="h1 text-primary mb-0">Lolitika Mandal <span class="text-white">Lab</span></h1>
                </a>
                <p><i class="fa fa-map-marker-alt me-2"></i>AB-I, IISER Mohali Punjab, INDIA</p>
                <p><i class="fa fa-phone-alt me-2"></i>+91-172-0000000</p>
                <p><i class="fa fa-envelope me-2"></i>lab@lolitikamlab.in</p>
                <h1 class="h3 text-primary mb-0">Visitors Count: <span class="text-white" id="visitor-count">Loading...</span></h1>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="{{route('index')}}">Home</a>
                        <a class="btn btn-link" href="{{route('members')}}">Members</a>
                        <a class="btn btn-link" href="{{route('photos')}}">Photos</a>
                        <a class="btn btn-link" href="{{route('contact')}}">Contact</a>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Popular Links</h4>
                        <a class="btn btn-link" href="{{route('research')}}">Research</a>
                        <a class="btn btn-link" href="{{route('publications')}}">Publications</a>
                    </div>
{{--                    <div class="col-sm-12">--}}
{{--                        <h4 class="text-light mb-4">Newsletter</h4>--}}
{{--                        <div class="w-100">--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control border-0 py-3 px-4" style="background: rgba(255, 255, 255, .1);" placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark text-white-50 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <a href="{{route('index')}}">Lolitika_Mandal_Lab</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <p class="mb-0">Designed by <a href="https://himsoftsolution.com" target="_blank">Him Soft Solution</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->



<script>
    // Visitor counter logic with multiplier
    document.addEventListener('DOMContentLoaded', function () {
        const visitorKey = 'website-visitor-counter';
        let visitorCount = localStorage.getItem(visitorKey);

        if (!visitorCount) {
            visitorCount = 1; // Initialize the count
        } else {
            visitorCount = parseInt(visitorCount) + 1; // Increment the count
        }

        // Save the updated count to localStorage
        localStorage.setItem(visitorKey, visitorCount);

        // Multiply the visitor count by 1000
        const displayCount = visitorCount + 1000;

        // Update the counter display
        document.getElementById('visitor-count').textContent = displayCount.toLocaleString(); // Add commas for readability
    });
</script>

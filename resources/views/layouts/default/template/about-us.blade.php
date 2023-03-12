@include('layouts.default.header')
	<!-- PAGE NAV START -->
    <div class="pages-hero">
        <div class="container">
            <div class="pages-title">
                <h1>{{$title ?? 'Blog' }}</h1>
                <div class="page-nav">
                    <p>Home &nbsp; | &nbsp; {{$title ?? 'Blog' }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE NAV END -->


    <!-- CONTENT START -->
    <section>

    	<!-- HOME SERVICE END -->
        @php 
            $about_section = \DB::TABLE('tb_about_us')->orderby('id','desc')->first();
        @endphp
        <!-- HOME ABOUT START -->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 section-title">
                    <h5>Know ourself</h5>
                    <h2>About Us</h2>
                </div>

                <div class="col-lg-6">
                    <div class="home-about-alt">
                        {!! $about_section->about_us !!}
                    </div>
                </div>
                <div class="col-lg-6 spacing-md">
                    <figure class="home-about-feature">
                        <img src="{{ asset('uploads') }}/images/about/{{$about_section->about_section_image}}" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <!-- HOME ABOUT END -->

        <!-- WIDE SECTION START -->
        <div class="ws-features mt-5 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 spacing-lg">
                        <div class="bottom-layer">
                            <div class="">
                                <img src="{{ asset('uploads') }}/images/about/{{$about_section->mission_image}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ws-left-layer">
                            {!! $about_section->mission_vision !!}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- WIDE SECTION END -->
         <!-- COUNTER START  -->
        <div class="counter-layer mt-0 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="counter-box">
                            <div class="counter-caption">
                                <div class="counter" data-count="{{$about_section->country_covered }}">0</div>
                                <p>Countries Covered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="counter-box">
                            <div class="counter-caption">
                                <div class="counter" data-count="{{$about_section->packages }}">0</div>
                                <p>Packages Received</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="counter-box">
                            <div class="counter-caption">
                                <div class="counter" data-count="{{$about_section->happy_client }}">0</div>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="counter-box">
                            <div class="counter-caption">
                                <div class="counter" data-count="{{$about_section->partners }}">0</div>
                                <p>Partners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- COUNTER END -->

        <!-- TEAM START -->
        <div class="container mt-0 mb-5">
            <div class="section-title">
                <h5>Go far together</h5>
                <h2>Meet Our Team</h2>
            </div>
            <div class="team-carousel">
                <div class="owl-carousel owl-theme">
                    @foreach(\DB::TABLE('tb_teams')->WHERE('status',1)->get() as $row)
                        <div class="item">
                            <div class="team-card">
                                <figure class="tc-portrait">
                                    <img src="{{ asset('uploads') }}/images/teams/{{ $row->image }}" alt="">
                                    <ul class="tc-social">
                                        <li><a href="{{$row->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$row->linkedin}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$row->twitter}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="{{$row->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="tc-caption">
                                    <h4>{{$row->name}}</h4>
                                    <p>{{$row->designation}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="owl-theme">
                    <div class="owl-controls">
                        <div class="custom-nav owl-nav"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TEAM END -->

        <!-- TEAM START -->
        <div class="container mt-0 mb-5" style="">
            <div class="section-title">
                <h5>Work together</h5>
                <h2>Our Partner</h2>
            </div>
            <div class="">
                <div class="owl-carousel owl-theme" id="partner_carousel">
                    @foreach(\DB::TABLE('tb_partners')->WHERE('status',1)->get() as $row)
                        <div class="item">
                            <div class="team-card">
                                <figure class="tc-portrait">
                                	<a target="_blank" href="{{ $row->link}}" title="{{$row->name}}">
                                		<img src="{{ asset('uploads') }}/images/partners/{{ $row->image }}" alt="">
                                	</a>
                                </figure>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- TEAM END -->


	    <!-- CALL TO ACTION START -->
	    <div class="call-action-wrapper mt-4">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12 col-lg-6">
	                    <div class="ca-left-side">
	                        <h3>NEED HELP WITH LOGISTICS?</h3>
	                        <p>We take pride in serving our customers safely.</p>
	                    </div>
	                </div>
	                <div class="col-md-12 col-lg-6">
	                    <div class="ca-right-side flex-parent jc-center">
	                        <a class="btn btn-default" href="contact-1.html" role="button">Request a Quote</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- CALL TO ACTION END -->
	</section>

@include('layouts.default.footer')
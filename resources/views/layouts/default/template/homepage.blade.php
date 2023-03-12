    <!--SLIDER START-->
    <div class="home-slider">
        <!-- SLIDER EXAMPLE -->
        <section class="example">
            <article class="slider-content">
                <div class="fullscreen-container" style="background-color:transparent;padding:0px;">
                    <div id="home_slider" class="owl-carousel owl-theme d-block">
                        <div class="item">
                            <img src="{{ asset('assets') }}/assets/images/home-slider-4.jpg" height="100%">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets') }}/assets/images/home-slider-4.jpg" height="100%">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets') }}/assets/images/home-slider-4.jpg" height="100%">
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
    <!--SLIDER END-->
    <!-- HOME FRONT BOX START -->
        <div class="container">
            <div class="front-box-layer">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-12">
                        <div class="front-box">
                            <div class="text-center">
                                <h3>Track Your Shipment</h3>
                            </div>
                            <form action="{{ route('serach.shipment') }}" method="post" class="row">
                                <div class="form-group col-lg-10">
                                    <input type="tel" name="tracking_no" class="form-control custom-form" placeholder="*Please enter your shipment number">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-lg-2">
                                    <button type="submit" class="btn btn-default ">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- HOME FRONT BOX END -->

<!-- CONTENT START -->
    <section>
        <!-- HOME SERVICE START -->
        <div class="bg-wrapper ">
            <div class="container">
                <div class="section-title">
                    <h5>We Make Connections</h5>
                    <h2>Our Best Services</h2>
                </div>

                <div class="services-carousel-2">
                    <div class="owl-carousel owl-theme hover-effects image-hover">
                        @foreach(\DB::TABLE('tb_service')->WHERE('status',1)->orderby('short_number','asc')->get() as $row)
                            <div class="item">
                                <div class="home-service-box">
                                    <a href="air-freight.html">
                                        <figure class="hs-feature">
                                            <img src="{{ asset('uploads') }}/images/services/{{$row->image}}" class="img-hover" alt="">
                                            <div class="hs-feature-caption">
                                                <figure class="hs-icon">
                                                    <img src="{{ asset('uploads') }}/images/services/{{$row->icon}}" alt="">
                                                </figure>
                                                <h4>{{$row->title}}</h4>
                                            </div>
                                        </figure>
                                    </a>
                                    <div class="hs-caption">
                                        <p>{{$row->short_description}}</p>
                                        <h6><a href="#">Read More</a></h6>
                                    </div>
                                    <div class="hs-bottom-line"></div>
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
        </div>
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
        <div class="ws-features mt-5 mb-5">
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

        <!-- TEAM START -->
        <div class="container mt-5 mb-5">
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

        <!-- TESTIMONIALS START -->
        <div class="container mt-5 mb-5">
            <div class="section-title">
                <h5>CONNECTING PEOPLE</h5>
                <h2>What Our Customer Says</h2>
            </div>
            <div class="testimonials-carousel">
                <div class="owl-carousel owl-theme">
                    @foreach(\DB::TABLE('tb_testimonial')->orderby('id','desc')->get() as $row)
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="testimonial-text">
                                    <p><i class="fas fa-quote-left"></i></p>
                                    <p>{{ $row->comment }}</p>
                                    <div class="bottom-line"></div>
                                </div>
                                <figure class="author-avatar">
                                    <img src="{{ asset('uploads') }}/images/clients/{{ $row->client_image }}" alt="">
                                </figure>
                                <h4>{{ $row->client_name }}</h4>
                                <p class="profession">{{ $row->designation }}</p>
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
        <!-- TESTIMONIALS END -->

        <!-- BLOG NEWS START -->
        <div class="bg-wrapper mt-5">
            <div class="container">
                <div class="section-title">
                    <h5>THIS IS OUT INSPIRATION</h5>
                    <h2>Our Blogs</h2>
                </div>
                <div class="row hover-effects image-hover">
                    @php 
                        $single_blog = \DB::TABLE('tb_blogs')->where('status',1)->orderby('id','desc')->first()
                    @endphp
                    <div class="col-lg-6">
                        <figure class="blog-news-feature">
                            <img src="{{ asset('uploads')}}/images/blogs/{{$single_blog->image}}" class="img-hover" height="100%" alt="">
                            <div class="date-layer">
                                <h6>{{ date("F", strtotime($single_blog->date)) }}</h6>
                                <p>{{ date("d", strtotime($single_blog->date)) }}</p>
                            </div>
                            <div class="bnf-caption">
                                <h3>{{ $single_blog->title }}</h3>
                                <p>{{ $single_blog->short_details }}</p>
                                <a class="btn btn-default" href="{{ route('blogs.details', $single_blog->id) }}" role="button">Read More</a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-6 spacing-md">
                        @foreach(\DB::TABLE('tb_blogs')->where('status',1)->orderby('id','asc')->limit(2)->get() as $row)
                            <div class="top-news-block mb-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <figure class="blog-thumb">
                                            <a href="blog-single.html">
                                                <img src="{{ asset('uploads')}}/images/blogs/{{$row->image}}" class="img-hover" height="100%" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="blog-t-caption">
                                            <h6>{{ date("F d, y", strtotime($row->date)) }}</h6>
                                            <h5>
                                                <a href="blog-single.html">{{$row->title}}</a>
                                            </h5>
                                            <p> {{$row->short_details}} </p>
                                            <a class="btn btn-default btn-outline" href="{{ route('blogs.details', $row->id) }}"
                                                role="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG NEWS END -->

        <!-- TEAM START -->
        <div class="container mt-5 mb-5" style="">
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
    </section>
<!-- CONTENT END -->
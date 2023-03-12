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

        <!-- TEAM START -->
        <div class="container mt-5 mb-5">
            <div class="section-title">
                <h5>Go far together</h5>
                <h2>Meet Our Team</h2>
            </div>
            <div class="team-carousel">
                <div class="row">
                    @foreach(\DB::TABLE('tb_teams')->WHERE('status',1)->get() as $row)
                        <div class="col-md-4 mb-2">
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
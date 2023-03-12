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
        <div class="container mt-5 mb-5" style="">
            <div class="section-title">
                <h5>We Work's together</h5>
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
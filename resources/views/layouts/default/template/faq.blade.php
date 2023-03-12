@include('layouts.default.header')
	<!-- PAGE NAV START -->
	<div class="pages-hero">
	    <div class="container">
	        <div class="pages-title">
	            <h1>FAQ</h1>
	            <div class="page-nav">
	                <p>Home &nbsp; | &nbsp; FAQ</p>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- PAGE NAV END -->

	<!-- CONTENT START -->
    <section>
        <div class="container mt-5 mb-5">
            <div class="section-title">
                <h5>customers first</h5>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
            	@foreach(\DB::TABLE('tb_faqs')->WHERE('status',1)->get() as $row)
	                <div class="col-lg-6">
	                    <div class="faq-box">
	                        <div class="faq-line"></div>
	                        <div class="media">
	                            <div class="faq-number">
	                                <h3>{{$loop->iteration}}</h3>
	                            </div>
	                            <div class="media-body">
	                                <h5 class="mt-0">{{$row->question}}</h5>
	                                <p>{{$row->answer}}</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            @endforeach
            </div>
        </div>

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
    <!-- CONTENT END -->

@include('layouts.default.footer')
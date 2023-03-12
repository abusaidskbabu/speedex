@include('layouts.default.header')
	<!-- PAGE NAV START -->
    <div class="pages-hero">
        <div class="container">
            <div class="post-title">
                <h1>{{$blog->title}}</h1>
                <div class="page-nav">
                    <p>Home &nbsp; | &nbsp; {{$title}} |&nbsp; {{$blog->title}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE NAV END -->


    <!-- CONTENT START -->
    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <!-- BLOG CONTENT START -->
                <div class="col-lg-12">
                    <div class="blog-content">
                        <figure class="blog-feature-img">
                            <img src="{{ asset('uploads')}}/images/blogs/{{$blog->image}}" alt="">
                            <div class="date-layer">
                                <h5>{{ date("F", strtotime($blog->date)) }}</h5>
                                <p>{{ date("d", strtotime($blog->date)) }}</p>
                            </div>
                        </figure>

                        {!! $blog->details !!}

                        {{-- <div class="comment-layer">
                            <h3>3 Replies To "Shipping Survival Mode Crushing"</h3>
                            <div class="comment-box">
                                <div class="media">
                                    <img src="images/commons/avatar-1.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Roy Taylor</h5>
                                        <p class="comment-date">May 17, 2021 at 11:25 am</p>
                                        <p>Start with your super fans. These are your happiest clients and customers.
                                            They may
                                            have already offered to be a reference so they won’t mind the request.</p>
                                        <button type="button" class="btn btn-default">Replay &nbsp;<i
                                                class="fas fa-reply"></i></button>
                                        <div class="comment-line"></div>
                                    </div>
                                </div>
                                <div class="media replay-layer">
                                    <img src="images/commons/avatar-2.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Jessica Lauren</h5>
                                        <p class="comment-date">May 15, 2021 at 11:13 am</p>
                                        <p>An endorsement is typically a well-known influencer giving their public
                                            support for a brand.
                                            But a testimonial is from a customer or client. They may be an unknown
                                            person to the reader.</p>
                                        <button type="button" class="btn btn-default">Replay &nbsp;<i
                                                class="fas fa-reply"></i></button>
                                        <div class="comment-line"></div>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="images/commons/avatar-3.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Roberts O'Neill</h5>
                                        <p class="comment-date">May 14, 2021 at 9:25 pm</p>
                                        <p>My testimonial is from a customer or client. They may be an unknown person to
                                            the reader,
                                            you need to be sure there isn't anything embarrassing hidden in the middle
                                            of text.</p>
                                        <button type="button" class="btn btn-default">Replay &nbsp;<i
                                                class="fas fa-reply"></i></button>
                                        <div class="comment-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="comment-form-layer">
                            <h3>Leave a Reply</h3>
                            <p>Your email address will not be published.</p>
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control custom-form message-form" id="exampleFormControlTextarea1"
                                        rows="5" placeholder="Comment"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input class="form-control fc-comments" type="text"
                                            placeholder="Name (Required)">
                                    </div>
                                    <div class="col-lg-4 spacing-md-center">
                                        <input class="form-control fc-comments" type="text"
                                            placeholder="Email  (Required)">
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-control fc-comments" type="text" placeholder="Website">
                                    </div>
                                </div>
                            </form>
                            <button type="button" class="btn btn-default">Post Comment </button>
                        </div> --}}
                    </div>
                </div>
                <!-- BLOG CONTENT END -->

                
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
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
        <div class="container mt-5 mb-5">
            <div class="row">
                <!-- BLOG CONTENT START -->
                <div class="col-lg-12">
                	@foreach(\DB::TABLE('tb_blogs')->where('status',1)->orderby('date','desc')->get() as $row)
	                    <div class="blog-content-box">
	                        <figure class="blog-news-feature">
	                            <a href="{{ route('blogs.details', $row->id) }}">
	                            	<img src="{{ asset('uploads')}}/images/blogs/{{$row->image}}" height="400px" alt="">
	                            </a>
	                            <div class="date-layer">
	                                <h5>{{ date("F", strtotime($row->date)) }}</h5>
	                                <p>{{ date("d", strtotime($row->date)) }}</p>
	                            </div>
	                        </figure>
	                        <div class="blog-caption">
	                            <div class="post-details">
	                                <div class="media">
	                                    <img src="{{ asset('uploads/images/websites/'.$setting->logo)}}" class="mr-3" alt="...">
	                                    <div class="media-body">
	                                        <h5>{{$row->author}}</h5>
	                                    </div>
	                                </div>
	                            </div>
	                            <h3><a href="{{ route('blogs.details', $row->id) }}">{{$row->title}}</a></h3>
	                            <p>{{$row->short_details}}</p>
	                            <h6><a href="{{ route('blogs.details', $row->id) }}">Read More</a></h6>
	                            <div class="post-social-bar">
	                                <ul>
	                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
	                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
	                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
	                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                @endforeach
                    

                    <!-- PAGINATION START -->
                    {{-- <div class="site-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                    <!-- PAGINATION START -->
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
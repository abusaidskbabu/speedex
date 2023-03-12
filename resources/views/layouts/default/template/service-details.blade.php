@include('layouts.default.header')
	<!-- PAGE NAV START -->
    <div class="pages-hero">
        <div class="container">
            <div class="post-title">
                <h1>{{$service->title}}</h1>
                <div class="page-nav">
                    <p>Home &nbsp; | &nbsp; {{$title}} |&nbsp; {{$service->title}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE NAV END -->


    <!-- CONTENT START -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- FREIGHT SIDEBAR START -->
            <div class="col-lg-4 order-last order-md-3 spacing-md">
                <aside class="aside-left">
                    <div class="inner-aside">
                        <div class="list-group">
                        	@foreach(\DB::TABLE('tb_service')->WHERE('status',1)->orderBy('short_number','desc')->get() as $row)
	                            <a href="{{ route('service.details', $row->id) }}"
	                                class="list-group-item @if($row->id == $service->id) active @endif d-flex justify-content-between align-items-center">
	                                {{ $row->title }}
	                                <span class="badge"><i class="fas fa-chevron-right"></i></span>
	                            </a>
	                        @endforeach
                            
                        </div>
                    </div>
                    
                    <div class="inner-aside">
                        <div class="contact-card">
                            <div class="cc-caption">
                                <h3>Need Assistance</h3>
                                <p>We have a solution for every need to send or supply products in any mode of
                                    freight
                                    transport.</p>
                                <div class="support-contact">
                                    <div class="media">
                                        <i class="fas fa-phone-alt"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">Phone</h5>
                                            <p><a href="tel:{{$setting->phone}}"> {{$setting->phone}}</a></p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <i class="far fa-envelope-open"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">Email</h5>
                                            <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cc-line"></div>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- FREIGHT SIDEBAR END -->

            <!-- FREIGHT CONTENT START -->
            <div class="col-lg-8 order-first order-md-9">
                <div class="services-description">
                    {!! $service->details !!}
                </div>
            </div>
            <!-- FREIGHT CONTENT END -->
        </div>
    </div>
    
@include('layouts.default.footer')
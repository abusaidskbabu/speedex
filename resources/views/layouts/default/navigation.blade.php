<!-- PRELOADER START -->
<div id="loader-wrapper">
    <div class="loader" id="cube"></div>
</div>
<!-- PRELOADER END -->

<header>
    <!-- TOP HEADER START -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="top-social">
                        <li><a target="_blank" href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="{{$setting->youtube}}"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="top-contact">
                        <li class="phone">
                            <a href="tel:{{$setting->phone}}"> {{$setting->phone}}</a>
                        </li>
                        <li><a class="btn btn-default" href="{{ route('contact')}}" role="button">Get Quote</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- TOP HEADER END -->

    <!-- NAV START -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('uploads/images/websites/'.$setting->logo)}}" alt="">
            </a>

            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="menu-icon-bar"></span>
                <span class="menu-icon-bar"></span>
                <span class="menu-icon-bar"></span>
            </button>

            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown">
                        <a href="/" class="nav-item nav-link">HOME</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">ABOUT</a>
                        <div class="dropdown-menu">
                            <a href="{{route('aboutus')}}" class="dropdown-item">About Us</a>
                            <a href="{{ route('our.partners') }}" class="dropdown-item">Our Partners</a>
                            <a href="{{ route('our.team') }}" class="dropdown-item">Our Team</a>
                            <a href="{{ route('faqs') }}" class="dropdown-item">FAQ</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">SERVICES</a>
                        <div class="dropdown-menu">
                            @foreach(\DB::TABLE('tb_service')->WHERE('status',1)->orderBy('short_number','desc')->get() as $row)
                                <a href="{{ route('service.details', $row->id) }}" class="dropdown-item">{{$row->title}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('blogs.list') }}" class="nav-item nav-link" >Blogs</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('contact') }}" class="nav-item nav-link" >CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAV END -->
</header>
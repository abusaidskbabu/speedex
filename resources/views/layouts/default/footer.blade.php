    <!-- FOOTER START -->
    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="fc-caption">
                                <h5><a href="tel:{{$setting->phone}}"> {{$setting->phone}}</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 spacing-sm-center">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="fc-caption">
                                <h5><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="fc-caption">
                                <h5>{{$setting->address}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer-divider">
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-col fooler-left-col">
                        <figure class="footer-logo">
                            <img src="{{ asset('uploads/images/websites/'.$setting->logo)}}" alt="">
                        </figure>
                        <div class="footer-caption">
                            <p>{{$setting->about_note}}</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 spacing-md">
                    <div class="footer-col">
                        <h5>About</h5>
                        <ul class="footer-bulletlist">
                            <li><a href="{{route('aboutus')}}">About Us</a></li>
                            <li><a href="{{ route('our.partners') }}">Our Partners</a></li>
                            <li><a href="{{ route('our.team') }}">Our Team</a></li>
                            <li><a href="{{ route('faqs') }}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 spacing-md ">
                    <div class="footer-col">
                        <h5>Service</h5>
                        <ul class="footer-bulletlist">
                            @foreach(\DB::TABLE('tb_service')->WHERE('status',1)->orderBy('short_number','desc')->get() as $row)
                                <li><a href="{{ route('service.details', $row->id) }}">{{$row->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 spacing-md">
                    <div class="footer-col">
                        <h5>Newsletter</h5>
                        <div class="newsletter">
                            <form action="#" method="post" name="sign-up">
                                <input type="email" class="input" id="email" name="email"
                                    placeholder="Your email address" required>
                                <input type="submit" class="button" id="submit" value="SIGN UP">
                            </form>
                        </div>
                        <p class="newsletter">
                            Subscribe to our newsletter to receive the
                            latest news about our services.
                        </p>
                    </div>
                </div>
            </div>
            <hr class="footer-divider">
            <p class="footer-bootom">{{$setting->copyright_text}} | Designed by <a href="www.varclone.com">VARCLONE</a></p>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->

    <!-- JAVASCRIPTS -->

    <script src="{{ asset('assets') }}/js/lib/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/lib/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/lib/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/lib/nav.fixed.top.js"></script>
    <script src="{{ asset('assets') }}/js/lib/contact.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    
    <!-- JAVASCRIPTS END -->

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('assets') }}/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('assets') }}/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="{{ asset('assets') }}/js/rev-sliders/slider-home-2.js"></script>

    <script>
        // Home slider 
        $('#home_slider').owlCarousel({
            loop: true,
            nav: true,
            dots: true,
            autoplay: false,
            // autoplayTimeout: 5000,
            // smartSpeed: 4000,
            slideBy: 1,
            navText: ["<div class='nav-btn prev-slide'><span class='icon prev-icon'></span><span class='text prev-text'></span></div>", "<div class='nav-btn next-slide'><span class='text next-text'></span><span class='icon next-icon'></span></div>"],
            responsive: {
                0: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });

    </script>

    <script type="text/javascript">
        
            $('#printBtn').on("click", function(){ 
                $('#printBtn').css('display', 'none');
                window.print('#prindDiv');
                // window.location.href('statements.php');
            });
        
    </script>

</body>

</html>
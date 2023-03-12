@include('layouts.default.header')
	<!-- PAGE NAV START -->
    <div class="pages-hero">
        <div class="container">
            <div class="pages-title">
                <h1>Contact Us</h1>
                <div class="page-nav">
                    <p>Home &nbsp; | &nbsp; Contact Us</p>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE NAV END -->

    <!-- CONTENT START -->
    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-layer p-spacing-lg-right-50">
                        <h2>Get In Touch </h2>
                        <p>If you have any questions to support your business, please contact us directly effective search and believes business..</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inner-contact-box">
                                    <i class="fas fa-map-pin"></i>
                                    <h4>Address</h4>
                                    <p>{{$setting->address}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inner-contact-box">
                                    <i class="fas fa-phone-alt"></i>
                                    <h4>Office Phone</h4>
                                    <p><a href="tel:{{$setting->phone}}"> {{$setting->phone}}</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inner-contact-box">
                                    <i class="far fa-envelope-open"></i>
                                    <h4>Email Address</h4>
                                    <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inner-contact-box">
                                    <i class="far fa-clock"></i>
                                    <h4>Working Hours</h4>
                                    <p>{{$setting->hours}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 spacing-md">
                    <div class="contact-right-layer">
                        <form id="contact-form" method="post" action="">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name"
                                                class="form-control custom-form" placeholder="*Name" required="required"
                                                data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email"
                                                class="form-control custom-form" placeholder="*Email address"
                                                required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input id="form_phone" type="tel" name="phone"
                                                class="form-control custom-form" placeholder="*Please enter your phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message"
                                                class="form-control message-form custom-form"
                                                placeholder="*Your message" rows="5" required="required"
                                                data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-12 btn-send">
                                        <p><input type="submit" class="btn btn-default" value="Send message"></p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="required">
                                            * These fields are required.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAP START -->
        <div class="bottom-map mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167616.99483399244!2d-74.08279002518668!3d40.67646407501496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a560db693e3%3A0xb05e8b0bdf854b54!2sGowanus%2C+Brooklyn%2C+Nueva+York%2C+EE.+UU.!5e0!3m2!1ses-419!2sdo!4v1560863423970!5m2!1ses-419!2sdo"
                class="map-iframe"> </iframe>
        </div>
        <!-- MAP END -->
    </section>
    <!-- CONTENT END -->

@include('layouts.default.footer')
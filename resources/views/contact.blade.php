@extends('layout.app')

@section('content')
    <div class="page-title jarallax black-overlay-20" data-jarallax data-speed="0.6"
        style="background-image: url('img/content/bgs/bg1.jpg');">
        <div class="container">
            <h1>Contact us</h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="contact-box-data">
                        <div class="section-heading left-holder">
                            <h5 class="bold">India Office</h5>
                            <div class="section-heading-line"></div>
                        </div>
                        <div class="contact-box-place clearfix">
                            <div class="contact-box-icon"><i class="ti-map-alt"></i></div>
                            <div class="contact-box-text">
                                <h5>Office</h5>
                                <p>Jamat ka bagh, Bilotipura, Ujjain - 456006</p>
                            </div>
                        </div>
                        <div class="contact-box-place clearfix">
                            <div class="contact-box-icon"><i class="ti-mobile"></i></div>
                            <div class="contact-box-text">
                                <h5>Phone</h5>
                                <p>(+91) 896 23 520 53</p>
                            </div>
                        </div>
                        <div class="contact-box-place clearfix">
                            <div class="contact-box-icon"><i class="ti-email"></i></div>
                            <div class="contact-box-text">
                                <h5>Email</h5>
                                <p>info@minimarkaz.com</p>
                                <p>support@minimarkaz.com</p>
                                <p>sales@minimarkaz.com</p>
                                <p>billing@minimarkaz.com</p>
                            </div>
                        </div>
                        <div class="contact-box-place clearfix">
                            <div class="contact-box-icon"><i class="ti-alarm-clock"></i></div>
                            <div class="contact-box-text">
                                <h5>Open Hours</h5>
                                <p>Mon — Sat: 9:0 am — 18:0 pm </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="contact-box-4">
                        <div class="section-heading left-holder mt-15">
                            <h5 class="bold">Send us a message</h5>
                            <div class="section-heading-line"></div>
                        </div>
                        <form class="primary-form mt-20">
                            <div class="row">
                                <div class="col-md-12"><textarea name="message" placeholder="Message"></textarea></div>
                                <div class="col-md-4 col-sm-4 col-xs-12"><input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12"><input type="email" name="email"
                                        placeholder="E-mail"></div>
                                <div class="col-md-4 col-sm-4 col-xs-12"><input type="email" name="email"
                                        placeholder="Phone"></div>
                                <div class="col-md-12 mt-10 mb-30"><button type="submit"
                                        class="primary-button button-sm semi-rounded">Send Message</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map" class="map-1">
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA&amp;callback=initMap">
        </script>
    </div>
@endsection

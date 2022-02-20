@extends('layout.app')

@section('content')
    <div class="page-title jarallax black-overlay-20" data-jarallax data-speed="0.6"
        style="background-image: url('{{ url('img/content/bgs/bg1.jpg') }}');">
        <div class="container">
            <h1>Unlimited SSD Hosting</h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('home') }}">Hosting</a></li>
                <li><a href="{{ route('hosting_ssd') }}">Unlimited SSD Hosting</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <h3 class="bold">Best Cheap <span class="italic libre-baskerville primary-color">Unlimited SSD Webhosting</span> For your Websites</h3>
                <div class="section-heading-line"></div>
                <p>Boost your Websites 3x Faster with our Unlimited SSD Hosting Plans with Faster Server Speed comes with Free SSL | Weekly Backups | Latest Control Panel | LiteSpeed PHP API | Website Builder and More, India's Best Unlimited Webhosting Service Provider Since 2013</p>
            </div>
            {{-- <div class="row mt-50">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="service-block-2"><img src="{{ url('img/content/finance/s-1.jpg') }}" alt="img">
                        <div class="service-block-2-inner">
                            <h4><a href="#">Loans and finance</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="service-block-2"><img src="{{ url('img/content/finance/s-2.jpg') }}" alt="img">
                        <div class="service-block-2-inner">
                            <h4><a href="#">Savings and Investments</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="service-block-2"><img src="{{ url('img/content/finance/s-3.jpg') }}" alt="img">
                        <div class="service-block-2-inner">
                            <h4><a href="#">Mobile Payments</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="service-block-2"><img src="{{ url('img/content/finance/s-4.jpg') }}" alt="img">
                        <div class="service-block-2-inner">
                            <h4><a href="#">Card services</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="section-block-parallax jarallax black-overlay-60" data-jarallax data-speed="0.6"
        style="background-image: url('{{ url('img/content/consulting/homebg1.jpg') }}');">
        <div class="container">
            {{-- <div class="small-heading center-holder mb-40"><span class="white-color uppercase">Pricing Table Style 3</span></div> --}}
            <div class="row mt-20">
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="pricing-list">
                        <h3>SSD1 - Linux (SSD)</h3>
                        <div class="pricing-list-price">
                            <h2><sup>$</sup>2.00</h2>
                            <div class="pricing-list-term">
                                <h6>Monthly</h6>
                            </div>
                            <ul class="pricing-list-products mt-15">
                                <li>Unlimited SSD Space</li>
                                <li>Unlimited Bandwidth</li>
                                <li>Popular Control Panel</li>
                                <li>10 Addon Domains</li>
                                <li>10 Email,FTP,MySQL DB</li>
                                <li>Free SSL (HTTPS)</li>
                                <li>Ruby,Python & NodeJS Supported</li>
                                <li>Wordpress Optimized</li>
                                <li>Free Account Migration</li>
                                <li>PHP Version Selector</li>
                                <li>Jailed SSH Access</li>
                                <li>LiteSpeed PHP API</li>
                                <li>1-Click Softaculous App</li>
                                <li>Weekly Backups (Jetbackup)</li>
                                <li>Instant Activation</li>
                                <li>Ticket,Livechat,Call & Whatsapp Support</li>
                                <li>7 days Moneyback Period</li>
                                <li>CPU : 100% | 2 GB RAM | EP : 50 | I/O : 4 MB/s | IOPS : 2048</li>
                            </ul>
                        </div>
                        <div class="pricing-list-button mt-10"><a href="#">Purchase Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="pricing-list pricing-list-recomended">
                        <h3>SSD2 - Linux (SSD)</h3>
                        <div class="pricing-list-price">
                            <h2><sup>$</sup>3.00</h2>
                            <div class="pricing-list-term">
                                <h6>Monthly</h6>
                            </div>
                            <ul class="pricing-list-products mt-15">
                                <li>Unlimited SSD Space</li>
                                <li>Unlimited Bandwidth</li>
                                <li>Popular Control Panel</li>
                                <li>50 Addon Domains</li>
                                <li>50 Email,FTP,MySQL DB</li>
                                <li>Free SSL (HTTPS)</li>
                                <li>Ruby,Python & NodeJS Supported</li>
                                <li>Wordpress Optimized</li>
                                <li>Free Account Migration</li>
                                <li>PHP Version Selector</li>
                                <li>Jailed SSH Access</li>
                                <li>LiteSpeed PHP API</li>
                                <li>1-Click Softaculous App</li>
                                <li>Weekly Backups (Jetbackup)</li>
                                <li>Instant Activation</li>
                                <li>Ticket,Livechat,Call & Whatsapp Support</li>
                                <li>7 days Moneyback Period</li>
                                <li>CPU : 100% | 2 GB RAM | EP : 50 | I/O : 4 MB/s | IOPS : 2048</li>
                            </ul>
                        </div>
                        <div class="pricing-list-button mt-10"><a href="#">Purchase Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="pricing-list">
                        <h3>SSD3 - Linux (SSD)</h3>
                        <div class="pricing-list-price">
                            <h2><sup>$</sup>5.00</h2>
                            <div class="pricing-list-term">
                                <h6>Monthly</h6>
                            </div>
                            <ul class="pricing-list-products mt-15">
                                <li>Unlimited SSD Space</li>
                                <li>Unlimited Bandwidth</li>
                                <li>Popular Control Panel</li>
                                <li>Unlimited Domains</li>
                                <li>Unlimited Email,FTP,MySQL DB</li>
                                <li>Free SSL (HTTPS)</li>
                                <li>Ruby,Python & NodeJS Supported</li>
                                <li>Wordpress Optimized</li>
                                <li>Free Account Migration</li>
                                <li>PHP Version Selector</li>
                                <li>Jailed SSH Access</li>
                                <li>LiteSpeed PHP API</li>
                                <li>1-Click Softaculous App</li>
                                <li>Weekly Backups (Jetbackup)</li>
                                <li>Instant Activation</li>
                                <li>Ticket,Livechat,Call & Whatsapp Support</li>
                                <li>7 days Moneyback Period</li>
                                <li>CPU : 100% | 2 GB RAM | EP : 50 | I/O : 4 MB/s | IOPS : 2048</li>
                            </ul>
                        </div>
                        <div class="pricing-list-button mt-10"><a href="#">Purchase Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

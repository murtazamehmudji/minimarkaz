@extends('layout.app')

@section('content')
    <div class="page-title jarallax black-overlay-20" data-jarallax data-speed="0.6"
        style="background-image: url('{{ url('img/content/bgs/bg1.jpg') }}');">
        <div class="container">
            <h1>NVMe Unlimited Hosting</h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('home') }}">Hosting</a></li>
                <li><a href="{{ route('hosting_nvme') }}">NVMe Unlimited Hosting</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <h3 class="bold">Best Affordable <span class="italic libre-baskerville primary-color">NVMe Hosting in India</span></h3>
                <div class="section-heading-line"></div>
                <p>Cheap Best NVMe Hosting Unlimited in Singapore Comes with Free SSL , Optimized for Wordpress to load your Websites 30x faster compared to normal SSD Servers. NVMe + LiteSpeed + Cloudlinux = Excellent Performance Improvement.</p>
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
                        <h3>SG1 - Linux</h3>
                        <div class="pricing-list-price">
                            <h2><sup>$</sup>12.00</h2>
                            <div class="pricing-list-term">
                                <h6>yearly</h6>
                            </div>
                            <ul class="pricing-list-products mt-15">
                                <li>100% NVMe Disk</li>
                                <li>Unlimited SSD Space</li>
                                <li>Unlimited Bandwidth</li>
                                <li>Single Domain</li>
                                <li>Latest cP</li>
                                <li>10 Email, FTP, MySQL</li>
                                <li>LiteSpeed Server</li>
                                <li>Imunify360 Proactive Security</li>
                                <li>Free Backups with 1 Click Restore</li>
                                <li>99% Server Uptime with SLA Agreement</li>
                                <li>Jailed SSH Enabled</li>
                                <li>Free SSL (HTTPS)</li>
                                <li>1-Click Softaculous App</li>
                                <li>Instant Activation</li>
                                <li>7 days Moneyback Period</li>
                                <li>Whitelabel Support for your Clients</li>
                                <li>Python, Ruby, NodeJS Supported</li>
                                <li>CPU : 100% | 2 GB RAM | EP : 50 | I/O : 4 MB/s | IOPS : 2048</li>
                            </ul>
                        </div>
                        <div class="pricing-list-button mt-10"><a href="#">Purchase Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="pricing-list pricing-list-recomended">
                        <h3>SG2 - Linux</h3>
                        <div class="pricing-list-price">
                            <h2><sup>$</sup>18.00</h2>
                            <div class="pricing-list-term">
                                <h6>Yearly</h6>
                            </div>
                            <ul class="pricing-list-products mt-15">
                                <li>100% NVMe Disk</li>
                                <li>Unlimited SSD Space</li>
                                <li>Unlimited Bandwidth</li>
                                <li>5 Domain</li>
                                <li>Latest cP</li>
                                <li>10 Email,FTP,MySQL</li>
                                <li>LiteSpeed Server</li>
                                <li>Imunify360 Proactive Security</li>
                                <li>Free Backups with 1 Click Restore</li>
                                <li>99% Server Uptime with SLA Agreement</li>
                                <li>Jailed SSH Enabled</li>
                                <li>Free SSL (HTTPS)</li>
                                <li>1-Click Softaculous App</li>
                                <li>Instant Activation</li>
                                <li>7 days Moneyback Period</li>
                                <li>Whitelabel Support for your Clients</li>
                                <li>Python,Ruby,NodeJS Supported</li>
                                <li>CPU : 100% | 2 GB RAM | EP : 50 | I/O : 4 MB/s | IOPS : 2048</li>
                            </ul>
                        </div>
                        <div class="pricing-list-button mt-10"><a href="#">Purchase Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="pricing-list">
                        <h3>SG3 - Linux</h3>
                        <div class="pricing-list-price">
                            <h2><sup>$</sup>25.00</h2>
                            <div class="pricing-list-term">
                                <h6>Yearly</h6>
                            </div>
                            <ul class="pricing-list-products mt-15">
                                <li>100% NVMe Disk</li>
                                <li>Unlimited SSD Space</li>
                                <li>Unlimited Bandwidth</li>
                                <li>10 Domain</li>
                                <li>Latest cP</li>
                                <li>10 Email,FTP,MySQL</li>
                                <li>LiteSpeed Server</li>
                                <li>Imunify360 Proactive Security</li>
                                <li>Free Backups with 1 Click Restore</li>
                                <li>99% Server Uptime with SLA Agreement</li>
                                <li>Jailed SSH Enabled</li>
                                <li>Free SSL (HTTPS)</li>
                                <li>1-Click Softaculous App</li>
                                <li>Instant Activation</li>
                                <li>7 days Moneyback Period</li>
                                <li>Whitelabel Support for your Clients</li>
                                <li>Python,Ruby,NodeJS Supported</li>
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

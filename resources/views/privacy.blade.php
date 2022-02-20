@extends('layout.app')

@section('content')
    <div class="page-title jarallax black-overlay-20" data-jarallax data-speed="0.6"
        style="background-image: url('img/content/bgs/bg1.jpg');">
        <div class="container">
            <h1>Privacy Policy</h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-12 offset-md-1">
                    <div class="section-heading center-holder"><small>We respect your privacy</small>
                        <h2 class="bold">
                            Privacy 
                            <span class="italic libre-baskerville"> Policy</span>
                        </h2>
                        <div class="section-heading-line"></div>
                    </div>
                    {{-- <div class="text-content-big center-holder mt-25" /> --}}
                    <div class="text-content-big mt-25">
                        <p><strong>How we use your data</strong></p>
                        <p>In an effort to protect our clients' and site visitors privacy and rights, we have established a Privacy Policy which explains what information we gather on visitors and what we do with information that we gather.
                        <br/>
                        This Privacy Policy governs the manner in which we collect, use, maintain and disclose information collected from users of this Web site (each, a “User”).</p>
                        <p><strong>Privacy</strong></p>
                        <p>User's privacy is very important to us. We are committed to safeguarding the information Users entrust to us.</p>
                        <p><strong>Data Collection</strong></p>
                        <p>We collect personally identifiable information from Users through online forms for ordering products and services. We may also collect information about how Users use our Web site, for example, by tracking the number of unique views  received by the pages of the Web site or the domains from which Users originate. We use “cookies” to track how Users use our web site.</p>
                        <p><strong>Data Usage</strong></p>
                        <p>We may use personally identifiable information collected through our Web site to contact Users regarding products and services offered by us and our trusted affiliates, independent contractors and business partners, and otherwise to enhance Users' experience with us and such affiliates, independent contractors and business partners.At no time will our database of users ever be sold to any entity for the purpose of marketing or mailing lists. Personal information will not be sold or otherwise transferred to our business partners without your prior consent, except that we will disclose the information we collect to third parties when, in our good faith judgment, we are obligated to do so under applicable laws</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

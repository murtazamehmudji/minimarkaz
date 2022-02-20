<header id="nav-transparent">
    <nav id="navigation4" class="container navigation">
        <div class="nav-header">
            <a class="nav-brand" href="{{ url('/') }}">
                <img src="{{ url('img/logos/logo-light.png') }}" alt="logo" id="light_logo">
                <img src="{{ url('img/logos/logo.png') }}" alt="logo" id="main_logo">
            </a>
            <div class="nav-toggle"></div>
        </div>
        {{-- <div class="nav-search">
            <div class="nav-search-button"><i class="ti-search"></i></div>
            <form>
                <div class="nav-search-inner"><input type="search" name="search" placeholder="Enter your keywords..." /></div>
            </form>
        </div> --}}
        <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li><a href="{{ route('home') }}">Hosting</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ route('hosting_nvme') }}">NVMe Hosting</a></li>
                        <li><a href="{{ route('hosting_shared') }}">Unlmited Shared Hosting</a></li>
                        <li><a href="{{ route('hosting_ssd') }}">Unlmited SSD Hosting</a></li>
                    </ul>
                </li>
                {{-- <li><a href="{{ url('/') }}">Reseller Plans</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ url('') }}">NVMe Reseller Hosting</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/') }}">Servers</a>
                    <ul class="nav-dropdown">
                        <li><a href="#">Portfolio Grid</a>
                            <ul class="nav-dropdown">
                                <li><a href="portfolio-grid-2.html">Portfolio Grid 2 Columns</a></li>
                                <li><a href="portfolio-grid-3.html">Portfolio Grid 3 Columns</a></li>
                                <li><a href="portfolio-grid-4.html">Portfolio Grid 4 Columns</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Portfolio Masonry</a>
                            <ul class="nav-dropdown">
                                <li><a href="portfolio-masonry-2.html">Portfolio Masonry 2 Columns</a></li>
                                <li><a href="portfolio-masonry-3.html">Portfolio Masonry 3 Columns</a></li>
                                <li><a href="portfolio-masonry-4.html">Portfolio Masonry 4 Columns</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Portfolio Hover Styles</a>
                            <ul class="nav-dropdown">
                                <li><a href="portfolio-hover-style-1.html">Portfolio Hover Style 1</a></li>
                                <li><a href="portfolio-hover-style-2.html">Portfolio Hover Style 2</a></li>
                                <li><a href="portfolio-hover-style-3.html">Portfolio Hover Style 3</a></li>
                            </ul>
                        </li>
                        <li><a href="project-single.html">Project Single</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/') }}">Services</a>
                    <ul class="nav-dropdown">
                        <li><a href="#">Blog Grid Classic</a>
                            <ul class="nav-dropdown">
                                <li><a href="blog-grid-classic-2.html">Blog Grid Classic 2 Column</a></li>
                                <li><a href="blog-grid-classic-3.html">Blog Grid Classic 3 Column</a></li>
                                <li><a href="blog-grid-classic-4.html">Blog Grid Classic 4 Column</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog Grid Simple</a>
                            <ul class="nav-dropdown">
                                <li><a href="blog-simple-2.html">Blog Simple 2 Column</a></li>
                                <li><a href="blog-simple-3.html">Blog Simple 3 Column</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog List</a>
                            <ul class="nav-dropdown">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-list-centered.html">Blog List Centered</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog Post</a>
                            <ul class="nav-dropdown">
                                <li><a href="blog-post.html">Blog Post</a></li>
                                <li><a href="blog-post-slider.html">Blog Post Slider</a></li>
                                <li><a href="blog-post-video.html">Blog Post Video</a></li>
                                <li><a href="blog-post-centered.html">Blog Post Centered</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
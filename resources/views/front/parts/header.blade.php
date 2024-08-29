<header class="main-header position-absolute w-100 ">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">

                    <a href="/index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none ">
                        <img src="{{asset('front-assets')}}/img/logo-white.png" alt="logo" class="img-fluid logo-white" />
                        <img src="{{asset('front-assets')}}/img/logo-color.png" alt="logo" class="img-fluid logo-color" />
                    </a>
                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                        <i class="flaticon-menu" data-bs-target="#offcanvasWithBackdrop"
                            aria-controls="offcanvasWithBackdrop" data-bs-toggle="offcanvas" role="button"></i>
                    </a>

                    <div class="clearfix"></div>

                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto  main-menu">

                            <li><a href={{url('/index')}} class="nav-link @yield('index-active')">Home</a></li>
                            <li><a href={{url('/about-us')}} class="nav-link  @yield('about-active')">About Us</a></li>
                            <li><a href={{url('/port')}} class="nav-link  @yield('port-active')">Our Portfolio</a></li>
                            <li><a href={{url('/contact-us')}} class="nav-link  @yield('contact-active')">Contact Us</a></li>

                        </ul>
                    </div>

                    <ul class="list-unstyled list-inline footer-social-list d-flex mb-0">

                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/SolidtechEg" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/company/solidtechnologies" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/solidtechegofficial/" target="_blank">
                                <i class="fab fa-instagram"></i>
                        </a>
                         
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.tiktok.com/@solidtecheg"  target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a> 
                        </li>

                    </ul>

                </div>
            </nav>

            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="#" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/logo-color.png" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body z-10">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                        <li><a href="/index.html" class="nav-link">Home</a></li>
                        <li><a href="/about-us.html" class="nav-link">About Us</a></li>
                        <li><a href="/portfolio.html" class="nav-link">Our Portfolio</a></li>
                        <li><a href="/contact-us.html" class="nav-link">Contact Us</a></li>

                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="https://www.facebook.com/SolidtechEg" target="_blank" class="btn">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/solidtechnologies" target="_blank" class="btn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/solidtechegofficial/" target="_blank" class="btn">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.tiktok.com/@solidtecheg" target="_blank" class="btn">
                            <i class="fab fa-tiktok"></i>
                        </a>        
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->

        </header>
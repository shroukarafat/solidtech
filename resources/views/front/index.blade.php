@extends('front.layout')
@section('title','index')



@section('contant')

<section class="hero-it-solution hero-nine-bg ptb-120"
            style="background: url('{{asset('front-assets')}}/img/hero-9.png')no-repeat center center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                        <h1 class="fw-bold display-5 h-hero-h1">
    {{ trans_key('hero_title') }}
</h1>
<p class="lead">
    {{ trans_key('hero_description') }}
</p>
  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img position-relative mt-5 mt-lg-0">
                            <img src="{{asset('front-assets')}}/img/banner_image.png" alt="hero hero-it-solution " class="img-fluid" />
                            <!-- <div class="bubble">
                                <span class="bubble-1"></span>
                                <span class="bubble-2"></span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->
<!--hero section start-->

        <!--about us start-->
        <section class="promo-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="section-heading text-center">
                            <h2 class="primary-text">Your Partner in <span class="accent-text">Digital
                                    Transformation</span> </h2>
                            <p class="grey-text">At Solid Technologies, we pride ourselves on delivering cutting-edge
                                digital solutions that empower businesses to excel in the digital age. Founded in 2017,
                                our expertise spans the development of innovative mobile applications, robust web
                                platforms, and comprehensive digital transformations. Our goal is to help clients build
                                a strong online presence, optimize their operations, and achieve sustained growth.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-4"
                            data-aos="fade-up" data-aos-delay="50">
                            <div class="promo-card-info">
                                <h3 class="display-5 fw-medium mb-4 accent-text">50+</h3>
                                <h2 class="h5">Completed Projects</h2>
                                <p class="mb-0 grey-text">Delivering over 50 successful projects across various
                                    industries with precision and excellence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="promo-card-wrap promo-border-hover border border-2 rounded-custom p-5 mb-4 mb-lg-0 mb-md-4"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="promo-card-info">
                                <h3 class="display-5 fw-medium mb-4 accent-text">24+</h3>
                                <h2 class="h5 ">Clients</h2>
                                <p class="mb-0 grey-text">Earning the trust and satisfaction of over 24 clients globally
                                    with our top-notch digital solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-0"
                            data-aos="fade-up" data-aos-delay="150">
                            <div class="promo-card-info">
                                <h3 class="display-5 fw-medium mb-4 accent-text">8+</h3>
                                <h2 class="h5">Years of Experience</h2>
                                <p class="mb-0 grey-text">Leveraging over 8 years of expertise to deliver high-quality
                                    digital solutions for diverse business needs worldwide. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--about us end-->

        <!-- Services -->
        <section class="services-icon">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading text-center">
                            <h2 class="primary-text">Expertise in Every Aspect of <span class="accent-text"> Digital
                                    Transformation</span> </h2>
                            <p class="grey-text">
                                Discover the digital solutions we offer to transform your business. From mobile apps to
                                web development, our services are designed to drive growth and enhance your digital
                                presence.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/business-analysis.png" alt="service icon" width="64"
                                    height="64" />
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5 primary-text">Business Analysis</h3>
                                <p class="grey-text">
                                    dentify key opportunities and challenges, providing insights and strategies to
                                    optimize operations and achieve business goals efficiently.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/ui.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5 primary-text">UX/UI Design</h3>
                                <p class="grey-text">
                                    Enhance user satisfaction with intuitive, user-centered designs, ensuring smooth,
                                    effective interactions with all digital products.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/graphic.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5 primary-text">Graphic Design</h3>
                                <p class="grey-text">
                                    Deliver captivating graphic designs that effectively communicate brand messages,
                                    ensuring visuals align with business objectives.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-end border-bottom">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/web-development.png" alt="service icon" width="65"
                                    height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5 primary-text">Web Development</h3>
                                <p class="grey-text">
                                    Create secure, high-performance websites using advanced technologies, ensuring
                                    compatibility across devices and robust scalability.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-end border-bottom">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/mobile-development.png" alt="service icon" width="65"
                                    height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5 primary-text">Mobile Development</h3>
                                <p class="grey-text">
                                    Develop high-performance, secure mobile applications using advanced technology,
                                    ensuring compatibility across devices and platforms.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-bottom">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/iot.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5 primary-text">IoT Solutions</h3>
                                <p class="grey-text">
                                    Develop innovative IoT solutions that connect devices and systems, enhancing data
                                    collection, analysis, and automation processes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-end">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/integrations.png" alt="service icon" width="65"
                                    height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5 primary-text">Integrations</h3>
                                <p class="grey-text">
                                    Seamlessly integrate various software and platforms, enhancing functionality and
                                    efficiency in the modern digital landscape, ensuring optimal performance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-end">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/software-testing.png" alt="service icon" width="65"
                                    height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5 primary-text">Software Testing</h3>
                                <p class="grey-text">
                                    Ensure applications are reliable and secure through comprehensive testing,
                                    minimizing risks and enhancing functionality and security at every stage
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center">
                            <div class="service-icon icon-center">
                                <img src="{{asset('front-assets')}}/img/service/seo.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5 primary-text">Search Engine Optimization</h3>
                                <p class="grey-text">
                                    Boost online visibility and drive organic traffic through strategic SEO practices,
                                    improving search engine rankings and visibility to attract potential customers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->

        <!-- why choose us section start -->
        <section class="digi-services dat-bg pt-80 pb-120 mt-10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h2 class="clr-text primary-text">
                                Uncover the advantage of
                                <span class="accent-text">partnering with us.</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <div class="digi-service-single bg-white p-4 mb-4 mb-xl-0">
                            <img src="{{asset('front-assets')}}/img/icons/tailored-solutions.svg" alt="icon" />
                            <h3 class="h5 primary-text">Tailored Solutions</h3>
                            <p>We understand that every business is unique. Our team collaborates closely with you to
                                develop customized solutions that align with your goals.
                            </p>
                            <ul class="list-unstyled mb-0">
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black accent-text">In-depth Analysis</b>
                                </li>
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Bespoke Development</b>
                                </li>
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Continuous Optimization</b>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <div class="digi-service-single bg-white p-4 mb-4 mb-xl-0">
                            <img src="{{asset('front-assets')}}/img/icons/experienced-team.svg" alt="icon" />
                            <h3 class="h5 primary-text">Experienced Team</h3>
                            <p>Our professionals are highly skilled and bring extensive experience across various
                                industries, ensuring top-quality deliverables.
                            </p>
                            <ul class="list-unstyled mb-0">
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Industry Expertise</b>
                                </li>
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Skilled Professionals</b>
                                </li>
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Quality Assurance</b>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <div class="digi-service-single bg-white p-4 mb-4 mb-xl-0">
                            <img src="{{asset('front-assets')}}/img/icons/record.svg" alt="icon" />
                            <h3 class="h5 primary-text">Proven Track Record</h3>
                            <p>We have successfully partnered with numerous clients, helping them achieve their business
                                objectives through innovative technology solutions.
                            </p>
                            <ul class="list-unstyled mb-0">
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Successful Partnerships</b>
                                </li>
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Achieved Objectives</b>
                                </li>
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Innovative Solutions</b>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <div class="digi-service-single bg-white p-4 mb-4 mb-xl-0">
                            <img src="{{asset('front-assets')}}/img/icons/success.svg" alt="icon" />
                            <h3 class="h5 primary-text">Dedication to Success</h3>
                            <p>We are committed to your long-term success, providing solutions that address your current
                                needs while supporting future growth and scalability.
                            </p>
                            <ul class="list-unstyled mb-0">
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Long-term Vision</b>
                                </li>
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Comprehensive Solutions</b>
                                </li>
                                <li class="py-1">
                                    <i class="far fa-check-circle me-2  accent-text"></i>
                                    <b class="text-black  accent-text">Growth Support</b>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- why choose us section start end -->

        <!-- Clients Start -->
        <section class="integration-section mt-10 mb-5">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-12">
                        <div class="section-heading" data-aos="fade-up">
                            <h2 class="h2 text-center primary-text">Partners in <span class="accent-text">Innovation and
                                    Growth</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <!--animated shape start-->
                            <ul
                                class="position-absolute animate-element parallax-element shape-service z--1 d-none d-lg-none d-xl-block">

                                <li class="layer" data-depth="0.02">
                                    <img src="{{asset('front-assets')}}/img/color-shape/feature-2.svg" alt="shape"
                                        class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="{{asset('front-assets')}}/img/color-shape/feature-3.svg" alt="shape"
                                        class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <ul class="integration-list list-unstyled mb-0">
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Tayseer.png" alt="integration"
                                            class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Presidency.png" alt="integration"
                                            class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Dara.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/egypt.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Jomaih.png" alt="integration"
                                            class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Mani.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Jadeed.png" alt="integration"
                                            class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Click-togo.png" alt="integration"
                                            class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/mega.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Chattla.png" alt="integration"
                                            class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Boho.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/Daawah.png" alt="integration"
                                            class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/lines-travel.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/sweet-mart.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/motqn.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{asset('front-assets')}}/img/integations/ubqt.png" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients end -->

        <!--CTA start-->
        <section class="cta-subscribe pt-120 pb-120 ">
            <div class="container">
                <div class="bg-gradient ptb-120 position-relative overflow-hidden rounded-custom">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-8">
                            <div class="subscribe-info-wrap text-center position-relative z-2">
                                <div class="section-heading">
                                    <h4 class="h5 accent-text">Unlock Your Business Potential</h4>
                                    <h2>Ready to Take Your Business to the Next Level?</h2>

                                    <p>Contact us to discuss your project and discover how Solid Technologies can be the
                                        catalyst for your digital success.</p>
                                </div>
                                <div class="form-block-banner mw-60 m-auto mt-5">
                                    <a href="/contact-us.html" class="btn btn-accent">Let’s Collaborate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-circle rounded-circle circle-shape-3 position-absolute accent-bg left-5"></div>
                    <div class="bg-circle rounded-circle circle-shape-1 position-absolute accent-bg right-5"></div>
                </div>
            </div>
        </section>
        <!--CTA end-->
        @endsection


       
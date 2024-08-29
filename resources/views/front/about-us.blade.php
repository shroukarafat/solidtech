@extends('front.layout')
@section('about-active','active')
@section('title','about-us')

@section('contant')

<!--header end-->

        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark text-center " style="background: url('assets/img/hero-9.png')no-repeat center center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="display-5 fw-bold">From Humble Beginnings to <span class="text-accent">Major Achievements</span></h1>

                    </div>
                </div>
            </div>
        </section>
<!-- About Start -->
<section class="counter-with-video pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <div class="mt-5 mt-lg-0">
                            <div  class="pe-5">
                                <h2 class="primary-text mb-4">
                                    The Journey Behind <span class="accent-text">Our Innovation</span>
                                </h2>
                                <p class="grey-text">
                                    Our journey began in <b>2017</b>, driven by a passion for innovation and a commitment to excellence in the digital landscape. Over the years, we’ve faced numerous challenges and witnessed remarkable changes in the industry. We’ve grown from a small team with big ideas to a trusted partner for businesses across the globe. Our experiences have shaped us, making us more resilient, adaptive, and focused on delivering top-quality digital solutions.
                                </p>

                                <p class="grey-text">
                                    Through all the changes, our core values and passion for what we do have remained unwavering. We’ve seen teams evolve, technologies advance, and new opportunities arise, but our commitment to our clients and our mission has always been at the heart of our journey.
                                </p>
                                <p class="grey-text">
                                    As we continue to grow and evolve, we’re excited to see what the future holds, confident that our experiences have prepared us for the challenges and opportunities ahead.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-lg-5 col-md-12">
                        <div class="bg-white p-3 pt-4 cyber-count-box rounded-custom">
                            <img src="{{asset('front-assets')}}/img/icons/Mission Icon.svg" alt="icon" />
                            <h5 class="h5 mt-4">Mission</h5>
                            <p>
                                Deliver innovative, high-quality digital solutions that help businesses achieve their goals. We strive to exceed client expectations through our commitment to excellence.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="bg-white p-3 pt-4 cyber-count-box rounded-custom ">
                            <img src="{{asset('front-assets')}}/img/icons/Vision Icon.svg" alt="icon" />
                            <h5 class="h5 mt-4">Vision</h5>
                            <p>
                                To be a leading provider of digital solutions across various industries, recognized for our exceptional service, innovative solutions, and lasting partnerships with our clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- why choose us section start -->
        <section class="digi-services dat-bg pt-80 pb-120 mt-10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h2 class="clr-text primary-text">
                                The Core Values
                                <span class="accent-text">We Uphold.</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <div class="digi-service-single bg-white p-3 pt-4 pb-4 mb-xl-0">
                            <img src="{{asset('front-assets')}}/img/icons/tailored-solutions.svg" alt="icon" />
                            <h3 class="h5 primary-text mb-3">Innovation</h3>
                            <p>We continually seek to implement the latest technologies and creative solutions to meet the evolving needs of our clients.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <div class="digi-service-single bg-white p-3 pt-4 pb-4 mb-xl-0">
                            <img src="{{asset('front-assets')}}/img/icons/success.svg" alt="icon" />
                            <h3 class="h5 primary-text mb-3">Quality</h3>
                            <p>We are committed to delivering top-tier products and services that exceed client expectations and industry standards.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <div class="digi-service-single bg-white p-3 pt-4 pb-4 mb-xl-0">
                            <img src="{{asset('front-assets')}}/img/icons/experienced-team.svg" alt="icon" />
                            <h3 class="h5 primary-text mb-3">Collaboration</h3>
                            <p>We believe in the power of teamwork, working closely with our clients and within our team to achieve common goals.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <div class="digi-service-single bg-white p-3 pt-4 pb-4 mb-xl-0">
                            <img src="{{asset('front-assets')}}/img/icons/record.svg" alt="icon" />
                            <h3 class="h5 primary-text mb-3">Customer-Centricity</h3>
                            <p>Our clients’ success is our priority. We focus on understanding their needs & delivering solutions that drive their business forward.
                            </p>
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
                                    <a href="contact-us.html" class="btn btn-accent">Let’s Collaborate</a>
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
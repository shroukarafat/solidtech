@extends('front.layout')
@section('contact-active','active')
@section('title','contact-us')

@section('contant')


                    
         
         <section class="page-header position-relative overflow-hidden ptb-120 bg-dark text-center " style="background: url('assets/img/hero-9.png')no-repeat center center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="display-5 fw-bold">Let’s work <span class="text-accent">together</span></h1>
                        <p class="lead">We are committed to providing exceptional service. For inquiries, assistance, or partnerships, reach out to us, and one of our team members will respond promptly.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        
        <section class="contact-promo ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-comment fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Chat with us</h5>
                                <p>Message us on WhatsApp for quick support.
                                </p>
                            </div>
                            <a href="http://wa.me/201112946141" class="btn btn-link mt-auto">WhatsApp</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-envelope fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Email Us</h5>
                                <p>Reach us through email at <strong>info@solidtecheg.com</strong>.</p>
                            </div>
                            <a href="mailto:info@solidtecheg.com" class="btn btn-link mt-autoo">Email Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-phone fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Give us a call</h5>
                                <p>Our team is available from Sunday to Thursday, <strong>8 am to 6 pm EST</strong>.</p>
                            </div>
                            <a href="tel:+201112946141" class="btn btn-link mt-auto">+20 111 2946 141</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo section end-->

        <!--contact us form start-->
        <section class="contact-us-form  pb-120" style="background: url('{{asset('front-assets')}}/img/shape/contact-us-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading">
                            <h2 class="text-capitalize text-center">our team is here to help</h2>
                        </div>

                
                        @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="register-form">
                    @csrf 

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="name" class="mb-1">Name<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="company" class="mb-1">Company or Organization <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="company" name="company" required placeholder="Company or Organization" value="{{ old('company') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" required placeholder="Phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="mb-1">Message <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <textarea class="form-control" id="message" name="message" required placeholder="How can we help you?" style="height: 120px">{{ old('message') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subscribe">
                            <input type="checkbox" name="subscribe" id="subscribe" value="1">
                            Subscribe
                        </label>
                    </div>
                    <button type="submit" class="btn btn-accent mt-4">Get in Touch</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--contact us form end-->

@endsection
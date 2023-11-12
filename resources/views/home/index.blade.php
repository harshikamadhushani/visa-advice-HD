@extends('layouts.home-app')

@section('title')
    Home
@endsection

@section('css')
@endsection

@section('content')

    @include('layouts.home-nav-bar')

    <header class="header-2">
        <div class="page-header min-vh-75 relative" style="background-image: url('{{ URL::asset('/build/home/assets/img/bg3.jpg') }}')">
            <span class="mask  opacity-4"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Experience the world <br>without boundaries</h1>
                        <p class="lead text-white mt-3">We can help you navigate the complex world of visa. </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

        <section class="pt-3 pb-4" id="count-stats">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto py-3">
                        <div class="row">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"><span id="state1" countTo="12">0</span>+
                                    </h1>
                                    <h5 class="mt-3">Countries</h5>
                                    <p class="text-sm font-weight-normal">Unlocking Opportunities in 12+ Countries for Your
                                        Global Education Journey.</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"> <span id="state2" countTo="1000">0</span>+
                                    </h1>
                                    <h5 class="mt-3">Clients</h5>
                                    <p class="text-sm font-weight-normal">Empowering Over 1,000 Clients to Achieve Their
                                        Study Abroad Dreams.</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary" id="state3" countTo="10">0</h1>
                                    <h5 class="mt-3">Experience</h5>
                                    <p class="text-sm font-weight-normal">Reliable Partner on Your Dream Voyage: Your
                                        Trusted Journey Companion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12 my-auto">
                        <h3 class="text-gradient text-dark mb-0">Unlocking International Opportunities </h3>
                        <h3>With Our Experienced Team?</h3>
                        <p class="pe-md-5 mb-4">
                            Our team is comprised of experienced student visa consultants who have worked in the education
                            industry for many years. We have helped hundreds of students from around the world obtain visas
                            to study in the United States, Canada, the United Kingdom, and other countries.
                        </p>
                        <div class="github-buttons">
                            <a href="" target="_blank" class="btn bg-gradient-dark mb-5 mb-sm-0">Read More</a>
                            <div class="github-button">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 my-auto">
                        <a href="">
                            <img class="w-100 border-radius-lg shadow-lg" src="{{ URL::asset('/build/home/assets/img/undraw_world_re_768g.svg') }}"
                                alt="Product Image">
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-5 py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                        <div class="rotating-card-container">
                            <div
                                class="card card-rotate card-background card-background-mask-dark shadow-dark mt-md-0 mt-5">
                                <div class="front front-background"
                                    style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Enhance Your <br /> Global Journey</h3>
                                        <p class="text-white opacity-8">Empower your educational journey with our support,
                                            making your global ambitions a reality. Unlock opportunities today.</p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                    style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Apply Now</h3>
                                        <p class="text-white opacity-8"> Take the first step towards your dream education.
                                            Apply now and embark on your global journey.</p>
                                        <a href=".//sections/page-sections/hero-sections.html" target="_blank"
                                            class="btn btn-white btn-sm w-50 mx-auto mt-3">Sign up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-auto">
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                                    <h5 class="font-weight-bolder mt-3">Visa processing and application support</h5>
                                    <p class="pe-5">Simplified Visa Processing and Application Support – Your Gateway to
                                        Global Education Opportunities.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">flighttakeofficon</i>
                                    <h5 class="font-weight-bolder mt-3">Expertise on immigration regulations</h5>
                                    <p class="pe-3">Mastery of Immigration Regulations: Ensuring Your Smooth Path to
                                        Global Education.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start mt-5">
                            <div class="col-md-6 mt-3">
                                <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
                                <h5 class="font-weight-bolder mt-3">Assistance with document procurement</h5>
                                <p class="pe-5">Seamless Document Acquisition: We Handle the Paperwork, You Focus on Your
                                    Educational Journey.</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">schoolicon</i>
                                    <h5 class="font-weight-bolder mt-3">Partnerships with educational institutions</h5>
                                    <p class="pe-3">Valuable University Collaborations: Expanding Your Access to Premier
                                        Educational Institutions Worldwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="row text-center my-sm-5 mt-5">
                        <div class="col-lg-6 mx-auto">
                            <span class="badge bg-dark mb-3">Countries</span>
                            <h2 class="">Choose Your Dream Destination</h2>
                            <p class="lead">Select your dream study destination from a world of possibilities <br /> and
                                begin your global journey. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <a href="./pages/about-us.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="{{ URL::asset('/build/home/assets/img/australia.jpg') }}" alt="aboutus">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Australia</h6>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 mt-md-0 mt-5">
                                <a href="./pages/contact-us.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="{{ URL::asset('/build/home/assets/img/canada.jpg') }}" alt="contacus">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Canada</h6>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 mt-md-3 mt-6">
                                <a href="./pages/author.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="{{ URL::asset('/build/home/assets/img/uk.jpg') }}" alt="author">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">UK</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 mt-md-3 mt-6">
                                <a href="./pages/sign-in.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="{{ URL::asset('/build/home/assets/img/usa.jpg') }}" alt="signin">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">USA</h6>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 mt-md-3 mt-6">
                                <a href="./pages/sign-in.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="{{ URL::asset('/build/home/assets/img/new.jpg') }}" alt="signin">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">New Zealand</h6>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 mt-md-3 mt-6">
                                <a href="./pages/author.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="{{ URL::asset('/build/home/assets/img/norway.jpg') }}" alt="author">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Author Page</h6>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 mx-auto mt-md-0 mt-5">
                        <div class="position-sticky" style="top:100px !important">
                            <h4 class="">Discover Where Your Next Adventure Awaits</h4>
                            <h6 class="text-secondary font-weight-normal">Embark on a journey of discovery to find your
                                next adventure and explore a world of endless possibilities and opportunities.</h6>
                        </div>
                    </div>
                </div>
        </section>



        <div class="container mt-sm-5">
            <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl"
                style="background-image: url('{{ URL::asset('/build/home/assets/img/app.jpg') }}'); background-size: cover; " loading="lazy">
                <span class="mask bg-gradient-dark"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ms-lg-5">
                            <h4 class="text-white">Designed for Your Success</h4>
                            <h1 class="text-white"> Platform for you</h1>
                            <p class="lead text-white opacity-8">Our client-focused dashboard offers a user-friendly
                                platform for document uploads, real-time progress tracking, and direct communication with
                                our expert team. Seamlessly monitor your application's status, receive updates, and access
                                personalized support. Your educational journey is at your fingertips, accessible 24/7 for
                                convenience and peace of mind.</p>
                            <a href="" class="text-white icon-move-right">
                                Read docs
                                <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
                        <i class="material-icons text-white text-3xl">flag</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5 class="text-white">Getting Started</h5>
                            <p class="text-white">To begin, create your account, granting you access to our extensive
                                resources and expert guidance. Your path to success starts here.</p>
                            <a href="" class="text-white icon-move-right">
                                Let's start
                                <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
                        <i class="material-icons text-gradient text-dark text-3xl">upload</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5>Document Submission</h5>
                            <p>Safely submit essential documents via dashboard. Our team reviews and guides you, ensuring
                                precision throughout the application process.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
                        <i class="material-icons text-gradient text-dark text-3xl">support</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5>Support</h5>
                            <p>Track your application's real-time progress and connect with our expert consultants for
                                updates or inquiries. Experience a seamless, stress-free educational journey with our
                                support.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section class="py-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto text-center">
                        <h2 class="mb-0">What Our Clients Say About Us</h2>
                        <h2 class="text-gradient text-dark mb-3"> Our Satisfied Clients Speak Out</h2>
                        <p class="lead">Discover why clients trust Visa Advice for their visa needs. Here are a few of
                            their experiences. </p>
                    </div>
                </div>
                <div class="row mt-6">
                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Sunil Perera</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 1 month ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">"As a recent graduate, I owe my successful student visa application to
                                    Visa Advice Pvt Ltd. Their personalized guidance and unwavering support made my
                                    international education dream a reality. Highly recommend their expertise!</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8 ms-md-auto">
                        <div class="card bg-gradient-dark">
                            <div class="card-body">
                                <div class="author align-items-center">
                                    <div class="name">
                                        <h6 class="text-white mb-0 font-weight-bolder">Gayan Bandara</h6>
                                        <div class="stats text-white">
                                            <i class="far fa-clock"></i> 1 week ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-white">"Being a client for over five years, I am extremely grateful for
                                    Visa Advice Pvt Ltd for most accurate, trusted advice and professional support in many
                                    ways towards visa requirements of myself and my family on a number of occasions.
                                    <br>
                                    As such, I recommend Visa Advice Pvt Ltd wholeheartedly, to anyone seeking professional
                                    support for their visa requirements"
                                </p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Nirosha Nanayakara</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 3 weeks ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">"Visa Advice Pvt Ltd has been our go-to for years. Their exceptional team
                                    navigated us through various visa requirements effortlessly, whether it was for
                                    education or leisure travel. Their expertise is unmatched!"</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr class="horizontal dark my-5">
                <div class="row">

                </div>
            </div>
        </section>

        <section class="py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card box-shadow-xl overflow-hidden mb-5">
                            <div class="row">
                                <div class="col-lg-5 position-relative bg-cover px-0"
                                    style="background-image: url('{{ URL::asset('/build/home/assets/img/travel.jpg') }}')" loading="lazy">
                                    <div
                                        class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                                        <div class="mask bg-gradient-dark opacity-8"></div>
                                        <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                                            <h3 class="text-white">Contact Information</h3>
                                            <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get
                                                back to you within 24 hours.</p>
                                            <div class="d-flex p-2 text-white">
                                                <div>
                                                    <i class="fas fa-phone text-sm"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <span class="text-sm opacity-8">(+94) 77 786 6384</span>
                                                </div>
                                            </div>
                                            <div class="d-flex p-2 text-white">
                                                <div>
                                                    <i class="fas fa-envelope text-sm"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <span class="text-sm opacity-8">visaadvice@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="d-flex p-2 text-white">
                                                <div>
                                                    <i class="fas fa-map-marker-alt text-sm"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <span class="text-sm opacity-8"> No.3, Pentrieve Gardens, Colombo
                                                        03</span>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button type="button"
                                                    class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    data-original-title="Log in with Dribbble">
                                                    <i class="fab fa-whatsapp"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    data-original-title="Log in with Facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    data-original-title="Log in with Instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    data-original-title="Log in with Twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </button>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <form class="p-3" id="contact-form" method="post">
                                        <div class="card-header px-4 py-sm-5 py-3">
                                            <h2>Say Hi!</h2>
                                            <p class="lead"> We'd like to talk with you.</p>
                                        </div>
                                        <div class="card-body pt-1">
                                            <div class="row">
                                                <div class="col-md-12 pe-2 mb-3">
                                                    <div class="input-group input-group-static mb-4">
                                                        <label>My name is</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 pe-2 mb-3">
                                                    <div class="input-group input-group-static mb-4">
                                                        <label>I'm looking for</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="What you love">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 pe-2 mb-3">
                                                    <div class="input-group input-group-static mb-4">
                                                        <label>Your message</label>
                                                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="I want to say that..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-end ms-auto">
                                                    <button type="submit" class="btn bg-gradient-dark mb-0">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <h4>Stay Informed with Visa Advice</h4>
                        <p class="mb-4">
                            Get the latest updates and insights in the world of international education and visa
                            requirements.
                        </p>
                        <div class="row">
                            <div class="col-8">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Email Here...</label>
                                    <input type="text" class="form-control mb-sm-0">
                                </div>
                            </div>
                            <div class="col-4 ps-0">
                                <button type="button"
                                    class="btn bg-gradient-dark mb-0 h-100 position-relative z-index-2">Subscribe</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <div class="position-relative">
                            <img class="max-width-50 w-100 position-relative z-index-2"
                                src="{{ URL::asset('/build/home/assets/img/undraw_newsletter_re_wrob.svg') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.home-footer')


@endsection

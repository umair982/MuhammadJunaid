@extends('layouts.appfront')
@section('content')
    <div class="d-none d-xl-block">
        <div class="tmp-sidebar-area tmp_side_bar">
            <div class="inner">
                <div class="top-area">
                    <a href="index.html" class="logo">
                        <img class="logo-dark" src="assets/images/logo/white-logo-reeni.png"
                            alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                        <img class="logo-white" src="assets/images/logo/logo-white.png"
                            alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                    </a>
                    <div class="close-icon-area">
                        <button class="tmp-round-action-btn close_side_menu_active">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div class="image-area-feature">
                        <a href="index.html">
                            <img src="assets/images/logo/man.png" alt="personal-logo">
                        </a>
                    </div>
                    <h5 class="title mt--30">Freelancer delivering exceptional Webflow, and Next.js solutions.</h5>
                    <p class="disc">I am a skilled freelancer specializing in Webflow development, Figma design, and
                        Next.js projects. I deliver creative, dynamic, and user-centric web solutions.
                    </p>
                    <div class="short-contact-area">
                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-phone"></i>
                            <div class="information tmp-link-animation">
                                <span>Call Now</span>
                                <a href="#" class="number">+92 (8800) - 98670</a>
                            </div>
                        </div>
                        <!-- single contact information end -->

                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="information tmp-link-animation">
                                <span>Mail Us</span>
                                <a href="#" class="number">example@info.com</a>
                            </div>
                        </div>
                        <!-- single contact information end -->

                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <div class="information tmp-link-animation">
                                <span>My Address</span>
                                <span class="number">66 Broklyant, New York 3269</span>
                            </div>
                        </div>
                        <!-- single contact information end -->
                    </div>
                    <!-- social area start -->
                    <div class="social-wrapper mt--20">
                        <span class="subtitle">find with me</span>
                        <div class="social-link">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <!-- social area end -->
                </div>
            </div>
        </div>
        <a class="overlay_close_side_menu close_side_menu_active" href="javascript:void(0);"></a>
    </div>

    <div class="d-block d-xl-none">
        <div class="tmp-popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html" class="logo-area">
                            <img class="logo-dark" src="assets/images/logo/white-logo-reeni.png"
                                alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                            <img class="logo-white" src="assets/images/logo/logo-white.png"
                                alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                        </a>

                    </div>
                    <div class="close-menu">
                        <button class="close-button tmp-round-action-btn">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <ul class="tmp-mainmenu">
                    <li>
                        <a href="#">Home
                        </a>
                        <!-- <ul class="submenu">
                <li><a href="index.html">Home 01</a></li>
                <li><a href="index-02.html">Home 02</a></li>
                <li><a href="index-03.html">Home 03</a></li>
                <li><a href="index-04.html">Home 04</a></li>
                <li><a href="index-05.html">Home 05</a></li>
                <li><a href="index-06.html">Home 06</a></li>
                <li><a href="index-07.html">Home 07</a></li>
                <li><a href="index-08.html">Home 08</a></li>
                <li><a href="index-09.html">Home 09</a></li>
                <li><a href="index-10.html">Home 10</a></li>
                <li><a href="index-11.html">Home 11</a></li>
                <li><a href="index-12.html">Home 12</a></li>
                <li><a href="index-13.html">Home 13</a></li>
            </ul> -->
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Services
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Blog
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="blog.html">Blog Classic</a></li>
                            <li><a href="blog-col-4.html">Blog Column 3</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Project
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-style-two.html">Project Style 2</a></li>
                            <li><a href="project-style-three.html">Project Style 3</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>


                <div class="social-wrapper mt--40">
                    <span class="subtitle">find with me</span>
                    <div class="social-link">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
                <!-- social area end -->



            </div>
        </div>
    </div>


    <!-- tmp banner area start -->
    <div class="rpp-banner-two-area">
        <div class="container">
            <div class="banner-two-main-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="banner-right-content">
                            <div class="main-img">

                                {{-- MAIN PROFILE IMAGE --}}
                                <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                                    src="{{ !empty($profile->profile_image) ? asset($profile->profile_image) : asset('assets/images/banner/banner-user-image-two.png') }}"
                                    alt="banner-img">



                                <h2 class="banner-big-text-2 up-down">
                                    {{ $profile->title ?? 'Ux Designer' }}
                                </h2>

                                {{-- RED BACKGROUND IMAGE (OPTIONAL USE banner_image) --}}
                                <div class="benner-two-bg-red-img">
                                    <img src="{{ !empty($profile->banner_image) ? asset($profile->banner_image) : asset('assets/images/banner/banner-user-image-two-red-bg.png') }}"
                                        alt="red-img">
                                </div>

                                {{-- STATIC (OPTIONAL KEEP STATIC) --}}
                                <div class="logo-under-img-wrap">
                                    <div class="logo-under-img">
                                        <img src="{{ asset('assets/images/banner/logo-under-image.png') }}" alt="logo">
                                    </div>
                                    <div class="logo-under-img-2">
                                        <img src="{{ asset('assets/images/banner/logo-under-image-2.png') }}" alt="logo">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 mt--100">
                        <div class="inner">
                            <span class="sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">I am</span>
                            <h1 class="title tmp-scroll-trigger tmp-fade-in animation-order-2">
                                {{ $profile->name }}, a {{ $profile->title }} <br>

                                <span class="header-caption">
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">

                                            @if($skills->count())
                                            @foreach($skills as $index => $skill)
                                            <b class="{{ $index == 0 ? 'is-visible' : 'is-hidden' }} theme-gradient">
                                                {{ $skill->name }}
                                            </b>
                                            @endforeach
                                            @else
                                            <b class="is-visible theme-gradient">Video Editor</b>
                                            @endif

                                        </span>
                                    </span>
                                </span>
                            </h1>

                            {{-- description part --}}
                            <p class="disc tmp-scroll-trigger inv-title-animation-wrap tmp-fade-in animation-order-3">
                                {!! \Illuminate\Support\Str::words($profile->description, 30, '...') !!}
                            </p>
                            <div class="button-area-banner-two tmp-scroll-trigger tmp-fade-in animation-order-4">

                                <a class="tmp-btn hover-icon-reverse radius-round" href="about.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">More About Us</span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            <div class="find-me-on tmp-scroll-trigger tmp-fade-in animation-order-5">
                                <h2 class="find-me-on-title">Find me on</h2>

                                <div class="social-link banner">
                                    @foreach($socials as $social)
                                    <a href="{{ $social->url }}" target="_blank">
                                        <i class="{{ $social->icon }}"></i>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="banner-shape-two">
            <img src="assets/images/banner/banner-shape-two.png" alt="">
        </div>
    </div>
    <!-- tmp banner area end -->

    <!-- tmp text para start -->
    <div class="about-content-area">
        <div class="container tmp-section-gap">
            <div class="text-para-doc-wrap">
                <h2 class="text-para-documents tmp-scroll-trigger tmp-fade-in inv-title-animation-wrap animation-order-1">
                    {!! $profile->description !!}
                </h2>
                <div class="right-bg-text-para">
                    <img src="assets/images/banner/right-bg-text-para-doc.png" alt="">
                </div>
                <div class="left-bg-text-para">
                    <img src="assets/images/banner/left-bg-text-para-doc.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- tmp text para end -->


    <!-- tmp About Me Start -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Counters -->
                <div class="col-lg-6">
                    <div class="about-us-left-content-wrap bg-vactor-one">
                        @foreach($counters as $index => $counter)
                        <div class="years-of-experience-card tmp-scroll-trigger tmp-fade-in animation-order-{{ $index+1 }}">
                            <h2 class="counter card-title">
                                <span class="odometer" data-count="{{ $counter->count }}">00</span>{{ $counter->suffix ?? ''
                                }}
                            </h2>
                            <p class="card-para">{{ $counter->title }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right About Section -->
                <div class="col-lg-6">
                    <div class="about-us-right-content-wrap">
                        <div class="section-head text-align-left mb--50">
                            <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <span class="subtitle">{{ $aboutSection->subtitle }}</span>
                            </div>
                            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">
                                {!! $aboutSection->title !!}
                            </h2>
                            <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">
                                {!! $aboutSection->description !!}
                            </p>
                        </div>
                         </div>
                </div>

            </div>
        </div>
    </section>
    <!-- tmp About Me end -->


    <section class="resume-section tmp-section-gapTop" id="resume-section">
        <div class="container">
            <div class="row">
                {{-- ================= EXPERIENCE ================= --}}
                <div class="col-md-6">
                    <div class="section-header mb--50 tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h2 class="section-title"><i class="fa-regular fa-award"></i> My Experience</h2>
                    </div>

                    <div class="resume-widget">
                        @foreach($experiences as $index => $exp)
                        <div class="resume-single tmp-scroll-trigger tmp-fade-in animation-order-{{ $index + 1 }}">
                            <div class="time">
                                <i class="fa-duotone fa-solid fa-circle-dot fa-fade mr--15"></i>
                                {{ $exp->start_year }} - {{ $exp->currently_working ? 'Present' : $exp->end_year }}
                            </div>
                            <h3 class="resume-title">{{ $exp->title }}</h3>
                            <div class="institute">{{ $exp->company }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- ================= EDUCATION ================= --}}
                <div class="col-md-6">
                    <div class="section-header mb--50 tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h2 class="section-title"><i class="fa-regular fa-graduation-cap"></i> My Education</h2>
                    </div>

                    <div class="resume-widget">
                        @foreach($educations as $index => $edu)
                        <div class="resume-single tmp-scroll-trigger tmp-fade-in animation-order-{{ $index + 1 }}">
                            <div class="time">
                                <i class="fa-duotone fa-solid fa-circle-dot fa-fade mr--15"></i>
                                {{ $edu->year ?? 'N/A' }}
                            </div>
                            <h3 class="resume-title">{{ $edu->degree }}</h3>
                            <div class="institute">{{ $edu->institute ?? '' }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tmp skill area start -->
    <div class="tmp-skill-area tmp-section-gapTop">
        <div class="container">
            <div class="row g-5">
                @foreach($categories as $category)
                <div class="col-lg-6">
                    <div class="progress-wrapper">
                        <div class="content">
                            <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                                {{ $category->name }}
                                <span><img src="assets/images/custom-line/custom-line.png" alt="custom-line"></span>
                            </h2>

                            @foreach($category->skills as $skill)
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">{{ $skill->name }}</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                        data-wow-delay=".{{ $skill->animation_order ?? 3 }}s" role="progressbar"
                                        style="width: {{ $skill->level }}%;" aria-valuenow="{{ $skill->level }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">{{ $skill->level }}%</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- tmp skill area end -->

    <!-- tmp Latest Portfolio Start -->
    <section class="latest-portfolio-area custom-column-grid tmp-section-gap">
        <div class="container">
            <div class="section-head mb--60">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Latest Portfolio</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2"> Transforming Ideas into
                    Exceptional </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational</p>
            </div>
            <div class="latest-portfolio-tabs-area">

                {{-- Tabs --}}
                <nav>
                    <ul class="nav nav-tabs" role="tablist">

                        {{-- All Tab --}}
                        <li>
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-all">
                                All
                            </button>
                        </li>

                        {{-- Dynamic Categories --}}
                        @foreach($categories as $cat)
                        <li>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-{{ $cat->id }}">
                                {{ $cat->name }}
                            </button>
                        </li>
                        @endforeach

                    </ul>
                </nav>

                {{-- Tab Content --}}
                <div class="tab-content bg-blur-style-one">

                    {{-- ALL --}}
                    <div class="tab-pane fade show active" id="tab-all">
                        <div class="row">
                            @foreach($portfolios as $index => $item)
                            @include('partials.portfolio-card', [
                            'item' => $item,
                            'index' => $index
                            ])
                            @endforeach
                        </div>
                    </div>

                    {{-- CATEGORY WISE --}}
                    @foreach($categories as $cat)
                    <div class="tab-pane fade" id="tab-{{ $cat->id }}">
                        <div class="row">

                            @php
                            $filtered = $portfolios->where('category_id', $cat->id);
                            @endphp

                            @forelse($filtered as $index => $item)
                            @include('partials.portfolio-card', [
                            'item' => $item,
                            'index' => $index
                            ])
                            @empty
                            <div class="col-12 text-center py-5">
                                <p>No portfolio found in {{ $cat->name }}</p>
                            </div>
                            @endforelse

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- tmp Latest Portfolio end -->

    <!-- Tpm My Expertise Area start -->
    <section class="my-expertise-area tpm-custom-box-bg">
        <div class="container">
            <div class="header-top-inner">
                <div class="section-head text-align-left">
                    <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <span class="subtitle">My Expertise</span>
                    </div>
                    <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevated Designs
                        Personalized <br> the best Experiences</h2>
                </div>
                <div class="discription-area tmp-scroll-trigger tmp-fade-in animation-order-3">
                    <p class="description color-primary-3rd"> Business consulting consultants provide expert advice and
                        guida businesses to help them improve their performance, efficiency, and organizational
                    </p>
                </div>
            </div>
            <div class="services-widget v2">
                <div class="service-item current tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <div class="my-expertise-card-wrap">
                        <div class="expertise-card-left">
                            <div class="expertise-card-logo">
                                <img src="assets/images/my-expertise/logo-4.svg" alt="logo">
                            </div>
                            <h3 class="title">Ui/visual Design</h3>
                        </div>
                        <div class="single-progress-circle sal-animate" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="1000">
                            <svg class="radial-progress" data-countervalue="90" viewBox="0 0 80 80">
                                <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 131.947px;">
                                </circle>
                                <text class="countervalue" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
                            </svg>
                        </div>
                        <p class="para">A personal portfolio is a curated collection of an individual's professional
                            work, showcasing their skills</p>
                    </div>
                    <button class="service-link modal-popup"></button>
                </div>
                <div class="service-item tmp-scroll-trigger tmp-fade-in animation-order-2">
                    <div class="my-expertise-card-wrap">
                        <div class="expertise-card-left">
                            <div class="expertise-card-logo">
                                <img src="assets/images/my-expertise/logo-5.svg" alt="logo">
                            </div>
                            <h3 class="title">Branding Design</h3>
                        </div>
                        <div class="single-progress-circle sal-animate" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="1000">
                            <svg class="radial-progress" data-countervalue="40" viewBox="0 0 80 80">
                                <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 131.947px;">
                                </circle>
                                <text class="countervalue" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
                            </svg>
                        </div>
                        <p class="para">I specialize in creating solutions that are not only visually engaging but also
                            align with business goals</p>
                    </div>
                    <button class="service-link modal-popup"></button>
                </div>
                <div class="service-item tmp-scroll-trigger tmp-fade-in animation-order-3">
                    <div class="my-expertise-card-wrap">
                        <div class="expertise-card-left">
                            <div class="expertise-card-logo">
                                <img src="assets/images/my-expertise/logo-6.svg" alt="logo">
                            </div>
                            <h3 class="title">Motion Design</h3>
                        </div>
                        <div class="single-progress-circle sal-animate" data-sal-delay="300" data-sal="slide-up"
                            data-sal-duration="1000">
                            <svg class="radial-progress" data-countervalue="40" viewBox="0 0 80 80">
                                <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 131.947px;">
                                </circle>
                                <text class="countervalue" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80%</text>
                            </svg>
                        </div>
                        <p class="para">Each one showcases my approach and dedication to detail, creativity, and
                            results-driven outcomes.</p>
                    </div>
                    <button class="service-link modal-popup"></button>
                </div>
                <div class="active-bg wow fadeInUp mleave"></div>
            </div>
        </div>
    </section>
    <!-- Tpm My Expertise Area End -->

    <!-- tmp Clients Testimonial Start -->
    <section class="clients-testimonial-area tmp-section-gapTop">
        <div class="section-head mb--50">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Clients Testimonial</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Bringing Dreams to Life
                through</h2>
            <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                consultants provide expert advice and guida businesses
                to <br> help them improve their performance, efficiency, and organizational</p>
        </div>
        <div class="client-testimonial-swiper position-relative">
            <div class="swiper testimonial-swiper-v2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="client-testimonial-card-wrap">
                            <div class="client-card-head">
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="assets/images/testimonial/client-img-1.jpg" alt="">

                                    </div>
                                    <div class="client-details">
                                        <h3 class="client-title">Theresa Webb</h3>
                                        <p class="client-para">Ui/Ux Designer</p>
                                    </div>
                                </div>
                                <div class="tmp-star">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="client-para">Their expertise is apparent in every step of the project. I’m
                                thrilled with the outcome and would definitely work with them again! definitely work
                                with them again</p>
                            <div class="quat-logo">
                                <img src="assets/images/testimonial/quat-logo.svg" alt="quat-logo">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-testimonial-card-wrap">
                            <div class="client-card-head">
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="assets/images/testimonial/client-img-1.jpg" alt="">

                                    </div>
                                    <div class="client-details">
                                        <h3 class="client-title">Theresa Webb</h3>
                                        <p class="client-para">Ui/Ux Designer</p>
                                    </div>
                                </div>
                                <div class="tmp-star">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="client-para"> They were communicative, attentive, and exceeded all project goals.
                                The quality and attention to detail were top-notch. Five stars aren’t enough! Five stars
                                aren’t enough.</p>
                            <div class="quat-logo">
                                <img src="assets/images/testimonial/quat-logo.svg" alt="quat-logo">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-testimonial-card-wrap">
                            <div class="client-card-head">
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="assets/images/testimonial/client-img-1.jpg" alt="">

                                    </div>
                                    <div class="client-details">
                                        <h3 class="client-title">Theresa Webb</h3>
                                        <p class="client-para">Ui/Ux Designer</p>
                                    </div>
                                </div>
                                <div class="tmp-star">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="client-para">Financial planners help people knowledge about to how toio invest and
                                save the money the most of us efficient way ever. Many people all across in the of
                                country use them help peopl and save </p>
                            <div class="quat-logo">
                                <img src="assets/images/testimonial/quat-logo.svg" alt="quat-logo">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-testimonial-card-wrap">
                            <div class="client-card-head">
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="assets/images/testimonial/client-img-1.jpg" alt="">

                                    </div>
                                    <div class="client-details">
                                        <h3 class="client-title">Theresa Webb</h3>
                                        <p class="client-para">Ui/Ux Designer</p>
                                    </div>
                                </div>
                                <div class="tmp-star">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="client-para">They understood my vision immediately and brought it to life even
                                better than I’d imagined. Professional, creative, and always on time – I couldn’t be
                                happier with the results! </p>
                            <div class="quat-logo">
                                <img src="assets/images/testimonial/quat-logo.svg" alt="quat-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tmp-swiper-pagination tmp-swiper-pagination-01"></div>
        </div>
    </section>
    <!-- tmp Clients Testimonial End -->

    <!-- Tpm My Skill Area Start -->
    <section class="my-skill-area-style-two plr--120 plr_lg--30 plr_md--30 plr_sm--30 plr_mobile--15 mt--70">
        <div class="tpm-custom-box-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-lg-12 col-md-12">
                        <div class="my-skill-area-left-content-wrap">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <span class="subtitle">My Skill</span>
                                </div>
                                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">My
                                    Experts
                                    Areas Where I <br> Gained Skill</h2>
                                <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">Business
                                    consulting
                                    consultants provide expert advice and guida busi
                                    nesses to help them improve their performance, efficiency, and organ izational
                                    Business
                                    consulting consultants provide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-12 col-md-12">
                        <div class="my-skill-card-style-two row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="my-skill-card tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <div class="card-icon">
                                        <img src="assets/images/icons/icon-01.png" alt="my-skill-icon">
                                    </div>
                                    <h3 class="card-title">Framer</h3>
                                    <p class="card-para">The personal portfol category includes websites or physic Your
                                        Journey Your Story</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="my-skill-card tmp-scroll-trigger tmp-fade-in animation-order-2">
                                    <div class="card-icon">
                                        <img src="assets/images/icons/icon-02.png" alt="my-skill-icon">
                                    </div>
                                    <h3 class="card-title">Webflow</h3>
                                    <p class="card-para">The personal portfol category includes websites or physic Your
                                        Journey Your Story</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="my-skill-card tmp-scroll-trigger tmp-fade-in animation-order-3">
                                    <div class="card-icon">
                                        <img src="assets/images/icons/icon-03.png" alt="my-skill-icon">
                                    </div>
                                    <h3 class="card-title">Figma</h3>
                                    <p class="card-para">The personal portfol category includes websites or physic Your
                                        Journey Your Story</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="my-skill-card tmp-scroll-trigger tmp-fade-in animation-order-4">
                                    <div class="card-icon">
                                        <img src="assets/images/icons/icon-04.png" alt="my-skill-icon">
                                    </div>
                                    <h3 class="card-title">Wordpress</h3>
                                    <p class="card-para">The personal portfol category includes websites or physic Your
                                        Journey Your Story</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm My Skill Area End -->

    <!-- Tpm Get In touch start -->
    <section class="get-in-touch-area tmp-section-gapTop">
        <div class="container">
            <div class="get-in-touch-wrapper tmponhover">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-inner">
                            <div
                                class="section-head section-head-one-side text-align-left tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <span class="title-left">Get Ready To Create Great</span>
                            </div>
                            <ul class="ft-link v2">
                                <li class="tmp-scroll-trigger tmp-fade-in animation-order-1 tmp-link-animation">
                                    <span class="ft-icon"><i class="fa-solid fa-envelope"></i></span>
                                    <div class="ft-link-wrap">
                                        <h4 class="link-title">E-mail:</h4>
                                        <a href="#">nafiz125@gmail.com</a>
                                    </div>
                                </li>
                                <li class="tmp-scroll-trigger tmp-fade-in animation-order-2">
                                    <span class="ft-icon"><i class="fa-solid fa-location-dot"></i></span>
                                    <div class="ft-link-wrap">
                                        <h4 class="link-title">Location:</h4>
                                        <div>3891 Ranchview Dr. Richardson</div>
                                    </div>
                                </li>
                                <li class="tmp-scroll-trigger tmp-fade-in animation-order-3 tmp-link-animation">
                                    <span class="ft-icon"><i class="fa-solid fa-location-dot"></i></span>
                                    <div class="ft-link-wrap">
                                        <h4 class="link-title">Contact:</h4>
                                        <a href="#">01245789321</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-inner">
                            <div
                                class="section-head section-head-one-side text-align-left tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <span class="title">GET IN TOUCH</span>
                            </div>
                            <div class="contact-form">
                                <div id="form-messages" class="error"></div>
                                <form class="tmp-dynamic-form" id="contact-form" method="POST"
                                    action="https://inversweb.com/product/html/reeni/mailer.php">
                                    <div class="contact-form-wrapper row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" name="name" id="contact-name"
                                                    placeholder="Your Name" type="text" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" name="phone" id="contact-phone"
                                                    placeholder="Phone Number" type="tel" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" id="contact-email" name="email"
                                                    placeholder="Your Email" type="email" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" type="text" id="subject" name="subject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="input-field" placeholder="Your Message" name="message"
                                                    id="contact-message" required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="tmp-button-here">
                                                <button class="tmp-btn hover-icon-reverse radius-round w-100" name="submit"
                                                    type="submit" id="submit">
                                                    <span class="icon-reverse-wrapper">
                                                        <span class="btn-text">Appointment Now</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                    </span>
                                                </button>
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
    <!-- Tpm Get In touch End -->

    <!-- Tpm Blog and news Area Start -->
    <section class="blog-and-news-are tmp-section-gap">
        <div class="container">
            <div class="section-head mb--50">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Latest Blog</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Transforming Ideas into
                    Exceptional <br> the man can Creations</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div
                        class="blog-card-style-two tmponhover image-box-hover tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <div class="blog-card-img">
                            <div class="img-box">
                                <a href="blog-details.html">
                                    <img class="w-100" src="assets/images/blog/blog-img-1.jpg" alt="Blog Thumbnail">
                                </a>
                            </div>
                            <span>12 Feb</span>
                        </div>
                        <div class="blog-content-wrap">
                            <div class="blog-tags">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa-regular fa-user"></i>Mesbah</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-regular fa-comments"></i>Comments (05)</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">Inspiring the World, One Project at a
                                    Time for the
                                    man</a></h3>

                            <div class="read-more-btn">
                                <a class="tmp-btn hover-icon-reverse radius-round btn-border btn-md"
                                    href="blog-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Read More</span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div
                        class="blog-card-style-two tmponhover image-box-hover tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <div class="blog-card-img">
                            <div class="img-box">
                                <a href="blog-details.html">
                                    <img class="w-100" src="assets/images/blog/blog-img-2.jpg" alt="Blog Thumbnail">
                                </a>
                            </div>
                            <span>12 Feb</span>
                        </div>
                        <div class="blog-content-wrap">
                            <div class="blog-tags">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa-regular fa-user"></i>Mesbah</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-regular fa-comments"></i>Comments (05)</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">Let’s bring your ideas to life! Contact
                                    me, and let’s</a></h3>

                            <div class="read-more-btn">
                                <a class="tmp-btn hover-icon-reverse radius-round btn-border btn-md"
                                    href="blog-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Read More</span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div
                        class="blog-card-style-two tmponhover image-box-hover tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <div class="blog-card-img">
                            <div class="img-box">
                                <a href="blog-details.html">
                                    <img class="w-100" src="assets/images/blog/blog-img-3.jpg" alt="Blog Thumbnail">
                                </a>
                            </div>
                            <span>12 Feb</span>
                        </div>
                        <div class="blog-content-wrap">
                            <div class="blog-tags">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa-regular fa-user"></i>Mesbah</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-regular fa-comments"></i>Comments (05)</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">Each one showcases my approach and
                                    dedication man</a></h3>

                            <div class="read-more-btn">
                                <a class="tmp-btn hover-icon-reverse radius-round btn-border btn-md"
                                    href="blog-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Read More</span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Tpm Blog and news Area End -->
@endsection


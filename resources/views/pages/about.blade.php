@extends('layouts.spd')

@section('title')
    Who we are
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    {{-- <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About Us</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About</li>
                </ol>
            </div>

        </div>
    </section> --}}
    <!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="content-about-us" data-aos="fade-up">
            <div class="bg-video-wrap">
                <video src="https://designsupply-web.com/samplecontent/vender/codepen/20181014.mp4" loop muted autoplay>
                </video>
                <div class="overlay">
                </div>
                <h1 class="video-h1">We are SPD Communication
                </h1>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Introducing Section ======= -->
    <section id="introduction" class="introduction">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Introducing</h2>
                <p>Strategyct Image Logo</p>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-sm-12">
                    <h1>We Focus On <span class="primary">Digital Media Advertising</span></h1>
                    <p class="body-20 my-4">Since today Digital world is growing rapidly and it may well be stated that
                        digital governs all viewpoints in life, we at last center on Digital advertising.
                        We believe a lot of business people need digital agency as their partner to
                        reach their audience</p>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
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
                <div class="bg-video-wrap gif-thumbnail">
                    @foreach ($about as $item)
                        <img src="{{ asset('photo/' . $item->photo) }}" alt="GIF">
                        <div class="overlay">
                        </div>
                        <h1 class="video-h1">We are SPD Communication
                        </h1>
                    @endforeach
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Introducing Section ======= -->
        <section id="introduction" class="introduction">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Introducing</h2>
                </div>

                @foreach ($subbrand as $item)
                    <div class="row my-4 justify-content-center align-items-center">
                        <div class="col-lg-4 col-sm-12">
                            <img src="{{ asset('photo/' . $item->photo) }}" alt="Logo" class="w-100">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <h1>{{ $item->judul }}</h1>
                            <p class="body-20 my-4">
                                {!! $item->detail !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@extends('layouts.spd')

@section('title')
    Services | SPD Communication
@endsection

@section('content')
    <main id="main">

        <!-- ======= Features Section ======= -->
        <section id="service-tab" class="service-tab">
            <div class="content-service" data-aos="fade-up">

                <div class="section-title">
                    <h2>Our Services</h2>
                    <p class="p-5">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit
                        in iste officiis commodi quidem hic quas.</p>
                </div>

                <!-- Nav tabs -->
                <div class="grid-service" id="myTab" role="tablist">
                    <div class="grid-service-item" role="presentation">
                        <a class="service-thumbnail nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                            aria-selected="true">
                            <img src="img/video-production.png" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="grid-service-item" role="presentation">
                        <a class="service-thumbnail nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">
                            <img src="img/digital-marketing.jpeg" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="grid-service-item" role="presentation">
                        <a class="service-thumbnail nav-link" id="messages-tab" data-bs-toggle="tab"
                            data-bs-target="#messages" type="button" role="tab" aria-controls="messages"
                            aria-selected="false">
                            <img src="img/media-advertising.jpeg" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="grid-service-item" role="presentation">
                        <a class="service-thumbnail nav-link" id="settings-tab" data-bs-toggle="tab"
                            data-bs-target="#settings" type="button" role="tab" aria-controls="settings"
                            aria-selected="false">
                            <img src="img/creative-solution.jpeg" alt="" class="w-100">
                        </a>
                    </div>
                </div>

                <!-- Tab panes -->
                <div class="tab-content mx-5">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="my-5">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-4">
                                    <div class="img-service-thumb">
                                        <div class="img-bg-service"
                                            style="background-image: url(https://images.unsplash.com/photo-1617695744007-68ef55752789?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=436&q=80);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <h3>Media & Advertising</h3>
                                    <p class="body-20">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, facere adipisci ea
                                        eos temporibus consequuntur debitis mollitia incidunt autem consequatur.
                                    </p>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="my-5">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-4">
                                    <div class="img-service-thumb">
                                        <div class="img-bg-service"
                                            style="background-image: url(https://images.unsplash.com/photo-1643324275449-b94d97550d2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <h3>Video Production</h3>
                                    <p class="body-20">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, facere adipisci ea
                                        eos temporibus consequuntur debitis mollitia incidunt autem consequatur.
                                    </p>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab"
                        tabindex="0">
                        <div class="my-5">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-4">
                                    <div class="img-service-thumb">
                                        <div class="img-bg-service"
                                            style="background-image: url(https://images.unsplash.com/photo-1555077292-22a4489e5897?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <h3>Digital Marketing</h3>
                                    <p class="body-20">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, facere adipisci ea
                                        eos temporibus consequuntur debitis mollitia incidunt autem consequatur.
                                    </p>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab"
                        tabindex="0">
                        <div class="my-5">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-4">
                                    <div class="img-service-thumb">
                                        <div class="img-bg-service"
                                            style="background-image: url(https://images.unsplash.com/photo-1535303311164-664fc9ec6532?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <h3>Mobile Branding</h3>
                                    <p class="body-20">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, facere adipisci ea
                                        eos temporibus consequuntur debitis mollitia incidunt autem consequatur.
                                    </p>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="assets/img/service/media-creativity.png" alt="">
                                            <h5 class="mt-3">Creative</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Features Section -->

    </main><!-- End #main -->
@endsection

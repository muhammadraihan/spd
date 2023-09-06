@extends('layouts.spd')

@section('title')
    SPD Communication | Digital Advertising
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/hero/slide-1.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <div class="text-center"><a href="" class="btn-get-started">See Project</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/hero/slide-2.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <div class="text-center"><a href="" class="btn-get-started">See Project</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/hero/slide-3.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <div class="text-center"><a href="" class="btn-get-started">See Project</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content justify-content-center text-center">
                    <div class="col-lg-8" data-aos="fade-up">
                        <img src="assets/img/home/hello.png" alt="Hello" class="w-75 img-responsive">
                        <h2>We Are <span class="primary">SPD Communication</span></h2>
                        <h3>With a rich history and a deep understanding of the ever-evolving digital landscape, we have
                            consistently delivered cutting-edge solutions to our clients.</h3>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services-spd" class="services-spd section-bg">
            <div class="content-services" data-aos="fade-up">

                <div class="section-title">
                    <h2>Our Services</h2>
                </div>

                <div class="grid">
                    <div class="grid-item">
                        <article class="card">
                            <img class="card__background"
                                src="https://img.freepik.com/free-photo/social-media-marketing-concept-marketing-with-applications_23-2150063170.jpg?w=360&t=st=1692026298~exp=1692026898~hmac=5d451a103ad3690b075c0200d55d1f294351a2cde9821212ceb6e5675b493225"
                                alt="Photo of Cartagena's cathedral at the background and some colonial style houses" />
                            <div class="card__content | flow">
                                <div class="card__content--container | flow">
                                    <h2 class="card__title">Media & Advertising</h2>
                                    <p class="card__description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                                        labore laudantium deserunt fugiat numquam.
                                    </p>
                                </div>
                                <button class="card__button">Read more</button>
                            </div>
                        </article>
                    </div>
                    <div class="grid-item">
                        <article class="card">
                            <img class="card__background"
                                src="https://img.freepik.com/free-photo/social-media-marketing-concept-marketing-with-applications_23-2150063132.jpg?w=360&t=st=1692026365~exp=1692026965~hmac=7b1ac641b0eb8d153d674adb19c5c64fba4294e2c3985934cf88fd0c68c315cc"
                                alt="Photo of Cartagena's cathedral at the background and some colonial style houses" />
                            <div class="card__content | flow">
                                <div class="card__content--container | flow">
                                    <h2 class="card__title">Video Production</h2>
                                    <p class="card__description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                                        labore laudantium deserunt fugiat numquam.
                                    </p>
                                </div>
                                <button class="card__button">Read more</button>
                            </div>
                        </article>
                    </div>
                    <div class="grid-item">
                        <article class="card">
                            <img class="card__background"
                                src="https://img.freepik.com/free-photo/hands-holding-smartphone-social-media-concept_23-2150208238.jpg?w=360&t=st=1692026492~exp=1692027092~hmac=c9f2211ee90fd4d8dc266815c246c4704af29bc8f28dbc588bf47105c1636d01"
                                alt="Photo of Cartagena's cathedral at the background and some colonial style houses" />
                            <div class="card__content | flow">
                                <div class="card__content--container | flow">
                                    <h2 class="card__title">Digital Marketing</h2>
                                    <p class="card__description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                                        labore laudantium deserunt fugiat numquam.
                                    </p>
                                </div>
                                <button class="card__button">Read more</button>
                            </div>
                        </article>
                    </div>
                    <div class="grid-item">
                        <article class="card">
                            <img class="card__background" src="https://i.imgur.com/QYWAcXk.jpeg"
                                alt="Photo of Cartagena's cathedral at the background and some colonial style houses" />
                            <div class="card__content | flow">
                                <div class="card__content--container | flow">
                                    <h2 class="card__title">Mobile Branding</h2>
                                    <p class="card__description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                                        labore laudantium deserunt fugiat numquam.
                                    </p>
                                </div>
                                <button class="card__button">Read more</button>
                            </div>
                        </article>
                    </div>
                    <div class="grid-item">
                        <article class="card">
                            <img class="card__background" src="https://i.imgur.com/QYWAcXk.jpeg"
                                alt="Photo of Cartagena's cathedral at the background and some colonial style houses" />
                            <div class="card__content | flow">
                                <div class="card__content--container | flow">
                                    <h2 class="card__title">Creative Solution & Branding Activation</h2>
                                    <p class="card__description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                                        labore laudantium deserunt fugiat numquam.
                                    </p>
                                </div>
                                <button class="card__button">Read more</button>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Our Clients</h2>
                </div>

                <div class="row p-4">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img src="assets/img/home/deal.png" alt="Handshake" class="w-100">
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <p class="body-20">
                            At SPD Communication, our ultimate satisfaction lies in the smiles of our clients. We are
                            thrilled to
                            share some of our remarkable success stories that have brought visions to life, one project at a
                            time.
                            With
                            every collaboration, we don't just create, we craft experiences that leave a lasting impact.
                        </p>
                        <div class="row justify-content-center text-center py-4">
                            <div class="col-lg-4">
                                <img src="assets/img/home/space-ship.png" alt="Space" class="w-25">
                                <h1 class="mt-3">1989</h1>
                                <p>Established in Indonesia</p>
                            </div>
                            <div class="col-lg-4">
                                <img src="assets/img/home/captain.png" alt="Space" class="w-25">
                                <h1 class="mt-3">20++</h1>
                                <p>Managing more than 20 big brands</p>
                            </div>
                            <div class="col-lg-4">
                                <img src="assets/img/home/zeppelin.png" alt="Space" class="w-25">
                                <h1 class="mt-3">100++</h1>
                                <p>National campaigns</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Clients Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center align-items-center" data-aos="fade-up">

                    <div class="col-lg-5">
                        <img src="/assets/img/contact-us.png" alt="Contact Us" class="w-100">
                    </div>

                    <div class="col-lg-7">

                        <div class="section-title">
                            <h2>Talk With Us</h2>
                        </div>

                        <div class="info-wrap-home">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Medan, Indonesia</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@spdcommunication.com</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+6261 8955488</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 justify-content-center" data-aos="fade-up">
                            <div class="col-lg-12">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>
                            </div>
        
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

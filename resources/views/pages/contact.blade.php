@extends('layouts.spd')

@section('title')
    Contact | SPD Communication
@endsection

@section('content')
    <main id="main">

        <!-- ======= Contact Section ======= -->

        <section id="contact" class="contact">
            <div class="container spd-contact">

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
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

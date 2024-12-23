<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - Santa Rosa</title>
</head>
<?php include 'resources.php' ?>
<?php include 'navtop.php' ?>

<body>
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Santa Rosa Branch Contacts</h2>
            <p>
                Monday to Saturday 7:00 am to 5:00 pm
        </div>
        <!-- End Section Title -->

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border: 0; width: 100%; height: 370px"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d483.38253109257255!2d121.06779204959868!3d14.249707800000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd7d48816a29af%3A0x1ec8e5ec57a1b13b!2sFortMED%20Medical%20Clinic!5e0!3m2!1sen!2sph!4v1734681540436!5m2!1sen!2sph"
                frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Google Maps -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>United Blvd, Santa Rosa, Laguna</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>- (049) 541-1980 Santa Rosa Line</p>
                                <p>- (02) 8788-8963</p>
                                <p>- (02) 8788-8972 Manila Line</p>
                                <p>- 0926 946-8792 Mobile</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>appointment@fortmed.org</p>
                                <p>marketingcoordination@fortmed.org</p>
                                <p>informati0n@fortmed.org</p>
                                <p>hrd@fortmed.org</p>
                                <p>feedback@fortmed.org</p>

                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="500">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="" />
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="" />
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="" />
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="4" placeholder="Message"
                                    required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>

                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
    </section>
    <!-- /Contact Section -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <?php include  'footer.php' ?>
</body>

</html>
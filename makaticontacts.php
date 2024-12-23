<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - Makati</title>
</head>
<?php include 'resources.php' ?>
<?php include 'navtop.php' ?>

<body>
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Makati Branch Contacts</h2>
            <p>
                Monday to Saturday 7:00 am to 5:00 pm
            </p>
        </div>

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border: 0; width: 100%; height: 370px"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.704128690755!2d121.0221710064792!3d14.562965864982168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c907f93a6f7b%3A0x1cffd4e48736cbc6!2sFortMED%20Medical%20Clinic!5e0!3m2!1sen!2sph!4v1734681460228!5m2!1sen!2sph"
                frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>158 Jupiter St, corner Nicanor Garcia, Makati, 1209 Metro Manila</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>Main – 8897-9111</p>
                                <p>General Inquiries & Corporate Accounts</p>
                                <p>(0917 865-8010)</p>
                                <p>Doctor’s Appointment, Home Service </p>
                                <p>and Clinic Services Inquiries (0917 127-9316)</p>
                            </div>
                        </div>

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
            </div>
        </div>
    </section>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <?php include  'footer.php' ?>
</body>

</html>
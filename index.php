<?php 
include 'resources.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>FortMED</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
</head>

<body class="index-page">

    <?php include 'navtop.php' ?>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">
                <div class="carousel-item active">
                    <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="" />
                    <div class="container">
                        <h2>Welcome to FortMED Clinics</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="" />
                    <div class="container">
                        <h2>Welcome to FortMED Clinics</h2>
                        <p>
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque
                            nihil impedit quo minus id quod maxime placeat facere possimus,
                            omnis voluptas assumenda est, omnis dolor repellendus.
                            Temporibus autem quibusdam et aut officiis debitis aut.
                        </p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="" />
                    <div class="container">
                        <h2>Welcome to FortMED Clinics</h2>
                        <p>
                            Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                            quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi
                            nesciunt omnis iste natus error sit voluptatem accusantium.
                        </p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-house-add"></i></div>
                            <h4><a href="clinicservices.php" class="stretched-link">Clinic Services</a></h4>
                            <p>
                                Our staff and doctors are trained to provide efficient medical
                                care in our facilities.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-hospital"></i></div>
                            <h4>
                                <a href="corporateservices.php" class="stretched-link">Corporate Services</a>
                            </h4>
                            <p>
                                We offer health packages which we can customized based on your
                                company’s requirements.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-thermometer icon"></i></div>
                            <h4>
                                <a href="executivecheckup.php" class="stretched-link">Executive Check-up</a>
                            </h4>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-house-heart"></i></div>
                            <h4><a href="homeservices.php" class="stretched-link">Home Services</a></h4>
                            <p>
                                Say no to busy schedules. FortMED provides patients the luxury
                                of undergoing healthcare services at the comfort of your own
                                homes.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">
            <div class="overlay"></div>
            <!-- Background overlay for better readability -->
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-8">
                        <div class="text-center content-box">
                            <h3>Need Urgent Assistance?</h3>
                            <p>
                                Our team is available to help you during emergencies. Let us
                                know how we can support you through quick and reliable
                                services, anytime, anywhere.
                            </p>
                            <a class="cta-btn btn-primary" href="notfound.php">Book an Appointment Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "centeredSlides": true,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 0
                            },
                            "768": {
                                "slidesPerView": 3,
                                "spaceBetween": 20
                            },
                            "1200": {
                                "slidesPerView": 5,
                                "spaceBetween": 20
                            }
                        }
                    }
                    </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg"
                                    class="img-fluid" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg"
                                    class="img-fluid" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg"
                                    class="img-fluid" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg"
                                    class="img-fluid" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg"
                                    class="img-fluid" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg"
                                    class="img-fluid" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg"
                                    class="img-fluid" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Gallery Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Why Choose Us</h2>
                <p>
                    Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                    consectetur velit
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Nesciunt Mete</h3>
                            </a>
                            <p>
                                Provident nihil minus qui consequatur non omnis maiores. Eos
                                accusantium minus dolores iure perferendis tempore et
                                consequatur.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Eosle Commodi</h3>
                            </a>
                            <p>
                                Ut autem aut autem non a. Sint sint sit facilis nam iusto
                                sint. Libero corrupti neque eum hic non ut nesciunt dolorem.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-hospital-user"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Ledo Markt</h3>
                            </a>
                            <p>
                                Ut excepturi voluptatem nisi sed. Quidem fuga consequatur.
                                Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Asperiores Commodit</h3>
                            </a>
                            <p>
                                Non et temporibus minus omnis sed dolor esse consequatur.
                                Cupiditate sed error ea fuga sit provident adipisci neque.
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Velit Doloremque</h3>
                            </a>
                            <p>
                                Cumque et suscipit saepe. Est maiores autem enim facilis ut
                                aut ipsam corporis aut. Sed animi at autem alias eius labore.
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-notes-medical"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Dolori Architecto</h3>
                            </a>
                            <p>
                                Hic molestias ea quibusdam eos. Fugiat enim doloremque aut
                                neque non et debitis iure. Corrupti recusandae ducimus enim.
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>

        <!-- /Services Section -->
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <?php include 'footer.php' ?>
</body>

</html>
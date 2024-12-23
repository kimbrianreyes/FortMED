<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Services</title>
    <?php include 'resources.php' ?>
    <?php include 'navtop.php' ?>
    <style>
    .service-item {
        background-color: var(--surface-color);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .service-title {
        font-size: 24px;
        font-weight: 700;
        color: var(--heading-color);
        margin-bottom: 15px;
        position: relative;
    }

    .service-title::after {
        content: "";
        position: absolute;
        display: block;
        width: 50px;
        height: 3px;
        background: var(--accent-color);
        bottom: -5px;
        left: 0;
    }

    .service-list {
        list-style: none;
        padding: 0;
        margin: 0 0 20px 0;
    }

    .service-list li {
        font-size: 16px;
        color: var(--default-color);
        padding: 5px 0;
        border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 80%);
    }

    .scroll-top {
        background-color: var(--accent-color);
        color: var(--contrast-color);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        transition: background-color 0.3s ease;
    }

    .scroll-top:hover {
        background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
    }
    </style>
</head>

<body>
    <!-- Contact Section -->
    <section id="services" class="services section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Clinic Services</h2>
                <p>Our staff and doctors are trained to provide care with sensitivity. We strive to provide efficient
                    medical service with our expertise. Some of the services are:</p>
            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="service-item">
                            <h3 class="service-title">Multi-Specialty Consultations</h3>
                            <h3 class="service-title">Comprehensive Medical Examinations</h3>
                            <ul class="service-list">
                                <li>Pre-Employment Medical Examination</li>
                                <li>Annual Physical Examination</li>
                                <li>Executive Check-Up</li>
                            </ul>
                            <h3 class="service-title">Diagnostic Services</h3>
                            <h3 class="service-title">Laboratory</h3>
                            <ul class="service-list">
                                <li>Blood Chemistry</li>
                                <li>Hematology</li>
                                <li>Blood Typing</li>
                                <li>Immunology/Serology</li>
                                <li>Microscopy (Urinalysis/Fecalysis)</li>
                                <li>Drug Testing</li>
                                <li>Tumor Markers</li>
                            </ul>
                            <h3 class="service-title">X-Ray</h3>
                            <ul class="service-list">
                                <li>Chest X-Ray (PA/LAT)</li>
                                <li>Extremities (Hand/Arm/Leg/Knee)</li>
                                <li>Spine Series</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="service-item">
                            <h3 class="service-title">Ultrasound</h3>
                            <h3 class="service-title">Cardio-Pulmonary</h3>
                            <ul class="service-list">
                                <li>Electrocardiogram</li>
                                <li>Treadmill Stress Test</li>
                                <li>2D Echo with Doppler</li>
                                <li>Spirometry</li>
                            </ul>
                            <h3 class="service-title">Vaccinations</h3>
                            <ul class="service-list">
                                <li>Flu Vaccination (Trivalent)</li>
                                <li>Flu Vaccination (Quadrivalent)</li>
                                <li>Hepa A Vaccination</li>
                                <li>Hepa B Vaccination</li>
                                <li>HPV Vaccination</li>
                                <li>Pneumonia Vaccination (PPSV23)</li>
                                <li>Pneumonia Vaccination (PCV 13)</li>
                                <li>Varicella/Chickenpox Vaccine</li>
                                <li>MMR Vaccination</li>
                                <li>Tetanus Vaccination</li>
                                <li>TDaP Vaccination</li>
                                <li>Rabies Vaccination</li>
                                <li>Japanese Encephalitis Vaccination</li>
                                <li>Meningococcal Vaccination</li>
                                <li>Typhoid Vaccination</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <?php include 'footer.php' ?>
</body>

</html>
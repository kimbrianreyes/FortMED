<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Services</title>
</head>
<?php include 'resources.php' ?>
<?php include 'navtop.php' ?>
<style>
.service-item {
    background-color: var(--surface-color);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.service-title {
    color: var(--heading-color);
    font-size: 24px;
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
    margin: 0;
}

.service-list li {
    padding: 5px 0;
    color: var(--default-color);
    font-size: 16px;
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

<body>
    <!-- Corporate Services Section -->
    <section id="corporate-services" class="corporate-services section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Corporate Services</h2>
                <p>FortMED recognizes your company’s need for efficient medical care from the comfort of your office
                    vicinity. We offer health packages which we can customize based on your company’s requirements.</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-item">
                        <h3 class="service-title">Executive Check-Up</h3>
                        <p>FortMED offers affordable and convenient out-patient Executive Check-up Packages. Aside from
                            assessing the general health status of a person, the Executive Check-up Packages also
                            include tests for early detection of undiscovered health risks.</p>
                        <p>Executive Check-up patients are assigned a dedicated nurse to ensure that the tests and
                            procedures are completed within the day.</p>
                    </div>
                    <div class="service-item">
                        <h3 class="service-title">Annual Physical Examination</h3>
                        <p>Regular check-up is important to keep track of our health. FortMED offers basic or customized
                            package that can detect possible illnesses or disease. We provide summarized result with the
                            fitness classification and recommendation by our Primary Care Physician.</p>
                        <p>For companies with large volume of employees, we also conduct Onsite/Mobile Clinic where we
                            apply the FortMED approach to patient care. We integrate our mobile services into a seamless
                            experience to provide our client health check-up at the convenience of their office.</p>
                        <h4>Includes</h4>
                        <ul class="service-list">
                            <li>Comprehensive Medical History & Physical Examination</li>
                            <li>Complete Blood Count (CBC)</li>
                            <li>Chest X-ray (PA View)</li>
                            <li>Routine Urinalysis</li>
                            <li>Routine Fecalysis</li>
                        </ul>
                        <h4>Optional / Add-ons</h4>
                        <ul class="service-list">
                            <li>Laboratory Tests (Blood Chemistry)</li>
                            <li>Radiology (X-ray, Mammogram, Ultrasound)</li>
                            <li>Cardio-Pulmonary (ECG, Spirometry)</li>
                            <li>Dental Care (Consultation, Oral Prophylaxis)</li>
                            <li>Drug Testing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-item">
                        <h3 class="service-title">Pre-Employment Medical Examination</h3>
                        <p>Medical screening for prospective employees may help to assess and manage health risks in the
                            workplace. FortMED offers basic or customized package depending on the client’s need to
                            screen a prospective employee’s health. We provide summarized result with the fitness
                            classification and recommendation by our Primary Care Physician.</p>
                        <h4>Includes</h4>
                        <ul class="service-list">
                            <li>Comprehensive Medical History & Physical Examination</li>
                            <li>Complete Blood Count (CBC)</li>
                            <li>Chest X-ray (PA View)</li>
                            <li>Routine Urinalysis</li>
                            <li>Routine Fecalysis</li>
                        </ul>
                        <h4>Optional / Add-ons</h4>
                        <ul class="service-list">
                            <li>Laboratory Tests (Blood Chemistry)</li>
                            <li>Radiology (X-ray, Mammogram, Ultrasound)</li>
                            <li>Cardio-Pulmonary (ECG, Spirometry)</li>
                            <li>Dental Care (Consultation, Oral Prophylaxis)</li>
                            <li>Drug Testing</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <h3 class="service-title">Clinic Management</h3>
                        <p>Our clinic management services allow you to focus on your core business while we handle your
                            company’s medical needs. We provide clinics for corporate clients and also a range of
                            manpower options for different industries, including physicians, nurses, paramedics, and
                            specialist doctors.</p>
                        <p>We are licensed with the Department of Labor and Employment under DOLE DO 174.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Corporate Services Section -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <?php include 'footer.php' ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Form</title>
    <style>
    .pdf-container {
        text-align: center;
        margin-top: 20px;
    }

    .pdf-container iframe {
        width: 100%;
        height: 800px;
        border: none;
    }

    .download-btn {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: var(--accent-color);
        color: var(--contrast-color);
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .download-btn:hover {
        background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    @media (max-width: 768px) {
        .pdf-container iframe {
            height: 600px;
        }
    }

    @media (max-width: 480px) {
        .pdf-container iframe {
            height: 400px;
        }
    }
    </style>
</head>
<?php include 'resources.php' ?>
<?php include 'navtop.php' ?>

<body>

    <section id="patient-form" class="patient-form section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Patient Form</h2>
                <p>For your convenience, prior to your visit, you can print out & fill up the <span
                        style="font-weight: bold; text-decoration: underline;"><a
                            href="assets/img/patients/patientform.pdf" target="_blank">Patient
                            Form</a></span></p>
            </div>
            <div class="pdf-container">
                <iframe src="assets/img/patients/patientform.pdf"></iframe>
                <a href="assets/img/patients/patientform.pdf" class="download-btn" download>
                    <i class="bi bi-download"></i> Download PDF
                </a>
            </div>
        </div>
    </section>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <?php include 'footer.php' ?>

</body>

</html>
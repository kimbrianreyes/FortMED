<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Checkup Checklist</title>
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
                <h2>Executive Checkup Checklist</h2>
                <p>There are medical procedures or diagnostic tests included in medical examination packages that
                    require preparations. The preparation varies depending on the medical examination package you chose.
                    Our doctors and nurses will also give you reminders before and during your check-up.</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-item">
                        <h3 class="service-title">BLOOD EXTRACTION</h3>
                        <p><span style="font-weight: bold;">Lipid profile:</span> Fasting is required prior to blood
                            extraction; Nothing by mouth (NPO) no food,
                            no
                            water, and/or medicine intake for 10 to 12 hours.</p>
                        <p><span style="font-weight: bold;">Fasting blood glucose/sugar (FBS) only:</span> Fasting is
                            required prior to blood extraction;
                            Nothing by
                            mouth (NPO) no food, no water, and/or medicine intake for 8-10 hours.</p>
                        <p><span style="font-weight: bold;">PSA (Prostate Specific Antigen):</span> No sexual
                            contact/ejaculation 24 hours before the procedure.
                            Avoid
                            rigorous physical activities (e.g. cycling) the day before the procedure.</p>
                        <h3 class="service-title">URINALYSIS</h3>
                        <p>Collect your urine sample midstream catch in a clean container.</p>
                        <p>Container must be filled at least half full (20ml).</p>
                        <p>For FEMALE patients with monthly period, sample should be collected and submitted 5 days from
                            the last day of menstruation.</p>
                        <p>Sample is valid within 30 mins. from the time of collection.</p>
                        <p>STOOL SAMPLE</p>
                    </div>
                    <div class="service-item">
                        <h3 class="service-title">FECALYSIS</h3>
                        <p>Can be collected at home provided that sample should be submitted within 2 hours from the
                            time of specimen collection.</p>
                        <p>Sample size must be half-thumb or pea-size amount.</p>
                        <h3 class="service-title">OCCULT BLOOD TEST/GUAIAC TEST</h3>
                        <ul class="service-list">
                            <li>No red meat and dark-colored food (e.g. beef, Dinuguan, chocolate) 3 days prior to
                                procedure.</li>
                            <li>No intake of vitamins/iron supplement (e.g. Ferrous Sulfate, Ferrous Fumarate, Vitamin
                                A) 3 days prior to procedure.</li>
                            <li>Can be collected at home provided that sample should be submitted 2 hours from the time
                                of specimen collection.</li>
                            <li>For FEMALE patients with monthly period, sample should be collected and submitted 5 days
                                <span style="font-weight: bold;">from the last day </span> of menstruation.
                            </li>
                        </ul>
                        <h3 class="service-title">MAMMOGRAM/BREAST ULTRASOUND</h3>
                        <ul class="service-list">
                            <li>Should be done between the 10th to 12th day <span style="font-weight: bold;">from the
                                    first day</span> of last menstruation.
                            </li>
                            <li>Avoid using deodorants, antiperspirants, powders, lotions, creams or perfumes under your
                                arms or on your breasts on the day before the procedure.</li>
                        </ul>
                        <h3 class="service-title">PAP SMEAR</h3>
                        <ul class="service-list">
                            <li>Should be done 7 days <span style="font-weight: bold;">from the last day</span> of
                                menstruation.</li>
                            <li>Do not douche or have sexual intercourse 24 hours prior to procedure.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-item">
                        <h3 class="service-title">TREADMILL STRESS TEST <span>
                                <p style="font-size: 15px;">(requires negative Rapid Antigen/RT-PCR test
                                    taken 1 day prior to schedule)</p>
                            </span></h3>
                        <p>Light meal 2 hours prior to the procedure.</p>
                        <p>Please be in exercise outfit and bring rubber-sole shoes.</p>
                        <p>Don’t forget to bring an extra shirt and towel.</p>
                        <p>No caffeine (coffee, chocolate drink or tea) intake prior to procedure.</p>
                        <p>No smoking on the day before the procedure.</p>
                        <h3 class="service-title">ULTRASOUND:</h3>
                        <ul class="service-list">
                            <h4>LGBP (Liver, gall bladder, pancreas)/UPPER ABDOMEN/WHOLE ABDOMEN</h4>
                            <li><span style="font-weight: bold;">ULTRASOUND ONLY:</span> Nothing by mouth (NPO) no food
                                and/or water 6-8 hours the night before
                                the procedure.</li>
                            <li><span style="font-weight: bold;">ULTRASOUND WITH BLOOD TEST:</span> Nothing by mouth
                                (NPO) no food and/or water 10 hours the
                                night before the procedure.</li>
                            <li><span style="font-weight: bold;">FOR SINGLE ORGAN
                                    ULTRASOUND (LIVER/KIDNEY/SPLEEN):</span> No preparation needed.</li>
                        </ul>
                        <h3 class="service-title">KUB (Kidney, Ureter, bladder) / PROSTATE / PELVIC</h3>
                        <ul class="service-list">
                            <li>Drink 4-6 glasses of water 30 minutes before the procedure.
                            </li>
                            <li>Do not urinate before the examination (bladder must be full).</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <h3 class="service-title">Reminders:</h3>
                        <p>Clinic hours are from 7:30 am to 4:30 pm. For fasting patients, we can accommodate blood
                            extraction from 7:30 am. We recommend taking a small meal or snacks at midnight should you
                            prefer to come at 10:00 am.</p>
                        <p>Please bring at least 1 valid government-issued ID with photo and your LOA/Referral Slip (if
                            company/HMO account).</p>
                        <p>Bring your eyeglasses or contact lenses for the Visual Acuity Test.</p>
                        <p>Bring your past medical results/records, list of
                            medications/allergies/surgeries/immunizations, if applicable.</p>
                        <p>Substitution of procedure is strictly not allowed; waived procedures by the patient will be
                            charged according to the package availed.</p>
                        <p>For your convenience, print & fill out the <span
                                style="font-weight: bold; text-decoration: underline;"><a
                                    href="assets/img/patients/patientform.pdf" target="_blank">Patient
                                    Form</a></span></p>
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
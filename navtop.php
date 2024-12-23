<?php include 'resources.php' ?>


<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="d-none d-md-flex align-items-center">
                <i class="bi bi-clock me-1"></i> Monday - Saturday, 7AM to 5PM
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone me-1"></i> (Makati) 0917 127-9316
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone me-1"></i> (Santa Rosa) 0926 946-8792
            </div>
        </div>
    </div>
    <!-- End Top Bar -->

    <div class="branding d-flex align-items-center">
        <div class="container position-relative d-flex align-items-center justify-content-end">
            <a href="index.php" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/fortmed.png" alt="" />
                <!-- Uncomment the line below if you also wish to use a text logo -->
                <!-- <h1 class="sitename">Medicio</h1>  -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="newsandevents.php" class="nav-link">News & Events</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link"><span>Contacts</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="santarosacontacts.php">Santa Rosa Contacts</a></li>
                            <li><a href="makaticontacts.php">Makati Contacts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link"><span>Services</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="clinicservices.php">Clnic Services</a></li>
                            <li><a href="corporateservices.php">Corporate Services</a></li>
                            <li><a href="executivecheckup.php">Executive Check-up</a></li>
                            <li><a href="homeservices.php">Home Services</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link"><span>For Patients</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="eresult.php">E-Result</a></li>
                            <li><a href="makatischedule.php">Makati Clinic Specialist Schedule</a></li>
                            <li><a href="santarosaschedule.php">Santa Rosa Clinic Specialist Schedule</a></li>
                            <li><a href="executivelist.php">Executive Checkuplist</a></li>
                            <li><a href="patientform.php">Patient Form</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link"><span>Careers</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="nonmedicposition.php">Non-medical Position</a></li>
                            <li><a href="medicposition.php">Medical Position</a></li>
                            <li><a href="specialistdoctors.php">Specialist Doctors</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn" href="notfound.php">Make Appointment</a>
        </div>
    </div>
</header>

<style>
.nav-link.active,
.dropdown ul li a.active {
    font-weight: bold;
    color: var(--nav-hover-color);

}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var currentPath = window.location.pathname.split('/').pop();
    var navLinks = document.querySelectorAll('.nav-link');
    var dropdownLinks = document.querySelectorAll('.dropdown ul li a');

    navLinks.forEach(function(link) {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

    dropdownLinks.forEach(function(link) {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
            link.closest('.dropdown').querySelector('.nav-link').classList.add('active');
        }
    });
});
</script>
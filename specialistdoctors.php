<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career - Specialist Doctor</title>
</head>
<?php include 'resources.php' ?>
<?php include 'navtop.php' ?>
<style>
.specialist-doctor .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.specialist-doctor .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 15px;
    box-sizing: border-box;
}

.specialist-doctor img {
    max-width: 100%;
    height: auto;
    cursor: pointer;
}

@media (max-width: 768px) {
    .specialist-doctor .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}
</style>
<section id="specialist-doctor" class="specialist-doctor section">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Career - Specialist Doctor</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img id="myImg1" src="assets/img/careers/makatipartner.png" alt="Medical Position 1">
            </div>
            <div class="col-md-6">
                <img id="myImg2" src="assets/img/careers/santarosapartner.png" alt="Medical Position 2">
            </div>
        </div>
    </div>
</section>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <i id="zoomIcon" class="zoom-icon bi bi-zoom-in"></i>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<?php include 'footer.php' ?>
</body>

</html>
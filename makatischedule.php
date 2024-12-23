<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makati Clinic Specialist Schedule</title>
    <style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        transition: transform 0.25s ease;
    }

    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
    }

    .zoom-icon {
        position: absolute;
        top: 15px;
        left: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
    }

    .zoom-icon:hover,
    .zoom-icon:focus {
        color: #bbb;
    }

    .makati-schedule img {
        max-width: 50%;
        height: auto;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .makati-schedule img {
            max-width: 80%;
        }
    }

    @media (max-width: 480px) {
        .makati-schedule img {
            max-width: 100%;
        }
    }
    </style>
</head>
<?php include 'resources.php' ?>
<?php include 'navtop.php' ?>

<body>

    <section id="makati-schedule" class="makati-schedule section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Makati Clinic Specialist Schedule</h2>
                <p>Our General Practitioner / Primary Care Physicians are always available during clinic operating
                    hours.</p>
                <div style="text-align: center; margin-top: 20px;">
                    <img id="myImg" src="assets/img/patients/makatisched.png" alt="Makati Clinic Specialist Schedule"
                        class="responsive-img">
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

    <script>
    var modal = document.getElementById("myModal");

    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    var zoomIcon = document.getElementById("zoomIcon");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }

    var scale = 1;
    zoomIcon.onclick = function() {
        if (scale === 1) {
            scale = 2;
            zoomIcon.classList.remove("bi-zoom-in");
            zoomIcon.classList.add("bi-zoom-out");
        } else {
            scale = 1;
            zoomIcon.classList.remove("bi-zoom-out");
            zoomIcon.classList.add("bi-zoom-in");
        }
        modalImg.style.transform = "scale(" + scale + ")";
    }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Services</title>
    <style>
    /* Modal styles */
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
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
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
    </style>
</head>
<?php include 'resources.php' ?>
<?php include 'navtop.php' ?>

<body>
    <section id="home-service" class="home-service section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Home Service</h2>
                <p>No time to visit a health facility? Have yourself checked at the comfort of your home.</p>
                <p>Our Home Service includes Laboratory Tests, Electrocardiogram (ECG) and Vaccination.</p>
                <p>You can reach us at 8897-9111 ext 300 or 0915-1893551 for inquiries and appointments.</p>
                <p>Some of our popular Home Service pairings include:</p>
                <div style="text-align: center; margin-top: 20px;">
                    <img id="myImg1" src="assets/img/homeservices/1.png" alt="1"
                        style="max-width: 80%; height: auto; cursor: pointer; margin-bottom: 20px;">
                    <img id="myImg2" src="assets/img/homeservices/2.png" alt="2"
                        style="max-width: 80%; height: auto; cursor: pointer; margin-bottom: 20px;">
                    <img id="myImg3" src="assets/img/homeservices/3.png" alt="3"
                        style="max-width: 80%; height: auto; cursor: pointer;">
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

    var img1 = document.getElementById("myImg1");
    var img2 = document.getElementById("myImg2");
    var img3 = document.getElementById("myImg3");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    var zoomIcon = document.getElementById("zoomIcon");

    img1.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    img2.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    img3.onclick = function() {
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
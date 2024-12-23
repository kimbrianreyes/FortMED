<?php 
include 'resources.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
    .notfound-container {
        text-align: center;
        padding: 100px 20px;
    }

    .notfound-container img {
        max-width: 25%;
        height: auto;
        margin-bottom: 20px;
    }

    .notfound-container h1 {
        font-size: 48px;
        color: var(--heading-color);
        margin-bottom: 20px;
    }

    .notfound-container p {
        font-size: 18px;
        color: var(--default-color);
        margin-bottom: 30px;
    }

    .notfound-container a {
        display: inline-block;
        padding: 10px 20px;
        background-color: var(--accent-color);
        color: var(--contrast-color);
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .notfound-container a:hover {
        background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
        color: var(--contrast-color);
    }


    @media (max-width: 768px) {
        .notfound-container img {
            max-width: 70%;
        }

        .notfound-container h1 {
            font-size: 36px;
        }

        .notfound-container p {
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .notfound-container img {
            max-width: 90%;
        }

        .notfound-container h1 {
            font-size: 28px;
        }

        .notfound-container p {
            font-size: 14px;
        }
    }
    </style>
</head>

<body>
    <?php include 'navtop.php' ?>

    <div class="notfound-container">
        <img src="assets/img/notfound.png" alt="Page Not Found">
        <h1>Page Not Found</h1>
        <p>Sorry, the page you are looking for does not exist. It might have been moved or deleted.</p>
        <a href="index.php">Go to Homepage</a>
    </div>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <?php include 'footer.php' ?>
</body>

</html>
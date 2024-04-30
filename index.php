<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOPE</title>
    <link rel="stylesheet" href="./css/landing.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="./js/app.js"></script>
</head>

<?php
session_start();

?>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-icon"></div>
        <div class="nav-elements">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li id="donate-btn"><a href="#donate">Get Involved</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO -->
    <main id="home">
        <div class="hero-title hidden">
            <h1>HOPE</h1>
            <h2>Every Act Counts</h2>
        </div>
    </main>

    <!-- TRACK -->
    <div class="container hidden" id="donate">
        <div class="goal-cont">
            <div>
                <h1>Empower Change</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Sed elementum tempus egestas sed sed risus pretium.
                </p>
            </div>
        </div>
        <div class="card-track hidden">
            <?php
            $sdgs = array(
                "ZERO POVERTY" => "hope-sdg1.jpg",
                "HUNGER RELIEF" => "hope-sdg2.jpg",
                "HEALTH ACCESS" => "hope-sdg3.jpg",
                "EDUCATION EQUITY" => "hope-sdg4.jpg",
                "GENDER EMPOWERMENT" => "hope-sdg5.jpg",
                "WATER SECURITY" => "hope-sdg6.jpg",
                "ENERGY ACCESSIBILITY" => "hope-sdg7.jpg",
                "JOB OPPORTUNITIES" => "hope-sdg8.jpg",
                "INNOVATION SUPPORT" => "hope-sdg9.jpg",
                "SOCIAL INCLUSION" => "hope-sdg10.jpg",
                "URBAN SUSTAINABILITY" => "hope-sdg11.jpg",
                "ETHICAL CONSUMPTION" => "hope-sdg12.jpg",
                "CLIMATE ACTION" => "hope-sdg13.jpg",
                "MARINE CONSERVATION" => "hope-sdg14.jpg",
                "LAND PRESERVATION" => "hope-sdg15.jpg",
                "SOCIAL EQUITY" => "hope-sdg16.jpg",
                "COLLABORATIVE IMPACT" => "hope-sdg17.jpg"
            );
            ?>

            <?php foreach ($sdgs as $label => $image): ?>
                <a class="card-link" href="./template/template.php">
                    <p class="card-link-label"><?php echo $label; ?></p>
                    <img class="card-img" src="./assets/<?php echo $image; ?>">
                    <div class="card-overlay"></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ABOUT US -->
    <div class="aboutus hidden" id="about">
        <div class="about-elements">
            <h1>Our Mission</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Sed elementum tempus egestas sed sed risus pretium.
            </p>
        </div>
        <div class="about-elements">
            <h1>Our Vision</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Sed elementum tempus egestas sed sed risus pretium.
            </p>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer" id="contact">
        <div class="footer-elements">
            <div class="footer-icon">
                <img src="./assets/hope-logo-blk.svg" alt="">
            </div>
            <div class="contact-icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="legal">
                <p>
                    © 2024 HOPE Philippines | All rights reserved.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>
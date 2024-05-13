<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOPE</title>
    <link rel="icon" href="./assets/hope-favicon.svg">
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
                    The choice is yours to make, as you have the power to create a
                    significant change in the areas that matter to you the most. Your choices define the path forward,
                    enabling you to add your piece to the puzzle and make the world a better place.
                </p>
            </div>
        </div>
        <div class="card-track hidden">
            <?php
            $sdgs = array(
                "ZERO POVERTY" => "hope-sdg1.svg",
                "HUNGER RELIEF" => "hope-sdg2.svg",
                "HEALTH ACCESS" => "hope-sdg3.svg",
                "EDUCATION EQUITY" => "hope-sdg4.svg",
                "GENDER EMPOWERMENT" => "hope-sdg5.svg",
                "WATER SECURITY" => "hope-sdg6.svg",
                "ENERGY ACCESSIBILITY" => "hope-sdg7.svg",
                "JOB OPPORTUNITIES" => "hope-sdg8.svg",
                "INNOVATION SUPPORT" => "hope-sdg9.svg",
                "SOCIAL INCLUSION" => "hope-sdg10.svg",
                "URBAN SUSTAINABILITY" => "hope-sdg11.svg",
                "ETHICAL CONSUMPTION" => "hope-sdg12.svg",
                "CLIMATE ACTION" => "hope-sdg13.svg",
                "MARINE CONSERVATION" => "hope-sdg14.svg",
                "LAND PRESERVATION" => "hope-sdg15.svg",
                "SOCIAL EQUITY" => "hope-sdg16.svg",
                "COLLABORATIVE IMPACT" => "hope-sdg17.svg"
            );
            ?>

            <?php foreach ($sdgs as $label => $image): ?>
                <a class="card-link" href="./template/template.php?link=<?php echo urlencode($label); ?>">
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
                To mobilize people to take actions toward the Sustainable Development Goals (SDGs) by creating a
                platform where they can interact with organizations that are working on each SDG. We strive for
                facilitating worldwide governance and acting to address the most pressing global problems, one goal at a
                time.

            </p>
        </div>
        <div class="about-elements">
            <h1>Our Vision</h1>
            <p>
                We envision a world where everyone has a chance to make a change that will positively affect the entire
                world. Our vision is that of the community where the collaborative work done by individuals,
                organizations, and communities make the SDGs come true, so we obtain a more sustainable, fair, and
                prosperous world for future generations.
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
                    &copy; 2024 HOPE Philippines | All rights reserved.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>
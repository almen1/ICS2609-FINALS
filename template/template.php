<?php
$sdgImages = array(
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

$selected_link = isset($_GET['link']) ? $_GET['link'] : null;
$imageName = isset($sdgImages[$selected_link]) ? $sdgImages[$selected_link] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/template.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HOPE</title>
    <style>
        .hero {
            background-image: url('../assets/<?php echo $imageName; ?>');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-icon"></div>
        <div class="nav-elements">
            <ul>
                <li><a href="../index.php#home">Home</a></li>
                <li><a href="../index.php#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li id="donate-btn"><a href="../index.php#donate">Get Involved</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="hero">
            <div class="hero-elements">
                TEST HERO
                <?php
                session_start();
                if (isset($_GET['link'])) {
                    $selected_link = $_GET['link'];
                    echo $selected_link;
                }
                ?>
            </div>
        </div>

        <div class="web-info1">
            <div class="web-title1">
                TEST WEB1
            </div>
            <div class="web-desc1">
                TEST WEBDESC1
            </div>
        </div>
        <div class="web-info2">
            <div class="web-title2">
                TEST WEB2
            </div>
            <div class="web-desc2">
                TEST WEBDESC2
            </div>
        </div>
        <div class="donate-btn">
            TEST DONATE
        </div>
    </main>
    
    <!-- FOOTER -->
    <footer class="footer" id="contact">
        <div class="footer-elements">
            <div class="footer-icon">
                <img src="../assets/hope-logo-blk.svg" alt="">
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
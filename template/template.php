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
    <nav class="navbar">
        <div class="nav-icon">
        </div>
        <div class="nav-elements">
            <ul class="nav-list">
                <li><a href="../index.php#home">Home</a></li>
                <li><a href="../index.php#about">About Us</a></li>
                <li><a href="../index.php">Get Involved</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="hero">
            <div class="hero-elements">
                TEST HERO
                <?php
                session_start();
                if(isset($_GET['link'])) {
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
</body>

</html>
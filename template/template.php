<?php
require_once "../config/config.php";

$sdgNameToId = [
    "ZERO POVERTY" => 1,
    "HUNGER RELIEF" => 2,
    "HEALTH ACCESS" => 3,
    "EDUCATION EQUITY" => 4,
    "GENDER EMPOWERMENT" => 5,
    "WATER SECURITY" => 6,
    "ENERGY ACCESSIBILITY" => 7,
    "JOB OPPORTUNITIES" => 8,
    "INNOVATION SUPPORT" => 9,
    "SOCIAL INCLUSION" => 10,
    "URBAN SUSTAINABILITY" => 11,
    "ETHICAL CONSUMPTION" => 12,
    "CLIMATE ACTION" => 13,
    "MARINE CONSERVATION" => 14,
    "LAND PRESERVATION" => 15,
    "SOCIAL EQUITY" => 16,
    "COLLABORATIVE IMPACT" => 17
];

$selectedLink = isset($_GET['link']) ? $_GET['link'] : null;
$sdgId = $sdgNameToId[$selectedLink] ?? null;

if ($sdgId) {
    $sql = "SELECT * FROM sdg WHERE id = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $sdgId);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $sdgColor = $row['sdg_color'];
                $website1 = $row['website_1'];
                $webDesc1 = $row['website_1_desc'];
                $website2 = $row['website_2'];
                $webDesc2 = $row['website_2_desc'];
            }
        }
        $stmt->close();
    }
}

$mysqli->close();

$sdgImages = [
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
];

$imageName = $sdgImages[$selectedLink] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/template.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script defer src="../js/app.js"></script>
    <title>HOPE</title>
    <style>
        main>.overlay {
            opacity: 0.4;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 0;
            top: 0;
            background: linear-gradient(0deg, #<?php echo $sdgColor; ?>, var(--black));
        }

        #donate-btn {
            background-color: #<?php echo $sdgColor; ?>;
        }

        button {
            background-color: #<?php echo $sdgColor; ?>;
            padding: 0.6em 2.2em;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            color: var(--white);
            font-size: 1.25rem;
            font-family: "Inter", sans-serif;
            font-weight: 500;
            transition: transform 500ms cubic-bezier(0.13, 0.53, 0.38, 0.97), filter 300ms;
        }

        button:hover {
            transform: scale(1.1);
            filter: brightness(85%);
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
                <li id="donate-btn"><a href="../index.php#donate">See More</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO -->
    <main>
        <div class="overlay"></div>
        <img src="../assets/<?php echo $imageName; ?>">
        <div class="hero">
            <div>
                <h1><?php echo $selectedLink; ?></h1>
                <button class="scroll-button" onclick="scrollToForm()">Donate Now</button>
            </div>
        </div>
    </main>


    <section id="form">
        <div class="container">
            <div class="box item1">
                <p><?php echo $website1; ?></p>
                <p><?php echo $webDesc1; ?></p>
            </div>
            <div class="box item2">
                <p><?php echo $website2; ?></p>
                <p><?php echo $webDesc2; ?></p>
            </div>
            <div class="box item3"></div>
        </div>
    </section>

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
                <p>&copy; 2024 HOPE Philippines | All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
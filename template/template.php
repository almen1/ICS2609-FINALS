<?php
$sdgImages = array(
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
        :root {
            --white: #ffffff;
            --black: #2e2e2e;
            --gray: #e2e2e2;
            --sdg1: #e5233d;
            --sdg2: #dda73a;
            --sdg3: #4ca146;
            --sdg4: #c7212f;
            --sdg5: #ef402d;
            --sdg6: #27bfe6;
            --sdg7: #fbc412;
            --sdg8: #a31c44;
            --sdg9: #f26a2e;
            --sdg10: #e01483;
            --sdg11: #f89d2a;
            --sdg12: #bf8d2c;
            --sdg13: #407f46;
            --sdg14: #1f97d4;
            --sdg15: #59ba47;
            --sdg16: #136a9f;
            --sdg17: #14496b;
        }

        .hero {
            background-image: url('../assets/<?php echo $imageName; ?>'), linear-gradient(0deg, rgba(229, 35, 61, 0.5), rgba(46, 46, 46, 0.5));
            background-blend-mode: overlay;
            background-size: cover;
            background-repeat: no-repeat;
        }

        button {
            background-color: rgb(229, 35, 61);
            padding: 0.6em 2.2em;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            color: var(--white);
            font-size: 1.25rem;
            font-family: "Inter", sans-serif;
            font-weight: 500;
            transition: transform 500ms cubic-bezier(0.13, 0.53, 0.38, 0.97);
        }

        button:hover {
            transform: scale(1.1);
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

    <!-- HERO -->
    <main>
        <div class="hero">
            <div>
                <h1>
                    <?php
                    session_start();
                    if (isset($_GET['link'])) {
                        $selected_link = $_GET['link'];
                        echo $selected_link;
                    }
                    ?>
                </h1>
                <button>Donate Now</button>
            </div>
        </div>
    </main>
                    
    <section>
        <div class="container">
            <div class="box item1"></div>
            <div class="box item2"></div>
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
                <p>
                    © 2024 HOPE Philippines | All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>



</html>
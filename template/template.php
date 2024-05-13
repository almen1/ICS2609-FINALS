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
                $sdgDesc = $row['sdg_desc'];
                $sdgColor = $row['sdg_color'];
                $website1 = $row['website_1'];
                $webURL1 = $row['website_1_url'];
                $webDesc1 = $row['website_1_desc'];
                $website2 = $row['website_2'];
                $webURL2 = $row['website_2_url'];
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
    <link rel="icon" href="../assets/hope-favicon.svg">
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
        background-color: #<?php echo $sdgColor;
        ?>;
    }

    .scroll-btn {
        background-color: #<?php echo $sdgColor;
        ?>;
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

    .scroll-btn:hover {
        transform: scale(1.1);
        filter: brightness(85%);
    }

    .visit-btn {
        background-color: #<?php echo $sdgColor;
        ?>;
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

    .visit-btn:hover {
        transform: scale(1.04);
        filter: brightness(85%);
    }

    .submit-btn {
        background-color: #<?php echo $sdgColor;
        ?>;
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

    .submit-btn:hover {
        transform: scale(1.04);
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
                <li id="donate-btn"><a href="../index.php#donate">Explore More</a></li>
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
                <p> <?php echo $sdgDesc; ?></p>
                <button class="scroll-btn" onclick="scrollToForm()">Donate Now</button>
            </div>
        </div>
    </main>

    <!-- FORM -->
    <section id="form">
        <div class="container">
            <div class="box item1">
                <div class="item-text">
                    <h1><?php echo $website1; ?></h1>
                    <p><?php echo $webDesc1; ?></p>
                </div>
                <button class="visit-btn" onclick="window.open('<?php echo $webURL1?>')" class="visit-btn">Visit
                    Now</button>
            </div>
            <div class="box item2">
                <div class="item-text">
                    <h1><?php echo $website2; ?></h1>
                    <p><?php echo $webDesc2; ?></p>
                </div>
                <button class="visit-btn" onclick="window.open('<?php echo $webURL2?>')" class="visit-btn">Visit
                    Now</button>
            </div>
            <div class="box item3">
                <?php 
                require_once "../config/form_create.php";
                
                ?>
                <div class="wrapper">
                    <h1>Donate Towards Development</h1>
                    <p>Your donation fuels SDG initiatives, promoting education, healthcare, infrastructure, and
                        economic empowerment for a brighter future.</p>
                    <div class="table">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="row row-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name"
                                        class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>"
                                        value="<?php echo isset($name) ? $name : ''; ?>">
                                    <!-- <span class="invalid-feedback"><?php echo $name_err; ?></span> -->
                                </div>

                                <div class="form-group">
                                    <label>Contact Information</label>
                                    <input type="text" name="contact"
                                        class="form-control <?php echo (!empty($contact_err)) ? 'is-invalid' : ''; ?>"
                                        value="<?php echo isset($contact) ? $contact : ''; ?>">
                                    <!-- <span class="invalid-feedback"><?php echo $contact_err; ?></span> -->
                                </div>
                            </div>
                            <div class="row row-2">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" name="amount"
                                        class="form-control <?php echo (!empty($amount_err)) ? 'is-invalid' : ''; ?>"
                                        value="<?php echo isset($amount) ? $amount : ''; ?>">
                                    <!-- <span class="invalid-feedback"><?php echo $amount_err; ?></span> -->
                                </div>
                                <div class="form-group">
                                    <label>Payment Method</label>
                                    <select name="payment_method"
                                        class="form-control <?php echo (!empty($payment_method_err)) ? 'is-invalid' : ''; ?>">
                                        <option value="">Select Payment Method</option>
                                        <option value="Visa"
                                            <?php if(isset($payment_method) && $payment_method == "Visa") echo "selected"; ?>>
                                            Visa</option>
                                        <option value="GCash"
                                            <?php if(isset($payment_method) && $payment_method == "GCash") echo "selected"; ?>>
                                            GCash</option>
                                        <option value="Mastercard"
                                            <?php if(isset($payment_method) && $payment_method == "Mastercard") echo "selected"; ?>>
                                            Mastercard</option>
                                    </select>
                                    <!-- <span class="invalid-feedback"><?php echo $payment_method_err; ?></span> -->
                                </div>
                            </div>
                            <div class="row row-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="website1" name="website1"
                                        value="<?php echo $website1; ?>">
                                    <label class="form-check-label" for="website1"><?php echo $website1; ?></label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="website2" name="website2"
                                        value="<?php echo $website2; ?>">
                                    <label class="form-check-label" for="website2"><?php echo $website2; ?></label>
                                </div>
                            </div>
                            <div class="row row-4">
                                <div class="form-group">
                                    <label>Comments</label>
                                    <textarea name="comments"
                                        class="form-control <?php echo (!empty($comments_err)) ? 'is-invalid' : ''; ?>"><?php echo isset($comments) ? $comments : ''; ?></textarea>
                                    <!-- <span class="invalid-feedback"><?php echo $comments_err; ?></span> -->
                                </div>
                            </div>
                            <div class="row row-5">
                                <button type="submit" class="submit-btn">Submit Donation</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
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
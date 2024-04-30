<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/template.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>HOPE</title>
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
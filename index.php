    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOPE</title>
        <link rel="stylesheet" href="./css/landing.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>

    <?php
    session_start();

    ?>

    <body>

        <nav class="navbar">
            <div class="nav-icon">
            </div>
            <div class="nav-elements">
                <ul class="nav-list">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a>Get Involved</a></li>
                </ul>
            </div>
        </nav>

        <main>
            <div class="hero-title">
                <h1 class="hero">HOPE</h1>
                <h2>Every Act Counts</h2>
            </div>
        </main>

        <div class="container">
            <div class="card-track">
                <a class="card-link" href="./template/template.php">
                    <p class="card-link-label">NO <br />POVERTY</p>
                    <div class="card-overlay"></div>
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">ZERO <br />HUNGER</p>
                    <div class="card-overlay"></div>
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">HEALTHY <br />LIVING</p>
                    <div class="card-overlay"></div>
                </a>
            </div>
        </div>

        <div class="aboutus">
            <div class="about-elements"></div>
        </div>


    </body>
    <script>
        const toggleCard = () => {
            document.body.dataset.card = document.body.dataset.card === "true" ? "false" : "true";
        }
    </script>

    </html>
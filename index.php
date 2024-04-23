    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOPE</title>
        <link rel="stylesheet" href="./css/landing.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>

    <body data-card="false">

        <nav class="navbar">
            <div class="nav-icon">
            </div>
            <div class="nav-elements">
                <ul class="nav-list">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Get Involved</a></li>
                </ul>
            </div>
        </nav>

        <main>
            <div class="hero-title">
            </div>
        </main>

        <div class="container">
            <div id="card-track">
                <a class="card-link" href="#">
                    <p class="card-link-label">NO POVERTY</p>
                    <img class="card-link-image" src="./assets/hope-sdg1.svg" />
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">ZERO HUNGER</p>
                    <img class="card-link-image" src="./assets/hope-sdg2.svg" />
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">GOOD HEALTH</p>
                    <img class="card-link-image" src="./assets/hope-sdg3.svg" />
                </a>
            </div>
        </div>

        <button id="card-toggle" type="button" onclick="toggleCard()">↻
            <p class="open"></p>
            <p class="close"></p>
        </button>


    </body>
    <script>
        const toggleCard = () => {
            document.body.dataset.card = document.body.dataset.card === "true" ? "false" : "true";
        }
    </script>

    </html>
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
    <body data-card="false">

        <nav class="navbar">
            <div class="nav-icon">
            </div>
            <div class="nav-elements">
                <ul class="nav-list">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a onclick="toggleCard()">Get Involved</a></li>
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
            <div id="card-track">
                <a class="card-link" href="./template/template.php">
                    <p class="card-link-label">NO POVERTY</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg1.svg">
                    </div>              
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">ZERO HUNGER</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg2.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">HEALTHIER LIVES</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">QUALITY EDUCATION</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">GENDER EQUALITY</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">CLEANER WATERS</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">RENEWABLE ENERGY</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">ECONOMIC GROWTH</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">INDUSTRY INNOVATION</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">REDUCED INEQUALITIES</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">URBAN SUSTAINABILITY</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">SUSTAINABLE CONSUMPTION</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">CLIMATE ACTION</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">OCEAN CONSERVATION</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">LAND PRESERVATION</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">JUSTICE PROMOTION</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
                </a>
                <a class="card-link" href="#">
                    <p class="card-link-label">GOAL COLLABORATION</p>
                    <div class="card-link-image">
                        <div class="card-overlay"></div>
                        <img src="./assets/hope-sdg3.svg">
                    </div>  
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanilla Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script type="module" src="script.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                <img src="images/logo.svg" alt="VanillaTech Logo" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link home" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aboutUs" href="./aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle services" href="#" id="megaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu mega-menu" aria-labelledby="megaMenu">
                            <div class="container">
                                <div class="row">
                                    <div class="sub-menu col-lg-3 col-md-6">
                                        <a href="./software.php">
                                            <div class="dropdown-header"><img src="images/icons/software.svg" alt=""><h6>Software Development</h6></div>
                                            <p>Crafting robust and scalable software solutions tailored to your business needs.</p>
                                        </a>
                                    </div>
                                    <div class="sub-menu col-lg-3 col-md-6">
                                        <a href="./software.php">
                                            <div class="dropdown-header"><img src="images/icons/mobile.svg" alt=""><h6>Mobile Development</h6></div>
                                            <p>Innovative mobile apps designed for a seamless user experience across platforms.</p>
                                        </a>
                                    </div>
                                    <div class="sub-menu col-lg-3 col-md-6">
                                        <a href="./design.php">
                                            <div class="dropdown-header"><img src="images/icons/uiux.svg" alt=""><h6>Design</h6></div>
                                            <p>Intuitive and visually stunning designs enhancing user engagement and satisfaction.</p>
                                        </a>
                                    </div>
                                    <div class="sub-menu col-lg-3 col-md-6">
                                        <a href="./testing.php">
                                            <div class="dropdown-header"><img src="images/icons/bug.svg" alt=""><h6>Software Testing</h6></div>
                                            <p>Ensuring reliability and performance through testing for flawless software delivery.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link project" href="./projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link joinUs" href="./joinUs.php">Join Us</a>
                    </li>
                </ul>
                <a href="./getInTouch.php" class="get-in-touch btn btn-primary d-flex flex-row gap-2 ">
                    <lord-icon
                        src="https://cdn.lordicon.com/fdxqrdfe.json"
                        trigger="loop"
                        colors="primary:#ffffff"
                        style="width:24px;height:24px"
                        delay="2000">
                    </lord-icon>
                    Get in Touch
                </a>
            </div>
        </div>
    </nav>
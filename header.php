<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanillaTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.svg" alt="VanillaTech Logo" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="megaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu mega-menu" aria-labelledby="megaMenu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <a href="#">
                                            <div class="dropdown-header"><img src="images/icons/dev.svg" alt=""><h6>Web Development</h6></div>
                                            <p>Crafting robust and scalable software solutions tailored to your business needs.</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <a href="#">
                                            <div class="dropdown-header"><img src="images/icons/mobile.svg" alt=""><h6>Mobile Development</h6></div>
                                            <p>Innovative mobile apps designed for a seamless user experience across platforms.</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <a href="#">
                                            <div class="dropdown-header"><img src="images/icons/design.svg" alt=""><h6>Design</h6></div>
                                            <p>Intuitive and visually stunning designs enhancing user engagement and satisfaction.</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <a href="#">
                                            <div class="dropdown-header"><img src="images/icons/testing.svg" alt=""><h6>Cloud Services</h6></div>
                                            <p>Ensuring reliability and performance through rigorous testing for flawless software delivery.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Join Us</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary">Get in Touch</a>
            </div>
        </div>
    </nav>
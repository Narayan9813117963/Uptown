<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uptown</title>
    <link rel="shortcut icon" type="image/png" href="images/tab-logo.png">
    <link rel="stylesheet" href="dist/css/vendor.css" />
    <link rel="stylesheet" href="dist/css/theme.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg position-fixed w-100">
            <div class="container">
                <div class="d-flex w-100 justify-content-between px-2">
                    <div class="col-9 col-md-9 col-lg-2">
                        <a class="navbar-brand logo" href="index.html"><img src="images/logo.svg" alt="logo"></a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block ">
                        <div class="d-flex justify-content-center">
                            <div class=" middle-nav" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-5">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block ">
                        <div class="contact-head d-flex align-items-center justify-content-end gap-3">
                            <div class="links d-flex gap-3">
                                <a href="#" aria-level="Facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" aria-level="Instagram"><i class="bi bi-instagram"></i></a>
                            </div>
                            <div class="contact-wrapper">
                                <div class="call-wrapper d-flex align-items-center gap-2">
                                    <i class="bi bi-phone"></i>
                                    <div class="number d-flex align-items-center flex-column">
                                        <a href="tel:+(995 32) 242 19 20">+(995 32) 242 19 20</a>
                                        <a href="#" aria-level="Call Us">Request a call</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-3 col-md-3 col-lg-2 toggler-btn d-none justify-content-end">
                        <div class=" d-flex align-items-center justify-content-end w-100">
                                <div class="bar-icon d-flex flex-column gap-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                aria-controls="offcanvasExample">
                                    <span class="w-100"></span>
                                    <span class="w-100"></span>
                                    <span class="w-100"></span>
                                </div>
                        </div>

                        <div class="offcanvas offcanvas-start hidden-nav" tabindex="-1" id="offcanvasExample"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <div class="hidden-nav-logo">
                                    <img src="images/logo.svg" alt="logo">
                                </div>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="offcanvas-contents">
                                    <ul class="d-flex ps-5 gap-2 flex-column">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Menu</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </header>
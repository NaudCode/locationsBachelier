<?php
  $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

  if ($langue == 'fr') {
    include './langage/fr.php';
   } elseif ($langue == 'de') {
    include './langage/de.php';
  } elseif ($langue == 'es') {
    include './langage/es.php';
  } else {
    include './langage/en.php';
  }
?>

<?php
  $langue = isset($_GET['lang']) ? $_GET['lang'] : 'fr'; // Langue par défaut : français

  if ($langue === 'fr') {
    include 'langage/fr.php';
  } elseif ($langue === 'en') {
    include 'langage/en.php';
  } elseif ($langue === 'de') {
    include 'langage/de.php';
  } elseif ($langue === 'es') {
    include 'langage/es.php';
  } else {
    // Gérer les langues non supportées (ex: afficher un message d'erreur)
  }
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Locations Bachelier</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> <!-- icone à changer-->

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="#about"><?php echo $about ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects"><?php echo $TitleActivity ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#myCarousel"><?php echo $photo ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#recomandation"><?php echo $reco ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#dispo"><?php echo $dispo ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact"><?php echo $contact ?></a></li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $langage ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?lang=fr">Français</a></li>
                        <li><a class="dropdown-item" href="?lang=en">English</a></li>
                        <li><a class="dropdown-item" href="?lang=de">Deutsch</a></li>
                        <li><a class="dropdown-item" href="?lang=es">Español</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Bretignolles <br> sur-Mer</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5"><?php echo $firstH2 ?></h2>
                        <a class="btn btn-primary" href="#about"><?php echo $start ?></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="text-white mb-4"><?php echo $house ?></h2>
                        <p class="text-white-50"><?php echo $descHouse ?></p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/veranda_cosy.jpeg" alt="..." />
            </div>
        </section>


        <!-- Projects home equipments-->
        <section class="projects-section bg-light" id="projects">
            <div class="text-center mb-5">
                <i class="fa-solid fa-house fa-2x mb-2 text-dark"></i>
                <p><h2 class="title_underline"><?php echo $TitleActivity ?></h2></p>
            </div> 

            <div class="container px-4 px-lg-5">

                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/babyfoot.png" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-lg-right">
                                    <h4 class="text-white text-center mb-3"><?php echo $hobbiesTitle ?></h4>
                                    <p class="mb-0 text-white-50"><?php echo $hobbies ?></p>
                                    <p class="mb-0 text-white-50"><?php echo $tv ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/piscine_securisee.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="bg-black h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-lg-left">
                                <h4 class="text-white text-center "><?php echo $swimpoolTitle ?></h4>
                                <p class="mb-0 text-white-50"><?php echo $swimpool ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/cuisine.jpeg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-lg-right">
                                    <h4 class="text-white text-center"><?php echo $kitchenTitle ?></h4>
                                    <p class="mb-0 text-white-50"><?php echo $kitchen ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image Carousel -->
        <section>

            <div class="text-center mb-3 mt-5">
                <i class="fa-solid fa-image fa-2x mb-2 text-dark"></i>
                <p><h2 class="title_underline"><?php echo $photo ?></h2></p>
            </div>

            <div id="myCarousel" class="carousel slide w-75 mx-auto mb-5 mt-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/img/Chambre_enfant.avif" class="d-block w-100" alt="" data-bs-toggle="modal" data-bs-target="#myModal"> 
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/Chambre_parent.webp" class="d-block w-100" alt="" data-bs-toggle="modal" data-bs-target="#myModal">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/cuisine.jpeg" class="d-block w-100" alt="" data-bs-toggle="modal" data-bs-target="#myModal">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"><?php echo $previous ?></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"><?php echo $next ?></span>
                </button>
                </div>
        </section> 


<!-- Recommandations -->
        <section class="reco-section bg-light" id="recomandation">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-heart fa-2x mb-2 text-dark"></i>
                        <h2 class="text-dark mb-5 title_underline"><?php echo $recoTitle ?></h2>
                        <div class="container px-4 px-lg-5">
                            <div class="row gx-4 gx-lg-5">

                                <div class="col-md-6 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <h4 class="text-uppercase m-0"><?php echo $parc ?></h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><a href="https://www.puydufou.com/" target="_blank"><img src="assets/img/logo_pdfou.jpg" class="img-fluid" alt="Logo Puy du fou"></a>
                                            <p><?php echo $pdf_desc ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <h4 class="text-uppercase m-0"><?php echo $restaurant ?></h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><a href="#!">Lien google map</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
        </section>


        <!-- Disponibility -->
        <section class="text-center mb-5 mt-5" id="dispo">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fa-solid fa-calendar-days fa-2x mb-2 text-dark"></i>
                <h4 class="m-0 title_underline"><?php echo $dispo ?></h4>
                    <div>
                        <div class="airbnb-embed-frame" data-id="1076467562844958320" data-view="home" data-hide-price="true" style="width: 450px; height: 300px; margin: auto;"><a href="https://www.airbnb.fr/rooms/1076467562844958320?check_in=2024-11-01&amp;check_out=2024-11-06&amp;guests=1&amp;adults=4&amp;s=66&amp;source=embed_widget">Voir sur Airbnb</a><a href="https://www.airbnb.fr/rooms/1076467562844958320?check_in=2024-11-01&amp;check_out=2024-11-06&amp;guests=1&amp;adults=4&amp;s=66&amp;source=embed_widget" rel="nofollow">Maison de vacances</a><script async="" src="https://www.airbnb.fr/embeddable/airbnb_jssdk"></script></div>                </div>
                    </div>
                <p><?php echo $dispo_desc ?></p>    
            </div>
        </section>


        <!-- Contact-->
        <section class="contact-section" id="contact">
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-address-book fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5 title_underline">Contact</h2>
                        <div class="container px-4 px-lg-5">
                            <div class="row gx-4 gx-lg-5">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0"><?php echo $addressTitle ?></h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><?php echo $address ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-envelope text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Email</h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0"><?php echo $phone ?></h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  

        </section>

        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2023</div></footer>
        
        <!-- Cookies Promp -->
        <div id="cookie-bar">
        <p><?php echo $biscuitMessage ?></p>
        <span id="close-cookie-bar">&#10006;</span> 
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    </body>
</html>

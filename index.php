<?php
  $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

  if ($langue == 'fr') {
    include './langage/fr.php';
  } else {
    include './langage/en.php';
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
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Locations Bachelier</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about"><?php echo $about ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects"><?php echo $location ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#myCarousel"><?php echo $photo ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#recomandation"><?php echo $reco ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup"><?php echo $contact ?></a></li>
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
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">

            <div class="text-center"><p><h2><?php echo $TitleActivity ?></h2></p></div>
            <div class="container px-4 px-lg-5">

                <!-- Featured Project Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/babyfoot.png" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white"><?php echo $hobbiesTitle ?></h4>
                                    <p class="mb-0 text-white-50"><?php echo $hobbies ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project One Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/salon.avif" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white"><?php echo $tvTitle ?></h4>
                                    <p class="mb-0 text-white-50"><?php echo $tv ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/piscine_securisee.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white"><?php echo $swimpoolTitle ?></h4>
                                    <p class="mb-0 text-white-50"><?php echo $swimpool ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-12 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center">
                                    <h4 class="text-white"><?php echo $other ?></h4>
                                    <p class="mb-0 text-white-50"><?php echo $otherdesc ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image Carousel -->
        <section>
            <div id="myCarousel" class="carousel slide w-50 mx-auto mb-5 mt-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/img/Chambre_enfant.avif" class="d-block w-100" alt=""> 
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/Chambre_parent.webp" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/cuisine.jpeg" class="d-block w-100" alt="">
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



        <section class="reco-section bg-light" id="recomandation">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-heart fa-2x mb-2 text-dark"></i>
                        <h2 class="text-dark mb-5"><?php echo $recoTitle ?></h2>
                        <div class="container px-4 px-lg-5">
                            <div class="row gx-4 gx-lg-5">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <h4 class="text-uppercase m-0"><?php echo $parc ?></h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><a href="https://www.puydufou.com/" target="_blank">Puy du fou</a>
                                            <p>Description</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <h4 class="text-uppercase m-0"><?php echo $restaurant ?></h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><a href="#!">Lien google map</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <h4 class="text-uppercase m-0"><?php echo $icecream ?></h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50">Commerce + photo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
        </section>

        <!-- Contact-->
        <section class="contact-section bg-black">
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-flight fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Contact</h2>
                        <div class="container px-4 px-lg-5">
                            <div class="row gx-4 gx-lg-5">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Address</h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-envelope text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Email</h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Phone</h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50">+1 (555) 902-8832</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  


                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2023</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

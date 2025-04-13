<?php include 'layout.php'; ?>


            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-6 pt-5 text-center text-lg-start">
                        <?php
                            if (isset($_SESSION['alias']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
                                // Si l'utilisateur est connecté, afficher le message de bienvenue
                                echo '<h1>Bienvenue, ' . htmlspecialchars($_SESSION['nom']) . ' ' . htmlspecialchars($_SESSION['prenom']) . '</h1>';
                            }
?>
                            <h1 class="display-4 text-white mb-4 animated slideInLeft">Hebergeur web gratuit</h1>
                            <p class="text-white animated slideInLeft">Nous proposons d'héberger gratuitement votre site web et cela gratuitement.</p>
                            <h1 class="text-white mb-4 animated slideInLeft">
                                <small class="align-top fw-normal" style="font-size: 15px; line-height: 25px;">Prix :</small>
                                <span>0,00€</span>
                                <small class="align-bottom fw-normal" style="font-size: 15px; line-height: 33px;">a vie</small>
                            </h1>
                            <a href="" class="btn btn-secondary py-sm-3 px-sm-5 me-3 animated slideInLeft">Commander maintenant</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Domain Search Start 
        <div class="container-xxl domain mb-5" style="margin-top: 90px;">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="mb-3">Search Your Domain</h1>
                            <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
                        </div>
                        <div class="position-relative w-100 my-3 wow fadeInUp" data-wow-delay="0.3s">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your domain name">
                            <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Search</button>
                        </div>
                        <div class="row g-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.com</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.net</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.org</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.us</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.eu</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.co.uk</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Domain Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="apropos">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-4">
                            <h1 class="mb-2">Bienvenue chez Heberge4</h1>
                        </div>
                        <p class="mb-4">Il était temps de se débarrasser des vignes. Que la douleur soit longue et longue. Je vais faire quelques devoirs et travailler dessus. Il y avait beaucoup de douleur et il était très difficile de se débarrasser de la douleur.</p>
                        <div class="row g-3">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Experts</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-check fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Pricing Start -->
        <div class="container-xxl py-5" id="hebergement">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Nos offres d'hébergement</h1>
                    <p class="mb-1">C'est vrai, mais c'est vrai. Et c'est vrai que la mer diam elitr les a rencontrés très clita deux mais. Mais il était vrai que la mer était de diamètre.</p>
                </div>
                <div class="row gy-5 gx-4"><!--
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-share-alt text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Share Hosting</h4>
                                <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                <h1 class="mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>2.49<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                </h1>
                                <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="position-relative shadow rounded border-top border-5 border-secondary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-server text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">HEBERGEUR WEB</h4>
                                <p class="mb-0">description</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="text-primary mb-1">Mellieur offre - <strong>Save 100%</strong></p>
                                <h1 class="mb-3">
                                    0,00<small class="align-top" style="font-size: 22px; line-height: 45px;">€</small> <small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ A vie</small>
                                </h1>
                                <a class="btn btn-secondary px-4 py-2" href="">Commander</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>2 GB Espace disque</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Bande passante illimitée</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Mise à niveau vers Positive SSL</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Suppression automatique des logiciels malveillants</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Garantie de remboursement de 30 jours</p>
                            </div>
                        </div>
                    </div><!--
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-cog text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Dedi Hosting</h4>
                                <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                <h1 class="mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>11.49<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                </h1>
                                <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Pricing End -->


        <!-- Comparison Start 
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Serveur partagé VS dédié</h1>
                    <p class="mb-1">C'est vrai, mais c'est vrai. Et c'est juste que le diamètre de la mer les aimera vraiment
 mais deux très clitas. Mais il était vrai que la mer était de diamètre.</p>
                </div>
                <div class="row g-5 comparison position-relative">
                    <div class="col-lg-6 pe-lg-5">
                        <div class="section-title position-relative mx-auto mb-4 pb-4">
                            <h3 class="fw-bold mb-0">Serveur partagé</h3>
                        </div>
                        <div class="row gy-3 gx-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-server fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">99.99% Temps de disponibilité</h5>
                                <p>Une coupure ? non pas ici !</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">100% Sécurisé</h5>
                                <p>Votre hébergeur 100% sécurisé, soyez tranquille et buvez cocktaile et poce bleu</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-cog fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">Panneau de contrôle</h5>
                                <p>Diriger votre site web comme vous le souhaiter</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-headset fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">24/7 Support</h5>
                                <p>Un support chat et humain est a votre disposition 24/24 et 7/7.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="section-title position-relative mx-auto mb-4 pb-4">
                            <h3 class="fw-bold mb-0">Dedicated Server</h3>
                        </div>
                        <div class="row gy-3 gx-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-server fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">99.99% Disponible</h5>
                                <p>Une coupure ? non pas ici !</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-shield-alt fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">100% Sécurisé</h5>
                                <p>Votre hébergeur 100% sécurisé, soyez tranquille et buvez cocktaile et poce bleu</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-cog fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">Control Panel</h5>
                                <p>Diriger votre site web comme vous le souhaiter</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-headset fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">Support 24/7 </h5>
                                <p>Vous avez accées a un support 24h sur 24h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Comparison Start -->


        <!-- Testimonial Start 
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 mt-4">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Testimonial End -->


        <!-- Team Start 
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Team Members</h1>
                    <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos
                        ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-1.jpg" alt="">
                                <h5 class="fw-bold mb-1">Full Name</h5>
                                <small>Designation</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-2.jpg" alt="">
                                <h5 class="fw-bold mb-1">Full Name</h5>
                                <small>Designation</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-3.jpg" alt="">
                                <h5 class="fw-bold mb-1">Full Name</h5>
                                <small>Designation</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">Full Name</h5>
                                <small>Designation</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Team End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-white footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row gy-5 gx-4 pt-5">
                    <div class="col-12">
                        <h5 class="fw-bold text-white mb-4">Subscribe Our Newsletter</h5>
                        <div class="position-relative" style="max-width: 400px;">
                            <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                            <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">About Us</h5>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">Our Services</h5>
                                <a class="btn btn-link" href="">Domain Register</a>
                                <a class="btn btn-link" href="">Shared Hosting</a>
                                <a class="btn btn-link" href="">VPS Hosting</a>
                                <a class="btn btn-link" href="">Dedicated Hosting</a>
                                <a class="btn btn-link" href="">Reseller Hosting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" id="contact">
                        <h5 class="fw-bold text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-lg-n5">
                        <div class="bg-light rounded" style="padding: 30px;">
                            <input type="text" class="form-control border-0 py-2 mb-2" placeholder="Name">
                            <input type="email" class="form-control border-0 py-2 mb-2" placeholder="Email">
                            <textarea class="form-control border-0 mb-2" rows="2" placeholder="Message"></textarea>
                            <button class="btn btn-primary w-100 py-2">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'acceuil</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="/"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn__widget">
            <a class="btn btn-primary" href="/login"> Connexion <span class="arrow_right"></span></a>
        </div>
        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> Contact du devélopeur</li>
                <li><span class="icon_phone"></span> (+242) 06-426-55-95</li>
            </ul>
        </div>
        <div class="offcanvas__language">
            <img src="img/lan.png" alt="">
            <span>English</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li>English</li>
                <li>Bangla</li>
            </ul>
        </div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Debut de la section header -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> Contact du devélopeur </li>
                            <li><span class="icon_phone"></span> (+242) 06-426-55-95 </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__auth">
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="header__top__language">
                                <img src="img/lan.png" alt="">
                                <span>English</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li>English</li>
                                    <li>Bangla</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href=""><i class="fa fa-users i"></i> Lc_Plate-forme</a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li class="active"><a href="/">Acceuil</a></li>
                                    <li><a href="frontOffice/chambres">Chambres</a></li>
                                    <li><a href="/apropos">A propos</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="/apropos">A propos</a></li>
                                            <li><a href="/chambreDetails">Chambre Details</a></li>
                                            <li><a href="/blogDetails">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/blogs">News</a></li>
                                    <li><a href="/contacts">Contacts</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                                <a class="btn btn-primary connexion" href="/login">Connexion<span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Fin de la section header -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <marquee behavior="" scrollamount="10" direction="left"><h5>Es tu à la recherche d'un hôtel ??? si oui, la plate-forme Lc<i class="fa fa-home"></i> est là pour toi !</h5></marquee>
                        <h2>Cherches <i class="fa fa-search"></i> ton hôtel puis fais ta réservation...!.</h2>
                    </div>
                    <!-- Recherches ton Hôtel-->
                    <form action="frontOffice/sossa" method="get" class="filter__form">
                        <div class="filter__form__item filter__form__item--search">
                            <p>Hôtel</p>
                            <div class="filter__form__input">
                                <input name="sossa" type="text" placeholder="Taper le nom de l'hôtel" required>
                                <span class="icon_search"></span>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Entrée_#</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__in">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Sortie_#</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__out">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item filter__form__item--select">
                            <p>Est tu un ?</p>
                            <div class="filter__form__select">
                                <span class="icon_group"></span>
                                <select>
                                    <option value=""> Adulte</option>
                                    <option value=""> Ado</option>
                                    <option value=""> Enfant</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit">Rechercher</button>
                    </form>
                    <!-- Fin recherches ton Hôtel-->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- A propos  -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>Apropos de nous</h5>
                            <h2>Bienvenue sur la Lc Plate-Forme ! <i class="fa fa-home"></i></h2>
                        </div>
                        <p class="first-para">La Lc plate-forme a été conçu par un groupe de dévélopeurs dans le but de faciliter des réservations des
                        chambres d'hôtels disponibles de la place, elle a plusieurs services qu'elle offre.</p>
                        <p class="last-para">Parmit ces services, elle dispose d'un service de localisation qui permet à la personne de manière à ce qu'elle soit orientée au cas 
                            ou cette dernière n'a pas opté faire une réservation en ligne .</p>
                        <img src="img/home-about/sign.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="img/home-about/home-about.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin A propos -->

    <!-- Debut de la section des services -->
    <section class="services spad">
        <div class="container">
        <marquee behavior="" direction=""><h4 class="text-center text-muted mb-5">Services ainsi que différents avantages que l'on retrouve dans certains Hôtels de la place. </h4></marquee>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-1.png" alt="">
                        <h4>Gratuité du Wi-Fi</h4>
                        <p>L'investissement massif dans un hôtel ou un complexe nécessite des examens et un contrôle constants afin de
                            en faire un investissement réussi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-2.png" alt="">
                        <h4>Piscine Premium</h4>
                        <p>Choisissez parmi 4 concepts prêts à l'emploi uniques, laissez-nous vous aider à créer le concept parfait pour vous
                            ou laissez HCA.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-3.png" alt="">
                        <h4>Machine à café</h4>
                        <p>La représentation du propriétaire de HCA ne prend en compte que ces facteurs importants, peut-être
                            par des visites régulières sur site et des contrôles ponctuels.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-4.png" alt="">
                        <h4>Vin de bar</h4>
                        <p>Pour les propriétés avec des sociétés de gestion tierces, HCA Consultants administrera également
                            Les termes et conditions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-5.png" alt="">
                        <h4>TV HD</h4>
                        <p>Nous fournissons une analyse critique de la stratégie marketing d'un hôtel, en la comparant
                            industrie et pratiques concurrentielles.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-6.png" alt="">
                        <h4>Restaurant</h4>
                        <p>Un investissement dans un hôtel et un restaurant mérite une planification financière prudente et orientée vers le marché et
                            projections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section services  -->

    <!-- Debut de la section tous les hôtels -->
    <section class="home-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Hôtels <i class="fa fa-home"></i></h5>
                        <h2>Tous les hôtels de la place disponibles !</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid testimonial__slider owl-carousel">
            <div class="row">
            @foreach($hotels as $hotel)
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="{{asset($hotel->image_uri)}}">
                        <div class="home__room__title">
                            <h4> {{$hotel->name}} <sup> </sup> </h4>
                            <h2><span> Hôtel de classe {{$hotel->classe_id?$hotel->classe->etoile:""}} </span></h2>
                        </div>
                        <a href="#">Voir+ de détails</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="home__explore">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3>Vous planifiez votre prochain voyage? Économisez jusqu'à 25% sur votre hôtel</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 text-center">
                        <a href="#" class="primary-btn">Explorer More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la section -->

    <!-- Debut de la section des témoignages -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__pic">
                        <img src="img/testimonial-left.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__text">
                        <div class="section-title">
                            <h5>Témoignages</h5>
                            <h2>Que disent les clients de notre Plate-forme?</h2>
                        </div>
                        <div class="testimonial__slider__content">
                            <div class="testimonial__slider owl-carousel">
                                <div class="testimonial__item">
                                    <h5>Examen détaillé:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Pas encore disponible...#1</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Nom du témoin</h5>
                                                    <span>Statut du témoin</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p></p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Pas encore disponible...#2</h5>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Pas encore disponible...#3</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5></h5>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5></h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Pas encore disponible...#4</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5></h5>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-num" id="snh-1"></div>
                            <div class="slider__progress"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la section des témoignages -->

    <!-- Chooseus Section Begin -->
    <div class="chooseus spad set-bg" data-setbg="img/chooseus-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h5>POURQUOI NOUS CHOISIR !</h5>
                            <h2>Contactez-nous maintenant pour obtenir les dernières offres et pour la prochaine réservation</h2>
                        </div>
                        <a href="#" class="primary-btn">Réservez maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chooseus Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery spad">
        <div class="gallery__text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="section-title">
                            <h5>De la pub</h5>
                            <h2>Explore D'autre hôtels</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery__title">
                            <p>Vouloir être une douleur dans le cupidatat cillum a été critiqué dans le plaisir de l'évasion Duis et dolore magna!
                                Pas de salaire. On a tort d'abandonner leurs responsabilités d'esprit doux.</p>
                            <a href="#" class="primary-btn">Voir la Galerie <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__slider owl-carousel">
            <div class="gallery__item small__item set-bg" data-setbg="img/gallery/gallery-1.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-2.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-3.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-4.jpg"></div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>ACTUALITÉS ET ÉVÉNEMENT</h5>
                        <h2>De notre blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                    <div class="latest__blog__pic set-bg" data-setbg="img/latest-blog/lb-1.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                    <div class="latest__blog__text">
                        <div class="label">Hôtel</div>
                        <h5>Ut enim ad minim veniam, quis nostrud</h5>
                        <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                    <div class="latest__blog__pic set-bg" data-setbg="img/latest-blog/lb-2.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                    <div class="latest__blog__text">
                        <div class="label">Restaurant</div>
                        <h5>Ut enim ad minim veniam, quis nostrud</h5>
                        <p><i class="fa fa-clock-o"></i> 22th March, 2019</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                    <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                        data-setbg="img/latest-blog/lb-3.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                    <div class="latest__blog__text">
                        <div class="label">Travel</div>
                        <h5>Ut enim ad minim veniam, quis nostrud</h5>
                        <p><i class="fa fa-clock-o"></i> 25th March, 2019</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                    <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                        data-setbg="img/latest-blog/lb-4.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                    <div class="latest__blog__text">
                        <div class="label">Booking</div>
                        <h5>Ut enim ad minim veniam, quis nostrud</h5>
                        <p><i class="fa fa-clock-o"></i> 29th March, 2019</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo__carousel owl-carousel">
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-1.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-2.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-3.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-4.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="#"><img src="img/logo.png" alt=""></a>
                            </div>
                            <h4>(123) 456-78-91096</h4>
                            <ul>
                                <li>Ernser Vista Suite 437, NY</li>
                                <li>Info.colorlib@gmail.com</li>
                            </ul>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Quick Link</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Booking</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Review</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Our Room</a></li>
                                <li><a href="#">Restaurants</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                            <h4>Subscribe our newlatester</h4>
                            <form action="#">
                                <input type="text" placeholder="Your E-mail Address">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="footer__newslatter__find">
                                <h5>Find Us:</h5>
                                <div class="footer__newslatter__find__links">
                                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                    <a href="#"><i class="fa fa-map-o"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-forumbee"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="footer__copyright__links">
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from iamubaidah.com/html/peredion/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 07:50:34 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PerediOn - eSports Prediction HTML Template</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<!-- preloader begin -->
<div class="preloader">
    <img src="assets/img/preloader.gif" alt="">
    <span>PEREDION LOADING</span>
</div>
<!-- preloader end -->

<!-- bet modal begin -->
<div class="bet-modal-bg">
    <div class="bet-modal">
        <div class="bet-header">
            <span class="title">Predict a game</span>
            <button class="cls-btn"><i class="fas fa-times"></i></button>
        </div>
        <div class="bet-body">
            <div class="place-of-bet">
                <span class="place-of-bet-title">real madrid</span>
                <input class="place-of-bet-number" type="number" value="1" readonly>
            </div>
            <div class="bet-descr">
                <span class="team-name team-name-1st">america</span>
                <span class="img-ic"><img src="assets/img/vs-icon.png" alt=""></span>
                <span class="team-name team-name-2nd">iran</span>
                <div class="team-score">[<span class="team-first-score">1</span>:<span class="team-second-score">1</span>] 1X2 Live Prediction</div>
            </div>
            <div class="ctrl-buttons">
                <div class="butto-shadow">
                    <button class="ctrl-button-for-number minus-number">-</button>
                    <input type="number" value="1" max="99" min="1" class="number-of-stake" placeholder="stake">
                    <button class="ctrl-button-for-number plus-number">+</button>
                </div>
            </div>
            <div class="bet-total">
                <ul>
                    <li>
                        <span class="number-of-stake-title">stake :</span>
                        <input class="number-of-stake-count" type="number" value="1" readonly>
                    </li>
                    <li>
                        <span class="number-of-bet">Total Est. Returns :</span>
                        <span class="number-of-bet-count">82</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bet-footer">
            <button>Predict Now</button>
        </div>
    </div>
</div>
<!-- bet modal end -->

<!-- header begin -->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="left-area">
                        <ul>
                            <li>
                                        <span class="icon">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                <span class="text">
                                            <span id="date"></span>
                                            <span id="month"></span>
                                            <span id="year"></span>
                                        </span>
                            </li>
                            <li>
                                        <span class="icon">
                                            <i class="far fa-clock"></i>
                                        </span>
                                <span class="text clocks">
                                            <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span>
                                        </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="right-area">
                        <ul>
                            <li>
                                <select>
                                    <option>EN</option>
                                    <option>FR</option>
                                    <option>ES</option>
                                </select>
                            </li>
                            <li>
                                <a class="link" href="bet-slip.html">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="dolly" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-dolly fa-w-18 fa-fw fa-2x"><path fill="currentColor" d="M575.6 309.8l-5.1-15.2c-1.4-4.2-5.9-6.5-10.1-5.1L526 301.1 451.5 77.9c-2.7-8.1-8.4-14.7-16-18.5-7.7-3.8-16.3-4.4-24.4-1.7L176.3 136l-18-50.7C146.9 53.3 116.7 32 82.8 32H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h74.8c20.3 0 38.4 12.8 45.2 31.9l96.7 271.9c-23.3 17.2-37.2 46.5-31.4 78.9 5.6 31.3 30.4 57 61.5 63.5 51.7 10.7 97.2-28.4 97.2-78.2 0-13.1-3.4-25.2-9-36.1l227.5-76c4.2-1.4 6.5-5.9 5.1-10.1zM187 166.1l106.4-35.5 25 74.9c1.4 4.2 5.9 6.5 10.1 5.1l15.2-5.1c4.2-1.4 6.5-5.9 5.1-10.1l-25-74.9L421.2 88l74.5 223.3-174.4 58.1C307.6 358.7 290.7 352 272 352c-6.3 0-12.3.9-18.1 2.3L187 166.1zM272 480c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z" class=""></path></svg>
                                    Prediction Slip
                                </a>
                            </li>
                            <li>
                                <a class="link" href="#">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16 fa-fw fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z" class=""></path></svg>
                                    Hi, John Doe
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="navbar" class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/img/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 d-xl-none d-lg-none d-block">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="mainmenu">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="index.html">Home One</a>
                                            <a class="dropdown-item" href="index-2.html">Home Two</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="statics.html">Statics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="promotions.html">Promotions</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <a class="dropdown-item" href="blog.html">Blog Post</a>
                                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                            <a class="dropdown-item" href="result.html">Result</a>
                                            <a class="dropdown-item" href="latest-result.html">Latest Result</a>
                                            <a class="dropdown-item" href="standing.html">Standing</a>
                                            <a class="dropdown-item" href="schedule.html">Schedule</a>
                                            <a class="dropdown-item" href="bet-slip.html">Bet Slip</a>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                            <a class="dropdown-item" href="register.html">Register</a>
                                            <a class="dropdown-item" href="error.html">Error 404</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact US</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end -->

<!-- banner begin -->
<div class="banner-slider owl-carousel owl-theme">
    <div class="banner banner-2 slide-1">
        <div class="container">
            <div class="banner-content">
                <div class="row justify-content-xl-center justify-content-lg-center justify-content-md-center">
                    <div class="col-xl-10 col-lg-11 col-md-10 col-12 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="text-content">
                            <h1>Prediction on the great sports.</h1>
                            <h4>that Coral offers for Football today.</h4>
                            <p>We're football fanatics and inside our prediction hub you'll find all manner of game prediction, aids and insights on everything the game has to offer.</p>
                            <div class="banner-button">
                                <ul>
                                    <li>
                                        <a href="#" class="bet-btn bet-btn-base">Predict now</a>
                                    </li>
                                    <li>
                                        <a href="#" class="bet-btn bet-btn-border">explore more</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner banner-2 slide-2">
        <div class="container">
            <div class="banner-content">
                <div class="row justify-content-xl-center justify-content-lg-center justify-content-md-center">
                    <div class="col-xl-10 col-lg-11 col-md-10 col-12 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="text-content">
                            <h1>Prediction on the great sports.</h1>
                            <h4>that Coral offers for Football today.</h4>
                            <p>We're football fanatics and inside our prediction hub you'll find all manner of game prediction, aids and insights on everything the game has to offer.</p>
                            <div class="banner-button">
                                <ul>
                                    <li>
                                        <a href="#" class="bet-btn bet-btn-base">Predict now</a>
                                    </li>
                                    <li>
                                        <a href="#" class="bet-btn bet-btn-border">explore more</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner banner-2 slide-3">
        <div class="container">
            <div class="banner-content">
                <div class="row justify-content-xl-center justify-content-lg-center justify-content-md-center">
                    <div class="col-xl-10 col-lg-11 col-md-10 col-12 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="text-content">
                            <h1>Prediction on the great sports.</h1>
                            <h4>that Coral offers for Football today.</h4>
                            <p>We're football fanatics and inside our prediction hub you'll find all manner of game prediction, aids and insights on everything the game has to offer.</p>
                            <div class="banner-button">
                                <ul>
                                    <li>
                                        <a href="#" class="bet-btn bet-btn-base">Predict now</a>
                                    </li>
                                    <li>
                                        <a href="#" class="bet-btn bet-btn-border">explore more</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- about begin -->
<div class="about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-8 col-lg-8">
                <div class="part-img">
                    <img src="assets/img/about.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-center">
                <div>
                    <div class="part-text">
                        <h2>Introducing Our Words</h2>
                        <p>The bigger the sports event the more interest, excitement and media attention on the action. And the more betting markets we have available here at Peredion to turn your opinions into winning bets. And few events come any bigger than the World Cup and the Olympics.</p>
                    </div>
                    <a href="#" class="about-btn">Predict Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->

<!-- cta begin -->
<div class="cta">
    <div class="container">
        <h3>PerediOn shows real time odds for betting with the higher stakes you can get.</h3>
        <div class="cta-btn-group">
            <a href="#" class="bet-btn bet-btn-base">Predict Now</a>
            <a href="#" class="bet-btn bet-btn-border">Explore More</a>
        </div>
    </div>
</div>
<!-- cta end -->

<!-- feature begin -->
<div class="feature" id="feature_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="section-title">
                    <h2>PerediOn Features</h2>
                    <p>PerediOn shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="part-icon">
                        <img src="assets/img/svg/music-and-multimedia.svg" alt="">
                    </div>
                    <div class="part-text">
                        <h3 class="title">Live Prediction</h3>
                        <p>PerediOn has a quality in-play Prediction service and the live console has extensive coverage from sporting events and prediction markets.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="part-icon">
                        <img src="assets/img/svg/announcement.svg" alt="">
                    </div>
                    <div class="part-text">
                        <h3 class="title">Daily Promotions</h3>
                        <p>PerediOn offers a huge range of different promotions, every day. These include money-back offers when your horse is beaten by a nose.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="part-icon">
                        <img src="assets/img/svg/usability.svg" alt="">
                    </div>
                    <div class="part-text">
                        <h3 class="title">Clean Usability</h3>
                        <p>More than a single feature, usability is an aspect that affects the whole product. For us, that means an intuitive interface that is easy to use.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="part-icon">
                        <img src="assets/img/svg/browser.svg" alt="">
                    </div>
                    <div class="part-text">
                        <h3 class="title">Prediction browser</h3>
                        <p>PerediOn on an arbitrage or value predict is extremely easy. All the information you need is gathered on one single Prediction Browser using the software.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="part-icon">
                        <img src="assets/img/svg/exchange.svg" alt="">
                    </div>
                    <div class="part-text">
                        <h3 class="title">Currency Conversion</h3>
                        <p>Automatic currency conversion is built in. You can use different currencies on different bookmakers and we’ll do all the math for you.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="part-icon">
                        <img src="assets/img/svg/key-card.svg" alt="">
                    </div>
                    <div class="part-text">
                        <h3 class="title">High Security</h3>
                        <p>Our security measures are way above the norm in the software industry. First, starting the program requires a master password.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature end -->

<!-- betting begin -->
<div class="betting" id="in_play">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8">
                <div class="section-title">
                    <h2>Predict & Playing Now</h2>
                    <p>PerediOn shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p>
                </div>
            </div>
        </div>
        <div class="betting-table">
            <div class="row">
                <div class="col-xl-2 col-lg-2">
                    <div class="bett-menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-sports-tab" data-toggle="tab" href="#all-sports" role="tab" aria-controls="all-sports" aria-selected="true">
                                    <i class="flaticon-medal"></i>
                                    <span class="text">
                                                all sports
                                            </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="football-tab" data-toggle="tab" href="#football" role="tab" aria-controls="football" aria-selected="false">
                                    <i class="flaticon-football"></i>
                                    <span class="text">
                                                football
                                            </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tennis-tab" data-toggle="tab" href="#tennis" role="tab" aria-controls="tennis" aria-selected="false">
                                    <i class="flaticon-tennis-ball"></i>
                                    <span class="text">
                                                tennis
                                            </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="basketball-tab" data-toggle="tab" href="#basketball" role="tab" aria-controls="basketball" aria-selected="false">
                                    <i class="flaticon-basketball-ball-variant"></i>
                                    <span class="text">
                                                Basketball
                                            </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hockey-tab" data-toggle="tab" href="#hockey" role="tab" aria-controls="hockey" aria-selected="false">
                                    <i class="flaticon-ice-hockey"></i>
                                    <span class="text">
                                                Ice hockey
                                            </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="volleyball-tab" data-toggle="tab" href="#volleyball" role="tab" aria-controls="volleyball" aria-selected="false">
                                    <i class="flaticon-volleyball"></i>
                                    <span class="text">
                                                VOLLEYBALL
                                            </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="badminton-tab" data-toggle="tab" href="#badminton" role="tab" aria-controls="badminton" aria-selected="false">
                                    <i class="flaticon-badminton"></i>
                                    <span class="text">
                                                BADMINTON
                                            </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="baseball-tab" data-toggle="tab" href="#baseball" role="tab" aria-controls="baseball" aria-selected="false">
                                    <i class="flaticon-baseball"></i>
                                    <span class="text">
                                                BASEBALL
                                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10">
                    <div class="tab-content bet-tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all-sports" role="tabpanel" aria-labelledby="all-sports-tab">
                            <div class="sport-content-title">
                                <h3>All Sports
                                    <span class="sport-content-conter">[30]</span>
                                </h3>
                            </div>
                            <div class="sports-list">
                                <h4 class="title">England International League</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-football"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            arsenal
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            everton
                                                        </span>
                                                <span class="score-number">
                                                            4
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.00</span>
                                                <span class="result-for-final">
                                                            arsenal
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">5.75</span>
                                                <span class="result-for-final">
                                                            everton
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-football"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Aston Villa
                                                        </span>
                                                <span class="score-number">
                                                            4
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Norwich City
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.52</span>
                                                <span class="result-for-final">
                                                            Aston Villa
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.35</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.65</span>
                                                <span class="result-for-final">
                                                            Norwich City
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-football"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            West Ham United
                                                        </span>
                                                <span class="score-number">
                                                            1
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Bournemouth
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.50</span>
                                                <span class="result-for-final">
                                                            West Ham United
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.45</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.75</span>
                                                <span class="result-for-final">
                                                            Bournemouth
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sports-list">
                                <h4 class="title">France National tennis</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-tennis-ball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.25</span>
                                                <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.62</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.44</span>
                                                <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-tennis-ball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                <span class="score-number">
                                                            5
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.70</span>
                                                <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.05</span>
                                                <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-tennis-ball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.22</span>
                                                <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.00</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.45</span>
                                                <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sports-list">
                                <h4 class="title">League of europe</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-basketball-ball-variant"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.25</span>
                                                <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.62</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.44</span>
                                                <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-basketball-ball-variant"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                <span class="score-number">
                                                            5
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.70</span>
                                                <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.05</span>
                                                <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-basketball-ball-variant"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.22</span>
                                                <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.00</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.45</span>
                                                <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="football" role="tabpanel" aria-labelledby="football-tab">
                            <div class="sport-content-title">
                                <h3>Football
                                    <span class="sport-content-conter">[3]</span>
                                </h3>
                            </div>
                            <div class="sports-list">
                                <h4 class="title">England International League</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-football"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            arsenal
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            everton
                                                        </span>
                                                <span class="score-number">
                                                            4
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.00</span>
                                                <span class="result-for-final">
                                                            arsenal
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">5.75</span>
                                                <span class="result-for-final">
                                                            everton
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-football"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Aston Villa
                                                        </span>
                                                <span class="score-number">
                                                            4
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Norwich City
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.52</span>
                                                <span class="result-for-final">
                                                            Aston Villa
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.35</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.65</span>
                                                <span class="result-for-final">
                                                            Norwich City
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-football"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            West Ham United
                                                        </span>
                                                <span class="score-number">
                                                            1
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Bournemouth
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.50</span>
                                                <span class="result-for-final">
                                                            West Ham United
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.45</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.75</span>
                                                <span class="result-for-final">
                                                            Bournemouth
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tennis" role="tabpanel" aria-labelledby="tennis-tab">
                            <div class="sport-content-title">
                                <h3>tennis
                                    <span class="sport-content-conter">[3]</span>
                                </h3>
                            </div>
                            <div class="sports-list">
                                <h4 class="title">France National tennis</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-tennis-ball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.25</span>
                                                <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.62</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.44</span>
                                                <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-tennis-ball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                <span class="score-number">
                                                            5
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.70</span>
                                                <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.05</span>
                                                <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-tennis-ball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.22</span>
                                                <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.00</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.45</span>
                                                <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="basketball" role="tabpanel" aria-labelledby="basketball-tab">
                            <div class="sport-content-title">
                                <h3>basketball
                                    <span class="sport-content-conter">[3]</span>
                                </h3>
                            </div>
                            <div class="sports-list">
                                <h4 class="title">League of europe</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-basketball-ball-variant"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.25</span>
                                                <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.62</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.44</span>
                                                <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-basketball-ball-variant"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                <span class="score-number">
                                                            5
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.70</span>
                                                <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.05</span>
                                                <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-basketball-ball-variant"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.22</span>
                                                <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.00</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.45</span>
                                                <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hockey" role="tabpanel" aria-labelledby="hockey-tab">
                            <div class="sport-content-title">
                                <h3>ice hockey
                                    <span class="sport-content-conter">[3]</span>
                                </h3>
                            </div>

                            <div class="sports-list">
                                <h4 class="title">Hocky Tour'20</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-ice-hockey"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.25</span>
                                                <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.62</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.44</span>
                                                <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-ice-hockey"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                <span class="score-number">
                                                            5
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.70</span>
                                                <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.05</span>
                                                <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-ice-hockey"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.22</span>
                                                <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.00</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.45</span>
                                                <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="volleyball" role="tabpanel" aria-labelledby="volleyball-tab">
                            <div class="sport-content-title">
                                <h3>volleyball
                                    <span class="sport-content-conter">[3]</span>
                                </h3>
                            </div>
                            <div class="sports-list">
                                <h4 class="title">Hocky Tour'20</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-volleyball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.25</span>
                                                <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.62</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.44</span>
                                                <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-volleyball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                <span class="score-number">
                                                            5
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.70</span>
                                                <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.05</span>
                                                <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-volleyball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.22</span>
                                                <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.00</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.45</span>
                                                <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="badminton" role="tabpanel" aria-labelledby="badminton-tab">
                            <div class="sport-content-title">
                                <h3>badminton
                                    <span class="sport-content-conter">[3]</span>
                                </h3>
                            </div>

                            <div class="sports-list">
                                <h4 class="title">Hocky Tour'20</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-badminton"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.25</span>
                                                <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.62</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.44</span>
                                                <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-badminton"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                <span class="score-number">
                                                            5
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.70</span>
                                                <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.05</span>
                                                <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-badminton"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.22</span>
                                                <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.00</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.45</span>
                                                <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="baseball" role="tabpanel" aria-labelledby="baseball-tab">
                            <div class="sport-content-title">
                                <h3>baseball
                                    <span class="sport-content-conter">[3]</span>
                                </h3>
                            </div>
                            <div class="sports-list">
                                <h4 class="title">Hocky Tour'20</h4>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-baseball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                <span class="score-number">
                                                            6
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.25</span>
                                                <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.62</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.44</span>
                                                <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-baseball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                <span class="score-number">
                                                            5
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                <span class="score-number">
                                                            2
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">1.70</span>
                                                <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.30</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.05</span>
                                                <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                                <div class="single-sport-box">
                                    <div class="part-icon">
                                        <i class="flaticon-baseball"></i>
                                    </div>
                                    <div class="part-team">
                                        <ul>
                                            <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                <span class="score-number">
                                                            3
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="part-match">
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">3.22</span>
                                                <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">4.00</span>
                                                <span class="result-for-final">
                                                            draw
                                                        </span>
                                            </a>
                                        </div>
                                        <div class="single-place-to-bet">
                                            <a href="#">
                                                <span class="bet-price">2.45</span>
                                                <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="part-bnonus">
                                        <span class="bonus-number">+336</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- betting end -->

<!-- upcoming match begin -->
<div class="upcoming-match" id="upcoming_match">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="section-title">
                    <h2>Upcoming Match</h2>
                    <p>PerediOn shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="single-match">
                    <div class="part-head">
                        <h5 class="match-title">BBPL 2019 Semi Final</h5>
                        <span class="match-venue">Venue : Sher-e-Bangla National Stadium. Mirpur, Dhaka</span>
                    </div>
                    <div class="part-team">
                        <div class="single-team">
                            <div class="logo">
                                <img src="assets/img/team-1.png" alt="">
                            </div>
                            <span class="team-name">Khulna Tigers</span>
                        </div>
                        <div class="match-details">
                            <div class="match-time">
                                <span class="date">Fri 09 Oct 2019</span>
                                <span class="time">09:00 am</span>
                            </div>
                            <span class="versase">vs</span>
                            <div class="buttons">
                                <a href="#" class="buy-ticket bet-btn bet-btn-dark-light">buy ticket</a>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="logo">
                                <img src="assets/img/team-2.png" alt="">
                            </div>
                            <span class="team-name">Dhaka Platoon</span>
                        </div>
                    </div>
                    <span class="to-begin-time">
                                Starting on
                            </span>
                    <div class="part-timer timer" data-date="30 April 2020 9:56:00 GMT+01:00">
                        <div class="single-time">
                            <span class="number day">01</span>
                            <span class="title">Days</span>
                        </div>
                        <div class="single-time">
                            <span class="number hour">24</span>
                            <span class="title">Hours</span>
                        </div>
                        <div class="single-time">
                            <span class="number minute">48</span>
                            <span class="title">Minutes</span>
                        </div>
                        <div class="single-time">
                            <span class="number second">11</span>
                            <span class="title">Seconds</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="upcoming-match-list">
                    <div class="single-upcoming-match">
                        <div class="single-team">
                            <div class="part-logo">
                                <img src="assets/img/team-1.png" alt="">
                            </div>
                            <div class="part-text">
                                        <span class="team-name">
                                            Khulna tigers
                                        </span>
                            </div>
                        </div>
                        <span class="versase">vs</span>
                        <div class="single-team">
                            <div class="part-text">
                                        <span class="team-name">
                                            dhaka platoon
                                        </span>
                            </div>
                            <div class="part-logo">
                                <img src="assets/img/team-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-upcoming-match">
                        <div class="single-team">
                            <div class="part-logo">
                                <img src="assets/img/team-3.png" alt="">
                            </div>
                            <div class="part-text">
                                        <span class="team-name">
                                            Cumilla Viking
                                        </span>
                            </div>
                        </div>
                        <span class="versase">vs</span>
                        <div class="single-team">
                            <div class="part-text">
                                        <span class="team-name">
                                            Barishal Bulls
                                        </span>
                            </div>
                            <div class="part-logo">
                                <img src="assets/img/team-4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-upcoming-match">
                        <div class="single-team">
                            <div class="part-logo">
                                <img src="assets/img/team-5.png" alt="">
                            </div>
                            <div class="part-text">
                                        <span class="team-name">
                                            CG challenge
                                        </span>
                            </div>
                        </div>
                        <span class="versase">vs</span>
                        <div class="single-team">
                            <div class="part-text">
                                        <span class="team-name">
                                            r.shahi royals
                                        </span>
                            </div>
                            <div class="part-logo">
                                <img src="assets/img/team-6.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-upcoming-match">
                        <div class="single-team">
                            <div class="part-logo">
                                <img src="assets/img/team-7.png" alt="">
                            </div>
                            <div class="part-text">
                                        <span class="team-name">
                                            Khulna tigers
                                        </span>
                            </div>
                        </div>
                        <span class="versase">vs</span>
                        <div class="single-team">
                            <div class="part-text">
                                        <span class="team-name">
                                            dhaka platoon
                                        </span>
                            </div>
                            <div class="part-logo">
                                <img src="assets/img/team-8.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="vew-more-news bet-btn bet-btn-dark-light">
                <i class="fas fa-redo"></i> See More match
            </a>
        </div>
        <span class="text-special">
                    <b>Note:</b>  The timing of each match will depend on the weather conditions.
                </span>
    </div>
</div>
<!-- upcoming match end -->

<!-- statics begin -->
<div class="statics">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-counter">
                    <span class="number odometer" data-count="1854">0000</span>
                    <span class="title">Project Finished</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-counter">
                    <span class="number odometer" data-count="3254">0000</span>
                    <span class="title">Line Of Coding</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-counter">
                    <span class="number odometer" data-count="584">000</span>
                    <span class="title">Award Won</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-counter">
                    <span class="number odometer" data-count="1731">0000</span>
                    <span class="title">Satisfied Clients</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- statics end -->

<!-- testimonial begin -->
<div class="testimonial" id="testimonial">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title">
                    <h2>Feedback to PerediOn</h2>
                    <!-- <p>PerediOn shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p> -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="single-testimonial">
                        <div class="part-img">
                            <img src="assets/img/testi-user-1.jpg" alt="">
                        </div>
                        <div class="part-text">
                            <i class="icon-for-quot fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                            <span class="position">
                                        Player
                                    </span>
                            <span class="user-name">
                                        Illustino Calibia
                                    </span>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="part-img">
                            <img src="assets/img/testi-user-1.jpg" alt="">
                        </div>
                        <div class="part-text">
                            <i class="icon-for-quot fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                            <span class="position">
                                        Player
                                    </span>
                            <span class="user-name">
                                        Illustino Calibia
                                    </span>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="part-img">
                            <img src="assets/img/testi-user-1.jpg" alt="">
                        </div>
                        <div class="part-text">
                            <i class="icon-for-quot fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                            <span class="position">
                                        Player
                                    </span>
                            <span class="user-name">
                                        Illustino Calibia
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial end -->

<!-- download app begin -->
<div class="download-app">
    <div class="container">
        <img class="shape" src="assets/img/app-feature-bg.png" alt="">
        <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-center">
            <div class="col-xl-5 col-lg-5">
                <div class="part-img">
                    <img class="app" src="assets/img/app.png" alt="">
                    <img class="app" src="assets/img/app.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-10 d-xl-flex d-lg-flex d-block align-items-xl-baseline align-items-lg-center">
                <div>
                    <div class="part-text">
                        <h4>enjoy your favourites right now</h4>
                        <h3>download our app</h3>
                        <p>Predict you love anywhere, on any device with <span><img src="assets/img/small-logo.png" alt=""></span> stream app. included at no additional cost, exclusively for PerediOn customers. It comes with two variations. Dark & Light. You can get to download <span><img src="assets/img/small-logo.png" alt=""></span> on google play store an apple mobile store.</p>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="assets/img/apple.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/and.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="app-features">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="assets/img/svg/ram.svg" alt="">
                            </div>
                            <span class="title">
                                        lite weight
                                    </span>
                        </div>
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="assets/img/svg/memory-card.svg" alt="">
                            </div>
                            <span class="title">
                                        2MB size
                                    </span>
                        </div>
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="assets/img/svg/dark-and-light.svg" alt="">
                            </div>
                            <span class="title">
                                        light & dark
                                    </span>
                        </div>
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="assets/img/svg/easy-return.svg" alt="">
                            </div>
                            <span class="title">
                                        easy to use
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- download app end -->

<!-- sponsor begin -->
<div class="sponsor">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="single-sponsor">
                    <a href="#">
                        <img src="assets/img/sponsor-1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="single-sponsor">
                    <a href="#">
                        <img src="assets/img/sponsor-2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="single-sponsor">
                    <a href="#">
                        <img src="assets/img/sponsor-3.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="single-sponsor">
                    <a href="#">
                        <img src="assets/img/sponsor-6.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="single-sponsor">
                    <a href="#">
                        <img src="assets/img/sponsor-5.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="single-sponsor">
                    <a href="#">
                        <img src="assets/img/sponsor-4.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="single-sponsor">
                    <a href="#">
                        <img src="assets/img/sponsor-7.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="single-sponsor">
                    <a href="#">
                        <img src="assets/img/sponsor-8.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sponsor end -->

<!-- news letter begin -->
<div class="newsletter">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-xl-4 col-lg-4">
                <div class="part-img">
                    <img src="assets/img/newsletter-img.png" alt="">
                </div>
            </div>
            <div class="col-xl-8 col-lg-10">
                <div class="part-text">
                    <h4>PerediOn Newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident et repellendus deleniti dolor aperiam, magni est tenetur ullam omnis eius illo cum cupiditate, eligendi aspernatur praesentium fuga.</p>
                    <div class="part-form">
                        <form>
                            <input type="text" placeholder="Input Your Mail Here">
                            <button type="submit">
                                <img src="assets/img/svg/spaceship.svg" alt="">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- news letter end -->

<!-- blog begin -->
<div class="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="section-title">
                    <h2>Our Latest news</h2>
                    <p>PerediOn shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="part-img">
                        <img src="assets/img/blog-1.jpg" alt="">
                        <a href="#"><i class="far fa-eye"></i></a>
                        <div class="post-date">
                            <span class="date">16</span>
                            <span class="month">Dec</span>
                        </div>
                    </div>
                    <div class="part-text">
                        <a href="#" class="title">How could the Premier League resume?</a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis sint esse vel atque asperiores eligendi vero blanditiis, totam eos beatae hic harum commodi quisquam debitis ipsam obcaecati deserunt nihil? Sed.</p>
                        <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="part-img">
                        <img src="assets/img/blog-2.jpg" alt="">
                        <a href="#"><i class="far fa-eye"></i></a>
                        <div class="post-date">
                            <span class="date">26</span>
                            <span class="month">JAn</span>
                        </div>
                    </div>
                    <div class="part-text">
                        <a href="#" class="title">When coronavirus stops your league</a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis sint esse vel atque asperiores eligendi vero blanditiis, totam eos beatae hic harum commodi quisquam debitis ipsam obcaecati deserunt nihil? Sed.</p>
                        <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-sidebar">
                    <div class="popular-news">
                        <div class="single-post">
                            <div>
                                <div class="part-img">
                                    <img src="assets/img/popular-news-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="part-text">
                                <a href="#">How could the Premier League resume?</a>
                            </div>
                        </div>
                        <div class="single-post">
                            <div>
                                <div class="part-img">
                                    <img src="assets/img/popular-news-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="part-text">
                                <a href="#">How could the Premier League resume?</a>
                            </div>
                        </div>
                        <div class="single-post">
                            <div>
                                <div class="part-img">
                                    <img src="assets/img/popular-news-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="part-text">
                                <a href="#">How could the Premier League resume?</a>
                            </div>
                        </div>
                        <div class="single-post">
                            <div>
                                <div class="part-img">
                                    <img src="assets/img/popular-news-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="part-text">
                                <a href="#">How could the Premier League resume?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="vew-more-news bet-btn bet-btn-base">
                <i class="fas fa-redo"></i> See More News
            </a>
        </div>
    </div>
</div>
<!-- blog end -->

<!-- footer begin -->
<div class="footer" id="contact">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-5 col-md-10">
                <div class="about-widget">
                    <a class="logo" href="index.html">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                    <p>PerediOn offers you all the best online prediction from every corner of the planet with thousands of online prediction markets.</p>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="support">
                        <ul>
                            <li>
                                        <span class="icon">
                                            <img src="assets/img/svg/email.svg" alt="">
                                        </span>
                                <span class="text">
                                            <span class="title">Mail Us</span>
                                            <span class="descr">don't@reply.com</span>
                                        </span>
                            </li>
                            <li>
                                        <span class="icon">
                                            <img src="assets/img/svg/phone-call.svg" alt="">
                                        </span>
                                <span class="text">
                                            <span class="title">Get In Touch</span>
                                            <span class="descr">+88 015 00 00 00</span>
                                        </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3">
                <div class="useful-links">
                    <h3>Useful links</h3>
                    <ul>
                        <li>
                            <a href="#">IN-PLAY</a>
                        </li>
                        <li>
                            <a href="#">PROMOTIONS</a>
                        </li>
                        <li>
                            <a href="#">STATICS</a>
                        </li>
                        <li>
                            <a href="#">RESULTS</a>
                        </li>
                        <li>
                            <a href="#">Predict now</a>
                        </li>
                        <li>
                            <a href="#">GAME RESULTS</a>
                        </li>
                        <li>
                            <a href="#">STANDINGS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
                <div class="useful-links">
                    <h3>Connect With Us</h3>
                    <ul>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Blog Details</a>
                        </li>
                        <li>
                            <a href="#">Service</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                        <li>
                            <a href="#">TEAM OVERVIEW</a>
                        </li>
                        <li>
                            <a href="#">SCHEDULE</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3">
                <div class="useful-links">
                    <h3>All Sports</h3>
                    <ul>
                        <li>
                            <a href="#">FOOTBALL</a>
                        </li>
                        <li>
                            <a href="#">TENNIS</a>
                        </li>
                        <li>
                            <a href="#">BASKETBALL</a>
                        </li>
                        <li>
                            <a href="#">ICE HOCKEY</a>
                        </li>
                        <li>
                            <a href="#">VOLLEYBALL</a>
                        </li>
                        <li>
                            <a href="#">BADMINTON</a>
                        </li>
                        <li>
                            <a href="#">BASEBALL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="payment-method">
                            <h6 class="payment-method-title">
                                Payment methods are We accept
                            </h6>
                            <div class="all-method">
                                <div class="single-method">
                                    <img src="assets/img/brand-1.png" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="assets/img/brand-2.png" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="assets/img/brand-3.png" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="assets/img/brand-4.png" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="assets/img/brand-5.png" alt="">
                                </div>

                                <div class="single-method">
                                    <img src="assets/img/brand-5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->

<!-- notes begin -->
<div class="notes">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10">
                PerediOn is a sports prediction html template, published by autworks throgh envato marketplace. You can use this template on any kind of sports prediction in the world. as like football, baseball, soccer, cricket etc. all rights reserved by autworks © 2020.
            </div>
        </div>
    </div>
</div>
<!-- notes end -->

<!-- copyright footer begin -->
<div class="copyright-footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-md-6 col-lg-6 d-lg-flex d-lg-flex d-block align-items-center">
                <p class="copyright-text">
                    <a href="#">PerediOn</a> © 2020. PRIVACY POLICY
                </p>
            </div>
            <div class="text-right col-md-6 col-xl-4 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                <p class="copyright-text">
                    Powerd By <a href="https://themeforest.net/user/autworks/portfolio">Autworks ( Envato Author )</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- copyright footer end -->

<!-- jquery -->
<!-- <script src="assets/js/jquery.js"></script> -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!-- filterizr js -->
<script src="assets/js/jquery.filterizr.min.js"></script>
<!-- wow js-->
<script src="assets/js/wow.min.js"></script>
<!-- clock js -->
<script src="assets/js/clock.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/oddometer-active.js"></script>
<!-- main -->
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from iamubaidah.com/html/peredion/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 07:50:34 GMT -->
</html>

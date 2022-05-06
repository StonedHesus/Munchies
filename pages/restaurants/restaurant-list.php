<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS for the page. -->
    <link rel="stylesheet" href="./../../style/restaurants/restaurant-list.css" type="text/css">
</head>
<body>

<? //$queryResults = Database::query("") ?>

<header id="anchor_top">

    <nav>
        <div class="nav-container">
            <!--Might replace the h tag with an actual logo in the near future.-->


            <div class="nav-links">
                <div class="brand">
                    <a href="./index.html" class="brand__link"><span class="brand__link__text">Munchies</span></a>
                </div>
                <ul class="nav-links__list">
                    <li class="nav-links__list__item">
                        <a href="#anchor_our-mission"
                           class="nav-links__list__item__link hover-underline-animation">Our mission</a></li>
                    <li class="nav-links__list__item">
                        <a href="#anchor_about-us"
                           class="nav-links__list__item__link hover-underline-animation">About Us</a></li>
                    <li class="nav-links__list__item">
                        <a href="#anchor_contact" class="nav-links__list__item__link hover-underline-animation">
                            Contact</a></li>
                    <li role="separator" class="nav-links__list__item">|</li>
                    <li class="nav-links__list__item"><a href="./pages/login.html" class="nav-links__list__item__link nav-links__list__item__link__button"><span class="nav-links__list__item__link__button__text">Log in</span></a></li>
                    <li class="nav-links__list__item"><a href="./pages/signup.html" class="nav-links__list__item__link nav-links__list__item__link__button"><span class="nav-links__list__item__link__button__text">Sign Up</span></a></li>
                </ul>
            </div>

        </div>
    </nav>

</header>

<section class="prompt">
    <h1 class="prompt-header prompt-centre">Results for the search: </h1>
    <p class="prompt-centre searched-value">Yadadada</p>
</section>

<section class="results">

    <div class="container">
        <div class="wrapper">
            <h2>Restaurant title</h2>
            <img  />
            <h3>Description</h3>
            <p>Indian restaurant located at the following address.</p>
        </div>
    </div>
</section>

<!--Footer of the page starts here-->
<footer>

    <div class="back-top">
        <a href="#anchor_top" data-smooth-scroll><i class="fa fa-circle-arrow-up"></i></a>
    </div>
    <br/>
    <div class="social-media">
        <div class="social-media-container">
            <h6 class="social-media__prompt visible-xs">follow us!</h6>
            <ul class="social-media__list">
                <li class="social-media__list__item">
                    <a href="#" class="social-media__list__link"><i class="fa-brands fa-instagram"></i></a>
                </li>

                <li class="social-media__list__item">
                    <a href="#" class="social-media__list__link"><i class="fa-brands fa-facebook"></i></a>
                </li>

                <li class="social-media__list__item">
                    <a href="#" class="social-media__list__link"><i class="fa-brands fa-twitter"></i></a>
                </li>

                <li class="social-media__list__item">
                    <a href="#" class="social-media__list__link"><i class="fa-brands fa-linkedin"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer-container">
        <ul class="footer__list">
            <li class="footer__list__item">
                <a href="#" class="footer__list__item__link">Contact</a>
            </li>
            <li class="footer__list__item">
                <a href="#" class="footer__list__item__link">FAQs</a>
            </li>
            <li class="footer__list__item">
                <a href="#" class="footer__list__item__link">Privacy</a>
            </li>
            <li class="footer__list__item">
                <a href="#" class="footer__list__item__link">Jobs</a>
            </li>
        </ul>

        <p class="footer__copyright">
            &copy; 2022 Andrei-Paul Ionescu.
            <br class="visible-xs">
            All rights reserved.
        </p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
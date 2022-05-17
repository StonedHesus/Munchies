<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Munchies</title>

    <link rel="stylesheet" href="./style/index/index.css" type="text/css">
    <link rel="stylesheet" href="./style/index/responsive.css" type="text/css">
    <link rel="stylesheet" href="./style/index/animations.css" type="text/css">

    <script src="https://kit.fontawesome.com/3ba5977250.js" crossorigin="anonymous"></script>
</head>
<body>
    <?
    session_start();
    if(isset($_SESSION['loggedin']) == false) $_SESSION['loggedin'] = false;
    ?>

    <header id="anchor_top">

            <nav>
                <div class="nav-container">
                <!--Might replace the h tag with an actual logo in the near future.-->


                    <div class="nav-links">
                        <div class="brand">
                            <a href="index.php" class="brand__link"><span class="brand__link__text">Munchies</span></a>
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
                            <?
                            if($_SESSION['loggedin'] == false){

                                echo '<li class="nav-links__list__item"><a href="./pages/login.html" class="nav-links__list__item__link nav-links__list__item__link__button"><span class="nav-links__list__item__link__button__text">Log in</span></a></li>';
                                echo '<li class="nav-links__list__item"><a href="./pages/signup.html" class="nav-links__list__item__link nav-links__list__item__link__button"><span class="nav-links__list__item__link__button__text">Sign Up</span></a></li>';

                            } else{

                                echo '<li class="nav-links__list__item"><span>Welcome </span><a href="./pages/user-profile.php" class=""><span class="">check your profile here.</span></a></li>';
                                echo '<li class="nav-links__list__item"><span><a href="./php/logout.php">Log out</a></span></li>';
                            }

                                ?>
                        </ul>
                    </div>

                </div>
            </nav>


        <div class="greeting-message-and-search-box">

            <div class="form-wrapper">
                <form method="get" action="./php/search.php">
                    <fieldset>
                        <legend>
                           Welcome to Munchies! <br>
                            Tell us what you are looking for?
                        </legend>


                    <div class="inner-form">

                        <div class="input-field">
                            <div class="choices" data-type="text" aria-haspopup="true" aria-expanded="false" dir="ltr" role="">
                                <div class="choices__inner">
                                    <input class="form-control choices__input is-hidden" id="choices-text-preset-values"
                                           type="text" placeholder="Type to search..."
                                           tabindex="-1" style="display:none;" aria-hidden="true"
                                           data-choice="active" value="" name="query[]">
                                    <div class="choices__list choices__list--multiple"></div>
                                    <input type="text" class="choices__input choices__input--cloned" autocomplete="off"
                                           autocapitalize="off" spellcheck="false" role="textbox"
                                           aria-autocomplete="list"
                                           placeholder="Type to search..." style="width: 109px;" name="query">

                                </div>
                                <div class="choices__list choices__list--dropdown" aria-expanded="false" role="">
                                    <div class="choices__item choices__item--choice">
                                    Press Enter to add <b></b>
                                    </div>
                                </div>
                            </div>

                            <button class="btn-search" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                </svg>
                            </button>
                        </div>

                    </div>

                    <div class="suggestion-wrap">
                        <span>Paris</span>
                        <span>Lyon</span>
                        <span>Strasbourg</span>
                        <span>Nantes</span>
                        <span>Toulouse</span>
                    </div>

                        </fieldset>
                    </form>

            </div>
        </div>
    </header>

    <main>

        <!--Our mission section commences here-->
        <section class="our-mission" id="anchor_our-mission">

            <div class="section-header">
                <h1>Our mission</h1>
                <h3>Tantalising your senses and fulfilling all your culinary fantasies!</h3>
            </div>

            <div class="our-mission-cards">
                <div class="our-mission-cards-wrapper">

                    <div class="our-mission-card">
                        <img src="https://img.icons8.com/external-icongeek26-flat-icongeek26/64/000000/external-burger-food-and-delivery-icongeek26-flat-icongeek26.png" class="our-mission-card-image" alt="A representative image for this card.">
                        <div class="our-mission-card-header">We are striving to facilitate business owners in need!</div>
                        <div class="our-mission-card__content">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </div>
                    </div>

                    <div class="our-mission-card">
                        <img src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-cutlery-kindergarten-icongeek26-linear-colour-icongeek26.png" class="our-mission-card-image" alt="A representative image for this card.">
                        <div class="our-mission-card-header">We are striving to facilitate business owners in need!</div>
                        <div class="our-mission-card__content">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </div>
                    </div>

                    <div class="our-mission-card">
                        <img src="https://img.icons8.com/external-febrian-hidayat-outline-color-febrian-hidayat/64/000000/external-apron-restaurant-febrian-hidayat-outline-color-febrian-hidayat.png" class="our-mission-card-image" alt="A representative image for this card.">
                        <div class="our-mission-card-header">We are striving to facilitate business owners in need!</div>
                        <div class="our-mission-card__content">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </div>
                    </div>

                </div>
            </div>


        </section>
        <!--Ends here.-->

        <!--About us section starts here.-->
        <section class="about-us" id="anchor_about-us">

            <div id="section-prompt">
                <h1>Meet the people behind Munchies!</h1>
            </div>

            <div class="team-leader">
                <div class="team-container">
                    <div class="team-wrapper">

                        <div class="team-member-photo">
                            <img src="./metadata/team/photographs%20/Andrei-Paul_Ionescu.png"
                                 alt="Image of Andrei-Paul Ionescu" >
                        </div>

                        <div class="team-member-details">
                            <h3 class="team-member-name">Andrei-Paul Ionescu</h3>
                            <p class="team-member-role">Creator and developer of Munchies' technological framework</p>
                            <p class="team-member-description">A descriptive text is bound to go here.</p>

                            <div class="team-member-contact">

                                <ul class="team-member-contact__list">
                                    <li class="team-member-contact__list__element">
                                        <a class="team-member-contact__list__element__link"
                                           href="https://www.linkedin.com/in/andrei-paul-ionescu-545a3b200/">
                                            <i class="fa-brands fa-linkedin"></i></a>
                                    </li>

                                    <li class="team-member-contact__list__element">
                                        <a class="team-member-contact__list__element__link"
                                           href="https://stonedhesus.github.io/">
                                            <i class="fa-solid fa-blog"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <div id="rest-of-the-team">


                <div class="team-container team-container-chained-first">
                    <div class="team-member">
                        <div class="team-wrapper">


                            <div class="team-member-photo">
                                <img alt="Image of Charley the imaginary coding ferret"
                                     src="./metadata/team/photographs%20/Charley.jpeg" class="team-member-image">
                            </div>


                            <div class="team-member-details">
                                <h3 class="team-member-name">Charley the coding ferret.</h3>
                                <p class="team-member-role">Support animal and child murderer.</p>

                                <div class="team-member-contact">

                                    <ul class="team-member-contact__list">
                                        <li class="team-member-contact__list__element">
                                            <a class="team-member-contact__list__element__link"><i class="fa-brands fa-linkedin"></i></a>
                                        </li>

                                        <li class="team-member-contact__list__element">
                                            <a class="team-member-contact__list__element__link"><i class="fa-solid fa-blog"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="team-container team-container-chained-last">
                    <div class="team-member">
                        <div class="team-wrapper">


                            <div class="team-member-photo">
                                <img alt="Image of Lobotomy Craig the rapist and spare time psychiatrist."
                                     src="./metadata/team/photographs%20/Lobotomy.gif" class="team-member-image">
                            </div>


                            <div class="team-member-details">
                                <h3 class="team-member-name">Lobotomy Craig.</h3>
                                <p class="team-member-role">Less mental pain more spiritual gain.</p>

                                <div class="team-member-contact">

                                    <ul class="team-member-contact__list">
                                        <li class="team-member-contact__list__element">
                                            <a class="team-member-contact__list__element__link"><i class="fa-brands fa-linkedin"></i></a>
                                        </li>

                                        <li class="team-member-contact__list__element">
                                            <a class="team-member-contact__list__element__link"><i class="fa-solid fa-blog"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </section>
        <!--Ends here.-->

        <!--Contact section starts here.-->
        <section class="contact" id="anchor_contact">

            <h2 class="contact-section__header">Contact</h2>

            <div class="contact-container">

                <div class="contact-details-wrapper">
                    <div id="contact-details">
                        <ul>
                            <li>Address: xxxx</li>
                            <li>Email: <a href="mailto:questions@munchies.eu">questions@munchies.eu</a></li>
                            <li>Phone number: xxx-xxx-xxx</li>
                        </ul>
                    </div>
                </div>

                <div class="map-wrapper">
                    <div id="map">
                    </div>
                </div>

            </div>


        </section>
        <!--Ends here.-->
    </main>

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
    <!--Ends here.-->

    <script src="./java-script/dynamic-background.js"></script>
    <script src="./java-script/map.js"></script>
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBuHyAErsxLbN_TOuyR_p1CZR0O5OL6Nw&callback=initMap&libraries=&v=weekly"
            async
    ></script>

    <script src="java-script/choices.js"></script>
    <script>
        var textPresetVal = new Choices('#choices-text-preset-values',
            {
                removeItemButton: true,
            });

    </script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>

        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
</body>
</html>
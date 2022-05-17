<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Title</title>

    <link href="./../style/index/index.css" rel="stylesheet" type="text/css">
    <link href="./../style/user/user-page.css" rel="stylesheet" type="text/css">
</head>
<body>

<?session_start();?>

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
                    <li class="nav-links__list__item"><span><a href="./../php/logout.php">Log out</a></span></li>
                </ul>
            </div>

        </div>
    </nav>
</header>

<div class="user-information">

    <div class="user-profile-description">

        <?
            $firstName = $_SESSION['username'];
            echo "<p>Welcome back $firstName!</p>"
        ?>

        <div class="options">
            <h3>Based on your accounts rights you can perform the following actions:</h3>
            <ul class="actions">
                <li><a href="./../php/reset-password.php">Reset password.</a></li>
            </ul>
        </div>
    </div>

    <div class="user-roles">

    </div>
</div>

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

</body>
</html>
<?php
include "header.php";
?>
    <!--//header-->
    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container pt-5 pb-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 pt-md-0 pt-4">
                    <h3 class="mb-sm-4 mb-3 title">Eat Fresh <br>Eat Healthy</h3>
                    <p> Making delicious meal doesn't need to be complicated. Here are 10 of my go-to simple meal recipes that can help you get a healthy meal</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a class="btn button-style" href="menu.php">View Our Recipes</a>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <img class="img-fluid" src="assets/images/bannerimg.png" alt=" ">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    
    <!-- about section -->
    <div class="w3l-content-photo-5">
        <div class="content pb-5 pt-md-5 pt-4">
            <div class="container py-lg-4 py-md-3">
                <div class="row">
                    <div class="col-lg-6 content-photo">
                        <a href="#image"><img src="assets/images/about.png" class="img-responsive"
                                alt="content-photo"></a>
                    </div>
                    <div class="col-lg-6 content-left mb-md-0 mb-3">
                        <h3>Welcome To Our <span>Cookguide</span></h3>
                        <p>Cookguide is an agency that provide delicious local Nigerian recipes for any king of local delecacy. we also provide step by step guide on how you can prepare these delicacy.</p>
                        <p>The Cooking Guide is unique to different tribe.</p>
                        <a class="btn button-style" href="about.php">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //about section -->
    <!-- team with grids section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 pt-md-4 pt-1 pb-5">
            <div class="container pb-md-4 pb-3">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3 class="title-main-2 text-center p-lg-4">Hello. we don't just give you random Recipes. We give the
                            best !</h3>
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-sm-5 mt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="position-relative">
                                    <img src="assets/recipes/Jollof-Rice-Recipe1.jpg" height="320px" width="320px" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a href="about.php">Jellof Rice</a></h4>
                                        <p>Nigerian delicacy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <div class="position-relative">
                                    <img src="assets/recipes/Efo-riro.jpg.webp" class="img-responsive" height="320px" width="320px" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a href="about.php">Efo Riro</a></h4>
                                        <p>Nigerian delicacy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- //team with grids section -->
    <!-- video section -->
    <?php
    include "video.php";
    ?>
    <!-- //video section -->
    
    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-vv-action py-5">
            <div class="container py-md-4 py-3">
                <div class="grid">
                    <div class="float-lt">
                        <h3 class="title-big">Contact us now!</h3>
                        <p>For Online queries, please call us today</p>
                    </div>
                    <div class="float-rt text-right">
                        <ul class="buttons">
                            <li class="phone"><span class="fa fa-volume-control-phone mr-1" aria-hidden="true"></span>
                                <a class="call-style-w3" href="tel:+1(23) 456 789 0000">+(234) 816 697 85</a>
                            </li>
                            <li class="green">Or</li>
                            <li><a href="contact.php" class="btn button-style">Get in touch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->
    <!-- 3 grids -->
    <section class="w3l-features-4">
        <div class="features4-block text-center py-5">
            <div class="container py-md-5 py-3">
                <div class="row features4-grids">
                    <div class="col-lg-4 col-md-6">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-motorcycle" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.php">Fast Delivery</a></h5>
                            <p>Have problem getting the ingredients? we got you covered. you are just one call away</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-shopping-basket" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.php">Fresh Ingredients</a></h5>
                            <p>We give fresh and higene ingredients help you prepare that health meal of your chioce.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.php">Online Suport 24/7</a></h5>
                            <p>Our online agent are available 24/7 to pick up your orders and help you with any other kind of support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3 grids -->
    <!-- promocode section -->
    <?php
    include "promotion.php";
    ?>
    <!-- //promocode section -->
    <!-- footer -->

    <?php
    include "footer.php";
    ?>
    <!-- //footer -->

    
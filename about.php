 <!--header-->
<?php
include "header.php";
?>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>About Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- about2 section -->
    <main class="page">
      <section class="about-page">
        <article>
          <h2>Welcome to our Recipe book</h2>
          <br/>
          <p>
          Cookguide is an agency that provide delicious local Nigerian food recipes for any king of local delecacy. we also provide step by step guide on how you can prepare these delicacy. The Cooking Guide is unique to different tribe
          </p><br/>
          <a href="contact.php" class="btn"> contact </a>
        </article>
        <!-- needs fixes -->
        <img
          src="./assets/recipes/about.jpeg"
          alt="Person Pouring Salt in Bowl"
          class="img about-img"
        />
      </section>
      <section class="featured-recipes">
        
        <div class="recipes-list">
          <!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/Ewa-Agoyin.jpg.webp"
              class="img recipe-img"
              alt=""
            />
            <h5>Ewa Agoyin</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe --><!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/abacha.jpg.webp"
              class="img recipe-img"
              alt=""
            />
            <h5>Abacha and Ugba</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/Amala-and-Ewedu.jpg.webp"
              class="img recipe-img"
              alt=""
            />
            <h5>Amala and Ewedu</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
        </div>
      </section>
    </main>
    <!-- //about2 section -->
    
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
    
    <!-- big video about -->
    <?php
include "video.php";
?>
    <!-- big video about -->
   
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

    
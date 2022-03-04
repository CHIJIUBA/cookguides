 <!--header-->
 <?php
include "header.php";
?>
<!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Wiki Suggest</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Wiki Suggest</li>
                </ul>
            </div>
        </section>
    </div>
    

<section class="w3l-contact-info-main" id="wiki">
        <div class="contact-sec py-5">
            <div class="container py-md-4 py-3">
                <div class="contact-w3pvt-form">
                    <h3 class="title-big mb-5"></h3>
                    <form method="post" class="w3layouts-contact-fm" action="">
                        <div class="row main-cont-sec">
                            <div class="col-md-6 left-cont-contact">
                                <div class="form-group">
                                    <label for="w3lName">FULLNAME</label>
                                    <input class="form-control" type="text" name="fname" id="" placeholder="Enter Fullname"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="w3lName">NAME OF FOOD</label>
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter the Name of the food"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="w3lSender">LIST OF INGREDIENTS</label>
                                    <input class="form-control" type="text" name="ingr1" id="" placeholder="Enter ingredient 1" required="">
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter ingredient 2" required="">
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter ingredient 3" required="">
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter ingredient 4" required="">
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter ingredient 5" required="">
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter ingredient 6" required="">
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter ingredient 7" required="">
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter ingredient 8" required="">
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter ingredient 9" required="">
                                </div>
                                <div class="form-group">
                                    <label for="w3lName">TOOLS USED</label>
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter tools used" required="">
                                </div>
                            </div>
                            <div class="col-md-6 right-cont-contact mt-md-0 mt-1">
                                <div class="form-group">
                                    <label for="w3lSubject">ABOUT FOOD</label>
                                    <textarea class="form-control" name="" id="" placeholder="Tell us about the delicacy"
                                        required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="w3lSubject">PREPARATION</label>
                                    <textarea class="form-control" name="" id="" placeholder="Tell us how ro prepare the delicacy"
                                        required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="w3lName">PREPARATION TIME</label>
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter in minutes"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="w3lName">SERVING</label>
                                    <input class="form-control" type="text" name="" id="" placeholder="Enter Number of people to serve based on the quantity"
                                        required="">
                                </div>

                            </div>
                        </div>
                        <div class="form-group-2 mt-4">
                            <button type="submit" class="btn button-style d-flex ml-auto">Send Now</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- //inner banner -->
    <main class="page">
    <section class="about-page">
        <article>
          <h2>Wiki Suggest</h2>
          <br/>
          <p>
          Add to our Knoledge base. Tell us about that beautiful delicacy.
          </p><br/>
         
        </article>
        <!-- needs fixes -->
        <img
          src="./assets/recipes/wiki.webp"
          alt="Person Pouring Salt in Bowl"
          class="img about-img"
        />
      </section>
</main>
<!-- video section -->
<?php
    include "video.php";
    ?>
    <!-- //video section -->
 <!--footer-->
 <?php
include "footer.php";
?>



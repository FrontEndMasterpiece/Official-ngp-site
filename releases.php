<?php  
        $title = '| NGP - Releases |' ;
        require_once 'includes/header.php';


?>
   <title> <?php echo $title ?> </title>

  

<div class="navigation">
                    <input type="checkbox" class="navigation_checkbox" id="navi_toggle">
                    <label for="navi_toggle" class="navigation_button">
                    <span class="navigation_icon">&nbsp;</span>
                    </label>
                
                <div class="navigation_background">&nbsp;</div>

                <nav class="navigation_nav">
                        <ul class="navigation_list">
                        <li class="navigation_item"><a href="artists.php" class="navigation_link">Artists</a></li>
                        <li class="navigation_item"><a href="releases.php" class="navigation_link">Releases</a></li>
                        <li class="navigation_item"><a href="store.php" class="navigation_link">Store</a></li>
                        <li class="navigation_item"><a href="pictures.php" class="navigation_link">Pictures</a></li>
                        <li class="navigation_item"><a href="videos.php" class="navigation_link">Videos</a></li>
                        <li class="navigation_item"><a href="newsletter.php" class="navigation_link">Newsletter</a></li>
                        <li class="navigation_item"><a href="events.php" class="navigation_link">Events</a></li>
                        <li class="navigation_item"><a href="#" class="navigation_link">Book Now</a></li>

                        </ul>
                </nav>

                </div>


         <header class="headers"> 
            <div class="headers__logo-box">
                <img src="img/translucentNGPlogo.png" alt="NGP_logo" class="headers__logo">
            </div>

            <div class="automatic-slideshow" style="max-width:300px">
                <img src="img/NGP-Death-Row-Vibe-Remake.jpg" alt="NGP-Vibe" class="mySlides" style="width: 485px">
                <img src="img/NGP-Last-Supper.jpg" alt="NGP-Last-Supper" class="mySlides" style="width: 485px">
                <img src="img/NGP-Me.jpg" alt="NGP-Last-Supper" class="mySlides" style="width: 485px">

            </div>

        </header>

        <main>
        <section>
        <div class="test-row">
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
         </div>

         <div class="test-row">
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
          </div>

          <div class="test-row">
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
         </div>

         <div class="test-row">
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
         </div>

         <div class="test-row">
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3 
                </div>
         </div>

        </section>

        
        <section class="section-newsletter">
                <div class="test-row">
                   <div class="newsletter">
                        <div class="newsletter_form">
                        <form action="#" class="form">
                        <div class="u-center-text u-margin-bottom-medium">
                        <h2 class="heading-secondary">
                   Newsletter
                         </h2>
                        </div>
                            <div class="form_group">
                                <input type="text" class="form_input" placeholder="Full Name" id="name" required>
                                <label for="name" class="form_label">Full Name</label>
                            </div>
                            
                            <div class="form_group">
                                <input type="email" class="form_input" placeholder="Email" id="email" required>
                                <label for="email" class="form_label">Email Address</label>
                            </div>

                                <div class="form_group u-margin-bottom-medium">
                                    <div class="form_radio-group">
                                        <input type="radio" class="form_radio-input" id="weekly" name="news">
                                        <label for="weekly" class="form_radio-label">
                                            <span class="form_radio-button"></span>
                                            Weekly 
                                        </label>
                                            
                                    </div>
                                </div>

                                <div class="form_group">
                                    <div class="form_radio-group">
                                        <input type="radio" class="form_radio-input" id="monthly" name="news">
                                        <label for="monthly" class="form_radio-label">
                                            <span class="form_radio-button"></span>
                                            Monthly
                                        </label>                                         
                                    </div>
                                
                                </div>
                                <div class="form_group">
                                    <button class="btn btn--success">Next Step &rarr;</button>
                                    <span class="heading-tertiary u-margin-bottom-small">Subscribe</span>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>









<script src="releases.js" charset="utf-8"></script>







<?php   require_once 'includes/footer.php'; ?>

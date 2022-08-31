<?php  
        $title = '| NGP - Videos |' ;
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

                <section class="section-store">

<div class="bg-video">
        


    <video  src="img/left-to-right-smoke.mp4" class="bg-video_content" autoplay muted loop>
    <source src="img/left-to-right-smoke.mp4" type="video/mp4">
        <source src="img/left-to-right-smoke.webm" type="video/webm">         
      Your browser is not supported!
    </video>
</div>


                </section>





<?php   require_once 'includes/footer.php'; ?>
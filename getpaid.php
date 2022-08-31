<?php  
        $title = '| NGP - Industry Careers |' ;
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
                        <li class="navigation_item"><a href="index.php" class="navigation_link">Home</a></li>

                        </ul>
                </nav>
                </div>


        <header class="headers"> 
                    <div class="headers__logo-box">
                        <img src="img/translucentNGPlogo.png" alt="NGP_logo" class="headers__logo">
                    </div>

                    <div class="headers__text-box">
                    <h1 class="heading-primary">
                        <span class="heading-primary--sub">The World is yours</span> <br> 
                        <span class="heading-primary--main">Choose your next industry career</span>
                    </h1>

                        <a type="button" href="#" id="dj_button" class="btn btn--success">Disc Jockey</a>
                        <a type="button" href="#" id="songwriter_button" class="btn btn--success">SongWriter</a>
                        <a type="button" href="#" id="music_manager_button" class="btn btn--success">Music Manager</a>
                        <a type="button" href="#" class="btn btn--success">Composer</a>
                        <a type="button" href="#" class="btn btn--success">A & R</a>
                    

                    <br> <br>
                        <a type="button" href="#" class="btn btn--success">Producer</a>
                        <a type="button" href="#" class="btn btn--success">Music Teacher</a>
                        <a type="button" href="#" class="btn btn--success">Roadie</a>
                        <a type="button" href="#" class="btn btn--success">Audio Engineer</a>
                        <a type="button" href="#" class="btn btn--success">Security</a>
                        <a type="button" href="#" class="btn btn--success">Agent</a>
                <br> <br>
                        <a type="button" href="#" class="btn btn--success">Street Team</a>
                    
                    
                    </div>

        </header>

<main>
        <section class="section-location">

                    <div class="u-center-text u-margin-bottom-big">
                            <h2 class="heading-secondary-page2">
                                    Choose your choice state
                            </h2>
                    </div>

                    <img src="NGP-usa-map.jpg" alt="Map of USA" usemap="#choices" style="width: 776px; height: 532px; margin-right:auto;
                    margin-left: auto;"/>
                    <map name="choices">
                    <area shape="rect" coords="363,313,423,354" href="https://www.ca.gov/Government/" alt="Dallas">
                    <area shape="rect" coords="484,168,527,200"  href="https://chicago.com/" alt="Chicago">
                    <area shape="rect" coords="466,271,511,307" href="https://www.memphis.com/" alt="Memphis">
                    <area shape="rect" coords="205,203,557,318" href="https://travel.state.gov/content/travel/en/passports/how-apply.html" alt="USA">

                    <area shape="circle" coords="108,329,40" href="https://www.discoverlosangeles.com/" alt="Los Angeles">

                    </map>
                    <p>For more just visit www.getmoe.com</p>
        

        </section>
</main>
            





<script src="index.js" charset="utf-8"></script>












<?php   require_once 'includes/footer.php'; ?>
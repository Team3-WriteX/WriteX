<!DOCTYPE html>
<html lang="en-US" dir="ltr"></html>
<?php
require_once("menu.php");
?>

      <section class="home-section home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
            <li class="bg-dark-30 restaurant-page-header bg-dark" style="background-image:url(&quot;assets/images/restaurant/slider1.jpg&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1"> Hello & welcome</div>
                  <div class="font-alt mb-40 titan-title-size-4">Professional & Academic Writing Made Easy!</div><a class="section-scroll btn btn-border-w btn-round" href="#quote">Request For a Quote</a>
                </div>
              </div>
            </li>
           
            <li class="bg-dark-30 restaurant-page-header bg-dark" style="background-image:url(&quot;assets/images/restaurant/slider3.jpg&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1"> Take a look at</div>
                  <div class="font-alt mb-40 titan-title-size-3">our services</div><a class="section-scroll btn btn-border-w btn-round" href="#services">Learn More</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <div class="main">
        <section class="module" id="services">
          <div class="container">
            <div class="row ">
              <div class="col-sm-2 col-sm-offset-4">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif" style= "text-align:center">Best Editing and Proofreading Services at Your Fingertips</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt">Our Services</h2>
              </div>
            </div>
            <div class="row d-flex justify-content-center text-center" >
              <div class="col-md-6 col-lg-6">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-documents"></span></div>
                  <h3 class="features-title font-alt">Academic Writing</h3> We help your work reach its potential. In addition, our experts can help you free up time and energy by formatting your citations and references according to the style guide of your choice as well as proof read your work.
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-edit"></span></div>
                  <h3 class="features-title font-alt">Professional Writing</h3>We provide affordable resume and cover letter editors with the competitive advantage it needs to go straight to the top of the interview list. Our expert editors will ensure that your strengths and most relevant work experiences are highlighted.
                </div>
              </div>
            
              
            </div>
          </div>
        </section>
        <hr class="divider-w">
        
        <section class="module module-video bg-dark-30" data-background="assets/images/restaurant/coffee_bg.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt mb-0">The Best Writing Center. Enjoy Our Professional Services</h2>
              </div>
            </div>
          </div>
          <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=1ex_bNIFR1A&t=225s', containment:'.module-video', startAt:60, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        </section>
        
        <section class="module pt-0 pb-0" id="quote">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-left">Get an Instant Quote and Place Your Order</h2>
                </div>
              </div>
            
              <form class="quote-form" id="quoteForm" action="php/reservation.php" method="post">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="icon-edit"></i></div>
                    <select class="form-control input-lg" id="service_type" name="service_type" type="text" required="required">
                      <option value="service" disabled="" selected="">Select Writing Service</option>
                      <option value="academic">Academic</option>
                      <option value="professional">Professional</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><i class="icon-upload"></i></div>
                    <input class="form-control input-lg" id="doc-upload" type="file" name="doc-upload"  placeholder="Upload your Document" required="required"/>
                  </div>
                </div>
                
                <div class="form-group">
                  <button class="btn btn-g btn-round btn-block btn-lg mt-20" id="getquote" type="submit"><i class="fa fa-paper-plane-o"></i> Get a Quote</button>
                </div>
                <div id="reservationFormResponse"></div>
              </form>
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image restaurant-image-overlay" data-background="assets/images/restaurant/reservation.jpg"></div>
          </div>
        </section>
       
        <?php
        require_once("footer.php"); 
        ?>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
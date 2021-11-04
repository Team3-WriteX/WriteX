<!DOCTYPE html>
<html lang="en-US" dir="ltr"></html>
<?php include('menu.php')?>

<div class="main">
        <section class="module bg-dark-60 contact-page-header bg-dark" data-background="assets/images/contact_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Order Request</h2>
                <div class="module-subtitle font-serif"> Trust us to Render Quality work.</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="font-alt">Make Your Order</h4><br/>
                <form id="orderForm" role="form" method="post" action="#">
                  <div class="form-group">
                    <label  for="name">Please Enter a title for your order</label>
                    <input class="form-control" type="text" id="name" name="name" required="required" data-validation-required-message="Please enter the title of your order."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                  <div class="input-group">
                  <label  for="bibliography">Do you want want us to edit or proofread your bibliography/references</label>
                    <select class="form-control input-lg" id="bibliography" name="bibliography" type="text" required="required">
                      <option value="bibliography" disabled="" selected="">Select:</option>
                      <option value="yes and I will tell you my style guide">Yes and I will tell you my style guide</option>
                      <option value="Not Applicable">Not Applicable</option>
                    </select>
                  </div>
                </div>
                <div class="input-group">
                  <label  for="style"> Select any specific style guide of choice </label>
                    <select class="form-control input-lg" id="style" name="style" type="text" required="required">
                      <option value="style" disabled="" selected="">Select:</option>
                      <option value="APA">APA</option>
                      <option value="IEEE">IEEE</option>
                      <option value="MLA">MLA</option>

                    </select>
                  </div>
                </div>
                
                  <div class="form-group">
                  <label  for="style"> Any Special Instructions for this order below:</label>
                    <textarea class="form-control" rows="7" id="specification" name="specification"  required="required" data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
              <div class="col-sm-6">
                <h4 class="font-alt">Additional info</h4><br/>
                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
                <hr/>
                <h4 class="font-alt">Business Hours</h4><br/>
                <ul class="list-unstyled">
                  <li>Mo - Fr: 8am to 6pm</li>
                  <li>Sa, Su: 10am to 2pm</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
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
<?php include('footer.php')?>
</html>
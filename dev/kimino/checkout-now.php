<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu May 27 2021 00:52:03 GMT+0000 (Coordinated Universal Time)  -->

<?php
  require('inc/header.php');
  // session_unset();
?>


<style type="text/css">
  
  .text-block-104 {
  color: #6a000c;
  font-weight: 600;
  text-align: center;
   margin-bottom: 10px;
  border-bottom: 1px solid #bdb5b5;
 /* background-color:#6a000c;
  color:white;
  border-radius:10px;*/
  padding:5px;
}

.button-8 {
  width: 100%;
  border-radius: 11px;
  background-color: #000;
  text-align: center;
}
</style>

<html data-wf-page="609de675ffdba31223bf6d8b" data-wf-site="608bf558fad5f43399d39d27">
<head>
  <meta charset="utf-8">
  <title>Kimi No Takoyaki - Checkout Now</title>
  <meta content="Kimi No Takoyaki - Checkout Now" property="og:title">
  <meta content="Kimi No Takoyaki - Checkout Now" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/kimi-no-takoyaki-website.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <script src="scripts/order.js"></script>
  <style>
body{
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
  
  <div class="div-block-92">
    <div class="div-block-91">
      <h5 class="heading-26">Order Successfully Placed</h5>
    </div>
  </div>
  <div class="div-block-92 error">
    <div class="div-block-91">
      <h5 class="heading-26">Sorry, Order Wasn&#x27;t Placed. Try Again.</h5>
    </div>
  </div>
  <div class="section-4">
    <div class="container-3 w-container">
      <div class="div-block-74">
        <h4 class="heading-21">My Order</h4>
      </div>
      <div class="div-block-68">
        <div class="div-block-69">
          <div class="w-layout-grid grid-12">
            <div style="height: 700px; overflow-y: scroll; width:auto;" id="checkoutcart">
              <!-- <h4 class="heading-22">Items in Order</h4> -->
              <!-- <div class="div-block-78"> -->
                <!-- <div class="div-block-79"><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
                <div class="div-block-80">
                  <div class="text-block-92">Box of 3</div>
                  <div>Quantity</div>
                  <div>Flavor</div>
                  <div>Add On</div>
                  <div class="text-block-96">Quantity:</div>
                  <div class="text-block-96">2</div>
                </div>
                <div>PHP 49.00</div>
              </div> -->
              </div>
            <div id="w-node-_9d86a51d-66ba-c50f-5cb9-f5d7221ebb07-23bf6d8b" class="div-block-76">
              <div class="w-form">
                <form id="email-form" action="orderprocess.php" method="post">
                <!-- <form id="email-form" name="email-form" data-name="Email Form" redirect="/order-confirmed" data-redirect="/order-confirmed"> -->
                  <h4 class="heading-22">Customer Information</h4>
                  <div>
                    <div class="w-layout-grid grid-13">
                            <!-- First Name -->
                            <div class="div-block-82">
                            <label for="First-Name">First Name*</label>
                            <input type="text" class="text-field-7 w-input" maxlength="256" name="fname" data-name="First Name" placeholder="First Name" id="fname" required=""></div>

                             <!-- Middle Name -->
                            <div>
                            <label for="Middle-Name">Middle Name*</label>
                            <input type="text" class="text-field-8 w-input" maxlength="256" name="mname" data-name="Middle Name" placeholder="Middle Name" id="mname" required="">
                            </div>

                            <!--Last Name -->
                            <div>
                            <label for="Last-Name">Last Name*</label>
                            <input type="text" class="text-field-9 w-input" maxlength="256" name="lname" data-name="Last Name" placeholder="Last Name" id="lname" required="">
                            </div>

                            <!-- Email Address -->
                            <div>
                            <label for="Email-Address">Email Address*</label>
                            <input type="email" class="text-field-7 w-input" maxlength="256" name="email" data-name="Email Address" placeholder="Email Address" id="email" required="">
                            </div>
                            <!-- Facebook -->
                            
                            <!-- Contact -->
                            <div id="w-node-c5ba2673-c306-6415-5e05-9b68dcc7458e-23bf6d8b">
                            <label for="Contact-Number">Contact Number*</label>
                            <input type="text" class="text-field-7 w-input" maxlength="256" name="contact" data-name="Contact Number" placeholder="Contact Number" id="contact" required="">
                            </div>

                            <div>
                            <label for="facebook">Facebook*</label>
                            <input type="facebook" class="text-field-7 w-input" maxlength="256" name="facebook" data-name="Email Address" placeholder="Facebook Account" id="facebook" required="" style="width:100%;">
                            </div>
                    </div>
                  </div>
                  <h4 class="heading-22">Order Address</h4>
                  <div>
                    <div class="w-layout-grid grid-13">

                       <!-- Street Address -->


                      <div id="w-node-bfcb12d9-7bb1-2523-e6db-8816c4b5afb1-23bf6d8b">
                      <label for="Street-Address">House No & Street Address*</label>
                      <input type="text" class="text-field-7 w-input" maxlength="256" name="street" data-name="Street Address" placeholder="House No & Street Address" id="street" required="">
                      </div>
 
                       <!-- City -->
                      <div>
                      <label for="City">Barangay*</label>
                      <input type="text" class="text-field-8 w-input" maxlength="256" name="baranggay" data-name="baranggay" placeholder="baranggay" id="baranggay" required="">
                      </div>

                      <div>
                      <label for="City">City*</label>
                      <input type="text" class="text-field-8 w-input" maxlength="256" name="city" data-name="City" placeholder="City" id="City" required="">
                      </div>

                      <!-- State/Province -->
                      <div>
                      <label for="State-Province">State/Province*</label>
                      <input type="text" class="text-field-9 w-input" maxlength="256" name="state" data-name="State/Province" placeholder="State/Province" id="state" required="">
                      </div>

                      <!-- Zip -->
                      <div>
                      <label for="Zip-Postal-Code">Zip/Postal Code*</label>
                      <input type="text" class="text-field-7 w-input" maxlength="256" name="zip" data-name="Zip/Postal Code" placeholder="Zip/Postal Code" id="zip" required="">
                      </div>

                      <!-- Landmark -->
                      <div id="w-node-bfcb12d9-7bb1-2523-e6db-8816c4b5afc1-23bf6d8b">
                      <label for="Landmark">Landmark*</label>
                      <input type="text" class="text-field-7 w-input" maxlength="256" name="landmark" data-name="Landmark" placeholder="Landmark" id="landmark" required="">
                      </div>
                       
                       <!-- Additional Notes -->
                      <div id="w-node-_36df9181-56c2-e4d3-ec62-712ec2110a95-23bf6d8b">
                      <label for="Additional-Notes">Additional Notes</label>
                      <textarea placeholder="Additional Notes" maxlength="5000" id="notes" name="notes" data-name="Additional Notes" class="textarea-2 w-input"></textarea>
                      </div>

                    </div>
                  </div>

                  <!-- Submit Button -->
                  <div class="div-block-77">
                   <input type="submit" name="sendOrderBtn" onclick="clearbranch()" value="Place Order" data-wait="Please wait..." class="submit-button-3 w-button" > 
                  </div>


                </form>
             <div class="w-form-done">
                 <!--  <div>Thank you! Your submission has been received!</div> -->
                </div>
                <!-- <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div> -->
              </div>
            </div> 
            <!-- <div  class="div-block-81">
              <h4 class="heading-22">Total</h4>
              <h3 id="total">PHP 0.00</h3>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=608bf558fad5f43399d39d27" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<!--   <?php
  require('inc/footer.php');
?> -->
</body>
</html>

<script type="text/javascript">
  window.onload = function(value){
    loadcheckoutcart();
  }

  function clearbranch(){
    localStorage.setItem("branchid", "");
    
  }

      
</script>
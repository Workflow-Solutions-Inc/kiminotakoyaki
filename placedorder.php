<?php

session_start();

if (isset($_SESSION["favcolor"])){
 
}
else
{
  header("location: index.php");
}

?>


<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri Jun 11 2021 03:49:34 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="609e17fafedfa8e99a98638d" data-wf-site="609e17fafedfa85d5d98638c">
<head>


<style type="text/css">
  .w-layout-grid {
  display: -ms-grid;
  display: grid;
  grid-auto-columns: 1fr;
  -ms-grid-columns: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  -ms-grid-rows: auto auto;
  grid-template-rows: auto auto;
  grid-row-gap: 16px;
  grid-column-gap: 16px;
}

.body {
  display: block;
  padding-top: 100px;
  padding-bottom: 100px;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.div-block {
  height: auto;
  max-width: none;
}

.div-block-2 {
  border-style: solid;
  border-width: 1px;
  border-color: #cacaca;
  border-radius: 15px;
  background-color: #fdfbfb;
}

.div-block-3 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  padding: 12px;
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
  -ms-flex-align: start;
  align-items: flex-start;
  border-bottom: 1px solid #cacaca;
  background-color: transparent;
}

.heading {
  margin-top: 0px;
  font-family: Merriweather, serif;
  color: #6a000c;
}

.grid-2 {
  -ms-grid-columns: 1fr;
  grid-template-columns: 1fr;
  -ms-grid-rows: auto;
  grid-template-rows: auto;
}

.div-block-4 {
  padding: 12px;
  background-color: transparent;
}

.div-block-5 {
  border-style: solid;
  border-width: 1px;
  border-color: #cacaca;
  border-radius: 12px;
  background-color: #fdfbfb;
}

.div-block-6 {
  padding: 12px;
}

.heading-2 {
  font-family: Merriweather, serif;
  color: #6a000c;
}

.div-block-7 {
  border: 1px solid #cacaca;
  border-radius: 12px;
  background-color: #fdfbfb;
}

.div-block-8 {
  padding: 12px;
  border-bottom: 1px solid #cacaca;
}

.div-block-9 {
  height: auto;
}

.div-block-10 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.grid-3 {
  -ms-grid-rows: auto;
  grid-template-rows: auto;
}

.div-block-11 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.text-block {
  font-size: 18px;
}

.div-block-12 {
  padding: 7px;
  border-bottom: 1px solid #e7e2e2;
}

.div-block-13 {
  padding: 12px;
  border-bottom: 1px solid #cacaca;
  background-color: transparent;
}

.div-block-14 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  padding: 13px;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  border-style: solid;
  border-width: 1px;
  border-color: #cacaca;
  border-radius: 12px;
  color: #333;
}

.button {
  margin-right: 10px;
  padding: 15px;
  border-radius: 8px;
  background-color: #6a000c;
}

.container {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 40px;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.image {
  margin-right: 10px;
}

@media screen and (max-width: 767px) {
  .body {
    margin-right: 20px;
    margin-left: 20px;
  }

  .grid {
    display: block;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
  }

  .div-block-2 {
    margin-bottom: 10px;
  }

  .div-block-5 {
    margin-bottom: 10px;
  }

  .div-block-7 {
    margin-bottom: 10px;
  }
}

@media screen and (max-width: 479px) {
  .text-block {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }

  .div-block-15 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }
}

#w-node-a02e7747-c608-477d-3e14-64d813287927-9a98638d {
  -ms-grid-row: span 1;
  grid-row-start: span 1;
  -ms-grid-row-span: 1;
  grid-row-end: span 1;
  -ms-grid-column: span 1;
  grid-column-start: span 1;
  -ms-grid-column-span: 1;
  grid-column-end: span 1;
}

#w-node-ffd7fcfb-0b03-edf9-ea03-84bb5fec25c1-9a98638d {
  -ms-grid-row: span 5;
  grid-row-start: span 5;
  -ms-grid-row-span: 5;
  grid-row-end: span 5;
  -ms-grid-column: span 1;
  grid-column-start: span 1;
  -ms-grid-column-span: 1;
  grid-column-end: span 1;
}

#w-node-_15594240-4335-93cb-81bf-1f3e98a8b032-9a98638d {
  -ms-grid-row: span 1;
  grid-row-start: span 1;
  -ms-grid-row-span: 1;
  grid-row-end: span 1;
  -ms-grid-column: span 1;
  grid-column-start: span 1;
  -ms-grid-column-span: 1;
  grid-column-end: span 1;
}

#w-node-dc5a1721-1379-0580-62f1-dea63c2f55a6-9a98638d {
  -ms-grid-row: span 1;
  grid-row-start: span 1;
  -ms-grid-row-span: 1;
  grid-row-end: span 1;
  -ms-grid-column: span 2;
  grid-column-start: span 2;
  -ms-grid-column-span: 2;
  grid-column-end: span 2;
}


 



</style>





















  <meta charset="utf-8">
  <title>Thank You For Ordering</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <!-- <link href="css/workflow-developers-groovy-project.webflow.css" rel="stylesheet" type="text/css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Merriweather:300,300italic,400,400italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body">
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "105768428423935");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
    
    
  <div class="container w-container">
    <div class="div-block-15"><img src="images/logo-png.png" loading="lazy" width="136" sizes="136px" srcset="images/logo-png-p-500.png 500w, images/logo-png-p-1080.png 1080w, images/logo-png-p-1600.png 1600w, images/logo-png-p-2000.png 2000w, images/logo-png-p-2600.png 2600w, images/logo-png-p-3200.png 3200w, images/logo-png.png 4864w" alt="" class="image"><img src="images/KimiNoBubbleTea_Brown2_PNG.png" loading="lazy" width="207" sizes="(max-width: 479px) 83vw, 207px" srcset="images/KimiNoBubbleTea_Brown2_PNG.png 500w, images/KimiNoBubbleTea_Brown2_PNG.png 800w, images/KimiNoBubbleTea_Brown2_PNG.png 1080w, images/KimiNoBubbleTea_Brown2_PNG.png 1600w, images/KimiNoBubbleTea_Brown2_PNG.png 2000w, images/KimiNoBubbleTea_Brown2_PNG.png 2600w, images/KimiNoBubbleTea_Brown2_PNG.png 3200w, images/KimiNoBubbleTea_Brown2_PNG.png 6584w" alt=""></div>
  </div>
  <div class="w-container">
    <div class="w-layout-grid grid">
      <div id="w-node-a02e7747-c608-477d-3e14-64d813287927-9a98638d" class="div-block-2">
        <div class="div-block-3">
          <h3 class="heading">Customer Information</h3>
        </div>
        <div class="div-block-6">
          <div>
            <h5>Personal Information</h5>
            

            <div><strong>Name:</strong> <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></div>
            <div><strong>Email:</strong> <?php echo $_SESSION['email']; ?></div>
            <div><strong>Contact:</strong> <?php echo $_SESSION['contact']; ?></div>
            <div><strong>Facebook: </strong><?php echo $_SESSION['facebook']; ?></div>
          </div>
        </div>
      </div>

    

          

      <div id="w-node-ffd7fcfb-0b03-edf9-ea03-84bb5fec25c1-9a98638d" class="div-block-7">
        <div class="div-block-8">
          <h3 class="heading">Items in Order</h3>
        </div>
         <div id="orderto">

           
         </div>
      </div>




      <div id="w-node-_15594240-4335-93cb-81bf-1f3e98a8b032-9a98638d" class="div-block-2">
        <div class="div-block-3">
          <h3 class="heading">Shipping Address</h3>
        </div>
        <div class="div-block-6">
          <div>
            <div><?php echo $_SESSION['street'].' '.$_SESSION['baranggay'].''.$_SESSION['state']; ?></div>
            <div><?php echo $_SESSION['city'].' '.$_SESSION['zip']; ?></div>
            <div><strong>Landmark: </strong><?php echo $_SESSION['landmark']; ?></div>
          </div>
        </div>
      </div>
      <div class="div-block-5">
        <div class="div-block-3">
          <h3 class="heading">Additional Notes</h3>
        </div>
        <div class="div-block-4">
          <p><?php echo $_SESSION['notes']; ?></p>
        </div>
      </div>
      <input type="hidden" id="paychecker" value="<?php echo $_SESSION['paytype']; ?>">
      <div class="div-block-5" id="cod">
        <div class="div-block-3">
          <h3 class="heading">Billing Information</h3>
        </div>
        <div class="div-block-6">
          <div>
            <h5>CASH ON DELIVERY</h5>
            <p>Thank you for ordering. Please wait for our customer service representative to contact you. Kindly note that shipping fee will be computed and added once order has been placed,</p>
          </div>
        </div>
      </div>
      <div class="div-block-5 bank" id="btgc">
        <div class="div-block-3">
          <h3 class="heading">Billing Information</h3>
        </div>
        <div class="div-block-6">
          <div>
            <h5>BANK TRANSFER/ GCASH</h5>
            <div><strong>Bank Account: </strong> 123456789</div>
            <div><strong>GCash Number: </strong>0123456789</div>
            <div>
              <h5 class="heading-2">Kindly send the screenshot of the payment on the chatbox. </h5>
              <div class="w-embed">
                <style>
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}
.btn {
  border: 2px solid gray;
  color: white;
  background-color: #6a000c;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 15px;
}
.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>


             <!-- Upload File -->
              <form>
               <!--  <div class="upload-btn-wrapper"> -->
                  <!-- Email -->
                  <!--<input type="hidden" value="<?php echo $_SESSION['email']; ?>">-->
                  <!--<input type="file" name="file" class="form-control"/>-->
                  <!--<input type="submit" name="submit" class="btn" value="SUBMIT"/>-->
                  
                  <!-- <button type="submit" name="submit" class="btn">Upload a file</button>
                  <input type="file" name="myfile"  accept="image/png, image/gif, image/jpeg"> -->
                 <!--  <label>Attachment <input type="file" name="attachment" /></label>
                  <label><input type="submit" name="button" value="Submit" /></label> -->
              <p>Once confirmed, you will get notified by our customer service representative regarding your order. <br><br>Kindly note that shipping fee will be computed and added once order has been placed.</p>
          <!--   </div> -->
            </form>
            <!-- End Upload File -->

          </div>
        </div>
      </div>



      
    </div>
  </div>

<div id="w-node-dc5a1721-1379-0580-62f1-dea63c2f55a6-9a98638d" class="div-block-14">
        <a href="order.php" class="button w-button" style="background-color:#6a000c; color:white; border-radius: 8px; text-align:center;">Order Again</a>
        <a href="index.php" class="button w-button" style="background-color:#6a000c; color:white; border-radius: 8px; text-align:center;">Home Page</a>
</div>

 <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100112871923212");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609e17fafedfa85d5d98638c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <!--  FOXYCART  -->
  <script data-cfasync="false" src="https://cdn.foxycart.com/kiminotakoyakitest/loader.js" async="" defer=""></script>
  <!--  /FOXYCART  -->
</body>
</html>





<script type="text/javascript">
    window.onload = function(value){
      getorders();
      getorders2();
       if (document.getElementById("paychecker").value=="cod"){
         document.getElementById("cod").style.display="show";
         document.getElementById("btgc").style.display="none";
       }
       else
       {
        document.getElementById("btgc").style.display="show";
        document.getElementById("cod").style.display="none";
       }
       
  }
  function getorders()
  {
    $.ajax({
                type: 'GET',
                url: 'process/orderplaced.php',
                data:{},

                beforeSend:function(){
                },
                success: function(data){
                // document.getElementById("orderto").innerHTML+=data;
                }

          });
  }
  function getorders2()
  {
    $.ajax({
                type: 'GET',
                url: 'process/getOrders.php',
                data:{},

                beforeSend:function(){
                },
                success: function(data){
                  document.getElementById("orderto").innerHTML+=data;
                }

          });
  }

</script>

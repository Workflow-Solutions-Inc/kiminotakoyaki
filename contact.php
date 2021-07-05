<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat May 22 2021 00:56:11 GMT+0000 (Coordinated Universal Time)  -->
<?php
  require('inc/header.php');

?>
<html data-wf-page="609b87f149c1cb36bf2c9148" data-wf-site="608bf558fad5f43399d39d27">
<head>
  <meta charset="utf-8">
  <title>Kimi No Takoyaki - Contact</title>
  <meta content="Kimi No Takoyaki - Contact" property="og:title">
  <meta content="Kimi No Takoyaki - Contact" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/kimi-no-takoyaki-website.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <style>
body{
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.inputdesign 
{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  border-radius: 12px;
}

label
{
  color: #6a000c;
  text-align: center;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 10px;

}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

#message
{
   width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 12px;
  resize: vertical;
}

form
{
  margin-top:20px;
}

.button:hover
{
  background-color:black;
}

.status
{
background-color: red;

}
</style>
</head>
<body>
  
  <div class="section-3">
    <div data-poster-url="https://uploads-ssl.webflow.com/608bf558fad5f43399d39d27/609dcd19579966bf72c57fe3_Untitled design (1)-poster-00001.jpg" data-video-urls="https://uploads-ssl.webflow.com/608bf558fad5f43399d39d27/609dcd19579966bf72c57fe3_Untitled design (1)-transcode.mp4,https://uploads-ssl.webflow.com/608bf558fad5f43399d39d27/609dcd19579966bf72c57fe3_Untitled design (1)-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video-3 w-background-video w-background-video-atom"><video autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/608bf558fad5f43399d39d27/609dcd19579966bf72c57fe3_Untitled design (1)-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
        <source src="https://uploads-ssl.webflow.com/608bf558fad5f43399d39d27/609dcd19579966bf72c57fe3_Untitled design (1)-transcode.mp4" data-wf-ignore="true">
        <source src="https://uploads-ssl.webflow.com/608bf558fad5f43399d39d27/609dcd19579966bf72c57fe3_Untitled design (1)-transcode.webm" data-wf-ignore="true">
      </video></div>
    <div class="container-2 w-container">
      
       
         
        
       <form id="myForm" action="contactprocess.php" method="post">
         <div class="status"> <p class="sent-notification" style="color:white;"></p> </div>
      <h2 class="heading-16">Contact Us</h2>
      <p class="paragraph-11">Do you have any concern regarding our products and service? Kindly fill up the form and our team will gladly answer.<br></p>
      <div id="formInstructions" class="small-text"><em class="italic-text">Fields marked with an asterisk (*) are required.</em></div>
        <center>
       <!-- Form new Design -->
       <div class="row">


      </div>
       
     <!-- Input Name -->
      <div class="row">
            <div class="col-25">
                <label>Name</label>
            </div>
            <div class="col-75">
                <input id="name"  name="name" type="text" placeholder="Enter Name" class="inputdesign">
            </div>
      </div>

       <!-- Input email -->
      <div class="row">
          <div class="col-25">
              <label>Email</label>
          </div>

          <div class="col-75">
             <input id="email" name="email" type="email" placeholder="Enter Email" class="inputdesign">
          </div>
      </div>

     <!-- Input Subject -->
      <div class="row">
          <div class="col-25">
            <label>Subject</label>
          </div>

          <div class="col-75">
             <input id="subject" name="subject"type="text" placeholder=" Enter Subject" class="inputdesign">
          </div>
      </div>


        <!-- Input Subject -->
      <div class="row">
          <div class="col-25">
            <label>Message</label>
          </div>

          <div class="col-75">
            <textarea id="message" name="message" rows="5" placeholder="Type Message"></textarea><!--textarea tag should be closed (In this coding UI textarea close tag cannot be used)-->
          </div>
      </div>


    <input type="submit" name="sendMailBtn" value="Submit" data-wait="Sending" class="button button-space w-button" onclick="sendEmail()">
 </div>


   
<!-- 
      <div class="row">   
       <button type="button" onclick="sendEmail()" name="sendMailBtn" value="Send An Email" class="button button-space w-button" id="click">Submit</button>
      </div>

-->
<!--  
      <div class="row">   
       <button type="button" onclick="sendEmail()" value="Send An Email" class="button button-space w-button" id="click">Submit</button>
      </div>

 -->     
      

      
    </form>
  </center>

      <!--End Form new Design -->


      <!--
      <div class="w-form">
       
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
          <div class="contact-form-grid">
            <div id="w-node-_4da3aa7a-e4b4-9882-d022-97b94983ba51-bf2c9148"><label for="First-Name" id="contact-first-name">First Name *</label>
            <input type="text" class="text-field-2 w-input" maxlength="256" name="fname" data-name="First Name" id="fname" required=""></div>
            <div id="w-node-_4da3aa7a-e4b4-9882-d022-97b94983ba55-bf2c9148"><label for="Last-Name" id="contact-last-name">Last Name *</label><input type="text" class="text-field-4 w-input" maxlength="256" name="lastname" data-name="Last Name" id="lname" required=""></div>
             
             <div id="w-node-_4da3aa7a-e4b4-9882-d022-97b94983ba55-bf2c9148"><label for="Subject" id="subject">Subject*</label><input type="text" class="text-field-4 w-input" maxlength="256" name="subeject" data-name="subject" id="subject" required=""></div>

            <div id="w-node-_4da3aa7a-e4b4-9882-d022-97b94983ba59-bf2c9148"><label for="Email" id="contact-email">Email *</label><input type="email" class="text-field-3 w-input" maxlength="256" name="email" data-name="email" id="email" required=""></div>
            <div id="w-node-_4da3aa7a-e4b4-9882-d022-97b94983ba5d-bf2c9148"><label for="Contact-Phone-Number" id="contact-phone">Phone Number</label><input type="tel" class="text-field-5 w-input" maxlength="256" name="contactnumber" data-name="Contact Phone Number" id="Contact-Phone-Number"></div>
            <div id="w-node-_4da3aa7a-e4b4-9882-d022-97b94983ba61-bf2c9148"><label for="Message" id="contact-message">Message*</label><textarea data-name="Message" maxlength="5000" id="message" name="message" class="textarea w-input"></textarea></div>
          </div>
          <div class="div-block-44"><input type="submit" value="submit" onClick="sendEmail()" data-wait="Please wait..." class="submit-button-2 w-button"></div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>!-->

    </div>
  </div>
  
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=608bf558fad5f43399d39d27" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
 

 <script type="text/javascript"> 
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var message = $("#message");

           //var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
             if(document.getElementById("email").value.match(mailformat))
             {
              //alert("Successfully");
              if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)) {
                $.ajax({
                   url: 'contactprocess.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       message: message.val()         
                   }, 

                   beforeSend:function(){
      
                     $("#myForm").html('<center> <h4 style="color:#6a000c";> Inquiry Sent Succesfully </h4/></center>');
                     //$("#datatbl").html('<center><img src="img/loading.gif" width="300" height="300"></center>');
                    }, 

                   success: function (response) {
                        //$('#myForm')[0].reset();
                        //location.reload();
                       // $("#myForm").html('<center><img src="images/check.png" width="300" height="300"></center>');
                        // $("#myForm").html('<center><img src="images/check.png" width="250" height="250"> <br> <br> <p style="color:#6a000c;font-size:20px;"> Inquiry Sent Succesfully </p> </center>');
                        //$('.sent-notification').text("Message Sent Successfully.");
                        //$('.sent-notification').text(response);
                   }
                });
            }
             }
             else
             {
              //alert("Email Not Exist");
              $('.sent-notification').text("Invalid Email.");

            }
              
            
        }

        function isNotEmpty(caller)
        {
            if (caller.val() == "")
             {
                caller.css('border', '1px solid red');
                return false;
             } else
                caller.css('border', '');

            return true;
        }
         
    
         

    </script>





</body>
</html>
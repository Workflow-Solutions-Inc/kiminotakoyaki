
<?php
   
    $toEmail = "riorose19@gmail.com";
    $subjectName = "New Order";
    $message2 = $_POST['message'];
   
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $landmark = $_POST['landmark'];
    $notes = $_POST['notes'];





    




    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fname.' ","  '.$lname.'<'.$email.'>' . "\r\n".'Reply-To: '.$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<html lang="en">
<style type="text/css">
  .container
  {
    background-color:#e6e8eb;
    width:700px;
  }
  .head
  {
    background-color:#6a000c;
    color:white;
    padding: 5px;
    text-align:center;
  }
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

.section {
  height: 100vh;
}

.div-block {
  max-height: 120px;
  max-width: 120px;
  min-height: 120px;
  min-width: 120px;
  background-image: url("https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg");
  background-position: 50% 50%;
  background-size: cover;
}

.body {
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

.div-block-2 {
  display: block;
  width: 700px;
  padding: 0px;
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
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  background-color: #fdfdfd;
}

.div-block-3 {
  padding: 9px;
  border-radius: 20px 20px 0px 0px;
  background-color: #6a000c;
  background-image: url("../images/Banner-Wave.svg");
  background-position: 100% 50%;
  background-size: cover;
}

.div-block-4 {
  height: 150px;
}

.div-block-5 {
  max-height: 150px;
  max-width: 150px;
  min-height: 150px;
  min-width: 150px;
  background-color: #080808;
}

.image {
  min-width: 150px;
}

.div-block-6 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
  -ms-flex-align: start;
  align-items: flex-start;
}

.div-block-7 {
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
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
  -ms-flex-align: end;
  align-items: flex-end;
}

.text-block {
  padding: 3px;
}

.text-block-2 {
  padding: 4px;
}

.text-block-3 {
  padding: 3px;
}

.div-block-8 {
  padding: 12px;
  background-color: #fdfdfd;
}

.heading {
  margin-top: 0px;
  margin-bottom: 0px;
  color: #fff;
  text-align: center;
}

.div-block-9 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  padding: 0px;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.image-2 {
  margin-left: 40px;
  padding: 0px;
}

.image-3 {
  padding: 0px;
}

.div-block-10 {
  border-top: 1px solid #6a000c;
  background-color: #fdfdfd;
   margin-top:50px;
}

.div-block-11 {
  padding: 5px;
  background-color: #6a000c;
 
}

.heading-2 {
  color: #fff;
}

.heading-3 {
  text-align: right;
}

.grid {
  -ms-grid-columns: 1fr 1fr 1fr;
  grid-template-columns: 1fr 1fr 1fr;
}

.div-block-12 {
  padding: 12px;
}

@media screen and (max-width: 479px) {
  .div-block-2 {
    width: auto;
  }

  .div-block-9 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  .image-2 {
    margin-left: 0px;
  }
}

#w-node-c7b2e6f8-642d-c454-910d-300f971a5bc2-9a98638d {
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



            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link href="../css/kimi-no-takoyaki-website.webflow.css" rel="stylesheet" type="text/css">
                <title>Document</title>
            </head>
            <body>
            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>
                <div class="container">
              <div class="div-block-2">
    <div class="div-block-3">
      <div class="div-block-9"></div>
      <h1 class="heading">Order</h1>
    </div>
    <div class="div-block-8">
      <h3>Cheesy Baked Takoyaki</h3>
      <div class="div-block-6">
        <div class="div-block-5"><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" width="181" alt="" class="image"></div>
        <div class="div-block-7">
          <div class="text-block">Flavor</div>
          <div class="text-block-2">Quantity</div>
          <div class="text-block-3">Add Ons</div>
          <h3>PHP 0.00</h3>
        </div>
      </div>
    </div>
    <div class="div-block-10">
      <h3 class="heading-3">Total: 0.00</h3>
    </div>
    <div class="div-block-11">
      <h4 class="heading-2">Customer Information</h4>
    </div>
   
    <div class="div-block-12">
      <div class="w-layout-grid grid">
        <div>
          <div>First Name</div>
          <div>Rio</div>
        </div>
        <div>
          <div>Middle Name</div>
          <div>Rellama</div>
        </div>
        <div>
          <div>Last Name:</div>
          <div>Odiamar</div>
        </div>
        <div>
          <div>Email Address:</div>
          <div>myemail@gmail.com</div>
        </div>
        <div>
          <div>Contact Number:</div>
          <div>1234567879</div>
        </div>
        <div>
          <div>Facebook Account:</div>
          <div>facebook</div>
        </div>
      </div>
    </div>
    <div class="div-block-11">
      <h4 class="heading-2">Address</h4>
    </div>
    <div class="div-block-12">
      <div class="w-layout-grid grid">
        <div>
          <div>Street</div>
          <div>Rio</div>
        </div>
        <div>
          <div>City</div>
          <div>Rellama</div>
        </div>
        <div>
          <div>State/Province</div>
          <div>Odiamar</div>
        </div>
        <div>
          <div>Landmark</div>
          <div>myemail@gmail.com</div>
        </div>
        <div id="w-node-c7b2e6f8-642d-c454-910d-300f971a5bc2-9a98638d">
          <div>Additional Notes</div>
          <div>1234567879</div>
        </div>
      </div>
    </div>
  </div>
                </div>
            </body>
            </html>';
    $result = @mail($to, $subject, $message, $headers);




echo '<script>alert("Email sent successfully!")</script>';
echo '<script>window.location.href="contact.php";</script>';
    ?>
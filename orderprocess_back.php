<?php
    session_start();
    $toEmail = "riorose19@gmail.com";
    $subjectName = "New Order";
    $message2 = $_POST['message'];
   
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $facebook = $_POST['facebook'];

    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $landmark = $_POST['landmark'];
    $notes = $_POST['notes'];

   $output = "";
  $custnum = $_SESSION["favcolor"];
  //echo $custnum;
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("xml/products.xml");

  $xmlcart = new DOMDocument();
  $xmlcart->load("xml/mycart.xml");

  $products = $xmlproduct->getElementsByTagName("product");
  $mycarts = $xmlcart->getElementsByTagName("mycarts");
  $flag=0;
  $tprice=0;

  foreach ($mycarts as $mycart) {
    
    if($mycart->getElementsByTagName("customername")->item(0)->nodeValue == $custnum){
      $flavor = $mycart->getElementsByTagName("prodFlavor")->item(0)->nodeValue;
      $tops = $mycart->getElementsByTagName("prodToppings")->item(0)->nodeValue;
      foreach ($products as $product) {

        # code...
        
        if($product->getElementsByTagName("code")->item(0)->nodeValue == $mycart->getElementsByTagName("prodCode")->item(0)->nodeValue){
          $code = $product->getElementsByTagName("code")->item(0)->nodeValue;
              $brand = $product->getElementsByTagName("brand")->item(0)->nodeValue;
              $model = $product->getElementsByTagName("prod_name")->item(0)->nodeValue;
              $price = $product->getElementsByTagName("price")->item(0)->nodeValue;
              $image = $product->getElementsByTagName("pic")->item(0)->nodeValue;
              $category = $product->getElementsByTagName("category")->item(0)->nodeValue;
              $qty = $mycart->getElementsByTagName("qty")->item(0)->nodeValue;
              $tops2 = explode("-", $tops);
              $topsprice = $tops2[1];
              $topsname = $tops2[0];
             if($brand == "milktea" || $brand == "sjdmmilktea"){
                $flavor2 = explode("-", $flavor);
                $flavorprice = $flavor2[1];
                $flavor = $flavor2[0];
                $price+=$flavorprice;

                if($category=="milkteaseries"&& $qty>=2 && $flavor=="medium")
                {
                  if($qty%2){
                    $newqty = $qty;
                    $price=((99/2)*($newqty-1))+$product->getElementsByTagName("price")->item(0)->nodeValue+$flavorprice;
                  }else{
                    $price=(99/2)*$qty;
                   
                  }
                  
                }
                else
                {
                    $price = $price * $qty;
                }
              }
              else
                {
                    $price = $price * $qty;
                }


            $output.='<div class="div-block-8">
                <h3>'.$model.'</h3>
                <div class="div-block-6">
                  <div class="div-block-5"><img src="'.$image.'" loading="lazy" width="181" alt="" class="image"></div>
                  <div class="div-block-7">
                    <div class="text-block">Flavor: '.$flavor.'</div>
                    <div class="text-block-2">'.$qty.' Pcs</div>
                    <div class="text-block-3">Add Ons: '.$topsname.'</div>
                    <h3>Php'.($price  + (intval($topsprice) * $qty)).'</h3>
                  </div>
                </div>
              </div>';
              $tprice += ($price  + (intval($topsprice) * $qty));
        }
      }
      
       //$tprice += ($price  + (intval($topsprice) * $qty));
     }
    
  }



    




    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fname.' ","  '.$lname.'<'.$email.'>' . "\r\n".'Reply-To: '.$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<html lang="en">
      
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
    '.$output.'
    <div class="div-block-10">
      <h3 class="heading-3">Php'.$tprice.'.00</h3>
    </div>
    <div class="div-block-11">
      <h4 class="heading-2">Customer Information</h4>
    </div>
   
    <div class="div-block-12">
      <div class="w-layout-grid grid">
        <div>
          <div> <b> First Name: </b>'.$fname.'</div>
        </div>
        <div>
          <div><b>Middle Name:</b>'.$mname.'</div>
        </div>
        <div>
          <div><b>Last Name:</b>  '.$lname.'</div>
        </div>
        <div>
          <div><b>Email Address:</b>'.$email.'</div>
        </div>
        <div>
          <div><b>Contact Number:</b> '.$contact.'</div>
        </div>
        <div>
          <div><b>Facebook Account:</b>'.$facebook.'</div>
        </div>
      </div>
    </div>
    <div class="div-block-11">
      <h4 class="heading-2">Address</h4>
    </div>
    <div class="div-block-12">
      <div class="w-layout-grid grid">
        <div>
          <div><b>Street</b> '.$street.'</div>
        </div>
        <div>
          <div><b>City:</b>'.$city.'</div>
        </div>
        <div>
          <div><b>State/Province:</b>'.$state.'</div>
        </div>
        <div>
          <div><b>Landmark:</b> '.$landmark.'</div>
        </div>
        <div id="w-node-c7b2e6f8-642d-c454-910d-300f971a5bc2-9a98638d">
          <div><b>Additional Notes</b></div>
          <div>'.$notes.'</div>
        </div>
      </div>
    </div>
  </div>
                </div>
            </body>
            </html>';
    $result = @mail($to, $subject, $message, $headers);




echo '<script>alert("Email sent successfully!")</script>';
echo '<script>window.location.href="order-confirmed.php";</script>';
    ?>







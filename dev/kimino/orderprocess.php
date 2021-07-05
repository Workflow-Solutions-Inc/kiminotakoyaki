<?php
    session_start();
    $toEmail = "riorose19@gmail.com";
    $subjectName = "New Order";
    // $message2 = $_POST['message'];
   
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
    $zip = $_POST['zip'];
    $baranggay = $_POST['baranggay'];
    

   $output = "";
  $custnum = $_SESSION["favcolor"];
  $myword="sjdm";
  //echo $custnum;
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("xml/products.xml");

  $xmlcart = new DOMDocument();
  $xmlcart->load("xml/mycart.xml");

  $products = $xmlproduct->getElementsByTagName("product");
  $mycarts = $xmlcart->getElementsByTagName("mycarts");
  $flag=0;
  $tprice=0;
  $branchname="";

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

         
    


            $output.='
            <div class="div-block-8">
                <h3>'.$model.'</h3>
                <div class="div-block-6">
                  <div class="div-block-5"><img src="'.$image.'" loading="lazy" width="181" alt="" class="image"></div>
                  <div class="div-block-7">
                    <div class="text-block">Flavor/Size: '.$flavor.'</div>
                    <div class="text-block-2">Quantity: '.$qty.' Pcs</div>
                    <div class="text-block-3">Add Ons: '.$topsname.'</div>
                    <h3>Product Price: Php'.($price  + (intval($topsprice) * $qty)).'</h3>
                  </div>
                </div>
              </div>';
              $tprice += ($price  + (intval($topsprice) * $qty));
        }
      }
      
       //$tprice += ($price  + (intval($topsprice) * $qty));


     }
    
  }

  
   if (strpos($brand,$myword)!==false)
        {
          $branchname="SJDM";
          // echo $branchname;
          
        }
       else
       {
         $branchname="QC";
         // echo $branchname;
       }






    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= 'From: '.$fname.' '.$lname.'<'.$email.'>' . "\r\n".'Reply-To: '.$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<html lang="en">
      
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>

  <body>
  
  
  <table style="font-family: arial, sans-serif; border-collapse:collapse; width:50%;">
   <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
   <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Order (Branch: '.$branchname.' ) </th>
  </tr>

 <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6">'.$output.'</th>
  </tr>

 <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="font-size: 20px;">  Total: Php'.$tprice.'.00 </th>
  </tr>

  <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Customer Information </th>
  </tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6"> Name: '.$fname.''.$mname.' '.$lname.'</th>
</tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6"> Email Address: '.$email.'</th>
</tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6"> Contact Number: '.$contact.'</th>
</tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6"> Facebook: '.$facebook.'</th>
</tr>





<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Order Address </th>
  </tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
<th>House No & Street: '.$street.'&nbsp; Baranggay: '.$baranggay.' &nbsp; City: '.$city.' &nbsp; State: '.$state.'  &nbsp; Zip Code: '.$zip.' &nbsp; Landmark: '.$landmark.' </th>
</tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Additional Notes </th>
  </tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6">'.$notes.'</th>
</tr>


 </table>
              
            </body>
            </html>';
    $result = @mail($to, $subject, $message, $headers);



session_destroy();
echo '<script>alert("Email sent successfully!")</script>';
echo '<script>window.location.href="order-confirmed.php";</script>';

    ?>
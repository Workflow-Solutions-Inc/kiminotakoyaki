<?php
  
  $output = '<h4 class="heading-22">Items in Order</h4> ';
  $custnum = '843692';
  //echo $custnum;
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("../xml/products.xml");

  $xmlcart = new DOMDocument();
  $xmlcart->load("../xml/mycart.xml");

  $products = $xmlproduct->getElementsByTagName("product");
  $mycarts = $xmlcart->getElementsByTagName("mycarts");

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
                    $price=((99/2)*($newqty-1))+$product->getElementsByTagName("price")->item(0)->nodeValue;
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
          $output.= '<div class="div-block-78">
          <img src="'.$image.'" loading="lazy" sizes="(max-width: 479px) 68vw, 200px"  alt="" class="image-11" style="padding:10px;"> 
                <div class="div-block-80">
                  <div class="text-block-92">'.$model.'</div>
                  <div>'.$qty.' Pc/s</div>
                  <div>'.$flavor.'</div>
                  <div>'.$topsname.'</div>
                </div>
                <div>₱'.($price  + (intval($topsprice) * $qty)).'.00</div>
              </div>';
        }
      }
      
       $tprice += ($price  + (intval($topsprice) * $qty));
     }
    
  }
 
  $totalshow = ' <div  class="div-block-81">
              <h4 class="heading-22">Total</h4>
              <h3 id="total"> ₱'.$tprice.'</h3>
            </div>';
  echo $output;
  echo $totalshow;
?>
            <!-- /<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body>
            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">message</span>
                <div class="container">

                 message<br/>
                    Regards<br/>
                  email<br/>
                  name
                </div>
            </body>
            </html> -->
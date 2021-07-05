<?php

session_start();

 $output = "";
  $custnum = $_SESSION['favcolor'];
  //echo $custnum;
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("../xml/products.xml");

  $xmlcart = new DOMDocument();
  $xmlcart->load("../xml/orders.xml");



  $products = $xmlproduct->getElementsByTagName("product");
  $mycarts = $xmlcart->getElementsByTagName("order");

$tprice=0;
$feenote="";


  foreach ($mycarts as $mycart) {
    
    if($mycart->getElementsByTagName("customername")->item(0)->nodeValue == $custnum){
      $flavor = $mycart->getElementsByTagName("prodFlavor")->item(0)->nodeValue;
      $tops = $mycart->getElementsByTagName("prodToppings")->item(0)->nodeValue;
      $orderid = $mycart->getElementsByTagName("orderid")->item(0)->nodeValue;
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

               // else if($category=="premiumseries" || $category=="chocoseries" && $qty>=2 && $flavor=="medium")
               //  {
               //    if($qty%2){
               //      $newqty = $qty;
               //      $price=((109/2)*($newqty-1))+$product->getElementsByTagName("price")->item(0)->nodeValue+$flavorprice;
               //    }else{
               //      $price=(109/2)*$qty;
                   
               //    }
                  
               //  }

               //     else if($category=="creamcheese"  && $qty>=2 && $flavor=="medium")
               //  {
               //    if($qty%2){
               //      $newqty = $qty;
               //      $price=((129/2)*($newqty-1))+$product->getElementsByTagName("price")->item(0)->nodeValue+$flavorprice;
               //    }else{
               //      $price=(129/2)*$qty;
                   
               //    }
                  
               //  }


                else
                {
                    $price = $price * $qty;
                }
              }
              else
                {
                    $price = $price * $qty;
                }
          $output.= '
              <div class="div-block-9" style="overflow:auto;">
          <div class="div-block-12">
            <div class="w-layout-grid grid-3">
              <div class="div-block-10"><img src="'.$image.'" loading="lazy" width="118" alt=""></div>
              <div class="div-block-11">
                <div class="text-block"> <b>'.$model.' </b></div>
                <div> <b>Qty:</b> '.$qty.'</div>
                 <div><b>Price:</b>'.$price.'</div>
                <div><b>Size/Flavor:</b> '.$flavor.'</div>
                <div><b>Add Ons</b>:'.$topsname.'</div>
              </div>
            </div>
          </div>
        </div>';
        }

      }
      
       $tprice += ($price  + (intval($topsprice) * $qty));

     }
   
  
     
    
  } 
  $output.='<div class="div-block-13">
          <h3 class="heading"> Total: PHP '.$tprice.'.00</h3>
        </div>';
  echo $output;
  session_destroy();

?>
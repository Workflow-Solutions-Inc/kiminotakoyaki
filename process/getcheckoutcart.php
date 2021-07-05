<?php
  
  $output = '<h4 class="heading-22">Items in Order</h4> ';
  $custnum = $_GET["action"];
  //echo $custnum;
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("../xml/products.xml");

  $xmlcart = new DOMDocument();
  $xmlcart->load("../xml/mycart.xml");

  $products = $xmlproduct->getElementsByTagName("product");
  $mycarts = $xmlcart->getElementsByTagName("mycarts");

$tprice=0;
$feenote="";


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

          <div style="font-size:20px; text-align:right; margin-bottom:20px; font-weight:bold;">₱'.($price  + (intval($topsprice) * $qty)).'.00</div> 
                
          <div class="div-block-78" style= border-bottom:0px; ">
              <div class="div-block-61"><img src="'.$image.'" loading="lazy" alt="" height="150px" class="image-10"></div>
                <div class="div-block-80">
                  <div class="text-block-92">'.$model.'</div>
                    <div>'.$qty.'</div>
                  
                  <div>'.$flavor.'</div>
                  <div>'.$topsname.'</div>
                </div>
              </div>
               <div class="text-block-104"> <a href="#" class="heading-20" id = "'.$code.':'.$flavor.':'.$tops.':'.$custnum.'" onclick="removetocart(this)" style="text-decoration:none;">Remove Item </a></div>

             
              ';
        }

      }
      
       $tprice += ($price  + (intval($topsprice) * $qty));

     }

     
    
  }

  // $clearcart = '<div>
  //               <a href="#" class="button-8 w-button" style=" border-radius: 11px;background-color: #000;">Clear Cart</a>
  //             </div>';
 
  $totalshow = '<h4 class="heading-22">Total</h4>
                <h3 id="total"> ₱'.$tprice.'</h3>';

  $feenote= '<div><p style="font-size:15px;"> Note: Shipping fee will be computed once order has been placed. </p> </div>';
 
 
  echo $output;
    // echo $clearcart;
  echo $totalshow;
  echo $feenote;


?>
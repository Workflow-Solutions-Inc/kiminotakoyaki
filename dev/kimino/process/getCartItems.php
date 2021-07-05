<?php
  
  $output = "";
  $custnum = $_GET["action"];
  //echo $custnum;
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("../xml/products.xml");

  $xmlcart = new DOMDocument();
  $xmlcart->load("../xml/mycart.xml");

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
              if($brand == "sjdmmilktea" || $brand == "sjdmmilktea")
              {
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

                else if($category=="premiumseries" || $category=="chocoseries" && $qty>=2 && $flavor=="medium")
                {
                  if($qty%2){
                    $newqty = $qty;
                    $price=((109/2)*($newqty-1))+$product->getElementsByTagName("price")->item(0)->nodeValue+$flavorprice;
                  }else{
                    $price=(109/2)*$qty;
                   
                  }
                  
                }

                   else if($category=="creamcheese"  && $qty>=2 && $flavor=="medium")
                {
                  if($qty%2){
                    $newqty = $qty;
                    $price=((129/2)*($newqty-1))+$product->getElementsByTagName("price")->item(0)->nodeValue+$flavorprice;
                  }else{
                    $price=(129/2)*$qty;
                   
                  }
                  
                }



                else
                {
                    $price = $price * $qty;
                }
           
               

              }


            // else if($brand=="tipidcommbo")
            // {
            //     $price = $price * $qty + $topsprice;
            // }
            else
            {
               $price = $price * $qty;
             }


       
  				$output.= '<div class="div-block-63">
                <div class="div-block-61"><img src="'.$image.'" loading="lazy" alt="" class="image-10"></div>
                <div class="div-block-62">
                  <div class="div-block-64" style="padding:5px;">
                    <h6>'.$model.'</h6>
                  </div>
                  <div class="div-block-65" >
                    <h6 class="heading-19" style="padding:5px;">'.$flavor.'</h6>
                    <h6 class="heading-19" style="padding:5px;">'.$topsname.'</h6>
                    <h6 class="heading-19" style="padding:5px;">'.$qty.'pcs</h6>
                    <h6 class="heading-19" style="padding:5px;">Php'.($price  + (intval($topsprice) * $qty)).'</h6>
                  </div>
                  <div class="div-block-66" style="text-align:center;">
                    <a href="#" class="heading-20" id = "'.$code.':'.$flavor.':'.$tops.':'.$custnum.'" onclick="removetocart(this)" style="text-decoration:none;">Remove Item </a>
                  </div>
                  
                </div>
              </div> <br><br>  ';
  			}
  		}
  		
  		 //$tprice += ($price  + (intval($topsprice) * $qty));
  	 }
    
  }
//echo $tprice;
if($output != "")
{
  $output.='<br><div class="div-block-67">
              <a href="checkout-now.php" class="button-3 w-button">Proceed To Checkout</a>
              <input type="hidden" value="1" id="validatechecker">
              </div>';
}
else
{
  $output.='<br><div class="div-block-67">
              <div style="background-color: #6a000c;  color:white; font-size: 15px; padding:10px; border-radius:10px; width:200px; text-align:center;">No Items Found</div>
              <input type="hidden" value="0" id="validatechecker">
              </div>';
}

   echo $output;




?>

<?php
  
  $custnum = $_GET["action"];
  //echo $custnum;
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("../xml/products.xml");

  $xmltop = new DOMDocument();
  $xmltop ->load("../xml/toppings.xml");

  $output = '';
  $tops = '';
  $topsprice = '';
  $topmilktea='';
  $milkteaflavor='';
  $milkteaname='';

  $products = $xmlproduct->getElementsByTagName("product");
  $toppings = $xmltop->getElementsByTagName("topping");
  
  foreach ($products as $product) {
    $brand = $product->getElementsByTagName("brand")->item(0)->nodeValue;
    if($brand == "tipidcommbo")
    {
      $code = $product->getElementsByTagName("code")->item(0)->nodeValue;
      $model = $product->getElementsByTagName("prod_name")->item(0)->nodeValue;
      $price = $product->getElementsByTagName("price")->item(0)->nodeValue;
      $image = $product->getElementsByTagName("pic")->item(0)->nodeValue;
      $category = $product->getElementsByTagName("category")->item(0)->nodeValue;
      $pieces = $product->getElementsByTagName("pieces")->item(0)->nodeValue;


     foreach($products as $product)
       {
         $brand = $product->getElementsByTagName("brand")->item(0)->nodeValue;
          $milkteaname = $product->getElementsByTagName("prod_name")->item(0)->nodeValue;
          $category = $product->getElementsByTagName("category")->item(0)->nodeValue;
        if ($category=="milkteaseries")
        {
           $milkteaflavor .= '<option value="'.$milkteaname.'">'.$milkteaname.' </option>';
        }
       
       }



      foreach ($toppings as $topping) 
      {
        $topname = $topping->getElementsByTagName("name")->item(0)->nodeValue;
        $topprice = $topping->getElementsByTagName("price")->item(0)->nodeValue;
        $topcateg = $topping->getElementsByTagName("type")->item(0)->nodeValue;
        $categpieces = $topping->getElementsByTagName("pieces")->item(0)->nodeValue;
        if($topcateg == "takoyaki")
        {
          if($pieces == $categpieces)
          {
             $tops .= '<option value="'.$topname.'-'.$topprice.'">'.$topname.' - ₱'.$topprice.'.00</option>';
          }
        }
      else if ($topcateg=="milktea")
      {
          $topmilktea .= '<option value="'.$topname.'-'.$topprice.'">'.$topname.' - ₱'.$topprice.'.00</option>';
      }
      else if ($topcateg=="combo")
      {

        $tops .= '<option value="'.$topname.'-'.$topprice.'">'.$topname.' - ₱'.$topprice.'.00</option>';
          $topmilktea .= '<option value="'.$topname.'-'.$topprice.'">'.$topname.' - ₱'.$topprice.'.00</option>';
      }
   # code...


      }

   
       
  




      // foreach ($toppings as $topping)
      //  {
      //   $topname = $topping->getElementsByTagName("name")->item(0)->nodeValue;
      //   $topprice = $topping->getElementsByTagName("price")->item(0)->nodeValue;
      //   $topcateg = $topping->getElementsByTagName("type")->item(0)->nodeValue;
      //   $categpieces = $topping->getElementsByTagName("pieces")->item(0)->nodeValue;
      //   if($topcateg == "milktea")
      //   {
      //     $topmilktea .= '<option value="'.$topname.'-'.$topprice.'">'.$topname.' - ₱'.$topprice.'.00</option>';
          
      //   }  
      //   # code...
      // }

        # code...

     
      // foreach ($toppings as $topping) {
      //   $topprice = $topping->getElementsByTagName("price")->item(0)->nodeValue;
      //   $topcateg = $topping->getElementsByTagName("type")->item(0)->nodeValue;
      //   $categpieces = $topping->getElementsByTagName("pieces")->item(0)->nodeValue;
      //  if($topcateg == "takoyaki"){
      //     if($pieces == $categpieces){
      //        $topsprice .= '<label class="field-label-2">PHP'.$topprice.'.00</label>';
      //     }
         
      //   }
        # code...
      
      $output.='<div class="div-block-51">
                <div class="div-block-52"> <img src="'.$image.'" loading="lazy" sizes="(max-width: 479px) 68vw, 200px"  alt="" class="image-11"></div>
                <div class="div-block-53">
                  <div class="div-block-54">
                    <h5 class="heading-17">'.$model.'</h5>
                    <div class="text-block-90">PHP'.$price.'.00</div>
                  </div>
                  <div class="div-block-55">
                    <div class="w-form">
                      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                      <label class="field-label-6">Takoyaki</label>
                        <div class="div-block-88"> 
                          <select id="Flavor-'.$code.'-1" name="Flavor" data-name="Flavor" class="select-field-4 w-select" style="width:250px;" >
                            <option value="">Select Flavor</option>
                            <option value="Octobits">Octobits (Original)</option>
                            <option value="Spam">Spam Bites</option>
                            <option value="Chicken">Chicken N Cheese</option>
                            <option value="Shrimp">Shrimp</option>
                          </select>
                         </div>

                           <div class="div-block-88">
                                 <select id="toppings-'.$code.'-1" name="Flavor-7" data-name="Flavor 7" class="select-field-4 w-select" style="width:250px;">
                               '.$tops.'
                               </select>

                          </div>
                          
                          <label class="field-label-6">Milk Tea</label>
                           <div class="div-block-88">
                           <select id="Flavor-'.$code.'-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select" style="width:250px;">
                                 '.$milkteaflavor.'
                                </select>
                           </div>

                           <div class="div-block-88">
                              <select id="toppings-'.$code.'-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select" style="width:250px;">
                               '.$topmilktea.'
                              </select>
                           </div>
                         
                           <div class="div-block-88">
                           <input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity" data-name="Quantity" placeholder="Quantity" id="Quantity-'.$code.'" required="" style="width:50%;" min="1" value="1">
                          <a href="#" id = "'.$code.'" name="combo" onclick="addtocart(this);"class="button-2 w-button" style="width:30%;"><i class="fas fa-cart-plus"></i></a>
                          </div>
                          </form>
                      
                      
                    </div>
                  </div>
                </div>
              </div>';
              
    }         $tops='';
              $topsprice='';
              $topmilktea='';
              $milkteaflavor='';
               $milkteaname='';
  }

  echo $output;
?>
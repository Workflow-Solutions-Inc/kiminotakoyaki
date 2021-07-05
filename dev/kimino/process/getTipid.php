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

  $products = $xmlproduct->getElementsByTagName("product");
  $toppings = $xmltop->getElementsByTagName("topping");
  
  foreach ($products as $product) {
    $brand = $product->getElementsByTagName("brand")->item(0)->nodeValue;
    if($brand == "tipid"){
      $code = $product->getElementsByTagName("code")->item(0)->nodeValue;
      $model = $product->getElementsByTagName("prod_name")->item(0)->nodeValue;
      $price = $product->getElementsByTagName("price")->item(0)->nodeValue;
      $image = $product->getElementsByTagName("pic")->item(0)->nodeValue;
      $category = $product->getElementsByTagName("category")->item(0)->nodeValue;
      $pieces = $product->getElementsByTagName("pieces")->item(0)->nodeValue;
      foreach ($toppings as $topping) {
        $topname = $topping->getElementsByTagName("name")->item(0)->nodeValue;
        $topcateg = $topping->getElementsByTagName("type")->item(0)->nodeValue;
        $categpieces = $topping->getElementsByTagName("pieces")->item(0)->nodeValue;
        if($topcateg == "takoyaki"){
          if($pieces == $categpieces){
             $tops .= '<label class="w-checkbox">
            <input type="checkbox" name = "top-'.$code.'" class="w-checkbox-input">
            <span class="checkbox-label-3 w-form-label">'.$topname.'<br>Sauce </span>
            </label>';
          }
         
        }
        
        # code...
      }

      foreach ($toppings as $topping) {
        $topprice = $topping->getElementsByTagName("price")->item(0)->nodeValue;
        $topcateg = $topping->getElementsByTagName("type")->item(0)->nodeValue;
        $categpieces = $topping->getElementsByTagName("pieces")->item(0)->nodeValue;
       if($topcateg == "takoyaki"){
          if($pieces == $categpieces){
             $topsprice .= '<label class="field-label-2">PHP'.$topprice.'.00</label>';
          }
         
        }
        # code...
      }
      $output.='<div class="div-block-51">
                <div class="div-block-52"><img src="'.$image.'" loading="lazy" sizes="(max-width: 479px) 79vw, 200px" alt="" class="image-12"></div>
                <div class="div-block-53">
                  <div class="div-block-54">
                    <h5 class="heading-17">'.$model. '</h5> 

                    <div class="text-block-90"> PHP  '.$price.'.00</div>
                  </div>
                  <div class="div-block-55">
                    <div class="w-form">
                      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                        <div class="div-block-88"><select id="Flavor" name="Flavor" data-name="Flavor" class="select-field-4 w-select">
                            <option value="">Select Flavor</option>
                            <option value="octobits">Octobits(Original)</option>
                            <option value="spam">Spam Bites</option>
                            <option value="chicken">Chicken N Cheese</option>
                            <option value="shrimp">Shrimp</option>
                          </select>

                        <input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity" data-name="Quantity" placeholder="Quantity" id="Quantity-'.$code.'" required=""></div><label class="field-label-6">Toppings</label>
                        <div class="div-block-86">
                          <div class="w-layout-grid grid-18">
                            '.$tops.'
                          </div>
                          <div class="w-layout-grid grid-18">
                            '.$topsprice.'
                          </div>
                        </div>
                      </form>
                      <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                      </div>
                      <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                      </div>
                      <a href="#" id = "'.$code.'" onclick="addtocart(this);" class="button-2 w-button" style="width:30%;"><i class="fas fa-cart-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>';
              $tops='';
              $topsprice='';
    }
  } 
  echo $output;
 
?>
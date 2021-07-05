<?php
  
  $custnum = $_GET["action"];
  //echo $custnum;
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("../xml/products.xml");

  $xmltop = new DOMDocument();
  $xmltop ->load("../xml/toppings.xml");

  $xmlsize = new DOMDocument();
  $xmlsize ->load("../xml/size.xml");

  $output = '';
  $tops = '';
  $topsprice = '';
  $sizedisplay='';
  $sizeshow='';

  $products = $xmlproduct->getElementsByTagName("product");
  $toppings = $xmltop->getElementsByTagName("topping");
  $sizes = $xmlsize->getElementsByTagName("size");
  
 



  foreach ($products as $product) 
  {
    $brand = $product->getElementsByTagName("brand")->item(0)->nodeValue;
    if($brand == "sjdmmilktea")
    {
      $code = $product->getElementsByTagName("code")->item(0)->nodeValue;
      $model = $product->getElementsByTagName("prod_name")->item(0)->nodeValue;
      $price = $product->getElementsByTagName("price")->item(0)->nodeValue;
      $image = $product->getElementsByTagName("pic")->item(0)->nodeValue;
      $category = $product->getElementsByTagName("category")->item(0)->nodeValue;
      $pieces = $product->getElementsByTagName("pieces")->item(0)->nodeValue;
      
      foreach ($toppings as $topping)
       {
        $topname = $topping->getElementsByTagName("name")->item(0)->nodeValue;
        $topprice = $topping->getElementsByTagName("price")->item(0)->nodeValue;
        $topcateg = $topping->getElementsByTagName("type")->item(0)->nodeValue;
        $categpieces = $topping->getElementsByTagName("pieces")->item(0)->nodeValue;
        if($topcateg == "sjdmmilktea")
        {
          $tops .= '<option value="'.$topname.'-'.$topprice.'">'.$topname.' - ₱'.$topprice.'.00</option>';
          
        }  
        # code...
      }

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

       /*foreach ($sizes as $size)
      {
        $sizeprice = $size->getElementsByTagName("price")->item(0)->nodeValue;
        $sizecateg = $size->getElementsByTagName("category")->item(0)->nodeValue;
        $milkteasize = $size->getElementsByTagName("sizemilktea")->item(0)->nodeValue;
        $sizename = $size->getElementsByTagName("name")->item(0)->nodeValue;
        if($sizecateg == "milkteaseries")
        {
          $sizedisplay .= '<option value="'.$sizename.'-'.$sizeprice.'">'.$sizename.' - PHP'.$sizeprice.'.00</option>';
        }
      }*/
      
 if ($product->getElementsByTagName("category")->item(0)->nodeValue=="milkteaseries")
      {
        $code = $product->getElementsByTagName("code")->item(0)->nodeValue;
        $model = $product->getElementsByTagName("prod_name")->item(0)->nodeValue;
        $price = $product->getElementsByTagName("price")->item(0)->nodeValue;
        $image = $product->getElementsByTagName("pic")->item(0)->nodeValue;
        $category = $product->getElementsByTagName("category")->item(0)->nodeValue;
          
       


      $output.='<div class="div-block-51">
                <div class="div-block-52"><img src="'.$image.'" loading="lazy" sizes="(max-width: 479px) 68vw, 200px"  alt="" class="image-11"></div>
                <div class="div-block-53">
                  <div class="div-block-54">
                    <h5 class="heading-17">'.$model.'</h5>
                    <div class="text-block-90">₱'.$price.'.00</div>
                  </div>
                  <div class="div-block-55">
                    <div class="w-form">
                      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                        <div class="div-block-88">
                          <select id="Flavor-'.$code.'" name="Flavor" data-name="Flavor" class="select-field-4 w-select" style="width:250px;">
                            <option value="small-0">Small-₱'.$price.'.00</option>
                            <option value="medium-15">Medium-₱'.($price+15).'.00</option>
                            <option value="large-15">Large-₱'.($price+25).'.00</option>
                          </select>
                         </div>
                         <div class="div-block-88">
                          <select id="toppings-'.$code.'" name="Flavor-7" data-name="Flavor 7" class="select-field-4 w-select" style="width:250px;">
                          '.$tops.'
                          </select>
                        </div>
                        <div class="div-block-88">
                         <input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity" data-name="Quantity" placeholder="Quantity" id="Quantity-'.$code.'" required="" style="width:50%;" min="1" value="1">
                          <a href="#" id = "'.$code.'" onclick="addtocart(this);"class="button-2 w-button" style="width:30%;"><i class="fas fa-cart-plus"></i></a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>';
              $tops='';
              $topsprice='';
    }
  }
}
  echo $output;

?>

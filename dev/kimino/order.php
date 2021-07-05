<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu May 27 2021 00:52:03 GMT+0000 (Coordinated Universal Time)  -->

<?php
  require('inc/header.php');
?>


<html data-wf-page="608bf559fad5f442b5d39d32" data-wf-site="608bf558fad5f43399d39d27">
<head>
  <meta charset="utf-8">
  <title>Kimi No Takoyaki - Order</title>
  <meta content="Kimi No Takoyaki - Order" property="og:title">
  <meta content="Kimi No Takoyaki - Order" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/fontawesome.min.css" rel="stylesheet">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/kimi-no-takoyaki-website.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <script src="scripts/order.js"></script>
  <style>
body{
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
  <div data-w-id="e826fd1a-59a8-24bd-db36-fedfb4931f0e" class="section-7" id="branchselect">
    <div data-w-id="f8f9592a-2a59-344d-19f5-a816eb691632" style="opacity:0" class="container-9 w-container">
      <h1 class="heading-28">Choose Your Branch</h1>

    </div>
    <div class="container-10 w-container">
      <div class="w-layout-grid grid-19">
        <div data-w-id="5556d24f-bffb-3cab-cd68-6e4af27bb73d" class="card-wrapper">
          <div class="card-1">
            <div data-w-id="0ca98839-e69f-9bfd-6448-d9761d571682" style="opacity:0" class="card-1-front qc">
              <h1 class="heading-29">Quezon City</h1>
            </div>
            <div data-w-id="67e0a143-9267-7529-78fd-003171982b86" class="card-1-back">
              <h1 class="heading-30">See Menu</h1>
            </div>
          </div>
        </div>
        <div data-w-id="8fdb8f25-a341-6e35-c1f2-d5ecd72de513" class="card-wrapper">
          <div class="card-1" >
            <div data-w-id="8fdb8f25-a341-6e35-c1f2-d5ecd72de515" style="opacity:0" class="card-1-front">
              <h1 class="heading-29">SJDM</h1>
            </div>
            <div data-w-id="8fdb8f25-a341-6e35-c1f2-d5ecd72de518" class="card-1-back">
              <h1 class="heading-30">See Menu</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-section">
    <div class="container-flex">
      <div class="title-wrap-centre">
        <h1 style="-webkit-transform:translate3d(0, 25PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 25PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 25PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 25PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="header-h1">Get your food <span class="brand-span">delivered</span>, or <span class="brand-span">pick-up</span> in store.</h1>
      </div>
    </div>
  </div>
  <div data-w-id="7cd9162f-a293-5951-53e5-2164e02ddf21"  class="content-section" id="qcsection">
   
  <!-- <p id="message"> Must Select A Flavor</p> -->
   <!--  <p id="demo" style="color:red;"></p> -->
    <div data-duration-in="300" data-duration-out="100" class="tabs-2 w-tabs">
      <div class="tab-menu-round w-tab-menu">
        <a data-w-tab="Burgers" class="tab-link-round w-inline-block w-tab-link w--current">
          <div>Takoyaki</div>
        </a>
        <a data-w-tab="Sides" class="tab-link-round w-inline-block w-tab-link">
          <div>Milk Tea</div>
        </a>
        <a data-w-tab="Sides 2" class="tab-link-round w-inline-block w-tab-link">
          <div>Tipid Deals</div>
        </a>
      </div>
      <div class="tabs-content-2 w-tab-content">
        <div data-w-tab="Burgers" class="tab-pane-wrap w-tab-pane">
          <div class="container-5 w-container">
            <div class="w-layout-grid grid-15" id="takuyakidiv">
            <!-- Takoyaki -->
            <!--  
                <div class="div-block-52"><img src="images/Boxof3.jpg" loading="lazy" sizes="100vw" srcset="images/Boxof3-p-500.jpeg 500w, images/Boxof3-p-800.jpeg 800w, images/Boxof3-p-1080.jpeg 1080w, images/Boxof3.jpg 1400w" alt="" class="image-12"></div>
                <div class="div-block-53">
                  <div class="div-block-54">
                    <h5 class="heading-17">Box of 3</h5>
                    <div class="text-block-90">PHP 49.00</div>
                  </div>
                  <div class="div-block-55">
                    <div class="w-form">
                      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                        <div class="div-block-88"><select id="Flavor" name="Flavor" data-name="Flavor" class="select-field-4 w-select">
                            <option value="">Select one...</option>
                            <option value="First">First Choice</option>
                            <option value="Second">Second Choice</option>
                            <option value="Third">Third Choice</option>
                          </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity" data-name="Quantity" placeholder="Quantity" id="Quantity" required=""></div><label class="field-label-6">Toppings</label>
                        <div class="div-block-86">
                          <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Takoyaki <br>Sauce </span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Bonito Flakes</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Japanese<br>Mayo</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cheese</span></label></div>
                          <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 4.00</label><label class="field-label-3">PHP 4.00</label><label class="field-label-4">PHP 8.00</label><label class="field-label-5">PHP 8.00</label></div>
                        </div>
                      </form>
                      <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                      </div>
                      <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                      </div>
                      <a href="#" class="button-2 w-button">Add To Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              -->
            </div>
          </div>
        </div>
       
        <div data-w-tab="Sides" class="tab-pane-sides w-tab-pane w--tab-active">
          <div data-duration-in="300" data-duration-out="100" class="w-tabs">
            <div class="tabs-menu w-tab-menu">
              <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link">
                <div class="div-block-89">
                  <div class="text-block-98">Milk Tea Series</div>
                </div>
              </a>
              <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
                <div class="text-block-99">Premium Series</div>
              </a>
              <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link w--current">
                <div class="text-block-97">Choco Series</div>
              </a>
              <a data-w-tab="Tab 4" class="tab-link-tab-4 w-inline-block w-tab-link">
                <div class="text-block-100">Cream Cheese Series</div>
              </a>
            </div>

            <!-- Milk Tea Series -->
            <div class="w-tab-content">
              <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--current">
                <div class="container-7 w-container">
                  <div class="w-layout-grid grid-15" id="milkteadiv1">

                    <!--  
                    <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Untitled-design-5.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-5-p-500.png 500w, images/Untitled-design-5-p-800.png 800w, images/Untitled-design-5.png 1080w" alt="" class="image-11"></div>
                      <div class="div-block-53">
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                              <div class="div-block-54">
                                <h5 class="heading-17">Classic Pearl</h5>
                                <h5 class="price_qc">PHP 39</h5>
                              </div>
                              <div class="div-block-88"><select id="field" name="field" class="select-field-5 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-4" data-name="Quantity 4" placeholder="Quantity" id="Quantity-4" required=""></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-86">
                                <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearls</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee Jelly<br></span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream Cheese</span></label></div>
                                <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 10.00</label><label class="field-label-3">PHP 10.00</label><label class="field-label-4">PHP 10.00</label><label class="field-label-5">PHP 15.00</label></div>
                              </div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                 -->
                    
                </div>
                </div>
              </div>

            <!--  Enf of Milk Tea Series -->

           <!-- Premium Series -->

              <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane">
                <div class="container-7 w-container">
                  <div class="w-layout-grid grid-15" id="milkteadiv2">
                    <!--  
                    <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Untitled-design-4.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-4-p-500.png 500w, images/Untitled-design-4-p-800.png 800w, images/Untitled-design-4.png 1080w" alt="" class="image-11"></div>
                      <div class="div-block-53">
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                              <div class="div-block-54">
                                <h5 class="heading-17">Okinawa</h5>
                                <h5 class="price_qc">PHP 49</h5>
                              </div>
                              <div class="div-block-88"><select id="field-8" name="field-8" data-name="Field 8" class="select-field-5 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-4" data-name="Quantity 4" placeholder="Quantity" id="Quantity-4" required=""></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-86">
                                <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearls</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee Jelly<br></span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream Cheese</span></label></div>
                                <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 10.00</label><label class="field-label-3">PHP 10.00</label><label class="field-label-4">PHP 10.00</label><label class="field-label-5">PHP 15.00</label></div>
                              </div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div>
                      </div>
                     </div>
                        -->  
                   
                  </div>
                </div>
              </div>

           <!-- End of Premium Series -->

            <!-- Choco Series -->
           
              <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane">
                <div class="container-7 w-container">
                  <div class="w-layout-grid grid-15" id="milkteadiv3">
                    <!--  
                    <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Untitled-design-5.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-5-p-500.png 500w, images/Untitled-design-5-p-800.png 800w, images/Untitled-design-5.png 1080w" alt="" class="image-11"></div>
                      <div class="div-block-53">
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                              <div class="div-block-54">
                                <h5 class="heading-17">Choco Okinawa</h5>
                                <h5 class="price_qc">PHP 49</h5>
                              </div>
                              <div class="div-block-88"><select id="field-9" name="field-9" data-name="Field 9" class="select-field-5 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-4" data-name="Quantity 4" placeholder="Quantity" id="Quantity-4" required=""></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-86">
                                <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearls</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee Jelly<br></span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream Cheese</span></label></div>
                                <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 10.00</label><label class="field-label-3">PHP 10.00</label><label class="field-label-4">PHP 10.00</label><label class="field-label-5">PHP 15.00</label></div>
                              </div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div>
                      </div> 
                    </div>-->
 
                  </div>
                </div>
              </div>
             
             <!-- End of Choco Series -->

             <!-- Cream Cheese Series -->

              <div data-w-tab="Tab 4" class="tab-pane-tab-4 w-tab-pane">
                <div class="container-7 w-container">
                  <div class="w-layout-grid grid-15" id="milkteadiv4">

                    <!--  
                    <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Untitled-design-4.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-4-p-500.png 500w, images/Untitled-design-4-p-800.png 800w, images/Untitled-design-4.png 1080w" alt="" class="image-11"></div>
                      <div class="div-block-53">
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                              <div class="div-block-54">
                                <h5 class="heading-17">Okinawa Cream <br>Cheese</h5>
                                <h5 class="price_qc">PHP 59</h5>
                              </div>
                              <div class="div-block-88"><select id="field-10" name="field-10" data-name="Field 10" class="select-field-5 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-4" data-name="Quantity 4" placeholder="Quantity" id="Quantity-4" required=""></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-86">
                                <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearls</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee Jelly<br></span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream Cheese</span></label></div>
                                <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 10.00</label><label class="field-label-3">PHP 10.00</label><label class="field-label-4">PHP 10.00</label><label class="field-label-5">PHP 15.00</label></div>
                              </div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

            <!-- End Cream Cheese Series -->



          <!-- Note -->
     
          <div class="collection-list-wrapper-4 w-dyn-list">
            <div role="list" class="order-collection w-dyn-items w-row">
              <div role="listitem" class="menu-item w-dyn-item w-col w-col-6">
                <div class="food-card">
                  <a href="#" class="food-image-square w-inline-block"><img src="" alt="" class="food-image"></a>
                  <div class="food-card-content">
                    <a href="#" class="food-title-wrap w-inline-block">
                      <h6></h6>
                      <div class="price"></div>
                    </a>
                    <p class="paragraph"></p>
                    <div class="add-to-cart">
                      <form data-node-type="commerce-add-to-cart-form" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Add To Cart" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form>
                      <div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state">
                        <div>This product is out of stock.</div>
                      </div>
                      <div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror">
                        <div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="empty-state-3 w-dyn-empty">
              <div class="w-container">
                <div class="text-block-88">No items found.</div>
              </div>
            </div>
          </div>
        </div> 
 
       <!-- End Note -->



         <!-- Tipid Deals -->

 
 <div data-w-tab="Sides 2" class="tab-pane-sides w-tab-pane w--tab-active">
          <div data-duration-in="300" data-duration-out="100" class="w-tabs">
            <div class="tabs-menu w-tab-menu">
             
              <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
                <div class="div-block-89">
                  <div class="text-block-98">Takoyaki Deals</div>
                </div>
              </a>

              <!-- <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link w--current">
                <div class="text-block-99">Milk Tea Deals</div>
              </a> -->
              <a data-w-tab="Tab 3" class="tab-link-tab-2 w-inline-block w-tab-link">
                <div class="text-block-99"> Takoyaki + Milk Tea Deals</div>
              </a>
            </div>
            <div class="w-tab-content">
              <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane">
                <div class="container-5 w-container">
                  <div class="w-layout-grid grid-15" id="tipidtakodiv">
    
             <!--  
                <div class="div-block-51">
                <div class="div-block-52"><img src="images/Takoyaki-Pic-14.jpg" loading="lazy" sizes="(max-width: 479px) 79vw, 200px" srcset="images/Takoyaki-Pic-14-p-500.jpeg 500w, images/Takoyaki-Pic-14.jpg 1440w" alt="" class="image-12"></div>
                <div class="div-block-53">
                  <div class="div-block-54">
                    <h5 class="heading-17">Box of 3 &amp; 1 Medium<br>Milk Tea Series</h5>
                    <div class="text-block-90">PHP 88.00</div>
                  </div>
                  <div class="div-block-55">
                    <div class="w-form">
                      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                        <div class="div-block-88"><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                            <option value="">Select one...</option>
                            <option value="First">First Choice</option>
                            <option value="Second">Second Choice</option>
                            <option value="Third">Third Choice</option>
                          </select><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                            <option value="">Select one...</option>
                            <option value="First">First Choice</option>
                            <option value="Second">Second Choice</option>
                            <option value="Third">Third Choice</option>
                          </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-5" data-name="Quantity 5" placeholder="Quantity" id="Quantity-5" required=""></div><label class="field-label-6">Toppings</label>
                        <div class="div-block-86">
                          <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Takoyaki <br>Sauce </span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Bonito<br>Flakes</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Japanese<br>Mayo</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cheese</span></label></div>
                          <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 4.00</label><label class="field-label-3">PHP 4.00</label><label class="field-label-4">PHP 8.00</label><label class="field-label-5">PHP 8.00</label></div>
                        </div><label class="field-label-6">Milk Tea Toppings</label>
                        <div class="div-block-98">
                          <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearl</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee <br>Jelly</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream <br>Cheese</span></label></div>
                          <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 10.00</label><label class="field-label-3">PHP 10.00</label><label class="field-label-4">PHP 10.00</label><label class="field-label-5">PHP 15.00</label></div>
                        </div>
                      </form>
                      <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                      </div>
                      <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                      </div>
                      <a href="#" class="button-2 w-button">Add To Cart</a>
                    </div>
                  </div>
                </div>
              </div> -->



              </div>
              </div>
            </div>


<!-- Tipid deals Milk Tea -->

  <!-- <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane w--tab-active">
                <div class="container-5 w-container">
                  <div class="w-layout-grid grid-15" id="tipidmilktea">
                    <div class="div-block-51"> 
                      <div class="div-block-52"><img src="images/Takoyaki-Pic-14.jpg" loading="lazy" sizes="100vw" srcset="images/Takoyaki-Pic-14-p-500.jpeg 500w, images/Takoyaki-Pic-14.jpg 1440w" alt="" class="image-12"></div>
                      <div class="div-block-53">
                        <div class="div-block-54">
                          <h5 class="heading-17">Party Tray Kawaii <br>&amp; 2 Medium Milk Tea Series</h5>
                          <div class="text-block-90">PHP 228.00</div>
                        </div>
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2"><label class="field-label-6">Flavor </label>
                              <div class="div-block-88"><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-5" data-name="Quantity 5" placeholder="Quantity" id="Quantity-5" required=""></div>
                              <div class="div-block-86"></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-88"><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select></div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                         
                        </div>
                      </div>
                    </div>
 -->
<!-- End of tipid deals milk tea -->


<!-- Tipid deals milk tea + takoyaki -->
<div data-w-tab="Tab 3" class="tab-pane-tab-2 w-tab-pane">
                <div class="container-5 w-container">
                  <div class="w-layout-grid grid-15" id="tipidcombo">
                     <!-- <div class="container-5 w-container">
                  <div class="w-layout-grid grid-15">
                    <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Takoyaki-Pic-14.jpg" loading="lazy" sizes="100vw" srcset="images/Takoyaki-Pic-14-p-500.jpeg 500w, images/Takoyaki-Pic-14.jpg 1440w" alt="" class="image-12"></div>
                      <div class="div-block-53">
                        <div class="div-block-54">
                          <h5 class="heading-17">Party Tray Kawaii <br>&amp; 2 Medium Milk Tea Series</h5>
                          <div class="text-block-90">PHP 228.00</div>
                        </div>
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2"><label class="field-label-6">Flavor </label>
                              <div class="div-block-88"><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-5" data-name="Quantity 5" placeholder="Quantity" id="Quantity-5" required=""></div>
                              <div class="div-block-86"></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-88"><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><select id="Flavor-2" name="Flavor-2" data-name="Flavor 2" class="select-field-4 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select></div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div>
                      </div> -->










                  </div>
                </div>
  </div>

<!-- end of tipid deals milk tea + takoyaki -->


          </div>
        </div>
      </div>
    </div>
  </div>


<!-- End QC Menu -->



</div>


  <!-- SJDM Menu -->
  <div class="content-section sjdm-menu" id="sjdmsection">
    <div data-duration-in="300" data-duration-out="100" class="tabs-2 w-tabs">
      <div class="tab-menu-round w-tab-menu">
        <a data-w-tab="Burgers" class="tab-link-round w-inline-block w-tab-link">
          <div>Takoyaki</div>
        </a>
        <a data-w-tab="Sides" class="tab-link-round w-inline-block w-tab-link w--current">
          <div>Milk Tea</div>
        </a>
      </div>
      <div class="tabs-content-2 w-tab-content">
        <div data-w-tab="Burgers" class="tab-pane-wrap w-tab-pane">
          <div class="container-5 w-container">
            <div class="w-layout-grid grid-15" id="sjdmtakuyakidiv">
             <!--  <div class="div-block-51">
                <div class="div-block-52"><img src="images/Boxof3.jpg" loading="lazy" sizes="100vw" srcset="images/Boxof3-p-500.jpeg 500w, images/Boxof3-p-800.jpeg 800w, images/Boxof3-p-1080.jpeg 1080w, images/Boxof3.jpg 1400w" alt="" class="image-12"></div>
                <div class="div-block-53">
                  <div class="div-block-54">
                    <h5 class="heading-17">Box of 3</h5>
                    <div class="text-block-90">PHP 38.00</div>
                  </div>
                  <div class="div-block-55">
                    <div class="w-form">
                      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                        <div class="div-block-88"><select id="Flavor-5" name="Flavor-5" data-name="Flavor 5" class="select-field-4 w-select">
                            <option value="">Select one...</option>
                            <option value="First">First Choice</option>
                            <option value="Second">Second Choice</option>
                            <option value="Third">Third Choice</option>
                          </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-8" data-name="Quantity 8" placeholder="Quantity" id="Quantity-8" required=""></div><label class="field-label-6">Toppings</label>
                        <div class="div-block-86">
                          <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Takoyaki <br>Sauce </span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Bonito Flakes</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Japanese<br>Mayo</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cheese</span></label></div>
                          <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 3.00</label><label class="field-label-3">PHP 3.00</label><label class="field-label-4">PHP 6.00</label><label class="field-label-5">PHP 6.00</label></div>
                        </div>
                      </form>
                      <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                      </div>
                      <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                      </div>
                      <a href="#" class="button-2 w-button">Add To Cart</a>
                    </div>
                  </div>
                </div> -->
              </div>
       		 </div>
    		</div>




        <div data-w-tab="Sides" class="tab-pane-sides w-tab-pane w--tab-active">
          <div data-duration-in="300" data-duration-out="100" class="w-tabs">
            <div class="tabs-menu w-tab-menu">
              <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
                <div class="div-block-89">
                  <div class="text-block-98">Milk Tea Series</div>
                </div>
              </a>
              <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
                <div class="text-block-99">Premium Series</div>
              </a>
              <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link">
                <div class="text-block-97">Choco Series</div>
              </a>
              <a data-w-tab="Tab 4" class="tab-link-tab-4 w-inline-block w-tab-link">
                <div class="text-block-100">Cream Cheese Series</div>
              </a>
            </div>
      <div class="w-tab-content">

            <!-- SJDM Milk tea Series -->
              <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
                <div class="container-7 w-container">
                  <div class="w-layout-grid grid-15" id="sjdmmilkteadiv1">
                    <!-- <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Untitled-design-5.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-5-p-500.png 500w, images/Untitled-design-5-p-800.png 800w, images/Untitled-design-5.png 1080w" alt="" class="image-11"></div>
                      <div class="div-block-53">
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                              <div class="div-block-54">
                                <h5 class="heading-17">Classic Pearl</h5>
                                <h5 class="heading-31">PHP 35</h5>
                              </div>
                              <div class="div-block-88"><select id="field-11" name="field-11" data-name="Field 11" class="select-field-5 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-4" data-name="Quantity 4" placeholder="Quantity" id="Quantity-4" required=""></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-86">
                                <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearls</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee Jelly<br></span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream Cheese</span></label></div>
                                <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 5.00</label><label class="field-label-3">PHP 5.00</label><label class="field-label-4">PHP 5.00</label><label class="field-label-5">PHP 10.00</label></div>
                              </div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>

<!-- End SJDM Milk Tea Series -->

<!-- SJDM Premium Series -->
                <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane">
                <div class="container-7 w-container">
                  <div class="w-layout-grid grid-15" id ="sjdmmilkteadiv2">
                    <!-- <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Untitled-design-4.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-4-p-500.png 500w, images/Untitled-design-4-p-800.png 800w, images/Untitled-design-4.png 1080w" alt="" class="image-11"></div>
                      <div class="div-block-53">
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                              <div class="div-block-54">
                                <h5 class="heading-17">Okinawa</h5>
                                <h5 class="heading-31">PHP 45</h5>
                              </div>
                              <div class="div-block-88"><select id="field-8" name="field-8" data-name="Field 8" class="select-field-5 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-4" data-name="Quantity 4" placeholder="Quantity" id="Quantity-4" required=""></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-86">
                                <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearls</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee Jelly<br></span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream Cheese</span></label></div>
                                <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 5.00</label><label class="field-label-3">PHP 5.00</label><label class="field-label-4">PHP 5.00</label><label class="field-label-5">PHP 10.00</label></div>
                              </div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div>
                      </div> -->
               

                 </div>    
                </div>
              </div>



<!-- End SJDM Premium Series -->


<!-- SJDM Choco Series -->
  <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane">
                <div class="container-7 w-container">
                  <div class="w-layout-grid grid-15" id="sjdmmilkteadiv3">
                     <!-- <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Untitled-design-5.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-5-p-500.png 500w, images/Untitled-design-5-p-800.png 800w, images/Untitled-design-5.png 1080w" alt="" class="image-11"></div>
                      <div class="div-block-53">
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                              <div class="div-block-54">
                                <h5 class="heading-17">Choco Okinawa</h5>
                                <h5 class="heading-31">PHP 45</h5>
                              </div>
                              <div class="div-block-88"><select id="field-9" name="field-9" data-name="Field 9" class="select-field-5 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-4" data-name="Quantity 4" placeholder="Quantity" id="Quantity-4" required=""></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-86">
                                <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearls</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee Jelly<br></span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream Cheese</span></label></div>
                                <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 5.00</label><label class="field-label-3">PHP 5.00</label><label class="field-label-4">PHP 5.00</label><label class="field-label-5">PHP 10.00</label></div>
                              </div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div>
                      </div> -->
                  </div>
              </div>

   </div>
 <!-- End SJDM Choco Series -->

<!-- SJDM Cream Cheese -->
<div data-w-tab="Tab 4" class="tab-pane-tab-4 w-tab-pane">
                <div class="container-7 w-container">
                  <div class="w-layout-grid grid-15" id="sjdmmilkteadiv4">

                     <!--  <div class="div-block-51">
                      <div class="div-block-52"><img src="images/Untitled-design-4.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-4-p-500.png 500w, images/Untitled-design-4-p-800.png 800w, images/Untitled-design-4.png 1080w" alt="" class="image-11"></div>
                      <div class="div-block-53">
                        <div class="div-block-55">
                          <div class="w-form">
                            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
                              <div class="div-block-54">
                                <h5 class="heading-17">Okinawa Cream Cheese</h5>
                                <h5 class="heading-31">PHP 55</h5>
                              </div>
                              <div class="div-block-88"><select id="field-10" name="field-10" data-name="Field 10" class="select-field-5 w-select">
                                  <option value="">Select one...</option>
                                  <option value="First">First Choice</option>
                                  <option value="Second">Second Choice</option>
                                  <option value="Third">Third Choice</option>
                                </select><input type="number" class="text-field-6 w-input" maxlength="256" name="Quantity-4" data-name="Quantity 4" placeholder="Quantity" id="Quantity-4" required=""></div><label class="field-label-6">Toppings</label>
                              <div class="div-block-86">
                                <div class="w-layout-grid grid-18"><label class="w-checkbox"><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" class="w-checkbox-input"><span class="checkbox-label-3 w-form-label">Pearls</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label">Crystals</span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label-5 w-form-label">Coffee Jelly<br></span></label><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="w-form-label">Cream Cheese</span></label></div>
                                <div class="w-layout-grid grid-18"><label class="field-label-2">PHP 5.00</label><label class="field-label-3">PHP 5.00</label><label class="field-label-4">PHP 5.00</label><label class="field-label-5">PHP 10.00</label></div>
                              </div>
                            </form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                            <a href="#" class="button-2 w-button">Add To Cart</a>
                          </div>
                        </div> -->
                  </div>
              </div>
</div>



<!-- End SJDm Cream Cheese -->
   </div>

          
                    





<!-- 
          <div class="collection-list-wrapper-4 w-dyn-list">
            <div role="list" class="order-collection w-dyn-items w-row">
              <div role="listitem" class="menu-item w-dyn-item w-col w-col-6">
                <div class="food-card">
                  <a href="#" class="food-image-square w-inline-block"><img src="" alt="" class="food-image"></a>
                  <div class="food-card-content">
                    <a href="#" class="food-title-wrap w-inline-block">
                      <h6></h6>
                      <div class="price"></div>
                    </a>
                    <p class="paragraph"></p>
                    <div class="add-to-cart">
                      <form data-node-type="commerce-add-to-cart-form" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Add To Cart" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form>
                      <div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state">
                        <div>This product is out of stock.</div>
                      </div>
                      <div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror">
                        <div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="empty-state-3 w-dyn-empty">
              <div class="w-container">
                <div class="text-block-88">No items found.</div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=608bf558fad5f43399d39d27" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
 






</body>


</html>



<!-- Javascript -->

 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
  window.addEventListener('load', (event) => {
    //alert(1);
    loadmilktea();
    loadtakuyaki();
    validate();
    getCartCount();
  });

 
//  function myFunction() {
 	
//   var x = document.getElementById("milkteasize").value;
//   alert(x);
//   document.getElementById("demo").innerHTML = "PHP " + x;
// }
</script>






<?php
  session_start();
  if(isset($_SESSION["favcolor"])){
    
  }else{
    $_SESSION["favcolor"] = rand(1,999999);
  }

  $xmlmycart = new DOMDocument();
  $xmlmycart->load("xml/mycart.xml");

  $prodXML = new DOMDocument();
  $prodXML->load("xml/products.xml");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

  ::-webkit-scrollbar {
  width: 5px;

}

/* Track */
::-webkit-scrollbar-track {
  background: #fffefa; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #6a000c; 
  border-radius:5px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}


.div-block-105
{
position: absolute;
  left: auto;
  top: 0%;
  right: 0%;
  bottom: auto;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 30px;
  height: 30px;
  margin-top: -13px;
  margin-right: -6px;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: 50%;
  background-color: #000;
}

.heading-35 {
  margin-top: 0px;
  margin-bottom: 0px;
  color: #fff;
  font-size: 15px;
}



</style>


<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 -->
<script src="scripts/order.js"></script>
<div data-collapse="medium" data-animation="default" data-duration="400" id="Navigation" data-w-id="33c883c6-4afc-cc73-3bca-d2857a9d4bc2" role="banner" class="navbar w-nav">
    <div class="navigation-container">
      <div class="navigation-left">
        <a href="index.php" aria-current="page" class="brand w-nav-brand w--current"><img src="images/logo-png.png" width="118" sizes="(max-width: 479px) 25vw, 118px" srcset="images/logo-png-p-500.png 500w, images/logo-png-p-1080.png 1080w, images/logo-png-p-1600.png 1600w, images/logo-png-p-2000.png 2000w, images/logo-png-p-2600.png 2600w, images/logo-png-p-3200.png 3200w, images/logo-png.png 4864w" alt=""></a>
      </div>
      <div class="navigation-right">
        <nav role="navigation" class="nav-menu w-nav-menu">
          <a href="index.php" aria-current="page" class="nav-link w-nav-link w--current">Home</a>
          <a href="order.php" class="nav-link w-nav-link">Order</a>
          <a href="company.php" class="nav-link w-nav-link">Company</a>
          <a href="faq.php" class="nav-link w-nav-link">FAQ</a>
          <a href="contact.php" class="nav-link w-nav-link">Contact</a>
          <input type="hidden" name="custnumber" id="custnumber" value="<?php echo $_SESSION['favcolor']; ?>">
        </nav>
        <div data-hover="" data-delay="0" class="dropdown-2 w-dropdown" onclick = "loadcart();">
          <div class="dropdown-toggle w-dropdown-toggle">
            <div class="w-icon-dropdown-toggle"></div>
            <div class="text-block-91"></div>
             <div class="div-block-105" >
              <h1 class="heading-35" id="cartcount">0</h1>
            </div>
          </div>
          <nav class="dropdown-list w-dropdown-list">
            <div class="div-block-60" id="mycartdiv" style="overflow-y: scroll; width: auto;" >
              
            </div>
          </nav>
        </div>
        <div class="menu-button w-nav-button">
          <div class="icon w-icon-nav-menu"></div>
        </div>
        <div data-node-type="commerce-cart-wrapper" data-open-product="" data-wf-cart-type="rightSidebar" data-wf-cart-query="" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper">
          <a href="#" data-node-type="commerce-cart-open-link" class="w-commerce-commercecartopenlink cart-button w-inline-block"><svg class="w-commerce-commercecartopenlinkicon cart-icon" width="17px" height="17px" viewbox="0 0 17 17">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path d="M2.60592789,2 L0,2 L0,0 L4.39407211,0 L4.84288393,4 L16,4 L16,9.93844589 L3.76940945,12.3694378 L2.60592789,2 Z M15.5,17 C14.6715729,17 14,16.3284271 14,15.5 C14,14.6715729 14.6715729,14 15.5,14 C16.3284271,14 17,14.6715729 17,15.5 C17,16.3284271 16.3284271,17 15.5,17 Z M5.5,17 C4.67157288,17 4,16.3284271 4,15.5 C4,14.6715729 4.67157288,14 5.5,14 C6.32842712,14 7,14.6715729 7,15.5 C7,16.3284271 6.32842712,17 5.5,17 Z" fill="currentColor" fill-rule="nonzero"></path>
              </g>
            </svg>
            <div class="w-commerce-commercecartopenlinkcount cart-quantity">0</div>
          </a>
          <div data-node-type="commerce-cart-container-wrapper" style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar">
            <div data-node-type="commerce-cart-container" class="w-commerce-commercecartcontainer">
              <div class="w-commerce-commercecartheader cart-header">
                <h4 class="w-commerce-commercecartheading heading-6">Your Order</h4>
                <a href="#" data-node-type="commerce-cart-close-link" class="w-commerce-commercecartcloselink w-inline-block"><svg class="icon-2" width="16px" height="16px" viewbox="0 0 16 16">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g fill-rule="nonzero" fill="#333333">
                        <polygon points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8"></polygon>
                      </g>
                    </g>
                  </svg></a>
              </div>
              <div class="w-commerce-commercecartformwrapper">
                <form data-node-type="commerce-cart-form" style="display:none" class="w-commerce-commercecartform">
                  <script type="text/x-wf-template" id="wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4be4"></script>
                  <div class="w-commerce-commercecartlist" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4be4"></div>
                  <div class="w-commerce-commercecartfooter cart-footer">
                    <div class="w-commerce-commercecartlineitem cart-line-item">
                      <div class="text-block-84">Subtotal</div>
                      <div class="w-commerce-commercecartordervalue text-block"></div>
                    </div>
                    <div>
                      <div data-node-type="commerce-cart-quick-checkout-actions" class="web-payments-2">
                        <a data-node-type="commerce-cart-apple-pay-button" style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat" class="w-commerce-commercecartapplepaybutton apple-pay">
                          <div></div>
                        </a>
                        <a data-node-type="commerce-cart-quick-checkout-button" style="display:none" class="w-commerce-commercecartquickcheckoutbutton"><svg class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewbox="0 0 16 16">
                            <defs>
                              <polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
                              <polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                              <path fill="#4285F4" d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"></path>
                              <path fill="#34A853" d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"></path>
                              <g transform="translate(0 4)">
                                <mask id="google-mark-b" fill="#fff">
                                  <use xlink:href="#google-mark-a"></use>
                                </mask>
                                <path fill="#FBBC04" d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337" mask="url(#google-mark-b)"></path>
                              </g>
                              <mask id="google-mark-d" fill="#fff">
                                <use xlink:href="#google-mark-c"></use>
                              </mask>
                              <path fill="#EA4335" d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291" mask="url(#google-mark-d)"></path>
                            </g>
                          </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16">
                            <g fill="none" fill-rule="evenodd">
                              <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                              <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
                              <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
                              <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
                            </g>
                          </svg>
                          <div>Pay with browser.</div>
                        </a>
                      </div>
                      <a href="checkout.html" value="Continue to Checkout" data-node-type="cart-checkout-button" class="w-commerce-commercecartcheckoutbutton checkout-button" data-loading-text="Hang Tight...">Continue to Checkout</a>
                    </div>
                  </div>
                </form>
                <div class="w-commerce-commercecartemptystate empty-state">
                  <div>We couldn&#x27;t find any items in your cart.</div>
                  <div class="button-arrow-wrap">
                    <a href="order.html" class="button w-button">Start an Order</a><img src="images/Drawn-Arrow.svg" alt="" class="arrow-drawn">
                  </div>
                </div>
                <div style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate">
                  <div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity." data-w-cart-checkout-error="Checkout is disabled on this site." data-w-cart-general-error="Something went wrong when adding this item to the cart." data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue.">Product is not available in this quantity.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

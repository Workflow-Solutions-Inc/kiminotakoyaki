<?php

session_start();
$ses=$_SESSION["favcolor"];
$ses2 = "";
if(isset($_SESSION["checker"])){

}else{
  $_SESSION["checker"] = "0";
}



?>

<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu May 27 2021 00:52:03 GMT+0000 (Coordinated Universal Time)  -->


<html data-wf-page="608bf559fad5f42618d39d31" data-wf-site="608bf558fad5f43399d39d27">
<head>
  <meta charset="utf-8">
  <title>Chomp - Webflow Ecommerce HTML Website Template</title>
  <meta content="Chomp - Webflow Ecommerce HTML Website Template" property="og:title">
  <meta content="Chomp - Webflow Ecommerce HTML Website Template" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
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
 
  
        <div class="menu-button w-nav-button">
          <input type="hidden" id="checkerid" value="<?php echo $_SESSION['checker']; ?>">
          <?php  $_SESSION["checker"] = "1"; ?>
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



  <!-- Customer Info -->
 
    <div class="container-order" id="orderplacediv">
      <div class="w-commerce-commercelayoutmain order-full">
        <div class="w-commerce-commercecheckoutcustomerinfosummarywrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
            <h5>Customer Information</h5>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent" >
            <div class="w-commerce-commercecheckoutrow">
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel field-label">Email</label>
                  <div></div>
                </div>
              </div>
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel field-label">Shipping Address</label>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                  </div>
                  <div></div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="w-commerce-commercecheckoutshippingsummarywrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
            <h5>Shipping Method</h5>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent">
            <div class="w-commerce-commercecheckoutrow">
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem">
                  <div></div>
                  <div></div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="w-commerce-commercecheckoutpaymentsummarywrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader">
            <h5>Payment Info</h5>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent">
            <div class="w-commerce-commercecheckoutrow">
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel field-label">Payment Info</label>
                  <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                  </div>
                  <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                    <div></div>
                    <div> / </div>
                    <div></div>
                  </div>
                </div>
              </div>
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel field-label">Billing Address</label>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                  </div>
                  <div></div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="w-commerce-commercecheckoutorderitemswrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
            <h5>Items in Order</h5>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent">
            <script type="text/x-wf-template" id="wf-template-5e83ed851366eb50cd9ed4d4000000000051"></script>
            <div class="w-commerce-commercecheckoutorderitemslist" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-5e83ed851366eb50cd9ed4d4000000000051"></div>
          </fieldset>
        </div>
      </div>
      <div class="w-commerce-commercelayoutsidebar order-column">
        <div class="order-detail">
          <div class="w-commerce-commercecheckoutordersummarywrapper">
            <div class="w-commerce-commercecheckoutsummaryblockheader">
              <h5>Order Summary</h5>
            </div>
            <fieldset class="w-commerce-commercecheckoutblockcontent">
              <div class="w-commerce-commercecheckoutsummarylineitem">
                <div>Subtotal</div>
                <div></div>
              </div>
              <script type="text/x-wf-template" id="wf-template-5e83ed851366eb50cd9ed4d400000000006b">%3Cdiv%20class%3D%22w-commerce-commercecheckoutordersummaryextraitemslistitem%22%3E%3Cdiv%3E%3C%2Fdiv%3E%3Cdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E</script>
              <div class="w-commerce-commercecheckoutordersummaryextraitemslist" data-wf-collection="database.commerceOrder.extraItems" data-wf-template-id="wf-template-5e83ed851366eb50cd9ed4d400000000006b">
                <div class="w-commerce-commercecheckoutordersummaryextraitemslistitem">
                  <div></div>
                  <div></div>
                </div>
              </div>
              <div class="w-commerce-commercecheckoutsummarylineitem">
                <div>Total</div>
                <div class="w-commerce-commercecheckoutsummarytotal"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="w-layout-grid footer-grid">
        <div class="footer-column"><img src="images/logo-whitetext-png.png" width="191" sizes="100vw" srcset="images/logo-whitetext-png-p-500.png 500w, images/logo-whitetext-png-p-1080.png 1080w, images/logo-whitetext-png-p-1600.png 1600w, images/logo-whitetext-png-p-2000.png 2000w, images/logo-whitetext-png-p-2600.png 2600w, images/logo-whitetext-png-p-3200.png 3200w, images/logo-whitetext-png.png 4864w" alt="" class="footer-logo"></div>
        <div id="w-node-_67f7db32-28d2-9f37-8b84-a159dcc6da5e-dcc6da57" class="footer-column">
          <a href="index.html" class="footer-link">Home</a>
          <a href="order.html" class="footer-link">Order</a>
          <a href="faq.html" class="footer-link">FAQ</a>
          <a href="mailto:hello@website.com?subject=Hi" class="footer-link">Contact</a>
        </div>
      </div>
      <div class="footer-legal">
        <div class="footer-detail-left"></div>
        <div class="footer-detail-right">
          <div class="social-icon-wrap">
            <a href="#" class="social-link w-inline-block">
              <div class="text-block-83"></div>
            </a>
            <a href="#" class="social-link w-inline-block">
              <div class="text-block-83"></div>
            </a>
          </div>
        </div>
      </div>
    </div>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=608bf558fad5f43399d39d27" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>


<script type="text/javascript">

  window.onload = function(value){
    //alert(document.getElementById("checkerid").value);
    if(localstorage.getItem("checkers") == "1"){
       getorders();
       localStorage.setItem("checkers", "2");
    }else{
    }
    
   // 
  }
  function getorders()
  {
    $.ajax({
                type: 'GET',
                url: 'process/orderplaced.php',
                data:{},

                beforeSend:function(){
                },
                success: function(data){

                }

          });
  }
</script>
<?php
  
  $output = '<h4 class="heading-22">Items in Order</h4> ';
   $custnum=$_GET["action"];
  $xmlproduct = new DOMDocument();
  $xmlproduct->load("../xml/products.xml");

  $xmlcart = new DOMDocument();
  $xmlcart->load("../xml/mycart.xml");
  $mycarts = $xmlcart->getElementsByTagName("mycarts");
  $count=0;
  foreach ($mycarts as $mycart)
  { 
    if($mycart->getElementsByTagName("customername")->item(0)->nodeValue==$custnum){
      $count++;
    }
   
  }



 echo $count;


?>
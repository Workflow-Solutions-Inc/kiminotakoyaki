<?php
session_start();
 $custnum = $_SESSION["favcolor"];


  $xmlcart = new DOMDocument();
  $xmlcart->load("../xml/mycart.xml");

  $xmlorder = new DOMDocument();
  $xmlorder->formatOutput = true;
  $xmlorder->preserveWhiteSpace = false;
  $xmlorder->load("../xml/orders.xml");
  
$orderid= rand (0,1000000000000);
$_SESSION['orderid'] = $orderid;
  $mycarts = $xmlcart->getElementsByTagName("mycarts");
   // echo count($mycarts);
  foreach ($mycarts as $mycart)
{
   
    if($mycart->getElementsByTagName("customername")->item(0)->nodeValue == $custnum){
      $flavor = $mycart->getElementsByTagName("prodFlavor")->item(0)->nodeValue;
      $tops = $mycart->getElementsByTagName("prodToppings")->item(0)->nodeValue;
      $code = $mycart->getElementsByTagName("prodCode")->item(0)->nodeValue;
      $customername = $mycart->getElementsByTagName("customername")->item(0)->nodeValue;
      $qty = $mycart->getElementsByTagName("qty")->item(0)->nodeValue;
      

      $newOrder = $xmlorder->createElement("order");

      $newOrder->appendChild($xmlorder->createElement("qty",$qty));
      $newOrder->appendChild($xmlorder->createElement("customername",$customername));
      $newOrder->appendChild($xmlorder->createElement("prodCode",$code));
      $newOrder->appendChild($xmlorder->createElement("prodFlavor",$flavor));
      $newOrder->appendChild($xmlorder->createElement("prodToppings",$tops));
      $newOrder->appendChild($xmlorder->createElement("orderid",$orderid));

      $xmlorder->getElementsByTagName("orders")->item(0)->appendChild($newOrder);
      
      //$xmlcart->getElementsByTagName("mycart")->item(0)->removeChild($mycart);
      
      
      // echo $orderid."<br>";

    }


}



//$xmlcart->save("../xml/mycart.xml");
$xmlorder->save("../xml/orders.xml");



?>
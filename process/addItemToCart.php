<?php
session_start();

$xml = new DOMDocument;
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load("../xml/mycart.xml");




$user = $_SESSION["favcolor"];
$code = $_GET["prodCode"];
$qty = $_GET["prodQty"];
$flavor = $_GET["prodflavor"];
$top = $_GET["prodtop"];



$flag = 0;

			$mycarts = $xml->getElementsByTagName("mycarts");

			foreach($mycarts as $order){

			if($order->getElementsByTagName("prodCode")->item(0)->nodeValue == $code && $order->getElementsByTagName("customername")->item(0)->nodeValue == $user
				&& $order->getElementsByTagName("prodFlavor")->item(0)->nodeValue == $flavor && $order->getElementsByTagName("prodToppings")->item(0)->nodeValue == $top){
				$flag = 1;
				$qty += $order->getElementsByTagName("qty")->item(0)->nodeValue;

					$newOrder = $xml->createElement("mycarts");
					
					$newOrder->appendChild($xml->createElement("qty",$qty));
					$newOrder->appendChild($xml->createElement("customername",$user));
					$newOrder->appendChild($xml->createElement("prodCode",$code));
					$newOrder->appendChild($xml->createElement("prodFlavor",$flavor));
					$newOrder->appendChild($xml->createElement("prodToppings",$top));
					
					$xml->getElementsByTagName("mycart")->item(0)->replaceChild($newOrder,$order);
					$xml->save("../xml/mycart.xml");


					// echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>";
					// echo "Added To Cart";
					
			}
		}
			
			if($flag==0){
				$newOrder = $xml->createElement("mycarts");

				$newOrder->appendChild($xml->createElement("qty",$qty));
				$newOrder->appendChild($xml->createElement("customername",$user));
				$newOrder->appendChild($xml->createElement("prodCode",$code));
				$newOrder->appendChild($xml->createElement("prodFlavor",$flavor));
				$newOrder->appendChild($xml->createElement("prodToppings",$top));

				$xml->getElementsByTagName("mycart")->item(0)->appendChild($newOrder);
				$xml->save("../xml/mycart.xml");
				//$flag = "added";
				$flag = 0;
				// echo "Added To Cart";
			}

			
			

			


?>
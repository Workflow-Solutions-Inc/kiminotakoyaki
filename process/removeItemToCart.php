<?php
session_start();

$xml = new DOMDocument;
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load("../xml/mycart.xml");



//.$code.'-'.$flavor.'-'.$tops.'-'.$custnum.';
$arr= explode(":", $_GET["action"]);
$newflavorval = "";



			$mycarts = $xml->getElementsByTagName("mycarts");

			foreach($mycarts as $order){
			if($arr[1]=="small" || $arr[1]=="medium" || $arr[1]=="large"){
				$arr2 = explode("-", $order->getElementsByTagName("prodFlavor")->item(0)->nodeValue);
				$newflavorval = $arr2[0];
			}else{
				$newflavorval = $order->getElementsByTagName("prodFlavor")->item(0)->nodeValue;
			}
			if($order->getElementsByTagName("prodCode")->item(0)->nodeValue == $arr[0] && $order->getElementsByTagName("customername")->item(0)->nodeValue == $arr[3]
				&&  $newflavorval == $arr[1] && $order->getElementsByTagName("prodToppings")->item(0)->nodeValue == $arr[2]){

					
					$xml->getElementsByTagName("mycart")->item(0)->removeChild($order);
					$xml->save("../xml/mycart.xml");
					// echo "Product successfully removed";
			}
		}

			//echo $_GET["action"];

			


?>
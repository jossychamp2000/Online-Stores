<?php

include("ProductDatabase.inc.php");

$con = new ProductDatabase("localhost", "test", "test", "store");
$query = "SELECT description, price, quantity FROM products";
$result = $con->clean_and_query($query);

while ( $product = $con->getProduct($result))
{
      $product->printProduct();
      echo "----------------------<br>\n";
}
?>
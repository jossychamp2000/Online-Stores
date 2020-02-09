<?php

   $orderid = $_POST['orderid'];

   $query = "UPDATE orders SET status = 'shipped' WHERE orderid = $orderid";
   $result = mysql_query($query) or die(mysql_error());
   
   if ($result)
   {
      echo "<h2>Order processed.</h2>\n";
   } else
   {
      echo "<h2>Unable to process order at this time.</h2>\n";
   }
   echo "<a href=\"admin.php?content=process\">Process more orders</a>\n";
?>
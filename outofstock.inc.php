<?php

   if (!isset($_SESSION['store_admin']))
   {
      echo "<h2>Sorry, you have not logged into the system</h2>\n";
      echo "<a href=\"admin.php\">Please login</a>\n";
   } else
   {
      echo "<h2>Out of Stock Products</h2><br>\n";

      $query = "SELECT * from products where quantity = 0";
      $result = mysql_query($query);

      while($row=mysql_fetch_array($result, MYSQL_ASSOC))
      {
         $prodid = $row['prodid'];
         $description = $row['description'];

         echo "<a href=\"admin.php?content=updateproduct&id=$prodid\">$description</a><br>\n";
      }
   }
?>
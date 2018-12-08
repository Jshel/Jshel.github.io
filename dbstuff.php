<?php
   $db = new SQLite3('flowers.db');
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $results = $db->query("SELECT (GENUS || ' ' || SPECIES) AS NAME, COMNAME FROM FLOWERS ORDER BY GENUS");
   echo "<table> <tr id = 'flowerTableRow'> <th> Common Name </th><th> Scientific Name </th></tr> <tr id = 'flowerTableRow'>";
   while ($row = $results->fetchArray()){
      echo "<td id = 'commonName'>".$row[COMNAME]."</td> <td id = 'scientificName'>".$row[NAME]."</td>";
   }
   echo "</tr></table>";
?>
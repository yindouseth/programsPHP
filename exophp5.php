 <?php
 $nombre_de_lignes = 1;

 while ($nombre_de_lignes <= 100){
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
 }
 ?>
 
  <?php
 $nombre_de_lignes = 1;

 while ($nombre_de_lignes <= 100){
   echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
   $nombre_de_lignes++;
 }
 ?>
<?php
 $elt = 4;
 echo " TABLE D'ADDITION";
 echo " <table border='1'>";

 echo "<tr>";
   echo"<th>+<th>";
   
   for ($i = 1; $i <= $elt; $i++){
      echo "<th> $i </th>";
   }
 echo "</tr>";
 for($i = 1; $i <= $elt; $i++){
   echo "<tr>";
   echo "<th>$i</th>";
   for ($j = 1; $j <= $elt; $j++){
         $k = $i + $j;
         echo "<td> $k </td>";
   }
   echo "</tr>"; 
 }
 ?>
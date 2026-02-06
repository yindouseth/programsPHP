 <?php
 $age_du_visiteur = 17;
 echo "$age_du_visiteur";
 echo "<br>";

 echo ($age_du_visiteur);
 echo "<br>";

 print "$age_du_visiteur";
 print "<br>";

 ?>
  <?php
 $age_du_visiteur = 17; // La variable est créée et vaut 17
 $age_du_visiteur = 23; // La variable est modifiée et vaut 23
 $age_du_visiteur = 55; // La variable est modifiée et vaut 55
 ?>
  <?php
 $nom_du_visiteur = "Mateo21";
 echo ("$nom_du_visiteur");
 echo "<br>";
 $nom_du_visiteur = 'Mateo21';
 echo ("$nom_du_visiteur");
 echo "<br>";

 ?>
  <?php
 $variable = "Mon \"nom\" est Mateo21";
 $variable = 'Je m\'appelle Mateo21';
 ?>
  <?php
 $je_suis_un_zero = true;
 $je_suis_bon_en_php = false;

 if ($je_suis_un_zero){
    echo "Bravo";
 }else {
    echo "Bon courage ";
 }
 ?>
 <?php 
 $pas_de_valeur = NULL;
 echo "<br>";
 ?>
  <?php
 $age_du_visiteur = 17;
 echo "Le visiteur a $age_du_visiteur ans";
 echo "<br>";
 ?>
 <?php
 $age_du_visiteur = 17;
 echo 'Le visiteur a $age_du_visiteur ans'; // Ne marche pas
  echo "<br>";
 ?>
 <?php
 $age_du_visiteur = 17;
 echo 'Le visiteur a ' . $age_du_visiteur . ' ans';
   echo "<br>";
 ?>
 <?php
 $nombre = 2 + 4  ;
 echo $nombre ;
 echo "<br>";

 ?>
 <?php
 $rayon = 4 ;
 define( "pi", 3.14);
 $circonférence = 2 * $rayon * pi ;
 echo " la circonférence est: $circonférence" ;

 ?>
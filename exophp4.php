 <?php
 $age = 8;
 if ($age <= 12)
 {
    echo "Salut gamin !";
 }
 ?>
 <br>
  <?php
 $age = 8;
 if ($age <= 12) // SI l'âge est inférieur ou égal à 12
 {
   echo "Salut gamin ! Bienvenue sur mon site !<br />";
   $autorisation_entrer = "Oui";
   $autorisation_entrer1 = true ;
 }else{ // SINON 
   echo "Ceci est un site pour enfants, vous êtes trop vieux pour
   pouvoir entrer. Au revoir !<br />";
   $autorisation_entrer = "Non";
   $autorisation_entrer1 = false ;
 }
 echo "Avez-vous l'autorisation d'entrer ? La réponse est :
 $autorisation_entrer";
 echo "<br>" ;
  ?>

 <?php
 if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
 {
 // instructions à exécuter quand on est autorisé à entrer
    echo " Félicitations, Bravo <br />";
    echo "<br>" ;
 }elseif ($autorisation_entrer == "Non") { // SINON SI on n'a pas l'autorisation d'entrer
 // instructions à exécuter quand on n'est pas autorisé à entrer
   echo " Désolé";
   echo "<br>" ;
 }else { // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
 
   echo "Euh, je ne connais pas ton âge, tu peux me le rappeler
   s'il te plaît ?";
   echo "<br>" ;
 }
 ?>

 
  <?php
 if ($autorisation_entrer1 == true)
 {
   echo "Bienvenue petit Zéro. :o)";
   echo "<br>" ;
 } elseif ($autorisation_entrer1 == false){

   echo "T'as pas le droit d'entrer !";
   echo "<br>" ;
 }
 ?>
  <?php
  $age = 9 ;
  $sexe = "fille";
 if ($age <= 12 AND $sexe == "garçon")
 {
   echo "Bienvenue sur le site de Captain Mégakill !"."<br>" ;

 }elseif ($age <= 12 AND $sexe == "fille")
 {
   echo "C'est pas un site pour les filles ici, retourne jouer à la Barbie !"."<br>" ;
  
 }

 ?>
 <?php
  if ($sexe == "fille" OR $sexe == "garçon")
 {
 echo "Salut Terrien !"."<br>" ;
 }
 else
 {
 echo "Euh, si t'es ni une fille ni un garçon, t'es quoi alors ?"."<br>" ;
 }
 ?>
 <?php
 $variable = 23 ;
 if ($variable == 23){
 echo '<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !';
 }
 ?>

 <?php
 if ($variable == 23)
 {
 ?>
  <strong>Bravo !</strong> Vous avez trouvé le nombre mystère !
 <?php
 }
 ?>

  <?php
 $note = 10;
 switch ($note) // on indique sur quelle variable on travaille
 { 
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros Zér0 !!!";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
 }
 ?>
// les conditions ternaires
 <?php
 $age = 24;
 if ($age >= 18){
    $majeur = true;
 }else{
 $majeur = false;
 }
 if($majeur){
  echo "L'âge est supérieur à 18";
 }else{
  echo "L'âge est inférieur à 18";
  echo "br";
  
 }
 ?>
 <?php
 $age = 24;
 echo $age >= 18 ? "L'âge est supérieur à 18" : "L'âge est inférieur à 18";
 
 ?>
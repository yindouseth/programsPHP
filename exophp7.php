<?php
echo "Hello World !";
echo "<br><br>";
?>

<?php
// La fonction array permet de créer un array
$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
?>

<?php
$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';
echo $prenoms[2];
echo "<br><br>";
$nbelts = count($prenoms);
for ($i = 0; $i < $nbelts; $i++) {
    echo $prenoms[$i];
    echo "<br>";
}
?>

<?php
$prenoms[] = 'François'; // Créera $prenoms[0]
$prenoms[] = 'Michel'; // Créera $prenoms[1]
$prenoms[] = 'Nicole'; // Créera $prenoms[2]
echo $prenoms[1];
echo "<br><br>";
?>

<?php
// On crée notre array $coordonnees
$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);
?>

<?php
$coordonnees['prenom'] = 'François';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 Rue du Paradis';
$coordonnees['ville'] = 'Marseille';
echo $coordonnees['ville'];
echo "<br><br>";
?>

<?php
// On crée notre array $prenoms
$prenoms = array(
    'François',
    'Michel',
    'Nicole',
    'Véronique',
    'Benoît'
);
// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++) {
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0] $prenoms[1] etc.
}
echo "<br><br>";
?>

<?php
$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
foreach ($prenoms as $element) {
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
echo "<br><br>";
?>


<?php
$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);
foreach ($coordonnees as $element) {
    echo $element . '<br />';
}
echo "<br><br>";
?>

<?php
$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);
foreach ($coordonnees as $cle => $element) {
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}
echo "<br><br>";
?>

<?php
$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);
echo '<pre>';
print_r($coordonnees);
echo '</pre>';
echo "<br><br>";
?>
<!---->
<?php
//array_key_exists('cle', $array);
//
?>

<?php
$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);
if (array_key_exists('nom', $coordonnees)) {
    echo 'La clé "nom" se trouve dans les coordonnées !';
}
echo "<br>";
if (array_key_exists('pays', $coordonnees)) {
    echo 'La clé "pays" se trouve dans les coordonnées !';
} else {
    echo 'La clé "pays" ne se trouve pas dans les coordonnées !';
}
echo "<br><br>";
?>

<?php
$fruits = array(
    'Banane',
    'Pomme',
    'Poire',
    'Cerise',
    'Fraise',
    'Framboise'
);
if (in_array('Myrtille', $fruits)) {
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}
echo "<br>";
if (in_array('Cerise', $fruits)) {
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}
echo "<br><br>";
?>

<?php
$fruits = array('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br><br>';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position . "<br><br>";
?>
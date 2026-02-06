<?php
// Table de multiplication avec boucle while 
echo "<div align='center'><table border = '1'>";
echo "<b><caption>TABLE DE MULTIPLICATION AVEC BOUCLE 
WHILE</caption></b>";
// Début affichage de la première ligne  
echo "<tr>";
echo "<td>*</td>";
$i = 1;
while ($i < 11) {
    echo "<td>$i</td>";
    $i++;
}
echo "</tr>";
// Fin affichage de la première ligne  
// Début affichage de la deuxième ligne et suivantes 
echo "<tr>";
$i = 1;
while ($i < 11) {
    echo "<td>$i</td>"; //  Affichage de la première cellule d'une ligne 
    $j = 1;
    while ($j < 11) {
        $k = $i * $j; // Calcul du produit 
        echo "<td>$k</td>"; //  Affichage des autres cellules d'une ligne 
        $j++;
    }
    echo "</tr>";
    // Fin affichage d'une ligne 
    $i++;
}
// Début affichage de la deuxième ligne et suivantes 
echo "</table></div>";
?>
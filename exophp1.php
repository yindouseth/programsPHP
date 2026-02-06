 <!DOCTYPE html>
 <html>
    <head>
        <title>Ceci est une page de test avec des balises 
PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises 
PHP.<br />
            <?php /* Insérer du code PHP ici */
                echo "Mon premier programme";
                echo "<br>" ;
                echo "Ceci est une page test: exophp1.php" ;
                echo "<br>" ;
            ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php
        /* Encore du PHP
 Toujours du PHP */
        ?>
        <?php echo "Ceci est du <strong>texte</strong>"; ?>
        <br>
        <?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?>
        <br>
        <?php echo 'Cette ligne a été écrite "uniquement" en PHP.'; ?>
        <?php
            echo "J'habite en Chine."; // Cette ligne indique où j'habite
            // La ligne suivante indique mon âge
            echo "J'ai 92 ans.";
        ?>
         <?php
            /* La ligne suivante indique mon âge
            Si vous ne me croyez pas...
            ... vous avez raison ;o) */
            echo "J'ai 92 ans.";
        
            echo '&lt;br&gt;';
        ?>
        

    </body>
 </html>
<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles
    <?php echo $_POST['prenom']; ?> !
</p>

<p>Ton message est :
    <?php echo $_POST['message']; ?> !
</p>

<p>Ton choix est :
    <?php echo $_POST['choix']; ?> !
</p>

<p>Les aliments que tu aimes manger : </p>
<p><?php if (isset($_POST['frites'])) {
    echo "* Frites";
} ?>
</p>
<p><?php if (isset($_POST['riz'])) {
    echo "* Riz";
} ?>
</p>
<p><?php if (isset($_POST['akoume'])) {
    echo "* Akoumè";
} ?>
</p>
<p><?php if (isset($_POST['steak'])) {
    echo "* Steak";
} ?>
</p>
<p><?php if (isset($_POST['epinards'])) {
    echo "* Epinard";
} ?>
</p>
<p><?php if (isset($_POST['huitres'])) {
    echo "* Huitres";
} ?>
</p>
<br><br><br>

<p>
    Les aliments que vous aimez manger : <br>
    <?php
    foreach (["frites", "riz", "akoume", "steak", "epinards", "huitres"] as $checkbox) {
        // code...
        if (isset($_POST[$checkbox])) {
            echo "* " . $checkbox . "<br>";
        }
    }
    ?>
</p>Aimes-tu les fruits ?<p>
<p>
    <?php if (isset($_POST["Fruits"])) {
        echo "* " . $_POST["Fruits"] . "";
    } ?>
</p>

<p>Si tu veux faire une autre saisie <a href="exophp9.php">clique ici</a> pour revenir à la page exophp9.php.</p>
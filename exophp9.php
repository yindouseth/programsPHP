<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
</p>

<form action="exophp9_1.php" method="post">
    <p>
        <label for="prenom">Prenom : </label>
        <input type="text" name="prenom" />
    </p>

    <p>
        <label for="message">Ton message : </label><br>
        <textarea name="message" rows="8" cols="45" placeholder="Ton message ici."></textarea>
    </p>

    <p>
        <label for="choix">Ton choix : </label>
        <select name="choix" id="choix">
            <option value="choix1">Choix 1</option>
            <option value="choix2">Choix 2</option>
            <option value="choix3">Choix 3</option>
            <option value="choix4">Choix 4</option>
        </select>
    </p>

    <p>
        <p>
        Cochez les aliments que vous aimez manger :<br />
        <input type="checkbox" name="frites" id="frites" tabindex="180" /> <label
              for="frites">Frites</label><br />
        <input type="checkbox" name="riz" id="riz" tabindex="190" /> <label
              for="riz">Riz</label><br />
        <input type="checkbox" name="akoume" id="akoume" tabindex="190" checked/> <label
              for="akoume">Akoumé</label><br />
        <input type="checkbox" name="steak" id="steak" tabindex="200" /> <label
              for="steak">Steak haché</label><br />
        <input type="checkbox" name="epinards" id="epinards" tabindex="210" />
        <label for="epinards">Epinards</label><br />
        <input type="checkbox" name="huitres" id="huitres" tabindex="220" /> <label
              for="huitres">Huitres</label>
      </p>
    </p>

    <p>
        Aimez-vous les frites ?
        <input type="radio" name="frites" value="oui" id="oui"
        checked="checked" /> <label for="oui">Oui</label>
        <input type="radio" name="frites" value="non" id="non" /> <label
        for="non">Non</label>
    </p>

    <p>
        <input type="submit" value="Valider" /> &nbsp;&nbsp;
        <input type="reset" value="Réinitialiser" />
    </p>
</form>
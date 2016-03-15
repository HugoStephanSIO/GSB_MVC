<div id="contenu">
      <h2>Identification utilisateur</h2>

<form method="POST" action="index.php?uc=connexion&action=valideConnexion">   
    <p>
        <label for="nom">Login*</label>
        <input id="login" type="text" name="login"  size="30" maxlength="45">
    </p>
    <p>
	<label for="mdp">Mot de passe*</label>
	<input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
    </p><p>
        <input type="radio" name="typeCo" value="visiteur">Visiteur
        <input type="radio" name="typeCo" value="comptable" checked="checked">Comptable
        <br/><br/>
        <input class="myButton" type="submit" value="Valider" name="valider">
        <input class="myButton" type="reset" value="Annuler" name="annuler"> 
    </p>
</form>

</div>
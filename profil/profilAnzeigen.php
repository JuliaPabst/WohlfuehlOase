<h2>Mein Profil</h2>

<p class="listen">Anrede: <?php echo $_SESSION["anrede"]?></p>
<p class="listen">Vorname: <?php echo $_SESSION["vorname"]?></p>
<p class="listen">Nachname: <?php echo $_SESSION["nachname"]?></p>
<p class="listen">E-Mail: <?php echo $_SESSION["email"]?></p>
<p class="listen">Username: <?php echo $_SESSION["usernameLoggedIn"]?></p>
 
<form action="index.php?site=profil" method="post">
    <input name="bearbeiten" value="ja" hidden>
    <button type= submit>Profil bearbeiten</button>
</form>

<?php
if(isset($_POST["bearbeiten"])){
    echo '
    <form action="index.php?site=profil" method="post">
        <div>
        <label for="passwortLoggedIn">Passwort:</label>
        <input 
        type="password"
        name="passwortLoggedIn"
        />
        </div>
        <button type="submit">Senden</button>
    </form>';
}
?>
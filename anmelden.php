<form action = "index.php?site=homepage" method = "post">
  <fieldset>
    <legend>Anmelden</legend>
    <div>
      <label for="usernameLoggedIn">Username: </label> 
      <input
        type="text"
        name="usernameLoggedIn"
        placeholder="Username"
        required
      />
    </div>
    <div>
      <label for="passwortLoggedIn">Passwort: </label>
      <input
        type="password"
        name="passwortLoggedIn"
        placeholder="Passwort"
        required
      />
    </div>
    <button type="submit" >Submit</button>
  </fieldset>
</form>
   
<?php 
?>

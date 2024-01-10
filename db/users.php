<h2> Alle User</h2>

<?php 

if(isset($_POST["userBearbeiten"])){
    $_SESSION["userBearbeiten"] = $_POST["userBearbeiten"];
    $_SESSION["selectedUser"] = $_POST['Username'];
}


if(isset($_POST["changeType"])) {
    $_SESSION["changeType"] = $_POST["changeType"];
  }

  require("dbaccess.php");

  $sql = "SELECT id, Username, Passwort, Anrede, Vorname, Nachname, Email, Newsletter, aktiv FROM users";
  $result = $db_obj->query($sql);
  while ($row = $result->fetch_array()) { 
    if(isset($_SESSION["userBearbeiten"]) && $_SESSION["userBearbeiten"] == 1 && ((isset($_POST["Username"]) && $_POST["Username"] == $row["Username"]) || (isset($_SESSION["selectedUser"] ) && $_SESSION["selectedUser"] == $row["Username"]))) {
        $_SESSION["Vorname"] = $row["Vorname"];
        $_SESSION["Nachname"] = $row["Nachname"];
        echo  '<form action="db/checkprofilbearbeiten.php" method="post">';
    if(isset($_SESSION["anredeVergleich"]) && ($_SESSION["anredeVergleich"] == 0)){
              echo "<label style='font-weight: 600;'>Wählen Sie eine Anrede!</label>";
            }
    echo '<div>
        <label for="anrede">Anrede:</label>
        <select name="anrede" required>
            <option disabled selected>Bitte auswählen</option>
            <option value="Frau">Frau</option>
            <option value="Herr">Herr</option>
            <option value="Keine Anrede">Keine Anrede</option>
        </select>
        </div>';
    if(isset($_SESSION["vornameVergleich"]) && ($_SESSION["vornameVergleich"] == 0)){
        echo "<label style='font-weight: 600;'>Geben Sie einen Vornamen ohne Sonderzeichen ein!</label>";
    }
    echo '<div>
        <label for="vorname">Vorname:</label>
        <input
            type="text"
            name="vorname"
            value="'.$row["Vorname"].'"
            required
        />
        </div>';
      if(isset($_SESSION["vornameVergleich"]) && ($_SESSION["vornameVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Geben Sie einen Nachnamen ohne Sonderzeichen ein!</label>";
        }
    echo '<div>
        <label for="nachname">Nachname:</label>
        <input
            type="text"
            name="nachname"
            value="'.$row["Nachname"].'"
            required
        />
        </div>';
    if(isset($_SESSION["emailVergleich"]) && ($_SESSION["emailVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Geben Sie eine gültige Email-Adresse ein!</label>";
    }
    echo '<div>
        <label for="email">E-Mail:</label>
        <input
            type="email"
            name="email"
            value="'.$row["Email"].'"
            required
        />
        </div>';
    if(isset($_SESSION["bereitsAccount"]) && $_SESSION["bereitsAccount"] == 0){
    echo "<label style='font-weight: 600;'>Dieser Username ist leider bereits vergeben!</label>";
    }
    echo '<div>
        <label for="username">Username:</label>
        <input
            type="text"
            name="username"
            value="'.$row["Username"].'"
            required
        />
        </div>';
    if(isset($_SESSION["passwortVergleich"]) && ($_SESSION["passwortVergleich"] == 0)){
        echo "<label style='font-weight: 600;'>Passwörter stimmen nicht überein!</label>";
    }
    echo '<div>
        <label for="passwort1">Passwort:</label>
        <input
            type="password"
            name="passwort1"
            required
        />
        </div>';
    echo '<div>
        <label for="passwort2">Passwort wiederholen:</label>
        <input
            type="password"
            name="passwort2"
            required
        />
        </div>
        <div>
        <input type="checkbox" name="newsletter"'; 
        if($row["Newsletter"] == 1){echo "checked";}
        echo 'class="checkbox"/>
        <label for="newsletter">Zum Newsletter anmelden!</label>
      </div>
      <div>
        <input type="checkbox" name="aktiv"'; 
        if($row["aktiv"] == "aktiv"){echo "checked";}
        echo 'class="checkbox"/>
        <label for="aktiv">aktiv</label>
      </div>
    <input name="changeType" value="admin" hidden>
    <input name="currentUsername" value="'.$row["Username"].'" hidden>
    <button type="submit">Senden</button>
    </form>';
    } else {
        echo '<div class="container-fluid">
            <div class="row first-row">
            <div class="col-lg-6 px-0"><p>Username:</p></div>
            <div class="col-lg-6 px-0"><p>'.$row["Username"].'</p></div>
            </div>
            <div class="row first-row">
            <div class="col-lg-6 px-0"><p>Vorname:</p></div>
            <div class="col-lg-6 px-0"><p>'.$row["Vorname"].'</p></div>
            </div>
            <div class="row first-row">
            <div class="col-lg-6 px-0"><p>Nachname:</p></div>
            <div class="col-lg-6 px-0"><p>'.$row["Nachname"].'</p></div>
            </div>';
        echo '<form action="index.php?site=users" method="POST">
        <input name="Username" value="'.$row['Username'].'" hidden>
        <input name="changeType" value="admin" hidden>
        <input name="userBearbeiten" value="1" hidden>
        <button type="submit">Bearbeiten</button>
        </form>';
    }
  } 
?>
<?php

if(isset($_POST["anreise"])){
    $_SESSION["anreise"] = $_POST["anreise"];
}

if(isset($_POST["abreise"])){
    $_SESSION["abreise"] = $_POST["abreise"];
}

if(isset($_POST["fruehstueck"])){
    if(isset($_POST["fruehstueck"]) == "on"){
        $_SESSION["fruehstueck"] = "ja";
    }
}

if(isset($_POST["parkplatz"])){
    if(isset($_POST["parkplatz"]) == "on"){
        $_SESSION["parkplatz"] = "ja";
    }
}

if(isset($_POST["haustier"])){
    if(isset($_POST["haustier"]) == "on"){
        $_SESSION["haustier"] = "ja";
    }
}

?>

<h2> Alle Buchungen</h2>

<h3>Buchung 1</h3>

<table>
  <tr>
    <td class="listen">Anreise:</th>
    <td class="listen"><?php if(isset($_SESSION["anreise"])){echo $_SESSION["anreise"];}?></th>
  </tr>
  <tr>
    <td class="listen">Abreise:</th>
    <td class="listen"><?php if(isset($_SESSION["abreise"])){echo $_SESSION["abreise"];}?></th>
  </tr>
  <tr>
    <td class="listen">Mit Frühstück:</th>
    <td class="listen"><?php if(isset($_SESSION["fruehstueck"])){echo $_SESSION["fruehstueck"];}?></th>
  </tr>
  <tr>
    <td class="listen">Mit Parkplatz:</th>
    <td class="listen"><?php if(isset($_SESSION["parkplatz"])){echo $_SESSION["parkplatz"];}?></th>
  </tr>
  <tr>
    <td class="listen">Mit Haustier:</th>
    <td class="listen"><?php if(isset($_SESSION["haustier"])){echo $_SESSION["haustier"];}?></th>
  </tr>
  <tr>
    <td class="listen">Buchungsstatus:</th>
    <td class="listen"><?php if(isset($_SESSION["buchungsStatus"])){echo $_SESSION["buchungsStatus"];}?></th>
  </tr>
</table>

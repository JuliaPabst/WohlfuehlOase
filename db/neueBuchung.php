<form action="db/checkreservieren.php" method="post">
    <legend>Neue Buchung</legend>
    <div><label>80€ pro Zimmer pro Nacht</label></div>
    <?php 


        require("dbaccess.php");

        $sql = "SELECT Anreise, Abreise FROM buchungen";
        $result = $db_obj->query($sql);
        $alreadyPrintedAusgebuchtHeadline = 0;

        while ($row = $result->fetch_array()) { 
            if($alreadyPrintedAusgebuchtHeadline == 0){
                echo '<div><label style="font-weight: 600;">Bereits ausgebuchte Zeiträume:</label></div>';
                $alreadyPrintedAusgebuchtHeadline++;
            }
            
            echo '<div><label>'.$row['Anreise'].' bis '.$row['Abreise'].'</label></div>';
        }

        
        if(isset($_SESSION["schonAusgebucht"] ) && $_SESSION["schonAusgebucht"] == 1){
            echo "<label style='font-weight: 600;'>Unsere Zimmer sind zu diesem Zeitpunkt leider schon ausgebucht!</label></br>";
        }
        
        if(isset($_SESSION["anreiseVorHeute"]) && $_SESSION["anreiseVorHeute"] == 1){
            echo "<label style='font-weight: 600;'>Wählen Sie ein Anreisedatum in der Zukunft!</label></br>";
        }
        
        if(isset($_SESSION["anreiseNachAbreise"]) && $_SESSION["anreiseNachAbreise"] == 1){
            echo "<label style='font-weight: 600;'>Sie müssen anreisen, bevor Sie abreisen können!</label></br>";
        }
    ?>

    <label for="anreise">Anreise:</label>
    <input type="date" name="anreise" required>

    <?php 
        if(isset($_SESSION["abreiseVorHeute"]) && $_SESSION["abreiseVorHeute"] == 1){
            echo "<label style='font-weight: 600;'>Wählen Sie ein Abreisedatum in der Zukunft!</label></br>";
        }
    ?>

    <label for="abreise">Abreise:</label>
    <input type="date" name="abreise" required>
    <div>
        <label for="fruehstueck">Mit Frühstück: 15€ Aufpreis</label>
        <input type="checkbox" name="fruehstueck" class="checkbox" checked/>
    </div>
    <div>    
        <label for="parkplatz">Mit Parkplatz: 15€ Aufpreis</label>
        <input type="checkbox" name="parkplatz" class="checkbox"/>
    </div>
    <div>
        <label for="haustier">Mit Haustier: 15€ Aufpreis</label>
        <input type="checkbox" name="haustier" class="checkbox" />
    </div>
    <label for="infosHaustier">Mehr Informationen zum Haustier:</label>
    <input type="text" name="infosHaustier">
    <input type="submit">
</form>
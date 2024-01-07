<form action="db/checkcms.php" enctype="multipart/form-data" method="post">
    <?php
      if(isset($_SESSION["thumbnailVergleich"]) && ($_SESSION["thumbnailVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Fügen Sie ein Thumbnail hinzu!</label>";
        }
    ?>
    <label for="thumbnail">Thumbnail</label>      
    <input type="file" name="thumbnail" accept="image/jpeg">    
    <?php
      if(isset($_SESSION["titelVergleich"]) && ($_SESSION["titelVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Fügen Sie einen Titel hinzu!</label>";
        }
    ?>
    <label for="titel">Titel</label>   
    <input type="text" name="titel" required>
    <?php
      if(isset($_SESSION["leadVergleich"]) && ($_SESSION["leadVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Fügen Sie einen Lead hinzu!</label>";
        }
    ?>
    <label for="lead">Lead</label>   
    <textarea name="lead" required></textarea>
    <?php
      if(isset($_SESSION["textVergleich"]) && ($_SESSION["textVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Fügen Sie Text hinzu!</label>";
        }
    ?>
    <label for="text">Text</label>
    <textarea name="text" required></textarea>
    <button type="submit">Senden</button>
</form>


<?php
    session_start();

    $redirectToCMS = 0; 

    // Checken, ob Titel vorhanden ist
    if(!isset($_POST["titel"]) || $_POST["titel"] == ""){
        $_SESSION["titelVergleich"] = 0;
        $redirectToCMS = 1;
    } else {
        $_SESSION["titelVergleich"] = 1;
        $_SESSION["Titel"] = $_POST["titel"];
    }

    // Checken, ob Lead vorhanden ist
    if(!isset($_POST["lead"]) || $_POST["lead"] == ""){
        $_SESSION["leadVergleich"] = 0;
        $redirectToCMS = 1;
    } else {
        $_SESSION["leadVergleich"] = 1;
        $_SESSION["Lead"] = $_POST["lead"];
    }

    // Checken, ob Text vorhanden ist
    if(!isset($_POST["text"]) || $_POST["text"] == ""){
        $_SESSION["textVergleich"] = 0;
        $redirectToCMS = 1;
    } else {
        $_SESSION["textVergleich"] = 1;
        $_SESSION["Textfeld"] = $_POST["text"];
    }

    // Checken, ob Thumbnail vorhanden ist
    if($_FILES["thumbnail"]["error"] != 0){
        $_SESSION["thumbnailVergleich"] = 0;
        $redirectToCMS = 1;
    } else {
        $_SESSION["thumbnailVergleich"] = 1;
    }

    // Thumbnail abspeichern 
    if($_FILES["thumbnail"]["error"] != 0 || $_FILES["thumbnail"]["type"] != "image/jpeg"){
        $_SESSION["thumbnailVergleich"] = 0;
        $redirectToCMS = 1;
    } else {
        $_SESSION["thumbnailVergleich"] = 1;
        if(isset($_POST["titel"])){
            $pictureTitle =  $pictureTitle = md5($_POST["titel"]);
            

            //Bildnamen definieren aus dem Titel des Artikels und .jpeg
            $imageName = $pictureTitle.".jpeg";
            $_SESSION["Bild"] = $imageName;
            $urlPathClient = '/DOCUMENT_ROOT/uploads/' . $imageName;
            
            $destinationServer = str_replace("db", "", getcwd() . "uploads\\" . $imageName);
            move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $destinationServer);

             // Thumbnail erstellen
             $thumbnailFilename = "thumb_" . $imageName;
             $thumbnailDestination = str_replace("db", "", getcwd() . "\\uploads\\thumbnails\\" . $thumbnailFilename);
             $urlPathThumbnail = '/DOCUMENT_ROOT/uploads/thumbnails/' . $thumbnailFilename;
 
             // Größe von Thumbnail anpassen
             list($originalWidth, $originalHeight) = getimagesize($destinationServer);
             $thumbnailWidth = 720;
             $thumbnailHeight = 480;
             $originalImage = imagecreatefromjpeg($destinationServer);
             $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
     
             imagecopyresampled(
                 $thumbnailImage,
                 $originalImage,
                 0,
                 0,
                 0,
                 0,
                 $thumbnailWidth,
                 $thumbnailHeight,
                 $originalWidth,
                 $originalHeight
             );
     
             imagejpeg($thumbnailImage, $thumbnailDestination);
     
             // Memory befreien 
             imagedestroy($originalImage);
             imagedestroy($thumbnailImage);
        }
    }
    
    if($redirectToCMS == 1){
        echo "redirected to cms";
        header('Location: /DOCUMENT_ROOT/index.php?site=cms');
        exit;
    } else {
        echo "redirected to db";
        header('Location: /DOCUMENT_ROOT/db/dbcms.php');
        exit;
    } 
    
?>
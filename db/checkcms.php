<?php
    session_start();

    $redirectToCMS = 0; 

    if(!isset($_POST["anrede"]) || !($_POST["anrede"] == "Frau" || $_POST["anrede"] == "Herr" || $_POST["anrede"] == "Keine Anrede")) {
        
    } else {
        $_SESSION["anredeVergleich"] = 1;
    }

    if(!isset($_POST["titel"]) || $_POST["titel"] == ""){
        $_SESSION["titelVergleich"] = 0;
        $redirectToRegister = 1;
    } else {
        $_SESSION["titelVergleich"] = 1;
        $_SESSION["Titel"] = $_POST["titel"];
    }

    if(!isset($_POST["lead"]) || $_POST["lead"] == ""){
        $_SESSION["leadVergleich"] = 0;
        $redirectToRegister = 1;
    } else {
        $_SESSION["leadVergleich"] = 1;
        $_SESSION["Lead"] = $_POST["lead"];
    }

    if(!isset($_POST["text"]) || $_POST["text"] == ""){
        $_SESSION["textVergleich"] = 0;
        $redirectToRegister = 1;
    } else {
        $_SESSION["textVergleich"] = 1;
        $_SESSION["Textfeld"] = $_POST["text"];
    }

    if(!isset($_FILES["thumbnail"])){
        $_SESSION["thumbnailVergleich"] = 0;
        $redirectToRegister = 1;
    } else {
        $_SESSION["thumbnailVergleich"] = 1;
        if(isset($_POST["titel"])){
            $pictureTitle = preg_replace('/\s+/', '', $_POST["titel"]);
        }
    }

    // save Thumbnail 
    if(isset($_FILES["thumbnail"])){
        if($_FILES["thumbnail"]["type"] == "image/jpeg"){
            $imageName = $pictureTitle.".jpeg";
            $urlPathClient = '/DOCUMENT_ROOT/uploads/' . $imageName;
            
            $destinationServer = str_replace("db", "", getcwd() . "uploads\\" . $imageName);
            move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $destinationServer);
            
            // Create a thumbnail
            $thumbnailFilename = "thumb_" . $imageName;
            $thumbnailDestination = str_replace("db", "", getcwd() . "\\uploads\\thumbnails\\" . $thumbnailFilename);
    
            $urlPathThumbnail = '/DOCUMENT_ROOT/uploads/thumbnails/' . $thumbnailFilename;
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
    
            // Free up memory
            imagedestroy($originalImage);
            imagedestroy($thumbnailImage);
        }
    }
    
    if($redirectToCMS == 1){
        header('Location: /DOCUMENT_ROOT/index.php?site=cms');
        exit;
    } else {
        header('Location: /DOCUMENT_ROOT/db/dbcms.php');
        exit;
    } 
    
?>
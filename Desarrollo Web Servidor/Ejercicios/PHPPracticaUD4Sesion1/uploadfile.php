

<?php

// Comprobar que el formulario se ha enviado
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD') == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Comprobar la extensión del archivo
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if(!array_key_exists($ext, $allowed)){
            die("Error: Por favor seleccione un formato válido.");
        }
    
        // Comprobar que el tamaño del fichero es menor que 5MB
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize){
            die("Error: El tamaño del archivo supera el límite permitido.");
        }
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " ya existe.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "El fichero ha sido enviado correctamente.";
            } 
        } else{
            echo "Error: Ha ocurrido un problema al subir el archivo. Por favor inténtelo de nuevo."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}

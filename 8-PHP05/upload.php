<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; //Direktori tujuan untuk menyimpan file 

//UNTUK FILE GAMBAR
    //(buat direktori dengan nama spt $targetDirectory di direktori yang sama letaknya dg file ini)
    $targetFile=$targetDirectory.basename($_FILES["fileToUpload"]["name"]);

    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif"); //jenis file yang diizinkan upload

    $maxFileSize = 5* 1024 *1024; //size maksimal file untuk upload
    
    //diberi pengondisian jenis file dan size file
    if (in_array($fileType, $allowedExtensions)&& $_FILES["fileToUpload"]["size"] <= $maxFileSize){
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) { //pengondisian proses upload file
            echo "File berhasil diunggah <br>";

            // Create thumbnail
            $thumbnailWidth = 200;

            // Get original image dimensions
            list($width, $height) = getimagesize($targetFile);

            // Calculate proportional height
            $thumbnailHeight = intval($height * ($thumbnailWidth / $width));

            // Create thumbnail image
            $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
            
            // Load the original image
            switch ($fileType) {
                case 'jpg':
                case 'jpeg':
                    $sourceImage = imagecreatefromjpeg($targetFile);
                    break;
                case 'png':
                    $sourceImage = imagecreatefrompng($targetFile);
                    break;
                case 'gif':
                    $sourceImage = imagecreatefromgif($targetFile);
                    break;
                default:
                    echo "Unsupported file type.";
                    exit;
            }

            // Resize the original image to fit into the thumbnail
            imagecopyresampled($thumbnailImage, $sourceImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);

            // Save the thumbnail
            imagejpeg($thumbnailImage, $targetDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]));

            // Output thumbnail
            echo '<img src="' . $targetDirectory . 'thumbnail_' . basename($_FILES["fileToUpload"]["name"]) . '" alt="Thumbnail">';

            // Free up memory
            imagedestroy($sourceImage);
            imagedestroy($thumbnailImage);

            
        }else {
            echo "Gagal mengunggah file.";
        }
    }else { //jika file tipe dan size tidak sesuai
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }


// //UNTUK FILE DOKUMEN
//     $targetFile=$targetDirectory.basename($_FILES["documentToUpload"]["name"]);

//     $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
//     $allowedExtensions = array ("txt", "pdf", "doc", "docx");

//     $maxFileSize = 10*1024 *1024;

//     if(in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize){
//         if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"],$targetFile)){
//             echo "Dokumen berhasil diunggah";
//         }else{
//             echo "Gagal mengunggah dokumen";
//         }
        
//     }else {
//         echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
//     }
}

?>
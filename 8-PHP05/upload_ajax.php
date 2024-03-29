<?php
if(isset($_FILES['file'])){
    $errors=array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower("".end(explode('.',$_FILES['file']['name'])). "");
    // upload khusus file bertype pdf doc, txt, docx
   // $extensions = array("pdf", "doc", "docx", "txt");

    // upload khusus fie gambar
    $extensions = array("png", "jpg", "jpeg", "gif");

    //pengondisian untuk ekstensi file gambar
    if (in_array($file_ext, $extensions) === false){
        $errors[] = "Ekstensi file  yang diizinkan adalah JPG, JPEG, PNG, GIF <br>";
    } 

    //pengondisian untuk ekstensi file dokumen
    // if (in_array($file_ext, $extensions) === false){
    //     $errors[] = "Ekstensi file  yang diizinkan adalah PDF, DOC, DOCX, TXT";
    // }

    //pengondisian ukuran file
    if ($file_size > 2097152){
        $errors[] = "Ukuran file tidakk boleh lebih dari 2 MB";
    }

    //jika tidak ada eror
    if(empty($errors) == true){
        move_uploaded_file($file_tmp, "documents/".$file_name);
        echo "File berhasil diunggah";
    }else {
        echo implode(" ", $errors);
    }
}

?>
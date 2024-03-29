<!DOCTYPE html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">

    <!-- untuk type file/gambar -->
        <input type="file" name="fileToUpload" id="fileToUpload"> 

    <!-- diberikan untuk type dokumen to upload agar bisa mengakses array di upload.php -->
        <!-- <input type="file" name="documentToUpload" id="documentToUpload"> -->

    <!-- salah satu harus di nonaktifkan agar code bisa bekerja dg baik, sama seperti di upload.php -->

        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
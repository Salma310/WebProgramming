<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="up_multiupload.php" method="post" enctype="multipart/form-data">
<!-- UNTUK DOKUMEN -->
        <!-- <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx" /> -->
<!-- UNTUK GAMBAR/ SOAL 2.2 -->
        <input type="file" name="files[]" multiple="multiple" accept=".png, .jpg, .jpeg, .gif">
        <input type="submit" value="Unggah" />
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen Ajax</title>
</head>
<body>
    <div class="upload-form-container">  <!-- modifikasi penambahan css-->
        <h2>Form Upload Ajax</h2>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">

            <div class="file-input-container">   <!-- modifikasi penambahan css-->
                <input type="file" name="file" id="file" class="file-input">
                <!-- <input type="submit" name="submit" value="Unggah"> modifikasi penambahan css -->
                <label for="file" class="file-label">Pilih File</label>
            </div>
            
            <button type="submit" name="submit" class="upload-button" id="upload-button" 
disabled>Unggah</button>

        </form>
        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data Anggota</title>
    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM anggota WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($koneksi);
    ?>
    <div class="container mt-4">
        <h2>Edit Data Anggota</h2>

        <form action="proses.php?aksi=ubah" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" value="L"  id="laki" <?php if ($row['jenis_kelamin'] === 'L')
                    echo 'checked'; ?> required>
                    <label class="from-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" value="P" id="perempuan" <?php if ($row['jenis_kelamin'] === 'P')
                    echo 'checked'; ?> required>
                    <label class="from-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telp :</label>
                <input type="text" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>"required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
        <a class="btn btn-secondary mt-2" href="index.php">Kembali</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Anggota</title>
    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="post">
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L"  id="laki" required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telp :</label>
                <input type="text" name="no_telp" id="no_telp" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
        <a class="btn btn-secondary mt-2" href="index.php">Kembali</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script> 
</body>
</html>
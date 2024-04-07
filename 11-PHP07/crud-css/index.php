<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
    <!-- Menyisipkan Bootstrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn-tambah">Tambah Anggota</a>
        <br><br>
        <?php
        include('koneksi.php');

        $query = "SELECT * FROM anggota order by id DESC";
        $result = mysqli_query($koneksi, $query);

        if(mysqli_num_rows($result)>0){
            $no = 1;
            echo "<table>";
            echo "<tr><th>No</th>
                    <th>Nama</th>
                    <th>JenisKelamin</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Aksi</th>";
            while($row= mysqli_fetch_array($result)){
                $kelamin = ($row["jenis_kelamin"] === 'L')? 'Laki-laki':'Perempuan';
                echo "<tr>                                  
                <td>" . $no++ . "</td> <td>" . $row["nama"] . "</td>
                <td>" . $kelamin . "</td> <td>" . $row["alamat"] . "</td>
                <td>" . $row["no_telp"] . "</td>
                <td><a href='edit.php?id=" . $row["id"]. "'>Edit</a> |
                <a href='#' onclick='konfirmasiHapus(" . $row["id"] . ", \"" . $row["nama"] . "\")'>Hapus</a><td>
                </tr>";
            }
            echo "</table>";
        }else {
            echo "Tidak ada data.";
        }
        mysqli_close($koneksi);
        ?>
    </div>
    <script>
        function konfirmasiHapus(id,nama){
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data dengan Nama : " +nama + " ?");
            if(konfirmasi){
                window.location.href = "proses.php?aksi=hapus&id=" + id;
            }
        }
    </script>
</body>
</html>
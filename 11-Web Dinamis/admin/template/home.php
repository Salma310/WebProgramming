<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include "menu.php";

            $query_anggota = "SELECT count(id) as jml FROM anggota";
            $result_anggota = mysqli_query($koneksi, $query_anggota);
            $row_anggota = mysqli_fetch_assoc($result_anggota);

            $query_jabatan = "SELECT count(id) as jml FROM jabatan";
            $result_jabatan = mysqli_query($koneksi, $query_jabatan);
            $row_jabatan = mysqli_fetch_assoc($result_jabatan);
            ?>
            
            <main class="col-md-9ms-sm-auto col-lg-10 px-md-4">
                <div class=
    "d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ANGGOTA</h5>
                                <p class="card-text">Total Anggota sejumlah : <?= $row_anggota['jml'] ?> Orang.</p>
                                <a href="index.php?page=anggota" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i>Kelola</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">JABATAN</h5>
                                <p class="card-text">Total Jabatan sejumlah : <?= $row_jabatan['jml'] ?>.</p>
                                <a href="index.php?page=jabatan" class="btn btn-primary"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>Kelola</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    </body>
</html>
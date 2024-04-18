<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Csrf Token  -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity=
    "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Form Booking</title>
</head>
<body>
    <div class="container">
        <h2 align="center" style="margin: 30px;">Form Booking</h2>

        <form action="./form_proses.php" method="post"  class="form-data" id="form-data">
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" id="id">
                <input type="text" name="nama" id="nama" class="form-control" required="true">
                <p class="text-danger" id="err_nama"></p>  <!-- modifikasi untuk cek eror -->
            </div>
            <div class="form-group">
                <label>Jenis Kendaraan</label> <br>
                <select class="form-select" aria-label="Default select example" name="jns_kendaraan" id="jns_kendaraan">
                    <option selected>Open this select menu</option>
                    <option value="mobil">Mobil</option>
                    <option value="motor">Motor</option>
                </select>
            </div>
            <div class="form-group">
                <label>Waktu</label>
                <input type="datetime-local" name="waktu_booking" id="waktu_booking" class="form-control" required="true">
                <p class="text-danger" id="err_bookingtime"></p>
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                <p class="text-danger" id="err_no_telp"></p>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <label>Jenis Layanan</label> <br>
                <select class="form-select" aria-label="Default select example" name="jns_layanan" id="jns_layanan">
                    <option selected>Open this select menu</option>
                    <option value="standart">Standart</option>
                    <option value="deepclean">Deep Clean</option>
                    <option value="premium">Premium Wash</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Submit
                </button>
            </div>
        </form>
        <hr>

        <div id="hasil"></div> 
        <!-- <div class="data"></div> -->
    
    </div>
    <script>
            $(document).ready(function() {
                $("#form-data").submit(function(e){
                    e.preventDefault(); //Mencegah pengiriman form secara default

                    //Mengumpulkan data form
                    var formData = $("#form-data").serialize();

                    //Kirim data ke server PHP
                    $.ajax({
                        url: "form_proses.php", //Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: formData,
                        success: function(response){
                            //Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        }
                    })
                });
            });
    </script>
</body>
</html>
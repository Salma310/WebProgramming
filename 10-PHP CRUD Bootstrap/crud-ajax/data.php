<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>No Telp</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'koneksi.php';
                $no = 1;
                $query = "SELECT * FROM anggota ORDER BY id DESC";
                $sql = $db1->prepare($query);
                $sql->execute();
                $res1 = $sql->get_result();

                if ($res1->num_rows > 0) {
                    while ($row = $res1->fetch_assoc()) {
                        $id = $row['id'];
                        $nama = $row['nama'];
                        $jenis_kelamin = ($row['jenis_kelamin'] == 'L')?'Laki-laki':'Perempuan';
                        $alamat = $row['alamat'];
                        $no_telp= $row['no_telp'];
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $jenis_kelamin; ?></td>
                    <td><?php echo $alamat; ?></td>
                    <td><?php echo $no_telp; ?></td>
                    <td>
                    <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                        <i class="fa fa-edit"></i>Edit</button>
                    <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                        <i class="fa fa-trash"></i>Hapus</button>
                    </td>
                </tr>
                <?php
                    }
                } else { ?>
                <tr>
                    <td colspan="7">Tidak ada data ditemukan</td>
                </tr>
            
                <?php } ?>
        </tbody>
    </table>   

    <script type="text/javascript">
        $(document).ready(function(){
            $('#example').DataTable();
        });
        function reset(){
            document.getElementById("err_nama").innerHTML = "";
            document.getElementById("err_jenis_kelamin").innerHTML = "";
            document.getElementById("err_alamat").innerHTML = "";
            document.getElementById("err_no_telp").innerHTML = "";
        }

        $(document).on('click', '.edit_data', function(){
            $('html, body').animate({scrollTop:0}, 'slow');
            var id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                url: "get_data.php",
                data :{id:id},
                dataType: 'json',
                success: function(response) {
                    reset();
                    $('html, body').animate({scrollTop:30}, 'slow');
                    document.getElementById("id").value = response.id;
                    document.getElementById("nama").value = response.nama;
                    // document.getElementById("jenis_kelamin").value = response.jenis_kelamin;
                    document.getElementById("alamat").value = response.alamat;
                    document.getElementById("no_telp").value = response.no_telp;
                    if (response.jenis_kelamin=="L") {
                        document.getElementById("jenkel1").checked = true;
                    }else{
                        document.getElementById("jenkel2").checked = true;
                    }

                }, error: function(response){
                console.log(response.responseText);
            }
            });
        });

        $(document).on('click', '.hapus_data', function(){
            var id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                url: "hapus_data.php",
                data: {id:id},
                success: function(){
                    $('.data').load("data.php");
                }, error: function(response){
                    console.log(response.responseText);
                }
            });
        });
    </script>

</body>
</html>
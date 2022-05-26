<!--
  MUHAMMAD ARYA PRIANDA
  18710068
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <title>Data Customer</title>
</head>

<body>
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Customer
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                        include "koneksi.php";
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM customer");
                        while($data=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td>
                            <?php echo$data['idcustomer'];?>
                        </td>
                        <td>
                            <?php echo$data['nama'];?>
                        </td>
                        <td>
                            <?php echo$data['telp'];?>
                        </td>
                        <td>
                            <?php echo$data['alamat'];?>
                        </td>
                        <td>
                            <?php echo $data['kota'];?>
                        </td>
                        <td>
                            <?php echo $data['kodepos'];?>
                        </td>
                        <td>
                            <a href="edit_customer.php?idcustomer=<?php echo $data['idcustomer']; ?>"
                                class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?idcustomer=<?php echo $data['idcustomer']; ?>"
                                class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
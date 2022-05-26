<!--
  MUHAMMAD ARYA PRIANDA
  18710068
-->

<?php
    include "koneksi.php";
    $id = $_GET['idcustomer'];
    $ambildata = mysqli_query($koneksi, "SELECT * FROM customer WHERE idcustomer='$id'");
    $data = mysqli_fetch_array($ambildata);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <title>Belejar CRUD</title>
</head>

<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data Customer
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="nama">Nama Customer</label>
                        <input type="text" class="form-control col-md-9" name="nama" value="<?php echo $data['nama'];?>"
                            placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" class="form-control col-md-9" name="telp" value="<?php echo $data['telp'];?>"
                            placeholder="Masukan Telepon">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control col-md-9" name="alamat"
                            value="<?php echo $data['alamat'];?>" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control col-md-9" name="kota" value="<?php echo $data['kota'];?>"
                            placeholder="Masukan kota">
                    </div>
                    <div class="form-group">
                        <label for="kodepos">Kodepos</label>
                        <input type="text" class="form-control col-md-9" name="kodepos"
                            value="<?php echo $data['kodepos'];?>" placeholder="Masukan kota">
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
    if(isset($_POST['simpan'])){
        $nama   = $_POST['nama'];
        $telp   = $_POST['telp'];
        $alamat   = $_POST['alamat'];
        $kota   = $_POST['kota'];
        $kodepos   = $_POST['kodepos'];

        mysqli_query($koneksi, "UPDATE customer 
        SET nama='$nama', telp='$telp', alamat='$alamat', kota='$kota', kodepos='$kodepos'
        WHERE idcustomer='$id'
        ") or die(mysqli_error($koneksi));

        echo "<div align ='center'><h5>Silahkan Tunggu, Data Sedang Update...</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/asset/data_customer.php'>";
    }
?>
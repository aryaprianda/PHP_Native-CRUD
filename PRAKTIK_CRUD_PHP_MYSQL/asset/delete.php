<?php
    //MUHAMMAD ARYA PRIANDA
    //18710068

    include "koneksi.php";
    $id = $_GET['idcustomer'];
    $ambildata = mysqli_query($koneksi, "DELETE FROM customer WHERE idcustomer='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/asset/data_customer.php'>";
?>
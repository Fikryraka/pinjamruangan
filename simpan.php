<?php
include 'koneksi-tutor.php';
// menyimpan data kedalam variabel
$idformulir     = $_POST['idformulir'];
$noRuangan      = $_POST['noRuangan'];
$idUser        = $_POST['idUser'];
$nmAcara       = $_POST['nmAcara'];
$waktu         = $_POST['waktu'];
$prodi         = $_POST['prodi'];
// query SQL untuk insert data
$query="INSERT INTO formpeminjaman SET idformulir='$idformulir',noRuangan='$noRuangan',idUser='$idUser',nmAcara='$nmAcara',waktu='waktu' ,prodi='$prodi'";
mysql_query($koneksi, $query);
// mengalihkan ke halaman index.php

header("location:v_bagumum.php");

?>
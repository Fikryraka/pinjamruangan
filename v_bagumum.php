<head>
<body>
<table border="1">
    <tr>
        <td>
            Id Formulir
        </td>
        <td>
            No Ruangan
        </td>
        <td>
            Id User
        </td>
        <td>
            Nama Acara
        </td>
        <td>
            Waktu
        </td>
        <td>
            Prodi
        </td>        
    </tr>
    <?php
    include 'koneksi.php';
    $formpeminjaman = mysqli_query($koneksi, "SELECT * from formpeminjaman");
    $no=1;
    foreach ($formpeminjaman as $row){
        echo "<tr>
            <td>".$row['idformulir']."</td>
            <td>".$row['noRuangan']."</td>
            <td>".$row['idUser']."</td>
            <td>".$row['nmAcara']."</td>
            <td>".$row['waktu']."</td>
            <td>".$row['prodi']."</td>
              </tr>";
        $no++;
    }
?>
</body>
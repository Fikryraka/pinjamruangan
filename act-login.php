<?php
session_start();
include "koneksi-tutor.php";
$idUser = $_POST['idUser'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = mysql_query("SELECT * FROM user WHERE idUser='$idUser' AND password='$password'");
    if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysql_fetch_array($sql);
        $_SESSION['idUser'] = $qry['idUser'];
		$_SESSION['jabatan'] = $qry['jabatan'];
        $_SESSION['nama'] = $qry['nama'];
        $_SESSION['password'] = $qry['password'];
        if($qry['jabatan']=="admin"){
            header("location:page-admin.php");
        }
		else if($qry['jabatan']=="mahasiswa"){
            header("location:page-mahasiswa.php");
        }
        else if($qry['jabatan']=="mahasiswa"){
            header("location:page-manager.php");
        }
        else if($qry['jabatan']=="mahasiswa"){
            header("location:page-manager.php");
        }
        else if($qry['jabatan']=="mahasiswa"){
            header("location:page-manager.php");
        }
        else if($qry['jabatan']=="mahasiswa"){
            header("location:page-manager.php");
        }
    }else{
		?>
		<script language="JavaScript">
			alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
			document.location='login-multiuser-php-mysql.php';
		</script>
		<?php
    }
}else if($op=="out"){
    unset($_SESSION['idUser']);
    unset($_SESSION['jabatan']);
    header("location:login-multiuser-php-mysql.php");
}
?>

<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['idUser'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['jabatan']!="mahasiswa"){
    die("Anda bukan Manager");//jika bukan admin jangan lanjut
}
?>
<html dir="ltr" lang="en-US">
<head>
	<title>Download Script Login Multi User | PHP Tutorial</title>
	<style type="text/css" media="screen">
		a:link{color: #000}
	</style>
</head>
<body>
<h2><a href="#" style="text-decoration:none" target="_blank">Download Here,</a> Script Login Multi User PHP MySQL | Tutorial</h2>
<p>Source code and design by <a href="http://www.rajaputramedia.com" style="text-decoration:none" target="_blank">Jasa Pembuatan Aplikasi Berbasis Web</a></p>
<hr>
<br />
<div align="center">
	<p><b>PAGE MANAGER</b></p></br />
	<table style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; width: 50%;">
		<tbody>
		<tr bgcolor="#FFAF00" height="40">
			<td style="width: 40%;"><center><b>Selamat Datang Manager</b></center></td>
			<td style="width: 40%;"><center><b><?php echo $_SESSION['nama'];?></b></center></td>
			<td style="width: 20%;"><center><b><a href="act-logout.php">Logout</a></b></center></td>
		</tr>
	</table>
	<br /><font size="5" color="blue">Anda Berhasil Login!</font><br><br>
</div>
</body>
</html>
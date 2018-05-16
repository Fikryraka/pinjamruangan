<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'peminjamanruangan');

	// initialize variables
  $idformulir=0;
	$noruangan = "";
	$idUser = "";
	$namaacara = "";
  $waktu = "";


	

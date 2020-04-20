<?php

	$koneksi = mysqli_connect("localhost","root","","db_perpustakaan");

	$query = mysqli_query($koneksi, "SELECT * FROM siswa");

	// var_dump($query);
	// while ($siswa = mysqli_fetch_assoc($query))
	// {
	// 	var_dump($siswa);
	// };
?>
<?php
include'../koneksi.php';

if (isset($_POST['simpan'])) {
		$judul = $_POST['judul'];
		$penerbit = $_POST['penerbit'];
		$pengarang = $_POST['pengarang'];
		$ringkasan = $_POST['ringkasan'];
		$cover = $_POST['cover'];
		$stok = $_POST['stok'];
		$id_kategori = ;


		$sql = "INSERT INTO buku (id_buku,judul,penerbit,pengarang,ringkasan,cover,stok,id_kategori) VALUES('$id_buku','$judul','$penerbit','$pengarang','$ringkasan','$cover','$stok','$id_kategori')";
		$res = mysqli_query($koneksi,$sql);
		var_dump($sql);

		$count = mysqli_affected_rows($koneksi);
		if($count == 1) {
			header("loaction: index.php");
		} else {
			header("loaction: tambah.php");
		}

	} else {
		header("loaction: tambah.php");
	}
?>
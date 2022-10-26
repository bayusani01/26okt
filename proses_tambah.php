<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
	$jenis_bantuan = $_POST['jenis_bantuan'];


	$sql = "INSERT INTO bantuan (nama,jenis_bantuan) VALUES ('$nama','$jenis_bantuan')";
	$query = mysqli_query($db, $sql);

    if( $query ) {
		header('Location:tambah.php?status=sukses');
	} else {
		header('Location:tambah.php?status=gagal');
	}
}
?>
<?php include("config.php");

//cek tombol daftar
if(isset($_POST['daftar'])){

	//pengambilan data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
 
	//buat query
	$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$kelamin', '$agama', '$sekolah')";
	$query = mysqli_query($db, $sql);

	//penyimpanan query
	if ($query) {
		//jika berhasil ke index.php dengan status berhasil
		header('Location: index.php?status=sukses');
	} else {
		//jika gagal ke index.php dengan status gagal
		header('Location : index.php?status=gagal');
	}

 } else {
 		die ("Akses dilarang. . .");
 }
?>
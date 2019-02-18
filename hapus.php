<?php
include("config.php");

if(isset($_GET['id'])){
	//mengambil id dari query string
	$id = $_GET['id'];

	//membuat query hapus
	$sql ="DELETE FROM calon_siswa WHERE id=$id";
	$query = mysqli_query($db, $sql);

	//cek query
	if ($query) {
		header('Location: list-siswa.php');
	} else {
		die("gagal menghapus. . .");
	}

}else{
	die("akses dilarang. . .");
}
?>
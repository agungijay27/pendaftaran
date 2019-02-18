<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa baru | SMK MUSKA</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="header">
			<h3>Pendaftaran Siswa Baru</h3>
			<h1>SMK MUSKA</h1>
	</div>

	<h4>MENU</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-siswa.php">Pendaftar</a></li>
		</ul>

		<?php if(isset($_POST['status'])): ?>
			<p>
				<?php
					if($_POST['status'] == 'status'){
						echo "Pendaftaran siswa baru berhasil";
					} else {
						echo "Pendaftaran gagal ferguso!!!";
					}
				?>
			</p>
		<?php endif; ?>
	</nav>


	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa baru | SMK MUSKA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<header>
			<h3>Formulir Pendaftaran Siswa baru | SMK MUSKA</h3>
		</header>

<div class="kontak_login">
	<form action="proses-pendaftaran.php" method="POST">
	<fieldset>
			<p> 
				<label for="nama ">Nama: </label>
				<input type="text" 	class="form_login" name="nama" placeholder="nama lengkap"/>
			</p>
			<p>
				<label for="alamat">Alamat: </label>
				<textarea name="alamat" class="form_login"></textarea>
			</p>
			<p>
				<label for="jenis kelamin">Jenis kelamin: </label>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki" class="form_login">Laki-laki</label>	
				<label><input type="radio" name="jenis_kelamin" value="perempuan" class="form_login">Perempuan</label>	
			</p>
			<p>
				<label for="agama">Agama: </label>
				<select name="agama" class="form_login">
					<option>Islam</option>
					<option>Kristen</option>
					<option>Hindu</option>
					<option>Budha</option>
					<option>Atheis</option>
				</select>
			</p>
			<p>
				<label for="sekolah_asal">Sekolah Asal: </label>
				<input type="text" name="sekolah_asal" placeholder="nama sekolah" class="form_login" />
			</p>
			<p>
				<input type="submit" class="tombol_login" value="Daftar" name="daftar"/>
			</p>
	</fieldset>
	</form>
</div>


	</body>
</html>
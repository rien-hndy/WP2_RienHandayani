<!DOCTYPE html>
<html>
<head>
	<title>Form Data Input</title>
</head>
<body>
<h2>Form Tambah Data</h2>
<marquee bgcolor="#06EAD2" width="100%"><p>Silahkan untuk melakukan input data dibawah ini</p></marquee>
<hr>
<form action="" method="">
	<div>
	<label>Nama :</label>
	<input type="text" name="nama" placeholder="Masukan Nama" required>
	</div>

	<div>
		<label>Jenis Kelamin :</label>
		<input type="radio" name="jk" required>Laki-Laki
		<input type="radio" name="jk" required>Perempuan
	</div>

	<div>
		<label>Alamat :</label>
		<textarea name="alamat" placeholder="Masukan Alamat" required></textarea>
	</div>
	<div>
		<label>Email :</label>
		<input type="email" name="email" placeholder="Masukan Email" required>
	</div>
	<div>
		<label>No. HP :</label>
		<input type="text" name="no_hp" placeholder="Masukan No HP" required>
	</div>

	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

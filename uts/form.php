
<doctipe! html>
<html>
	<head>
			<title>Biodatata</title>
			<style>
				table{border-collapse:collapse;}
			</style>
	<head>
	<body>
		<form action="proses.php" method="POST">
			<fieldset>
				<legend>Form Biodata Mahasiswa</legend>
				<h3>Lengkapi Biodata dengan benar</h3>
				<table>
					<tr>
						<td>NIM (Nomor Induk Mahasiswa)</td>
						<td>:</td>
						<td><input type="text" name="nim"></td>
					</tr>
					<tr>
						<td>Nama Mahasiswa</td>
						<td>:</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td><select name="jurusan">
							<option value="001">Sistem Komputer</option>
							<option value="002">Sistem Informasi</option>
							<option value="003">Teknologi Informasi</option>
						</select>
						</td>
					</tr>
					<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><input type="radio" name="Gender" value="1">Laki-laki
                        <input type="radio" name="Gender" value="2">Perempuan
					</td>
					</tr>
					<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat"></td>
					</tr>
					<tr>
						<td>No HP</td>
						<td>:</td>
						<td><input type="number" name="no_hp"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="email" name="email"></td>

					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" value ="simpan"><input type="button" value ="Kembali"></td>
					
					</tr>
				</table>
			</fieldset>
		</form>

		</table >
		<table style="width:100%; border:1px solid black; margin-top:10px">
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jurusan</th>
				<th>Gender</th>
				<th>Alamat</th>
				<th>No HP</th>
				<th>Email</th>
			</tr>
			<?php
				include "koneksi.php";

				$qry = "SELECT * FROM mahasiswa";
				$exec = mysqli_query($con, $qry);
				while ($data = mysqli_fetch_assoc($exec)){
				?>
			<tr>
				<td><?= $data['nim'] ?></td>
				<td><?=$data['nama'] ?></td>
				<td><?=$data['jurusan'] ?></td>
				<td><?=$data['gender'] ==1 ? 'laki-laki' : 'perempuan' ?></td> 
				<td><?=$data['alamat'] ?></td>
				<td><?=$data['no_hp'] ?></td>
				<td><?=$data['email'] ?></td>
				<td>
					<a href = "delete.php?nim=<?= $data['nim'] ?>" onclick="return confirm('Yakin hapus data ini?')"> <button>Delete</button></a>
				</td>
				
			</tr>
			<?php }
			
			 ?>
		</table>
	</body>
</html>
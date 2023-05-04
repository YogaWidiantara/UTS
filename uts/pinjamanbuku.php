<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="koneksiBuku.php" method="POST">
      <fieldset>
        <table>
          <legend>Peminjaman Buku</legend>

          <tr>
            <td>NIM(Nomor Induk Mahasiswa)</td>
            <td>:</td>
            <td>
              <input type="number" name="nimb" />
            </td>
          </tr>
          <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
              <input type="text" name="namab" />
            </td>
          </tr>
          <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" name="buku" /></td>
          </tr>
          <tr>
            <td>Waktu Peminjaman</td>
            <td>:</td>
            <td>
              <select name="waktup">
                <option value="01">1 hari</option>
                <option value="02">3 hari</option>
                <option value="03">5 hari</option>
                <option value="04">7 hari</option>
              </select>
            </td>
          </tr>

          <tr>
            <td>No HP</td>
            <td>:</td>
            <td>
              <input type="number" name="no_hpb" value="no_hp" />
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>
              <input type="email" name="emailb" />
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <input type="submit" value="simpan" />
              <input type="button" value="kembali" />
            </td>
          </tr>
        </table>
      </fieldset>
    </form>
    <td>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Judul Buku</th>
        <th>Waktu Peminjaman</th>
       
        <th>No HP</th>
        <th>Email</th>
      </tr>
      <?php
            include "koneksiBuku.php";

            $qry = "SELECT * FROM mahasiswa";
            $exec = mysqli_query($con, $qry);
            while ($data = mysqli_fetch_assoc($exec)){
            ?>
      <tr>
        <td><?= $data['nimb'] ?></td>
        <td><?=$data['namab'] ?></td>
        <td><?=$data['buku'] ?></td>
        <td><?=$data['waktup'] ==1 ? 'laki-laki' : 'perempuan' ?></td>
        
        <td><?=$data['no_hpb'] ?></td>
        <td><?=$data['emailb'] ?></td>
        <td>
          <a href="delete.php?nim=<?= $data['nim'] ?>" onclick="return confirm('Yakin hapus data ini?')"> <button>Delete</button></a>
        </td>
      </tr>
      <?php }
        
         ?>
    </td>
  </body>
</html>

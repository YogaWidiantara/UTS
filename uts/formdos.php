<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action ="koneksiDos.php" method ="POST">
      <fieldset>
        <table>
          <legend>Panitia Eksternal UKM DOS</legend>
          <h3>Lengkapilah biodata dengan benar!</h3>
          <tr>
            <td>NIM(Nomor Induk Mahasiswa)</td>
            <td>:</td>
            <td>
              <input type="number" name="nimd" />
            </td>
          </tr>
          <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
              <input type="text" name="namad" />
            </td>
          </tr>
          <tr>
            <td>Posisi</td>
            <td>:</td>
            <td>
              <select name="panitia">
                <option value="001">Sie Desain</option>
                <option value="002">Sie Perlengkapan</option>
                <option value="003">Sie Keamanan</option>
                <option value = "004">Sie Acara</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name = "kel"/></td>
          </tr>

          <tr>
            <td>No HP</td>
            <td>:</td>
            <td>
              <input type="number" name="no_hp" value="no_hpd" />
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>
              <input type="email" name="emaild" />
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
    <form>
        <tr>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Posisi</th>
            <th>Jenis Kelamin</th>
            <th>No HP</th>
            <th>Email</th>
        </tr>
    </tr>
    <?php
        include "koneksi.php";

        $qry = "SELECT * FROM mahasiswa";
        $exec = mysqli_query($con, $qry);
        while ($data = mysqli_fetch_assoc($exec)){
        ?>
    <tr>
        <td><?= $data['nimd'] ?></td>
        <td><?=$data['namad'] ?></td>
        <td><?=$data['panitia'] ?></td>
        <td><?=$data['kel'] ?></td> 
     
        <td><?=$data['no_hpd'] ?></td>
        <td><?=$data['emaild'] ?></td>
        <td>
            <a href = "delete.php?nim=<?= $data['nim'] ?>" onclick="return confirm('Yakin hapus data ini?')"> <button>Delete</button></a>
        </td>
        
    </tr>
    <?php }
    
     ?>
    </form>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>DATA KEUANGAN X PPLG</h2>
  
      <p><a href ="form.php"><button>Tambah Data Murid</button></a></p>

    <table border="1">
  <tr>
    <th>NIS</th>
    <th>NAMA</th>
    <th>KELAS</th>
    <th>KAS</th>
    <th colspan="3">Aksi</th>
  </tr>
  <?php
    include "koneksi.php";
    $ambildata = mysqli_query($koneksi, "select*from murid");
    while ($tampildata = mysqli_fetch_array($ambildata)){
      echo"
      <tr>
      <td>$tampildata[NIS]</td>
      <td>$tampildata[Nama]</td>
      <td>$tampildata[Kelas]</td>
      <td>$tampildata[Jumlah]</td>
      <td>BAYAR</td>
      <td>EDIT</td>
      <td>HAPUS</td>
      </tr>
      ";
    }
  ?>

</table>
</center>
</body>
</html>
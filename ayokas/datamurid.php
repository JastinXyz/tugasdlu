<center>
    <h2>DATA KEUANGAN X PPLG</h2>
    <p><a href = "/ayokas/form.php/"><button>TAMBAH DATA</button></a></p>
    <table border="1">
  <tr>
    <th>NIS</th>
    <th>nama</th>
    <th>kelas</th>
    <th>kas</th>
    <th colspan="3">aksi</th>
  </tr>

  <?php
    include "koneksi.php";
    $ambildata = mysqli_query($koneksi, "select*from murid");

    if(isset($_GET['NIS'])) {
      mysqli_query($koneksi, "delete from murid where nis = '$_GET[NIS]'");
      echo "<meta http-equiv=refresh content=0;URL='datamurid.php'>"; 
      echo "Berhasil Tersimpan";
    }

    while ($tampildata = mysqli_fetch_array($ambildata)){
      echo"
      <tr>
        <td>$tampildata[NIS]</td>
        <td>$tampildata[nama]</td>
        <td>$tampildata[kelas]</td>
        <td>Rp. $tampildata[kas]</td>
        <td><a href='/ayokas/formbayar.php?NIS=$tampildata[NIS]'>BAYAR</a></td>
        <td><a href='/ayokas/ubahdata.php?NIS=$tampildata[NIS]'>EDIT</a></td>
        <td><a href='/ayokas/datamurid.php?NIS=$tampildata[NIS]'>HAPUS</a></td>
      </tr>
    ";
  }
  ?>
    </table>
</center>
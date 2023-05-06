<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi,"select * from murid where NIS = '$_GET[NIS]'");
    $data = mysqli_fetch_array($sql);
?>
<center>
    <form action=""method="post">
        <tr>
            <p><td>Masukan NIS = <input type="number" name="NIS"  value="<?php echo $data['NIS']; ?>"></td></p>
            <p><td>Masukan nama = <input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td></p>
            <p><td>Masukan kelas = <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td></p>
            <input type="submit" name="simpan" value="input">
        </tr>
    </form>
    <?php
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        mysqli_query($koneksi,"update murid set
        NIS = '$_POST[NIS]',
        nama = '$_POST[nama]',
        kelas = '$_POST[kelas]'
       where NIS = '$_GET[NIS]'");

       echo "<meta http-equiv=refresh content=0;URL='datamurid.php'>"; 
        echo "Data Berhasil Dirubah";
    }
    ?>
  
    <p><a href = "/ayokas/datamurid.php/"><button>BACK</button></a></p>

</center>
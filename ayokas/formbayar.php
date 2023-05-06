<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi,"select * from murid where NIS = '$_GET[NIS]'");
    $data = mysqli_fetch_array($sql);
?>
<center>
    <form action=""method="post">
        <tr>
            <p><td>Masukan NIS = <input type="number" name="NIS" value="<?php echo $data['NIS'];?>"></td></p>
            <p><td>Masukan kas = <input type="number" name="kas"></td></p>
            <input type="submit" name="simpan" value="input">
        </tr>
    </form>
    <?php
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        mysqli_query($koneksi,"update murid set
        kas = $data[kas]+'$_POST[kas]'
        where NIS= '$_GET[NIS]'
        ");

        echo "<meta http-equiv=refresh content=0;URL='datamurid.php'>"; 
        echo "Berhasil Tersimpan";
    }
    ?>
  
    <p><a href = "/ayokas/datamurid.php/"><button>BACK</button></a></p>

</center>
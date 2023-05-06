<center>
    <h2>DATA KEUANGAN SISWA X PPLG</h2>

    <form action=""method="post">
        <tr>
            <p><td>Masukan NIS = <input type="number" name="NIS"></td></p>
            <p><td>Masukan nama = <input type="text" name="nama"></td></p>
            <p><td>Masukan kelas = <input type="text" name="kelas"></td></p>
            <p><td>Masukan kas = <input type="number" name="kas"></td></p>
            <input type="submit" name="simpan" value="input">
        </tr>
    </form>
    <?php
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        mysqli_query($koneksi,"insert into murid set
        NIS = '$_POST[NIS]',
        nama = '$_POST[nama]',
        kelas = '$_POST[kelas]',
        kas = '$_POST[kas]'");

        echo "Data murid telah tersimpan";
    }
    ?>
  
    <p><a href = "/ayokas/datamurid.php/"><button>BACK</button></a></p>

</center>
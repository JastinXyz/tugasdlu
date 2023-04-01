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

    <form action="" method="POST">
            <tr>
                <p><td>Masukan NIS : <input type="number" name="nis"></td></p>
                <p><td>Masukan Nama  : <input type="text" name="nama"></td></p>
                <p><td>Masukan kelas : <input type="text" name="kelas"></td></p>
                <p><td>Masukan Jumlah Kas : <input type="number" name="kas"></td></p>
                <input type="submit" name="simpan" values="input">
            </tr>
    </form>

    <?php
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        mysqli_query($koneksi, "insert into murid set
        Nis = '$_POST[nis]',
        Nama = '$_POST[nama]',
        Kelas = '$_POST[kelas]',
        Jumlah = '$_POST[kas]'");

        echo "Data murid telah tersimpan";
    }
    ?>
    <p><a href="datasiswa.php"><button>Kembali</button></a></p>
</center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPAN DATA BUKU TAMU</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    ?>
    <h1>Proses Simpan Buku Tamu</h1>
    <hr>
    <table align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Komentar</td>
            <td>:</td>
            <td><textarea name="komentar" cols="29" rows="10"><?php echo $komentar ?></textarea></td>
        </tr>
    </table>
    <?php
    $fp = fopen("buku-tamu.txt", "a+");
    fputs($fp, $nama . " | " . $email . " | " . $komentar . "\n");
    fclose($fp);
    ?>
    <p align="center">Data kamu berhasil disimpan.</p>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA BUKU TAMU</title>
</head>

<body align="center">
    <H1>Data Buku Tamu</H1>
    <?php
    $fp = fopen("buku-tamu.txt", "r");
    while (!feof($fp)) {
        $baris = fgets($fp);
        echo $baris . "<br>";
    }
    fclose($fp);
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jeniskel = $_POST['jeniskel'];
    $pendidikan = $_POST['pendidikan'];
    ?>
    <table border="1">
        <tr>
            <td>Nama</td><td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>Alamat</td><td><?php echo $alamat;?></td>
        </tr>
        <tr>
        <td>Tempat Lahir</td><td><?php echo $tempat_lahir;?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td><?php echo $tgl_lahir;?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td><?php echo $jeniskel;?></td>
        </tr>
        <tr>
            <td>Pendidikan</td><td><?php echo $pendidikan;?></td>
        </tr>

    </table>
    <a href="forminput.php">INPUT DATA LAGI</a>
</body>
</html>
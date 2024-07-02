<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Form Input Data Mahasiswa</h2>
    <form action="tesoutput.php" method="post">
        <div>
            <label for="nimsiswa">NIM : </label>
            <input type="number" id="nimsiswa" name="nim">
        </div>
        <div>
            <label for="username">Nama : </label>
            <input type="text" id="nimsiswa" name="nama">
        </div>
        <div>
            <label for="gender">Jenis Kelamin:</label>
            <input type="radio" id="pria" name="jeniskel" value="Laki-Laki" required><label for="pria">Laki-Laki</label>
            <input type="radio" id="wanita" name="jeniskel" value="Perempuan" required><label for="wanita">Perempuan</label>
        </div>
        <div>
            <label for="dateyear">Tanggal Lahir:</label>
            <input type="date" id="dateyear" name="tgl_lahir" required>
        </div>
        <div>
            <label for="place">Tempat Lahir:</label>
            <input type="text" id="place" name="tempat_lahir" required>
        </div>
        <div>
        <label for="major">Jurusan : </label>
        <select id="major" name="jurusan" required>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            <option value="Manajamen">Manajamen</option>
        </select>
        </div>
        <div>
        <label for="when">Tahun Masuk : </label>
        <select id="when" name="thn_msk" required>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
        </select>
        </div>
        <div>
        <button type="submit" value="kirim">Kirim</button>
        </div>


        
        



    </form>
</body>
</html>
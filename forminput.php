<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>
    <div class="login-container">
    <form class="login-form"  action="tampilform.php" method="post">
        <h2>Form Registrasi</h2>
        <div class="form-group">
            <label for="username">Masukkan Nama:</label>
            <input type="text" id="username" name="nama" required>
        </div>
        <div class="form-group">
            <label for="address">Masukkan Alamat:</label>
            <input type="text" id="address" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="place">Tempat Lahir:</label>
            <input type="text" id="place" name="tempat_lahir" required>
        </div>
        <div class="form-group">
            <label for="dateyear">Tanggal Lahir:</label>
            <input type="date" id="dateyear" name="tgl_lahir" required>
        </div>
        <div>
            <label for="gender">Jenis Kelamin:</label>
            <input type="radio" id="pria" name="jeniskel" value="Laki-Laki" required><label for="pria">Laki-Laki</label>
            <input type="radio" id="wanita" name="jeniskel" value="Perempuan" required><label for="wanita">Perempuan</label>
        </div>
        <div>
        <label for="education">Pendidikan:</label>
        <select id="education" name="pendidikan" required>
            <option value="S1">S1</option>
            <option value="D3">D3</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
        </div>
        <br>
        <div>
        <button type="submit" value="kirim">Kirim</button>
        <button type="reset" value="batal">Batal</button>
        </div>
        
    </form>
    </div>
</body>
</html>
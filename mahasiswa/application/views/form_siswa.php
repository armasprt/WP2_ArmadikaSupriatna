<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Form Input Siswa</title>
</head>
<body>
    <main>
        <form action="<?php echo site_url('Siswa/cetak'); ?>" method="post">
        <header>
            <h1>FORM INPUT DATA MAHASISWA</h1>
            <p>Masukkan Data Mahasiswa Dengan Benar</p>
        </header>
            <div>
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Mahasiswa" required>
            </div>
            <div>
                <label for="nim">NIM</label>
                <input type="number" name="nim" placeholder="Masukkan NIM Mahasiswa" required>
            </div>
            <div>
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" placeholder="Masukkan Kelas Mahasiswa" required>
            </div>
            <div>
                <label for="tgl_lahir">Tanggal Lahir</label><br>
                <input type="date" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir Mahasiswa" required>
            </div>
            <div>
                <label for="tmp_lahir">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" placeholder="Masukkan Tempat Lahir Mahasiswa" required>
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" placeholder="Masukkan Alamat Mahasiswa" required>
            </div>
            <div>
                <label for="jk">Jenis Kelamin</label><br>
                <input type="radio" name="jk" value="Laki - Laki"> Laki-Laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </div>
            <div>
                <label for="agama">Agama</label><br>
                <select name="agama" id="agama">
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </div>
            <div>
                <input type="submit" value="SUBMIT">
            </div>
        </form>
    </main>
    <footer>
        <p>Copyright <strong>&copy;PunyaArma2022</strong></p>
    </footer>
</body>
</html>
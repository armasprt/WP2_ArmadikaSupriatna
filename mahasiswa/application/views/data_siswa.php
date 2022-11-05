<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        * {
            font-family: 'inter', Arial;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            letter-spacing: 1px;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #1746A2;
            width: 100%;
            height: 100%;
            padding: 15px;
            text-align: center;
            color: #FFF7E9;
            font-size: 14px;
            line-height: 30px;
        }
        main {
            background-color: #FFFFFF;
             padding: 20px 0px 30px 0;
        }

        table {
            margin: 0 auto;
            width: 90%;
            margin-bottom: 20px;
        }

        table th {
            background-color: #1746A2;
            color: #FFF7E9;
            padding: 10px;
        }

        table td {
            padding: 10px;
            background-color: #DEF5E5;
            text-align: center;
        }

        footer {
            margin-top: auto;
            background-color: #1746A2;
            padding: 13px 0px 13px 0px;
            color: #FFF7E9;
            text-align: center;
        }

        a {
            display: block;
            width: 130px;
            height: 40px;
            color: #FFF7E9;
            background-color: #1746A2;
            padding: 10px 10px;
            margin-top: 20px;
            text-decoration: none;
            text-align: center;
            margin: 0 auto;
            border-radius: 7px;
            opacity: 0.7;
            transition: 0.5s;
        }

        a:hover {
            opacity: 1;
        }
    </style>
    <title>Data Siswa</title>
</head>
<body>
    <header>
        <h1>Data Input Mahasiswa</h1>
        <p>Data Mahasiswa Hasil Inputan</p>
    </header>
    <main>
        <table border="0" cellpadding="10" cellspacing="0">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
            </tr>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $nim; ?></td>
                <td><?= $kelas; ?></td>
                <td><?= $tgl_lahir; ?></td>
                <td><?= $tmp_lahir; ?></td>
                <td><?= $alamat; ?></td>
                <td><?= $jk; ?></td>
                <td><?= $agama; ?></td>
            </tr>
        </table>
        <a href="<?php echo site_url('siswa') ?>">Form Input</a>
    </main>
    <footer>
        <p>Copyright &copy;PunyaArma2022</p>
    </footer>
</body>
</html>
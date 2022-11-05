<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Menu</title>
</head>
<body>
    <form action="<?php echo site_url('Menu/add') ?>" method="post">
        <label for="nama_menu">Nama Menu :</label>
        <input type="text" name="nama_menu" placeholder="Nama Menu" />
        <br>
        <br>
        <label for="harga_menu">Harga Menu :</label>
        <input type="number" name="harga_menu" placeholder="Harga Menu" />
        <br>
        <br>
        <input type="submit" value="Save" name="btn">
    </form>
</body>
</html>
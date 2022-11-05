<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Menu</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $menus->kode_menu ?>" />

        <label for="nama_menu">Nama Menu :</label>
        <input type="text" name="nama_menu" placeholder="Nama Menu" value="<?php echo $menus->nama_menu ?>" />
        <br>
        <br>
        <label for="harga_menu">Harga Menu :</label>
        <input type="number" name="harga_menu" placeholder="Harga Menu" value="<?php echo $menus->harga_menu ?>" />
        <br>
        <br>
        <input type="submit" value="Save" name="btn">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <style>
        h1 {
            text-align: center;
        }

        .tambah {
            display: block;
            text-align: center;
            margin-top: 30px;
        }

    </style>
</head>
<body>
    <h1>Daftar Menu Nasi Goreng</h1>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <thead>
            <tr>
                <th>Kode Menu</th>
                <th>Nama Menu</th>
                <th>Harga Menu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($menus as $menu): ?>
            <tr align="center">
                <td>
                    <?php echo $menu->kode_menu ?>
                </td>
                <td>
                    <?php echo $menu->nama_menu ?>
                </td>
                <td>
                    <?php echo $menu->harga_menu ?>
                </td>
                <td width="250">
                    <a href="<?php echo site_url('Menu/edit/'.$menu->kode_menu) ?>">Edit</a>
                    -
                    <a href="<?php echo site_url('Menu/delete/'.$menu->kode_menu) ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
    <a class="tambah" href="<?php echo site_url('Menu/add') ?>">Tambah Menu</a>
</body>
</html>
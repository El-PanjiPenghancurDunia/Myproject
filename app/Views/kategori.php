<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Hello, Ini Adalah Halaman Kategori</h1>
    <p>
      <ul>
        <li><a href="<?= site_url('alattulis') ?>" class="btn btn-primary">Alat Tulis</a></li>
        <li><a href="<?= site_url('pakaian') ?>" class="btn btn-primary">Pakaian</a></li>
        <li><a href="<?= site_url('pertukangan') ?>" class="btn btn-primary">Pertukangan</a></li>
        <li><a href="<?= site_url('elektronik') ?>" class="btn btn-primary">Elektronik</a></li>
        <li><a href="<?= site_url('snack') ?>" class="btn btn-primary">Snack</a></li>
      </ul>
    </p>
</body>
</html>
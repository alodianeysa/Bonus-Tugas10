<?php 
require 'functions.php' ;

$data query("SELECT * FROM produk");

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Arkademy</title>
</head>
<body>
 <h1>Arkademy</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Produk</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Keterangan</th>

      </tr>

      <?php foreach( $data as $row ) : ?>
      <tr>
        <td>1</td>
        <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
        </td>
        <td><?= $row["nama_produk"] ?></td>
        <td><?= $row["harga"] ?></td>
        <td><?= $row["jumlah"] ?></td>
        <td><?= $row["keterangan"] ?></td>

      </tr>
  <?php endforeach; ?>
  
    </table>
</body>
</html>
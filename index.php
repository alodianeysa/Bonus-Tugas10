<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "arkademy");

//ambil data dari tabel Arkademy
$result = mysqli_query($conn, "SELECT * FROM produk");

//ambil data (fetch) dari objek Arkademy
//mysqli_fetch_row()
//mysqli_fetch_array()
//mysqli_fetch_object()
//mysqli_fetch_assoc()

//while( $mhs = mysqli_fetch_assoc($result) ) {
  //  var_dump($mhs);
//}


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

      <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
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
  <?php endwhile; ?>
  
    </table>
</body>
</html>
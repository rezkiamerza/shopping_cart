<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Warteg Online</title>
</head>
<body><br><br><center></center>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="dashboard.php?halaman=produk"><strong><span class="glyphicon glyphicon-th-large"></span> Produk</strong></a></li>
          <li><a href="dashboard.php?halaman=keranjang-belanja"><strong><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang Belanja</strong> </a></li>
            <li><a href="input.php?halaman=keranjang-belanja"><strong><span class="glyphicon glyphicon-plus "> </span>Tambah Stok </strong> </a></li>
            <li><a href="index.php?halaman=keranjang-belanja"><strong><span class=" glyphicon glyphicon-off "> </span>Logout </strong> </a></li>
        
        </ul>

      </div>
    </div>
  </div>
</nav>    


<div class="container">
 <center> <h2>Form Input Menu Baru</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="id_produk">ID Produk : </label>
      <input type="text" class="form-control" id="nama" placeholder=" ID Produk" name="id_produk" autocomplete="off" required>
    </div>

    <div class="form-group">
      <label for="kode_produk">Kode Produk:</label>
      <input type="text" class="form-control" id="nama" placeholder="Kode Produk" name="kode_produk" autocomplete="off" required>
    </div>
	
     <div class="form-group">
      <label for="nama">Nama Makanan</label>
      <input type="text" class="form-control"  placeholder=" Nama Makanan" name="nama" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="stok">Stok:</label>
      <input type="text" class="form-control"  title="Nama stok" placeholder=" Stok tersedia" name="stok" required autocomplete="off"></input>
    </div>
    <div class="form-group">
      <label for="keterangan">Keterangan:</label>
      <input type="text" class="form-control" id="almt" placeholder=" Keterangan Makanan" name="keterangan" required autocomplete="off"></input>
    </div>
    <div class="form-group">
      <label for="harga">Harga:</label>
      <input type="text" class="form-control" placeholder="Harga" name="harga" required autocomplete="off"></input>
    </div>
    <div class="form-group">
      <label for="gambar">Gambar Makanan:</label>
      <input type="file" class="form-control" id="almt" title="gambar" name="gambar" required autocomplete="off"></input>
    </div>
    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
  </form>
</div>
</body>
</html>
<?php  
function enc($plaintext) {
    $iv="1234567890111213";
    $algo="aes-256-cbc";
    $kunci=sha1("Makan enak");
    $chipertext=openssl_encrypt($plaintext,$algo,$kunci,$option=0,$iv);
    return $chipertext;
  }
 if (isset($_POST['bsimpan'])) {
	$id_produk=filter_var(htmlentities($_POST['id_produk'], FILTER_SANITIZE_STRING));
  $kode_produk=filter_var(htmlentities($_POST['kode_produk'],FILTER_SANITIZE_STRING));
  $nama=filter_var(htmlentities($_POST['nama'],FILTER_SANITIZE_STRING));
	$keterangan=filter_var(htmlentities($_POST['keterangan'],FILTER_SANITIZE_STRING));
	$stok=filter_var(htmlentities($_POST['stok'],FILTER_SANITIZE_STRING));
  $harga=filter_var(htmlentities($_POST['harga'],FILTER_SANITIZE_STRING));
  $gambar=filter_var(htmlentities($_POST['gambar'],FILTER_SANITIZE_STRING));
 
   
 
  $id_produk1 =enc($id_produk);
  $kode_produk1 = enc($kode_produk);
  $nama1 = enc($nama);


	$koneksi=new mysqli('localhost','root','','shopping_cart');
	$sql1="INSERT INTO `produk`(`id_produk`, `kode_produk`, `nama`, `stok`, `harga`, `keterangan`, `gambar`) VALUES ('".$id_produk1."','".$kode_produk1."','".$nama1."','".$stok."','".$harga."','".$keterangan."','".$gambar."')";
	$q=$koneksi->query($sql1);
	if ($q) {
		echo '<br><div class="alert alert-success">
  <strong>Success!</strong> Data Telah Di Rekord!
</div>';
	} else {
		echo '<div class="alert alert-danger">
    <strong>Danger!</strong> Data Gagal Di Rekord!
  </div>';
	}

}
?>
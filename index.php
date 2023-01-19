<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style type="text/css">
		.bulu{
			width: 20px;
			height: 15px;
			background-image: url(bg.jpg);
		}
	</style>
</head>
<body>
	
	<div class="login">

		<div class="avatar">
		  <i class="fa fa-user"></i>
		</div>

		<h2>Login User</h2>
    <form method="post">
		<div class="box-login">
		  <i class="fas fa-envelope"></i>
		<input type="text" placeholder="Kode login" name="kodelogin" id="kodelogin" autocomplete="off" required>
		</div>

		<div class="box-login">
		  <i class="fas fa-lock"></i>
		  <input type="password" placeholder="Password" id="pswd" name="pswd" required>
		</div>

		<button type="submit" class="btn-login" name="blogin" id="blogin">Login</button>
<br><div class="small"><font color="red"><a href="registrasi.php">Registrasi? </a></div></font>		
		
	</div>

	
<?php
if (isset($_POST['blogin'])) {
	$kodelogin=filter_var($_POST['kodelogin'],FILTER_SANITIZE_STRING);
	$pswd=filter_var($_POST['pswd'],FILTER_SANITIZE_STRING);
    $hashkodelogin=md5(sha1($kodelogin));
    $hashpswd=md5(sha1($pswd));        
	$koneksi=new mysqli('localhost','root','','shopping_cart');
	$sql="SELECT * FROM `user` WHERE kodelogin = '".$hashkodelogin."' and password='".$hashpswd."'";
	$q=mysqli_query($koneksi,$sql);
      $r=mysqli_fetch_array($q);
      if (empty($r)) {
      echo '<div class="alert alert-danger">
     <strong>Gagal Login!</strong>  <a href="#" class="alert-link">ente kadang-kadang ya</a>.
      </div> ';
    exit();
  } 

  if (!empty($r)) {
  if(!isset($_SESSION))session_start();
    $_SESSION['ceklogin']=$kodelogin;
    echo "<script>window.location.href='dashboard.php';</script>";
  }
}

   ?> 


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Desain By | Rezki Amerza </div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        </footer>
   </body>
</html>
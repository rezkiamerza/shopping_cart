
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register - Pengguna </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 <form method="POST">
<div class="container mt-3">
  <h2>Daftar Dulu Broo</h2>

    <div class="mb-3 mt-3">
    <label for="kodelogin">Kode Login</label>
    <input class="form-control" id="kodelogin" type="text" placeholder="Kode Login" / name="kodelogin" autocomplete="off">
                                                        
    </div>
    <div class="mb-3">
      <label for="pswd">Password </label>
      <input class="form-control" id="pswd" type="password" placeholder="Password" / autocomplete="off" name="pswd">
    </div>
   
    <button type="submit" class="btn btn-primary" name="bsubmit">Pencet Ini</button>
  </form>
</div>

        
                                    
    </form>
      </div>

        <?php 
      if (isset($_POST['bsubmit'])) {
   $kodelogin=$_POST['kodelogin'] ; 
   $pswd=$_POST['pswd'];
   $hashkodelogin=md5(sha1($kodelogin));
   $hashpswd=md5(sha1($pswd));
   $koneksi=mysqli_connect('localhost','root','','shopping_cart');
   $sql1="INSERT INTO `user`(`kodelogin`, `Password`) VALUES ('".$hashkodelogin."','".$hashpswd."')";  
   $q=$koneksi->query($sql1);
                                        if ($q) {
                                         echo '<br><div class="alert alert-success"><strong>Success!</strong> Pengguna Baru Telah Di Rekord! Silahkan Login </div>'; 
                                     } else { 
                                        echo '<div class="alert alert-danger"> <strong>Danger!</strong> Pengguna baru Gagal Di Rekord! Kamu Nanyaa, Biar Aku kasih Tau Ya  <strong>Kode Login Dan Password Telah Dipakai User Lain!</strong> </div>';


                                    }
                                }
                                    ?> 
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php">Sudah Punya Akun? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
    </body>
</html>

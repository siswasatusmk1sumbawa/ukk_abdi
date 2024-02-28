<?php
    include "koneksi.php";

    if (isset($_POST['Register'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $namalengkap=$_POST['namalengkap'];
    $alamat=$_POST['alamat'];

    $sql=mysqli_query($conn,"insert into user values('','$username','$password','$email','$namalengkap','$alamat')");
      
    echo "<script>
    alert('akun anda berhasil terdaftar');
    location.href='register.php';
    </script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

<body>
<?php  
include "layout/header.html";
?>


   <main class="container">
   <div class="row justify-content-center">
   <div class="col-sm-4 mt-4">
    <div class="text-center">
    <h1 style="color:white;"> REGISTER </h1>
    </div>
 
  <form action="register.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="username"></label>
      <input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username">
    </div>
    <div class="mb-3">
      <label for="email"></label>
      <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="nama lengkap"></label>
      <input type="text" class="form-control" id="nama lengkap" placeholder="Masukan Nama Lengkap" name="namalengkap">
    </div>
    <div class="mb-3">
      <label for="password"></label>
      <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
    </div>
    <div class="mb-3 mt-3">
      <label for="alamat"></label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary" name="Register">register</button>
    </div>
    <div class="text-center">
    Sudah punya akun, silahkan <a href="login.php">Kembali</a>
    </div>
    
  </form>
</div>
</div>
</main>




   <?php  
include "layout/footer.html";
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
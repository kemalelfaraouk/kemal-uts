<?php 
require 'config.php';

// jika sudah login maka redirect ke halaman utama.
if(isset($_SESSION['login'])) {
  exit(header("Location:".$url));
}

// Jika tombol login ditekan.
if(isset($_POST['login'])) {
  // Inisial variable.
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  
  // query ke database mencari username yang sama dengan di inputkan dari $_POST['username']
  $checkUsername = $db->query("SELECT * FROM users WHERE username = '" . $username . "'");
  // Tampilkan user berdasarkan query $checkUsername
  $dataUser = $checkUsername->fetch_assoc();
  
  // Jika username, password, level tidak di isi.
  if(!$username || !$password || !$level) {
    $_SESSION['error'] = 'Username / password / level tidak boleh kosong.';
  // Jika user yg di inputkan tidak ada di database.
  } else if($checkUsername->num_rows == 0) {
    $_SESSION['error'] = 'Username tidak terdaftar.';
  // jika level dari query diatas tidak sama dengan level yang didatabase.
  } else if($dataUser['level'] !== $level) {
    $_SESSION['error'] = "Kamu bukan {$level}";
  // Jika passwordnya salah.
  } else if(password_verify($password, $dataUser['password']) == false) {
    $_SESSION['error'] = "Password salah.";
  // Jika semua nya benar
  } else {
    // Set session login.
    $_SESSION['login'] = $dataUser;
    /*
    * SESSION LOGIN berupa array jadi jika ingin mencetaknya.
    * begini $_SESSION['login']['username']
    * index pertama berisi nama sessionnya (login)
    * index kedua berisi nama kolom dari databasenya. (username) / (level) / (created_at)
    */
    // Set session success
    $_SESSION['success'] = "Selamat datang {$dataUser['username']}.";
    // Redirect ke halaman utama.
    exit(header("Location: " . $url));
  }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= $url; ?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= $url; ?>assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= $url; ?>assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= $url; ?>assets/css/style.css">

    <title>Login #8</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="<?= $url; ?>assets/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              
              <!-- BEGIN: Jika ada session success -->
              <?php if(isset($_SESSION['success'])) { ?>
                <div class="mt-2 alert alert-success">
                  <?= $_SESSION['success']; ?>
                </div>
              <?php } unset($_SESSION['success']); ?>
              <!-- END: Jika ada session success -->
              
              <!-- BEGIN: Jika ada session error -->
              <?php if(isset($_SESSION['error'])) { ?>
                <div class="mt-2 alert alert-danger">
                  <?= $_SESSION['error']; ?>
                </div>
              <?php } unset($_SESSION['error']); ?>
              <!-- END: Jika ada session error -->
              
            </div>
            <form action="" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input name="username" value="<?= (isset($_POST['username'])) ? $_POST['username'] : ''; ?>" type="text" class="form-control" id="username">

              </div>
              
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input name="password"type="password" class="form-control" id="password">
              </div>
              
              <div class="form-group last mb-4">
                <select name="level" class="form-control">
                  <option selected disabled>Pilih level</option>
                  <option value="admin" <?= (isset($_POST['level']) == 'admin') ? 'selected' : ''; ?>>Admin</option>
                  <option value="pelanggan" <?= (isset($_POST['level']) == 'pelanggan') ? 'selected' : ''; ?>>Pelanggan</option>
                  <option value="teknisi" <?= (isset($_POST['level']) == 'teknisi') ? 'selected' : ''; ?>>Teknisi</option>
                  <option value="cs" <?= (isset($_POST['level']) == 'cs') ? 'selected' : ''; ?>>CS</option>
                  <option value="kasir" <?= (isset($_POST['level']) == 'kasir') ? 'selected' : ''; ?>>Kasir</option>
                  <option value="manajer" <?= (isset($_POST['level']) == 'manajer') ? 'selected' : ''; ?>>Manager</option>
                </select>
              </div>
          
              <input name="login" type="submit" value="Log In" class="btn text-white btn-block btn-primary">
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
    <script src="<?= $url; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= $url; ?>assets/js/popper.min.js"></script>
    <script src="<?= $url; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= $url; ?>assets/js/main.js"></script>
  </body>
</html>
<?php
// mengambil / merequire file config.php
require 'config.php';

// mengecek jika tidak ada session login maka akan meredirect kehalaman landing

if(!$_SESSION['login']){
	exit(header("Location:".$url."/landing/"));
}

//$db->query("INSERT INTO users VALUES('', 'manager', '" . password_hash('manager', PASSWORD_DEFAULT)  . "', 'manager', '" . date('Y-m-d H:i:s') . "')");

?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Halaman utama</title>
  </head>
  <body>
    
    <div class="container-fluid">
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= $url; ?>">Kemal Palevi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $url; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $url; ?>logout">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Featured</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div class="row mt-3">
		<div class="col-md-12">
			
			<!-- BEGIN: Jika ada session success -->
			<?php if($_SESSION['success']) { ?>
				<div class="alert alert-success">
					<?= $_SESSION['success']; ?>
				</div>
			<?php } unset($_SESSION['success']); ?>
			<!-- END: Jika ada session success -->
			
			<div class="card">
				<div class="card-header">Card</div>
				<div class="card-body">
					<div class="alert alert-info">
						Hallo <?= $_SESSION['login']['username']; ?><br/>
						Anda adalah seorang <?= $_SESSION['login']['level']; ?>
					</div>
					<hr/>
					<div class="table-responsive mt-3">
						<h6> Detail akun : </h6>
						<hr/>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Username</th>
									<td><?= $_SESSION['login']['username']; ?></td>
								</tr>
								<tr>
									<th>Level</th>
									<td><?= $_SESSION['login']['level']; ?></td>
								</tr>
								<tr>
									<th>Terdaftar</th>
									<td><?= $_SESSION['login']['created_at']; ?></td>
								</tr>
							</tbody>
						</table>
						<hr/>
					</div>
				</div>
			</div>
		</div>
	</div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('gambar/backgroundlogin.gif');
            background-size: cover;
            background-repeat: no-repeat;
        }
        footer {
            background-color: navy;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>

<style>
  .navbar-brand span {
    font-family: 'Arial', sans-serif;
    font-size: 24px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><span>Website Galeri Foto</span></a>
    <div class="ml-auto">
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>LOGIN APLIKASI</h5>
                    </div>
                    <form action="config/aksi_login.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit" name="submit">LOGIN</button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum Punya Akun? <a href="register.php">Daftar Disini!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 fixed-bottom">
    <p>&copy; UKK RPL 2024 | Syahril May Mubdi</p>
</footer>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

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
        .navbar-brand span {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        ::placeholder {
            color: #a0a0a0; 
            opacity: 0.6; 
            transition: opacity 0.3s ease; 
            font-size: 12px; 
        }
        :focus::placeholder {
            opacity: 1;
        }
    </style>
</head>
<body>

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
                        <h5>Daftar Disini</h5>
                    </div>
                    <form id="myForm" action="config/aksi_register.php" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan Username Anda" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan Password Anda" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Masukkan Email Anda" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="namalengkap">Nama Lengkap</label>
        <input type="text" name="namalengkap" id="namalengkap" placeholder="Masukkan Nama Lengkap Anda" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" class="form-control" required> <br>
    </div>
    <button class="btn btn-primary" type="submit" name="kirim">Daftar</button>
    <button type="button" class="btn btn-danger" onclick="resetForm()">Reset Form</button>
</form>

<script>
    function resetForm() {
        document.getElementById("myForm").reset();
    }
</script>

                    <hr>
                    <p>Sudah Punya Akun? <a href="login.php">Login Disini!</a></p>
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

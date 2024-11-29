<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Register</h3>

                    <?php
                    if (isset($_POST['register'])) {
                        $nik = $_POST['nik'];
                        $nama = $_POST['nama'];
                        $username = $_POST['username'];
                        $password = md5($_POST['password']); 
                        $telp = $_POST['telp'];
                        $level = $_POST['level'];

                        // Insert query to add user
                        $insert = mysqli_query($koneksi, "INSERT INTO user(nik, nama, username, password, telp, level) 
                                                          VALUES('$nik', '$nama', '$username', '$password', '$telp', '$level')");

                        if ($insert) {
                            echo '<script>alert("Pendaftaran Berhasil!"); location.href="login.php";</script>';
                        } else {
                            echo '<script>alert("Pendaftaran Gagal");</script>';
                        }
                    }
                    ?>

                    <form method="post">
                        <div class="form-group mb-3">
                            <input name="nik" type="text" class="form-control" placeholder="Masukkan NIK Anda..." required>
                        </div>
                        <div class="form-group mb-3">
                            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Anda..." required>
                        </div>
                        <div class="form-group mb-3">
                            <input name="username" type="text" class="form-control" placeholder="Masukkan Username Anda..." required>
                        </div>
                        <div class="form-group mb-3">
                            <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password" required>
                        </div>
                        <div class="form-group mb-3">
                            <input name="telp" type="text" class="form-control form-control-user" id="exampleInputPhone" placeholder="Masukkan Nomer Telepon Anda..." required>
                        </div>
                        <div class="form-group mb-3">
                            <select name="level" class="form-select" required>
                                <option value="admin">Admin</option>
                                <option value="masyarakat">Masyarakat</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                        <button type="submit" name="register" value="register" class="btn btn-primary w-100">Register</button>
                    </form>

                    <p class="text-center mt-3">Sudah punya akun? <a href="login.php" class="text-decoration-none">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>

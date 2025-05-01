<?php
session_start();
require 'fuction.php';  // Memasukkan koneksi database

// ===== LOGIN HANDLING =====
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $hitung = mysqli_num_rows($check);

    if ($hitung > 0) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;  // Menyimpan username dalam session
        $_SESSION['user'] = $username;  // Menyimpan data user setelah login berhasil
        header('Location: index.php');
        exit();
    } else {
        echo '<script>
            alert("Username atau password salah");
            window.location.href = "login.php";
        </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        /* Menambahkan gambar background pada body */
        body {
            background-image: url('https://cdn.vectorstock.com/i/preview-1x/48/07/perspective-view-of-supermarket-grocery-store-vector-47834807.jpg');
            /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            /* Membuat body memiliki tinggi penuh */
            margin: 0;
            /* Menghapus margin default */
            display: flex;
            justify-content: center;
            align-items: center;
            /* Memastikan konten di tengah secara vertikal */
        }

        /* Menyesuaikan ukuran form login */
        #layoutAuthentication {
            width: 100%;
            max-width: 400px;
            /* Atur lebar maksimal form */
        }

        /* Menambahkan style agar card form lebih rapi */
        .card {
            background: rgba(255, 255, 255, 0.8);
            /* Membuat card transparan sedikit */
            padding: 2rem;
            /* Memberikan padding pada card */
        }
    </style>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputusername" name="username" type="text" placeholder="username" />
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Welcome</title>

    <!-- local css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <style>
        .content {
            background-image: url('assets/img/back_main.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .formulir {
            max-width: 400px;
            margin-top: 100px;
        } 

    </style>
</head>
<body class="content">
    <div class="container">
        <div id="box">
            <div class="formulir container">
                <div class="col align-self-center">
                    <h1 class="judul text-center fw-bold">DAFTAR</h1>
                    <form method="POST" action="cekdaftar.php">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password" name="password">
                        </div>
                        <center>
                            <button type="submit" class="btn btn-success">Daftar</button> <br>
                        </center>
                    </form>
                    <br>
                    <center>
                        <p class="putih">Sudah punya akun? <a href="login.php" class="putih fw-bold">login</a></p>
                    </center>
                </div> 
            </div>
        </div>
    </div>

    <!-- moving letter js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- local js -->
    <script src="assets/js/script.js"></script>
</body>
</html>
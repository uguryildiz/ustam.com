<?php
// Start the session
session_start();
include "../common/db.php";

$mesaj = "";

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    $_SESSION['oturum'] = false;
    session_destroy();
    $mesaj = "<div class='alert alert-success'>Oturum Başarıyla Sonlandırıldı!</div>";
}

if(isset($_POST['gonder'])){
    $sql = "SELECT sifre FROM kullanici WHERE eposta = '" . $_POST['eposta'] . "'";
    $sonuc = $conn->query($sql);
    if($sonuc->num_rows == 1){
        $kayit = $sonuc->fetch_assoc();
        if($kayit['sifre'] == $_POST['sifre']){
            $_SESSION['oturum'] = true;
            header('Location: index.php');
            exit;
        }else{
            $mesaj = "<div class='alert alert-danger'>Şifre veya Kullanıcı Adı Hatalıdır!</div>";
        }
    }else{
        $mesaj = "<div class='alert alert-danger'>Şifre veya Kullanıcı Adı Hatalıdır!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="login.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="eposta" class="form-control" value="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="sifre" class="form-control" value="Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input  class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="gonder" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                                    </div>
                                    
                                    <?= $mesaj ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>
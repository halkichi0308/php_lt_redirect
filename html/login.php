<?php
require './function.php';

$msg = '';

if(!empty($_GET['redirectUrl']) && !empty($_POST['name'])){
    $_SESSION["NAME"] = $_POST['name'];
    header('Location: '. $_GET['redirectUrl']);
}else{
    //header('Location: login');
}

if($_SERVER['SERVER_NAME'] === 'hacker.com'){
    $errMsg = 'アカウント情報に誤りがあります';
}
if(!empty($_GET['redirectUrl'])){
    $toPath = $_GET['redirectUrl'];
}else{
    $toPath = '/mypage';
}
if(!empty($_SESSION['err'])){
    switch($_SESSION['err']){
        case 1:
            $msg = 'ログインしてください。';
            session_destroy();
            break;
        default;
    }
}


?>
<html>
  <head>
    <title>
        Login
    </title>
    <?php
    echo $echo_header;
?>
<link rel="stylesheet" href="./css/style.css">
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Login</h2>
   <p style="color:red">
    <?php echo !empty($errMsg) ? $errMsg : ''; ?>
   </p>
   </div>
    <form id="Login" action="/login?redirectUrl=<?php echo $toPath;?>" method="POST">

        <div class="form-group">
            <p class="text-danger">
                <?php echo $msg;?>
            </p>

            <input type="text" class="form-control" id="inputEmail" name="name" placeholder="Name">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Password">

        </div>
        <div class="forgot">
        <a href="#">Forgot password?</a>
</div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
<p class="botto-text"> Designed by Sunil Rajput</p>
</div></div></div>


</body>
</html>

<?php
session_start();

if(empty($_COOKIE['SID'])){
    header('Location: login');
}
$echo_header = <<< EOF
<link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
EOF;

?>
<?php

include('../protect.php');


if(!isset($_SESSION)){
    session_start();
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vagasurgentes-suporte</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicoin.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>

        body{
            background-color: rgb(230, 227, 225);
        }
        .tex{
            background-color: rgb(255, 255, 255);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 12px;
            font-family: system-ui;
            border: 0;
            border-radius: 12px;

                }
    </style>
</head>
<body>
    <div>
        <div class="tex">
            <img src="zap.png" alt="" style="
    width: 79px;
    height: 76px;
" >
            
         <a href="https://wa.me/5511958634903">     <button type="button" class="btn btn-success" style="text-decoration: none; color: #ffff;"> falar com o suporte</button> </a>
           
         <a href="dashboard.php">     <button type="button" class="btn btn-danger" style="text-decoration: none; color: #ffff;">Volta </button> </a>


                
        </div>
    </div>
</body>
</html>
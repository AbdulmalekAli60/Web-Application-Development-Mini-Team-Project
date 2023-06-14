<?php
include('init.php')
?>


<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/login.css">
    <title>UFix</title>
    <style>
        .alert{
            color: red;
            font-size: 16px;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Start Nav -->
    <nav class="nav">
        <div class="container">
            <a href="index.php" class="logo"><img src="Icons/logo-no-background.png" alt="UFix logo"></a>
            <div class="links">
                <a href="index.php" class="nav-links"><i class="fa fa-home fa-xl fa-fw"></i> الرئيسية</a>
                <a href="login.php" class="nav-links"><i class="fa fa-sign-in fa-xl fa-fw"></i>تسجيل الدخول</a>
                <a href="about.php" class="nav-links"><i class="fa fa-exclamation fa-xl fa-fw"></i>من نحن</a>
                <input type="search" placeholder="بحث... " class="search">
            </div>
        </div>
        <!-- End Nav -->

        <div class="main-container">
            <h2>تسجيل الدخول </h2>

         <?php 
             if($_SERVER['REQUEST_METHOD'] == 'POST'){
              $sql = "SELECT * FROM `users` WHERE Name = :name AND Password = :password";
              $statement = $connection->prepare($sql);
              $statement->execute(array(

                ':name' => $_POST['name'],
                ':password' => sha1($_POST['password']),
          ));

          $Numbers = $statement->rowCount();

          if($Numbers == 1 ){
            header('location:Products.php');
          }else{
            echo "Failure";
          }
       } ?>

            <form action="" style="border:1px solid #000814" onsubmit="return Validation()" action="login.php" method="POST"> <!--submit event on all the form-->
                <div class="container">
                    <label><b>البريد الالكتروني</b></label><span  class="alert" id="Email-alert"></span>
                    <input type="text" placeholder="First Name" name="name" id="Email" >

                    <label><b>كلمة السر</b></label><span class="alert" id="pass-alert"></span>
                    <input type="password" placeholder="PassWord" name="password" id="password" >

                    <input type="checkbox" checked="checked"> تذكرني
                    <p>لإنشاء حساب، يجب الموافقة على <a href="#" style="color: lightblue;"> شروط الاستخدام & الخصوصية </a>.</p>

                    <div class="clearfix">
                        <a href="SignUp.php"> <button type="button" class="cancelbtn">إنشاء حساب جديد</button></a>
                       <a href="Products.php"> <button type="submit" class="signupbtn" onclick="Validation()" id="supmit">تسجيل الدخول</button></a>
                    </div>
                </div>
            </form>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
            integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.js"
            integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
            <!-- <script src="JS/validation_functions.js"></script> -->
</body>

</html>
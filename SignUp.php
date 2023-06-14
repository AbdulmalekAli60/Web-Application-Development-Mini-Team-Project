<?php
include('init.php')
?>

<!DOCTYPE html >
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/SignUp.css">
    <title>UFix</title>
</head>
<body>
    <!-- START nav -->
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

      <h2>إنشاء حساب جديد</h2>
      <?php 
             if($_SERVER['REQUEST_METHOD'] == 'POST'){
              $sql = "INSERT INTO `sign_up_2` (`id`, `username`, `firstname`, `lastname`, `email`, `phoneNumber`, `password`) VALUES (NULL, :username, :firstname, :lastname, :email, :phoneNumber, :password)";
              $statement = $connection->prepare($sql);
              $statement->execute(array(

                ':username'=> $_POST['username'],
                ':firstname'=>$_POST['firstname'],
                ':lastname' => $_POST['lastname'],
                ':email' => $_POST['email'],
                ':phoneNumber' =>$_POST['phoneNumber'],
                ':password' => sha1($_POST['password']),
          ));
       } ?>

          <form style="border:1px solid #000814" onsubmit="return Validation()" action="SignUp.php" Method="POST">
            <div class="container">
             <label>اسم المستخدم </b></label> <span class="alert" id="username-alert"></span>
             <input type="text" placeholder="اسم المستخدم " name="username" id="username">
 
             <label><b>الأسم الاول </b></label> <span class="alert" id="firstName-alert"></span>
             <input type="text" placeholder="أدخل الأسم الاول" name="firstname" id="firstname">
 
             <label><b>الأسم الأخير </b></label> <span class="alert" id="lastName-alert"></span>
             <input type="text" placeholder="أدخل الأسم الأخير" name="lastname" id="lastName">
 
                <label><b>البريد الالكتروني</b></label> <span class="alert" id="Email-alert"></span>
                <input type="text" placeholder="أدخل بريدك الالكتروني هنا" name="email" id="Email">
 
                <label><b>ادخل رقم الجوال </b></label> <span class="alert" id="phone-alert"></span>
                <input type="text" placeholder="رقم الجوال" name="phoneNumber" id="phone">
 
                <label><b>كلمة السر</b></label> <span class="alert" id="password-alert"></span>
                <input type="password" placeholder="كلمة السر" name="password" id="password">
 
                <input type="checkbox" checked="checked"> تذكرني
                <p>لإنشاء حساب، يجب الموافقة على <a href="#"> شروط الاستخدام & الخصوصية </a>.</p>
  
                <div class="clearfix">
                    <button type="submit" class="cancelbtn" onclick="Validation()"  >إنشاء حساب جديد</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- <script src="js/signupvalidation.js"></script> -->
</body>
</html>


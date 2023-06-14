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
    <link rel="stylesheet" href="CSS/about.css">
    <title>UFix</title>
</head>

<body>
    <!-- start nav -->
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
        <!-- end nav -->


        <!-- start about -->
        <div class="paragraph">
            <div class="overflow">
            <label for="" class="about">نبذة عنا...</label>
            <p class="first-paragraph"> UFix يهدف الى مساعدتكم في اصلاح هواتفكم بخطوات بسيطة وواضحة دون الحاجة لزيارة
                <br>مراكز الصيانة
            </p>
        </div>
        </div>
        <!-- end about  -->

        <!-- start footer  -->
        <footer>

            <ul class="right">
                <li>UFix</li>
                <li>نساعدك في اصلاح جهازك</li>
            </ul>

            <div class="middle">
                <p>جميع الحقوق محفوظة &copy;</p>
            </div>
            <ul class="left">
                <li> <a href="#" class="footer-link" target="_blank"><i class="fab fa-twitter fa-xl fa-fw"></i></a></li>
                <li> <a href="#" class="footer-link" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li> <a href="#" class="footer-link" target="_blank"><i class="fab fa-facebook fa-xl fa-fw"></i></a>
                </li>
                <li> <a href="mailto:abdulmalek.am@gmail.com" class="footer-link"><i
                            class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </footer>
        <!-- end footer -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
            integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.js"
            integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>

</html>
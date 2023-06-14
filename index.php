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
    <link rel="stylesheet" href="CSS/index.css">
    <title>UFix</title>
  
</head>
<!-- mine -->

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

        <div class="main-img">
            <div class="overflow">
                <div class="right">
                    <div class="text">
                        <h1>نساعد على اصلاح جهازك</h1>
                        <h1>بكل سهولة</h1>
                        <h1>ويُسر</h1>
                    </div>
                </div>
                <div class="left">
                    <img src="Icons/logo-no-background.png" alt="">
                </div>
            </div>
        </div>
         
        <!-- <a href="Products.php">click here</a> -->
        <!-- card -->
        <div class="categories">
            <button id="categories">الأقسام &#9662;</button> 
            <div class="category-list">


            <?php
        // $sql = 'SELECT * FROM sign_in ORDER BY id Desc Limit 3';
        $sql = 'SELECT * FROM `cata` ORDER BY ID Desc Limit 3';
        $statement = $connection->prepare($sql);
        $statement->execute();
        
        $records = $statement->fetchAll(); // stored all info at records as an array 

        foreach($records as $record){ // iterate through the array
         
        ?>
        <div class="category-item">
            <a href="screen.php">
             <div class="category-image">
                 <img src="<?php echo $record['Catagory_Image'] ?>" alt="">
                </div>
                    <h3 class="category-title"><?php echo $record['Catagory_Description']?></h3>
                </div>
                </a>
       <?php  }  ?>

            <!-- </a> -->
                <!-- <div class="category-item" >
                    <a href="battery.php">
                    <div class="category-image">
                        <img src="Images/imege for battery section.jpg"
                            alt="">
                </div>
                </a>
                    <h3 class="category-title">بطارية للايفون 14 برو ماكس</h3>
                </div>
                <div class="category-item">
                    <a href="screen.php">
                    <div class="category-image">
                        <img src="Images/imege for screen section.jpeg"alt="">
                    </div>
                </a>
                    <h3 class="category-title">شاشة لايفون 14 برو ماكس</h3>
                </div>
            </div> -->
        </div>
        
        <!-- Start footer -->
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
                <li> <a href="#" class="footer-link" target="_blank"><i class="fab fa-facebook fa-xl fa-fw"></i></a></li>
                <li><a href="mailto:abdulmalek.am@gmail.com" class="footer-link"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </footer>
        <!--End Footer-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
            integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.js"
            integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
            <script src="JS/index.js"></script>
            <script>
          
                   
                
            </script>
</body>
</html>
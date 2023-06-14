php<?php
include('init.php')
?>


<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/screen.css">
    <title>UFix</title>
    <style>
      
    </style>
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
    </nav>
    
    <!-- end nav -->
    <h2 style="text-align: center; color: #ccc;"> شاشة ايفون 14 برو ماكس</h2>
    <h3 style="text-align: center; color: #ccc;">الوقت 1-2 ساعة , الصعوبة-متوسطة</h3>
    <!-- tools and lists -->
    <div class="dropdown">
        <button class="dropdown_btn" style="border-radius: 10px;font-size: 18px;">
            الأدوات والقطع المطلوبة &#9662;
        </button>
        <div class="dropdown_menu">
            <div class="dropdown_title">القطع Parts</div>
            <a href="https://www.ifixit.com/products/iphone-14-pro-max-screen" target="_blank">شاشة ايفون 14 برو ماكس</a>
            <a href="https://tinyurl.com/4t2d8hf3" target="_blank">لاصق الشاشة</a>
            <div class="dropdown_title">الأدوات Tools</div>
            <a href="https://tinyurl.com/5z36skee" target="_blank">مفك</a>
            <a href="https://tinyurl.com/yntwm47x" target="_blank">مثلث بلاستيكي</a>
            <a href="https://tinyurl.com/3bkb27hx" target="_blank">ملاقط</a>
            <a href="https://tinyurl.com/2p8ee7zm" target="_blank">مقبض شفط</a>
        </div>
    </div>
    <!-- الخطوات -->
    <div class="cards">
        <!-- Step 1 -->
        <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/rCRKRYigHPsuWS6n.medium" alt="">
            <div class="text">
                 <span class="steps">الخطوة 1</span>
                    <ul class="list">
                    <li> قم بإزالة المسامير الموجودة أسفل الهاتف</li>
                    <li>قم بإيقاف تشغيل جهازك قبل البدء في التفكيك</li>
                    <li>قم بإزالة المسمارين الخماسيين  بطول 6.8 مم في الحافة السفلية للجهاز</li>
                </ul>
            </div>
        </div>
        <!-- Step 2 -->
        <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/TmffVUKSLuGDi1M1.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 2</span>
                <ul class="list">
                    <li> ضع مقبض الشفط على الحافة السفلية للشاشة</li>
                    <li>ضع مقبض الشفط على الحافة السفلية للشاشة ، مع تجنب حافة الزجاج.</li>
                    <li>اسحب مقبض الشفط لأعلى بضغط ثابت  لإنشاء فجوة طفيفة بين اللوحة الأمامية والعلبة الخلفية.</li>
                </ul>
            </div>
        </div>
        <!-- Step 3 -->
        <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/1mspXVlycThv4xTJ.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 3</span>
                <ul class="list">
                    <li> أدخل مثلث الفتاحة</li>
                    <li>أدخل مثلث البلاستيكي بين الشاشة والفجوة</li>
                    <li>افعل ذلك لجميع جوانب الشاشة</li>
                    <li>لا تقم بإدخال المثلث البلاستيكي أكثر من 3 مم وإلا فقد تتلف مجموعة مستشعرات اللوحة الأمامية</li>
                </ul>
            </div>
        </div>
        <!-- Step 4 -->
        <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/53QiocHwUeHAYbNH.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 4</span>
                <ul class="list">
                    <li> افتح جهاز الآيفون</li>
                    <li>فتح جهاز الايفون الخاص فيك الخاص بك عن طريق رفع الشاشة لأعلى ، مثل الغلاف الأمامي لكتاب</li>
                    <li>قم بإمالة الشاشة على شيء ما لإبقائها مدعومة أثناء العمل على الهاتف.</li>
                </ul>
            </div>
        </div>
         <!-- Step 5 -->
         <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/4WpIV4iDOISHdkTh.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 5</span>
                <ul class="list">
                    <li> قم بفك مسامير غطاء موصل البطارية</li>
                    <li>استخدم مفك براغي Y000 لإزالة المسامير الثمانية التي تثبت غطاء موصل البطارية</li>
                    <li>ستة مسامير بطول 1.3 مم</li>
                    <li>مسمار واحد بطول 1.6 مم</li>
                    <li> مسمار واحد بطول 1.9 مم</li>
                    <li>خلال هذا الإصلاح ، تتبع كل برغي وتأكد من أنه يعود بالضبط من حيث أتى لتجنب إتلاف جهاز الايفون الخاص بك الخاص بك</li>
                </ul>
            </div>
        </div>
          <!-- Step 6 -->
          <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/eEoawZ5UuGAF41lO.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 6</span>
                <ul class="list">
                    <li> قم بإزالة غطاء موصل البطارية</li>
                    <li>أمسك غطاء الموصل بزوج من الملاقط وحركه لأسفل لمسح الكابلات المرنة</li>
                    <li>قم بإزالة غطاء الموصل.</li>
                </ul>
            </div>
        </div>
         <!-- Step 7 -->
         <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/QFhFfgYEJWdskJcr.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 7</span>
                <ul class="list">
                    <li> افصل البطارية</li>
                    <li>استخدم الطرف المدبب لأداة  لفصل كابل البطارية عن طريق تحريك الموصل مباشرة من مقبسه</li>
                    <li>حاول ألا تتلف ختم السيليكون الأسود المحيط بهذا ووصلات اللوحة الأخرى. توفر هذه الأختام حماية إضافية ضد تسرب الماء والغبار</li>
                    <li>قم بثني الموصل بعيدا قليلا عن لوحة المنطق لمنعه من الاتصال بالمقبس عن طريق الخطأ وتوفير الطاقة للهاتف أثناء الإصلاح</li>
                </ul>
            </div>
        </div>
         <!-- Step 8 -->
        <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/2eCfSpnThmxIg61Y.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 8</span>
                <ul class="list">
                    <li> افصل كبلات الشاشة</li>
                    <li>استخدم الطرف المدبب لأداة  لفصل كبل العرض الأول عن طريق تحريك الموصل مباشرة من مقبسه</li>
                    <li> قم بمحاذاة واضغط لأسفل على جانب واحد حتى تستقر في مكانها ، ثم كرر على الجانب الآخر. لا تضغط لأسفل على المنتصف. إذا كان الموصل غير محاذ ، يمكن أن تنحني المسامير ، مما يتسبب في تلف دائم.</li>
                </ul>
            </div>
        </div>
           <!-- Step 9 -->
           <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/aaBMI6GNvlUf2hl4.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 9</span>
                <ul class="list">
                    <li>فصل كابل الشاشة الثاني</li>
                    <li>استخدم الطرف المدبب للملقاط  لفصل كبل الشاشة الثاني عن طريق تحريك الموصل مباشرة من مقبسه.</li>
                </ul>
            </div>
        </div>
           <!-- Step 10 -->
           <div class="card">
            <img src="https://guide-images.cdn.ifixit.com/igi/eEoawZ5UuGAF41lO.medium" alt="">
            <div class="text">
                <span class="steps">الخطوة 10</span>
                <ul class="list">
                    <li>اتبع الخطوات بالعكس</li>
                </ul>
            </div>
        </div>

    </div> <!--End Cards-->

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
               <li> <a href="mailto:abdulmalek.am@gmail.com" class="footer-link"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </footer>
    <!--End Footer--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>
</html>
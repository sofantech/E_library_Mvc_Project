
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="hadi ahmed">
    <meta name="description" content="E-book-library">
    <meta name="keywoard" content="html , css , js">
    <link rel="stylesheet" href="asset/css/style.css">
   
    <!--normalize library-->
    <link rel="stylesheet" href="asset/css/normalize.css">
    <link rel="stylesheet" href="asset/fonts/remixicon.css">
    <title>E-library Project</title>
</head>
<body id="home-page">
    <!--start header-->
    <header id="header" class="header">
        <!--start top-bar-header-->
        <div class="top-header">
            <div class="container">
                <ul class="menu_list" id="menu_list">
                    <li>
                        <div class="regester-op nav-item" href="#">
                            <i class="ri-user-fill"></i>
                            <a class="login" id="login" href="#">ادخل لحسابك</a>
                            <span class="separator">أو</span>
                            <a class="create-acount" id="signin" href="#">سجل الان</a>
    
                        </div>
                    </li>
                    <li>
                        <div class="nav-item" href="#">
                            <i class="ri-star-fill"></i>
                            <a class="home" href="">الرئيسية</a>
                        </div>
                    </li>
                    <li>
                        <div class="nav-item" href="#">
                            <i class="ri-truck-fill"></i>
                            <a class="about" href="">من نحن</a>
                        </div>
                    </li>
                    <li>
                        <div class="nav-item" href="#">
                            <i class="ri-shield-check-fill"></i>
                            <a class="contact" href="">اتصل بنا</a>
                        </div>
                    </li>
                    <li>
                        <div class="nav-item" href="#">
                            <i class="ri-information-fill"></i>
                            <a class="help" href="">المساعدة</a>
                        </div>
                    </li>
                    <li>
                        <div class="nav-item" href="#">
                            <i class="ri-map-pin-user-fill"></i>
                            <a class="permission" href="">سياسة الخصوصية</a>
                        </div>
                    </li>
                    <li>
                        <div class="country nav-item" href="#">
                            <i class="contry-flag"></i>
                            <a class="create-acount" href="">اليمن</a>
                            <i class="contry-currency">YER</i>
                        </div>
                    </li>
                    <li>
                        <div class="nav-item languages" href="#">
                            <i class="ri-translate"></i>
                            <a class="language" href="">english</a>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!--end top-bar-header-->

        <!--start main-header-->
        <div class="main-header">
            <div class="container main-header-wrapper">
                <div class="togle-menu" id="togle-menu">
                    <i class="ri-menu-line"></i>
                </div>
                <div class="logo">
                    <a href="#"><img src="asset/images/logo.png"></a>
                </div>
                <form class="search-frm">
                    <input type="search" placeholder="البحث">
                </form>
                <div class="basket">
                    <i class="ri-shopping-cart-2-line"></i>
                    <span class="conter">0</span>
                </div>
            </div>
        </div>
        <!--end main-header-->
        
    </header>
    <!--end header-->
    <!--start modal login-->
    <div class="modal-login" id="modal-login">
        <div class="modal-content">
            <div class="close-btn" id="close-btn">
                <i class="ri-close-line"></i>
            </div>
            <h2>تسجيل الدخول</h2>
            <form>
                <div class="email-input">
                    <input type="email" placeholder="البريد الإلكتروني او رقم الجوال">
                </div>
                <div class="password-input">
                    <input type="password" placeholder="كلمة السر">
                </div>
                <input type="submit" value="تسجيل الدخول">
                <a class="sure-msg">ليس لديك حساب ؟</a>
                <button class="create-acount" >انشاء حساب جديد</button>
            </form>
        </div>
    </div>
    <!--end modal login-->

    <!--start modal signin-->
    <div class="modal-signin" id="modal-signin">
        
        <div class="modal-content">
            <div class="close-signin-btn" id="close-signin-btn">
                <i class="ri-close-line"></i>
            </div>
            <h2> إنشاء حساب</h2>
            <form method="POST" enctype="multipart/form-data" action="/saveuser">
                <!-- <div style="color: red; font-size:10px;">
                    <?php
                    if(isset($errors) && is_array($errors))
                    {
                        foreach ($errors as $error) {
                            echo $error ."<br>";
                            # code...
                        }
                    }
                    ?>
            
                </div> -->
                <!-- <div class="number-input">
                    <input type="number" name="phone" placeholder="رقم الجوال">
                    <div class="country-code">
                        <label >رمز البلد</label>
                        <select>
                            <option>+967</option>
                        </select>
                    </div>
                    
                </div>
                <span class="info-send">سوف نرسل لك رمز تحقق عن طريق رسالة نصية</span>
                <div class="send-btn">
                    <input type="submit" value="ارسال رمز التحقق">
                </div> -->
                <div class="first-name-input">
                    <input type="text" name="name" placeholder=" اسم المستخدم">
                </div>
                <!-- <div class="family-name-input">
                    <input type="text" placeholder="اسم العائلة">
                </div> -->
                <div class="email-input">
                    <input type="email" name="email" placeholder="البريد الالكتروني ">
                </div>
                <div class="sure-email-input">
                    <input type="email" name="email" placeholder="تاكيد البريد الالكتروني ">
                </div>
                <div class="password-input">
                    <input type="password" name="password" placeholder="كلمة السر">
                </div>
                <div class="checkbox-sure">
                    <input type="checkbox">
                    <label>اوافق على </label>
                    <a>على الشروط والاحكام</a>
                </div>
                <div class="checkbox-regester">
                    <input type="checkbox">
                    <label>اوافق على </label>
                    <a>على الشروط والاحكام</a>
                </div>
                <input type="submit" value="إنشاء حساب">
                <label>هل لديك حساب ؟ <a href="users">تسجيل الدخول</a></label>
            </form>
        </div>
    </div>
    <!--end modal signin-->
    

    <!--start slider section-->
    <div class="container">
        <div class="slider">
            <div class="form-ouer">
                <ul>
                    <li>
                        <div class="content">
                            <img src="asset/images/learn.jfif">
                            <div class="txt-ifon">
                                <h2>نشرة العروض الترويجية</h2>
                                <a class="btn">للإطلاع</a>
                                <span>هذا العرض ساري من 29 نوفمبر حتى 22-2-22022</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <img src="asset/images/light.jfif">
                            <div class="txt-ifon">
                                <h2>نشرة العروض الترويجية</h2>
                                <a class="btn">للإطلاع</a>
                                <span>هذا العرض ساري من 29 نوفمبر حتى 22-2-22022</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <img src="asset/images/read-img.jfif">
                            <div class="txt-ifon">
                                <h2>نشرة العروض الترويجية</h2>
                                <a class="btn">للإطلاع</a>
                                <span>هذا العرض ساري من 29 نوفمبر حتى 22-2-22022</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <img src="asset/images/learn.jfif">
                            <div class="txt-ifon">
                                <h2>نشرة العروض الترويجية</h2>
                                <a class="btn">للإطلاع</a>
                                <span>هذا العرض ساري من 29 نوفمبر حتى 22-2-22022</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="arrow-right">
                    <i class="ri-arrow-right-s-line"></i>
                </div>
                <div class="arrow-left">
                    <i class="ri-arrow-left-s-line"></i>
                </div>
            </div>
        </div>
    </div>
    <!--end slider section-->


    <!--start order by category section-->
    <div class="order-by-category container">
        <div class="form-outer">
            <div class="arrow-right" id="category-order-rigth">
                <i class="ri-arrow-right-s-line"></i>
            </div>
            <div class="arrow-left" id="category-order-left">
                <i class="ri-arrow-left-s-line"></i>
            </div>
            
            <ul id="category-list">
                <li class="category-box">
                    <div class="cat-logo">
                        <i class="ri-home-wifi-line"></i>
                    </div>
                    <h3 class="cat-name">دين</h3>
                </li>
                <li class="category-box">
                    <div class="cat-logo">
                        <i class="ri-gamepad-fill"></i>
                    </div>
                    <h3 class="cat-name">تاريخ</h3>
                </li>
                <li class="category-box">
                    <div class="cat-logo">
                        <i class="ri-book-open-fill"></i>
                    </div>
                    <h3 class="cat-name">روايات</h3>
                </li>
                <li class="category-box">
                    <div class="cat-logo">
                        <i class="ri-radio-2-fill"></i>
                    </div>
                    <h3 class="cat-name">سياسة</h3>
                </li>
                <li class="category-box">
                    <div class="cat-logo">
                        <i class="ri-timer-2-fill"></i>
                    </div>
                    <h3 class="cat-name">اقتصاد</h3>
                </li>
                <li class="category-box">
                    <div class="cat-logo">
                        <i class="ri-macbook-fill"></i>
                    </div>
                    <h3 class="cat-name">طبخ</h3>
                </li>
            </ul>

        </div>

    </div>
    <!--end order by category section-->


    <section class="category">
        <div class="container category-cont">
            
            <div class="order-product">
                <div class="order-criteria">
                    <h3>العروض الحالية</h3>
                    <a>عرض الكل</a>
                   
                </div>
                <div class="box-wrapper">
                    <div class="box">
                        <div class="image">
                            <div class="timer">
                                <span class="second">5</span>
                                <span>:</span>
                                <span class="minute">14</span>
                                <span>:</span>
                                <span class="houre">21</span>
                            </div>
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <div class="timer">
                                <span class="second">5</span>
                                <span>:</span>
                                <span class="minute">14</span>
                                <span>:</span>
                                <span class="houre">21</span>
                            </div>
                            <img src="asset/images/light.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <div class="timer">
                                <span class="second">5</span>
                                <span>:</span>
                                <span class="minute">14</span>
                                <span>:</span>
                                <span class="houre">21</span>
                            </div>
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <div class="price">49.9 رس</div>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <div class="timer">
                                <span class="second">5</span>
                                <span>:</span>
                                <span class="minute">14</span>
                                <span>:</span>
                                <span class="houre">21</span>
                            </div>
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <div class="timer">
                                <span class="second">5</span>
                                <span>:</span>
                                <span class="minute">14</span>
                                <span>:</span>
                                <span class="houre">21</span>
                            </div>
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <div class="timer">
                                <span class="second">5</span>
                                <span>:</span>
                                <span class="minute">14</span>
                                <span>:</span>
                                <span class="houre">21</span>
                            </div>
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <div class="timer">
                                <span class="second">5</span>
                                <span>:</span>
                                <span class="minute">14</span>
                                <span>:</span>
                                <span class="houre">21</span>
                            </div>
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container category-cont">
            
            <div class="order-product">
                <div class="order-criteria">
                    <h3>الكتب الدينية</h3>
                    <a>عرض الكل</a>
                   
                </div>
                <div class="box-wrapper">
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/light.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <div class="price">49.9 رس</div>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container category-cont">
            
            <div class="order-product">
                <div class="order-criteria">
                    <h3>الكتب التاريخية</h3>
                    <a>عرض الكل</a>
                   
                </div>
                <div class="box-wrapper">
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/light.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <div class="price">49.9 رس</div>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container category-cont">
            
            <div class="order-product">
                <div class="order-criteria">
                    <h3>السياسة</h3>
                    <a>عرض الكل</a>
                   
                </div>
                <div class="box-wrapper">
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/light.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <div class="price">49.9 رس</div>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container category-cont">
            
            <div class="order-product">
                <div class="order-criteria">
                    <h3> الاقتصاد</h3>
                    <a>عرض الكل</a>
                   
                </div>
                <div class="box-wrapper">
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/light.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <div class="price">49.9 رس</div>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container category-cont">
            
            <div class="order-product">
                <div class="order-criteria">
                    <h3>الطبخ</h3>
                    <a>عرض الكل</a>
                   
                </div>
                <div class="box-wrapper">
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/light.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <div class="price">49.9 رس</div>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container category-cont">
            
            <div class="order-product">
                <div class="order-criteria">
                    <h3>افضل الروايات الرومانسية</h3>
                    <a>عرض الكل</a>
                   
                </div>
                <div class="box-wrapper">
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/light.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <div class="price">49.9 رس</div>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/read-img.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="asset/images/learn.jfif">
                        </div>
                        <div class="book-info">
                            <div class="book-name">
                                <h3>كتاب الكتروني</h3>
                                <i class="ri-book-read-line"></i>
                            </div>
                            <span class="full-info">ابابيل (كتاب الكتروني)</span>
                        </div>
                        <div class="book-price">
                            <span class="price">49.9 رس</span>
                            <span>شامل الضريبة</span>
                        </div>
                        <div class="other-ref">
                            <label>صيغ اخرى : <span>كتاب مطبوع</span></label>
                        </div>
                        <div class="bottom-box">
                            <i class="ri-star-fill"></i>
                            <div class="shopping-basket">
                                <i class="ri-shopping-cart-2-line"></i>
                            </div>
                            <i class="ri-arrow-left-right-fill"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



    <!--start footer-->
    <footer class="footer">
        <div class="footer-links">
            <div class="container footer-boxs">
                <div class="box">
                    <h3>انضم إلى نشرتنا البريدية</h3>
                    <div class="frm-container">
                        <form>
                            <div class="input-email">
                                <input type="email" placeholder="ادخل بريدك الالكتروني">
                                <i class="ri-lock-2-line"></i>
                            </div>
                            <input type="submit" class="btn" value="اشتراك">
                        </form>
                    </div>
                </div>
                <div class="box">
                    <h3>خدمة العملا</h3>
                    <a>مبيعات الشركات</a>
                    <a>الأسئلة المتكررة</a>
                    <a> دليل التسوق و المطبوعات</a>
                    <a>مواقع المعارض</a>
                    <a>سياسة الضمان</a>
                    <a>سياسة الاسترجاع و الاستبدال </a>
                    <a>اتصل بنا</a>
                    <a>920000089</a>
                    
                </div>
                <div class="box">
                    <h3>خدمات جرير</h3>
                    <a>خدمة تقسيط المشتريات</a>
                    <a>خدمات مابعد البيع</a>
                    <a> خدمات الحماية الشاملة</a>
                    <a>حماية اجهزة آبل</a>
                    <a>بطاقة خصم جرير</a>
                    <a>بطاقة جرير للهدايا </a>
                    
                </div>
                <div class="box">
                    <h3>روابط سريعة</h3>
                    <a>إصدارات جرير</a>
                    <a>قارئ جرير</a>
                    <a> شركاء برنامج المكافئات  </a>
                    <a> خدمات شركات الاتصالات</a>
                </div>
                <div class="box">
                    <h3 class="about-head">عن جرير</h3>
                    <a>من نحن</a>
                    <a>الحوكمة</a>
                    <a>علاقات المستثمرين</a>
                    <a>الاستدامة</a>
                    <a>الأخبار</a>
                    <a>فرص العمل</a>
                    
                </div>
                <div class="box social-media">
                    <h3 class="about-head">تواصل معنا</h3>
                    <div class="social-icons">
                        <a class="ri-facebook-circle-fill"></a>
                        <a class="ri-whatsapp-fill"></a>
                        <a class="ri-twitter-fill"></a>
                        <a class="ri-snapchat-fill"></a>
                        <a class="ri-twitter-fill"></a>
                        <a class="ri-linkedin-box-fill"></a>
                    </div>
                    
                    
                </div>
                
            </div>
            
        </div>
        <div class="bottom-footer">
            <div class="copy-right-section">
                <div class="top-copy-right">
                    <span>سياسة الخصوصية</span>
                    <span>|</span>
                    <span>شروط الاستخدام</span>
                </div>
                <div class="bottom-copy-right">
                    <span>جميع الحقوق محفوظة لمكتبة جرير &copy; 2015 س.ت 1010032264. اونلاين 1010654213</span>
                </div>
            </div>
            <div class="visa-section">
                <a href="#"><img src="asset/images/card1.png" alt="qitaf visa"></a>
                <a href="#"><img src="asset/images/card2.png" alt="mada visa"></a>
                <a href="#"><img src="asset/images/card3.png" alt="visa visa"></a>
                <a href="#"><img src="asset/images/card4.png" alt="master card"></a>
                <a href="#"><img src="asset/images/card2.png" alt="amercan express"></a>
            </div>
        </div>
    </footer>
    <!--end footer-->
    <script src="asset/js/script.js">

    </script>
</body>
</html>
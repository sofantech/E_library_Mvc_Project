<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="hadi ahmed">
    <meta name="description" content="E-book-library">
    <meta name="keywoard" content="html , css , js">
    <link rel="stylesheet" href="css/style.css">
   
    <!--normalize library-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="fonts/remixicon.css">
    <title>E-library Project</title>
</head>
<body>
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
                            <a class="home" href="home.html">الرئيسية</a>
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
                    <a href="#"><img src="images/logo.png"></a>
                </div>
                <form class="search-frm">
                    <input type="search" id="search-items" onkeyup="search()" placeholder="البحث">
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
            <form>
                <div class="number-input">
                    <input type="number" placeholder="رقم الجوال">
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
                </div>
                <div class="first-name-input">
                    <input type="text" placeholder="الاسم الاول">
                </div>
                <div class="family-name-input">
                    <input type="text" placeholder="اسم العائلة">
                </div>
                <div class="email-input">
                    <input type="email" placeholder="البريد الالكتروني ">
                </div>
                <div class="sure-email-input">
                    <input type="email" placeholder="تاكيد البريد الالكتروني ">
                </div>
                <div class="password-input">
                    <input type="password" placeholder="كلمة السر">
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
                <label>هل لديك حساب ؟ <a>تسجيل الدخول</a></label>
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
                            <img src="images/learn.jfif">
                            <div class="txt-ifon">
                                <h2>نشرة العروض الترويجية</h2>
                                <a class="btn">للإطلاع</a>
                                <span>هذا العرض ساري من 29 نوفمبر حتى 22-2-22022</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <img src="images/light.jfif">
                            <div class="txt-ifon">
                                <h2>نشرة العروض الترويجية</h2>
                                <a class="btn">للإطلاع</a>
                                <span>هذا العرض ساري من 29 نوفمبر حتى 22-2-22022</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <img src="images/read-img.jfif">
                            <div class="txt-ifon">
                                <h2>نشرة العروض الترويجية</h2>
                                <a class="btn">للإطلاع</a>
                                <span>هذا العرض ساري من 29 نوفمبر حتى 22-2-22022</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <img src="images/learn.jfif">
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

























    <div class="container">
        <section class="detail">
            <div class="top-bar">
                <ul>
                    <li>
                        <a>الرئيسية</a>
                    </li>
                    <span>/</span>
                    <li>
                        <a>الكتب العربية</a>
                    </li>
                    <span>/</span>
                    <li>
                        <a>كتب الكترونية</a>
                    </li>
                    <span>/</span>
                    <li>
                        <a class="book-name">لانك انت الله</a>
                    </li>
                </ul>
    
            </div>
            <div class="book-info">
                <div class="book-image-box">
                    <div class="bg-image">
                        <img src="images/learn.jfif">
                    </div>
                    <div class="sm-image">
                        <img src="images/read-img.jfif">
                    </div>
    
                </div>
                <div class="book-detail-box">
                    <h2 class="book-name">لأنك انت الله</h2>
                    <div class="show-more">
                        <a href="#">عرض المزيد</a>
                        <i class="ri-arrow-drop-down-line"></i>
                    </div>
                    <div class="prise-box">
                        <span class="prise">12.99 ر.س</span>
                        <span class="tax">شامل الضريبة</span>
                    </div>
                    <div class="rate">
                        <span>وحدة البيع :Each</span>
                        <div class="star">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-line"></i>
                            <i class=""></i>
                            <span class="total-stars">(15 المراجعات)</span>
                        </div>
                        <div class="product-info">
                            <span class="product-num">رقم المنتج 4</span>
                            <span class="category-num">رقم الصنف 654345778</span>
                        </div>
                    </div>
                    <div class="available-format">
                        <h5>الصيغ المتوفرة</h5>
                        <div class="electro-book">
                            <input type="radio" >كتاب الكتروني
                            <div class="prise-box">
                                <span class="prise">12.99 ر.س</span>
                                <span class="tax">شامل الضريبة</span>
                            </div>
                        </div>
                        <div class="print-book">
                            <input type="radio">كتاب مطبوع
                            <div class="prise-box">
                                <span class="prise">17.25 ر.س</span>
                                <span class="tax">شامل الضريبة</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-to-basket-box">
                    <div class="note">
                        <span class="not">ملاحضة: </span><span>سيتم اضافة هذا الكتاب الالكتروني الى مكتبتك في قارئ جرير</span>
                        <a class="read-more">اقراء المزيد</a>
    
                    </div>
                    <div class="basket-btn">
                        <button><i class=""></i>اضف الى السلة</button>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="more-info">
                        <div class="one">
                            <i class="ri-rotate-lock-fill"></i>
                            <p>تسوق امن</p>
    
                        </div>
                        <div class="two">
                            <i class="ri-shield-user-fill"></i>
                            <p> اصلي و مضمون</p>
                        </div>
                        <div class="three">
                            <i class="ri-rss-fill"></i>
                            <p>شحن سريع ومجاني </p>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </section>
        <div class="book-description">
            <p>كتاب يتحدث عن بعض اسما الله الحسنى و كيف نعيشها في حياتنا حرص المؤلف ان يكون الكتاب مناسبا لمن هم متوسطي الثقافة ويكون مناسبا للمحتاج و المريض والسليم</p>
        </div>
        <div class="specification-box">
            <h2 class="specification-header">
                المواصفات
            </ا2>
            <div class="item-no">
                <label>رقم الصنف</label>
                <span>jbb410156</span>
            </div>
            <div class="product-no">
                <label>رقم المنتج</label>
                <span>4</span>
            </div>
            <div class="author">
                <label>المؤلف </label>
                <span>علي جابر الفيفي</span>
            </div>
            <div class="publisher">
                <label>الناشر </label>
                <span>دار الحضارة للنشر والتوزيع</span>
            </div>
            <div class="publish-date">
                <label>تاريخ النشر </label>
                <span> 2016</span>
            </div>
            <div class="book-format">
                <label>صيغة الكتاب </label>
                <span> Ebook</span>
            </div>
            <div class="shipping-weight">
                <label>وزن الشحن </label>
                <span> 0.011</span>
            </div>
            <div class="file-format">
                <label> صيغة الملف</label>
                <span>epub</span>
            </div>
            <div class="book-language">
                <label> اللغة</label>
                <span>عربي</span>
            </div>
            
            
        </div>
        <div class="customer-reviews">
            <div class="customer-reviews-header">
                <h2>مراجعات العملاء</h2>
                <div class="customer-btn">
                    <i class="ri-add-line"></i>
                    <span>اكتب مراجعاتك</span>
                </div>
            </div>
            <form>

            </form>
        </div>

    </div>
    



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
                <a href="#"><img src="images/card1.png" alt="qitaf visa"></a>
                <a href="#"><img src="images/card2.png" alt="mada visa"></a>
                <a href="#"><img src="images/card3.png" alt="visa visa"></a>
                <a href="#"><img src="images/card4.png" alt="master card"></a>
                <a href="#"><img src="images/card2.png" alt="amercan express"></a>
            </div>
        </div>
    </footer>
    <!--end footer-->
    <script src="js/script.js">

    </script>
</body>
</html>
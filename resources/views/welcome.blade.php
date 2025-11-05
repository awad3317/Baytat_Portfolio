<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSpark</title>
    <!-- render all element normally يجعل التصميم متوافق مع جميع المتصفحات -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">    
    <!-- font awesome library مكتبة ايقونات جاهزة -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
     <!-- Main tamplate css file --> 
    <link rel="stylesheet" href="{{ asset('assets/css/devspa.css') }}">
     <!-- google font جلب الخط من قوقل  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&family=Cairo:wght@200..1000&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

</head>
<body>
    <!-- start header  -->
     <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
            </div>
            <nav>
                <i class="fas fa-bars humburger"></i>
                <ul>
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#about">من نحن</a></li>
                    <li><a href="#services">خدماتنا</a></li>
                    <li><a href="#">اعمالنا</a></li>
                    <li><a href="#contact">تواصل معنا</a></li>
                    <br>
                    <li>
                        <div class="lan">
                            <i class="fas fa-globe"></i>
                            <h4>عربي</h4>
                            <!-- <i class="fas fa-chevron-down"></i> -->
                        </div>
                    </li>
                </ul>
            </nav>
             <div class="lang">
                    <i class="fas fa-globe"></i>
                    <h4>عربي</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
        </div>
     </header>
    <!-- end header  -->
     <!-- start landing -->
      <div class="landing">
        <div class="hero" id="hero">
            <div class="content">
                <img src="{{ asset('assets/images/hero devspark.svg') }}" alt="hero image">
                <p>نحو برمجيات أسرع ... أذكى ...  وأكثر ابتكارًا </p>
            </div>
        </div>
        <button>
            <a href="https://wa.me/967736720023" target="_blank" rel="noopener">
            تواصل معنا
            </a>
        </button>
      </div>
     <!-- end landing -->
      <!-- start about -->
       <div class="about" id="about">
        <div class="main-heading">
                    <div class="address">
                        <h2>من نحن</h2>
                        <img src="{{ asset('assets/images/about icon.svg') }}" alt="we">
                    </div>
                </div>
            <div class="container">
                <p>في DevSpark، نمزج بين الإبداع والخبرة التقنية لنحوّل أفكارك إلى منتجات رقمية مبهرة. نعمل بشغف على تصميم وتطوير حلول برمجية متكاملة، تجعل حضورك الرقمي أكثر تأثيرًا ونجاحًا.</p>
            </div>
       </div>
      <!-- end about -->
       <!-- start our vlaues  -->
        <div class="our-values" id="values">
            <div class="main-heading">
                    <div class="address">
                        <img src="{{ asset('assets/images/our values icon.svg') }}" alt="value">
                        <h2>قيمنا</h2>
                    </div>
            </div>
            <div class="container">
                
                <div class="box">
                    <img src="{{ asset('assets/images/innovation icon.svg') }}" alt="innovation">
                    <div class="text">
                        <h3>ابتكار مستمر</h3>
                        <p> نبحث دائمًا عن أحدث الحلول </p>
                    </div>
                </div>
                 <div class="box">
                    <img src="{{ asset('assets/images/Quality icon.svg') }}" alt="innovation">
                    <div class="text">
                        <h3>جودة مضمونة</h3>
                        <p> تنفيذ احترافي لكل مشروع</p>
                    </div>
                </div>
                 <div class="box">
                    <img src="{{ asset('assets/images/partnership icon.svg') }}" alt="innovation">
                    <div class="text">
                        <h3>شراكة طويلة الأمد</h3>
                        <p> نجاحك هو نجاحنا</p>
                    </div>
                </div>
                
            </div>
        </div>
       <!-- end our vlaues  -->
        <!-- start services  -->
        <div class="services" id="services">
            <div class="main-heading">
                <div class="address">
                    <h2>خدماتنا</h2>
                    <img src="{{ asset('assets/images/our service icon.svg ') }}" alt="services">
                </div>
            </div>
            <div class="container">
                <div class="container-service">
                    <div class="card">
                        <img src="{{ asset('assets/images/web icon.svg') }}" alt="web development">
                        <div class="text">
                            <h3>تطوير الويب</h3>
                            <p>نقدم حلولاً متكاملة لتطوير المواقع</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/mobile dev. icon.svg') }}" alt="mobile development">
                        <div class="text">
                            <h3>تطوير التطبيقات</h3>
                            <p>نساعدك في بناء تطبيقات مخصصة</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/system dev icon.svg') }}" alt="digital marketing">
                        <div class="text">
                            <h3>التسويق الرقمي</h3>
                            <p>استراتيجيات فعالة لزيادة الوعي بعلامتك التجارية</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('assets/images/support icon.svg')}}" alt="digital marketing">
                        <div class="text">
                            <h3>التسويق الرقمي</h3>
                            <p>استراتيجيات فعالة لزيادة الوعي بعلامتك التجارية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services  -->
         <!-- start contact  -->
          <div class="contact" id="contact">
            <div class="container">
                <div class="main-heading">
                    <div class="address">
                        <img src="{{ asset('assets/images/contact-with-us icon.svg') }}" alt="contact">
                         <h2>تواصل معنا</h2>
                    </div>
                </div>
                <div class="content">
                    <form action="">
                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <input type="text" id="name" placeholder="أدخل اسمك" required>
                        </div>
                        <div class="form-group">
                            <label for="number">الرقم</label>
                            <input type="number" id="number" placeholder="أدخل رقمك" required>
                        </div>
                        <div class="form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" id="email" placeholder="أدخل بريدك الإلكتروني" required>
                        </div>
                        <div class="form-group">
                            <label for="message">الرسالة</label>
                            <textarea id="message" rows="5" placeholder="أدخل رسالتك"></textarea>
                        </div>
                        <button type="submit">إرسـال</button>
                    </form>
                    <img src="{{asset('assets/images/contact img.svg')}}" alt="contact image">
                </div>
            </div>
          </div>
         <!-- end contact  -->
          <!-- start footer  -->
           <div class="footer">
                
                    <div class="cont-footer">
                        <div class="logo">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
                            <div class="sm-links">
                                <a><i class="fab fa-whatsapp"></i></a>
                                <a><i class="fab fa-facebook-f"></i></a>
                                <a><i class="fab fa-x"></i></a>
                                <a><i class="fab fa-instagram"></i></a>
                                <a><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div> 
                        <div class="lo">
                                 <div class="add">
                                    <div class="location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h4>الــيــمــن   -  حـضـرمـوت  -  الـمـكـلا   -  أبـراج بـن مـحـفـوظ</h4>
                                    </div>
                            
                                <div class="conta">
                                    <div class="mail">
                                        <i class="fas fa-envelope"></i>
                                        <a href="#">info@devspark.com</a>
                                    </div>
                                    <div class="phone">
                                            <i class="fas fa-phone-alt"></i>
                                            <p >+967 7******</p>
                                    </div>
                                </div>
                            </div>
                            <div class="main-links">
                                <a href="#hero">الرئيسية</a>
                                <a href="#about">من نحن</a>
                                <a href="#services">خدماتنا</a>
                                <a href="#"> اعمالنا</a>
                            </div>
                        </div>
                    </div>
                
            </div>
          <!-- end footer  -->
</body>
</html>
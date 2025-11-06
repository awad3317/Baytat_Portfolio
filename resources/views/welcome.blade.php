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
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&family=Cairo:wght@200..1000&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <meta name="description"
        content="شركة بايتات للحلول التقنية شركة سعودية متخصصة في تقديم حلول رقمية مبتكرة تشمل تصميم وتطوير المواقع الإلكترونية والتطبيقات وأنظمة إدارة الأعمال. نرتقي بتجربة عملك إلى مستوى جديد من التقنية.">
    <meta name="keywords"
        content="بايتات, حلول تقنية, تصميم مواقع, تطوير تطبيقات, برمجة, واجهات مستخدم, UX UI, مواقع احترافية, برمجيات, شركة تقنية سعودية">
    <meta name="author" content="Baytat Tech Solutions">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="بايتات للحلول التقنية | تصميم وتطوير المواقع والتطبيقات باحترافية">
    <meta property="og:description"
        content="شركة بايتات تقدم حلول رقمية متكاملة تشمل تصميم وتطوير المواقع والتطبيقات لتطوير أعمالك وتحسين حضورك الرقمي.">
    <meta property="og:image" content="{{ asset('favicons/favicon-96x96.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="بايتات للحلول التقنية | حلول رقمية مبتكرة">
    <meta name="twitter:description"
        content="شركة بايتات للحلول التقنية تقدم خدمات التصميم، التطوير، والابتكار التقني.">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/web-app-manifest-192x192.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/favicon-96x96.png') }}">
    <meta name="msapplication-TileColor" content="#00C4FF">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body>
    <!-- start header  -->
    <header>
        <div class="container">
            {{-- <div class="logo">
                <img src="{{ asset('assets/images/baytat.png') }}" width="100" height="100" alt="logo">
            </div> --}}
            <a class="logo py-0" href="#home">
                <img src="{{ asset('assets/images/baytat2.png') }}" alt="Byatat logo" width="100" height="100">
            </a>
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
                             <i class="fas fa-chevron-down"></i> 
                        </div>
                    </li>
                </ul>
            </nav>
            {{-- <div class="lang">
                <i class="fas fa-globe"></i>
                <select class="lang-select" >
                    <option value="en">English</option>
                    <option value="ar">عربي</option>
                </select>
                {{-- <h4>عربي</h4> --}}
                {{-- <i class="fas fa-chevron-down"></i> --}}
            {{-- </div>  --}}
        </div>
    </header>
    <!-- end header  -->
    <!-- start landing -->
    <div class="landing">
        <div class="hero" id="hero">
            <div class="content">
                <img src="{{ asset('assets/images/baytat.png') }}" width="500" height="300" alt="hero image">
                <p>نحو برمجيات أسرع ... أذكى ... وأكثر ابتكارًا </p>
            </div>
        </div>
        <button >
            <a href="https://wa.me/779522898" target="_blank" rel="noopener"  >
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
            <p>في Baytat نمزج بين الإبداع والخبرة التقنية لنحوّل أفكارك إلى منتجات رقمية مبهرة. نعمل بشغف على تصميم
                وتطوير حلول برمجية متكاملة، تجعل حضورك الرقمي أكثر تأثيرًا ونجاحًا.</p>
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

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/innovation icon.svg') }}" alt="innovation">
                <div class="text">
                    <h3>ابتكار مستمر</h3>
                    <p> نبحث دائمًا عن أحدث الحلول </p>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="400">
                <img src="{{ asset('assets/images/Quality icon.svg') }}" alt="innovation">
                <div class="text">
                    <h3>جودة مضمونة</h3>
                    <p> تنفيذ احترافي لكل مشروع</p>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="500">
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
                <div class="card" data-aos="fade-up">
                    <img src="{{ asset('assets/images/web icon.svg') }}" alt="web development">
                    <div class="text">
                        <h3>تطوير الويب</h3>
                        <p>نقدم حلولاً متكاملة لتطوير المواقع</p>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/images/mobile dev. icon.svg') }}" alt="mobile development">
                    <div class="text">
                        <h3>تطوير التطبيقات</h3>
                        <p>نساعدك في بناء تطبيقات مخصصة</p>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/images/system dev icon.svg') }}" alt="digital marketing">
                    <div class="text">
                        <h3>التسويق الرقمي</h3>
                        <p>استراتيجيات فعالة لزيادة الوعي بعلامتك التجارية</p>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/images/support icon.svg') }}" alt="digital marketing">
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
                    <img src="{{ asset('assets/images/contact-with-us icon.svg') }}" alt="contact" data-aos="fade-right">
                    <h2 data-aos="fade-left">تواصل معنا</h2>
                </div>
            </div>
            <div class="content" data-aos="fade-right">
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
                <img src="{{ asset('assets/images/contact img.svg') }}" alt="contact image">
            </div>
        </div>
    </div>
    <!-- end contact  -->
    <!-- start footer  -->
    <div class="footer">

        <div class="cont-footer">
            <div class="logo">
                <img src="{{ asset('assets/images/baytat1.png') }}" alt="logo">
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
                        <h4>السعودية - الدمام</h4>
                    </div>

                    <div class="conta">
                        <div class="mail">
                            <i class="fas fa-envelope"></i>
                            <a href="#">info@baytat.com</a>
                        </div>
                        <div class="phone">
                            <i class="fas fa-phone-alt"></i>
                            <p>+966 50******</p>
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
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 2000, 
        once: true 
    });
</script>

</html>

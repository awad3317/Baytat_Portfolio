<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baytat Tech Solutions</title>
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
    @include('pages.Navbar')

    <!-- end header  -->
    <!-- start landing -->
    @if (session('success') || session('error'))
        <div class="toast-message {{ session('success') ? 'success' : 'error' }}">
            <i class="fas {{ session('success') ? 'fa-check-circle' : 'fa-exclamation-circle' }}"></i>
            <span>{{ session('success') ?? session('error') }}</span>
        </div>
    @endif
    <!-- start home -->
    @include('pages.Home')
    <!-- end home -->
    <!-- end landing -->
    <!-- start about -->
    @include('pages.About_us')
    <!-- end about -->
    <!-- start our vlaues  -->
    @include('pages.Values')
    <!-- end our vlaues  -->
    <!-- start services  -->
    @include('pages.Services', ['services' => $services])
    <!-- end services  -->

    <!-- start our projects  -->
    @include('pages.Our_Projects', ['projects' => $projects])
    <!-- end our projects  -->

    <!-- start contact  -->
    @include('pages.Contact_us')
    <!-- end contact  -->
    <!-- start footer  -->
    @include('pages.Footer')
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

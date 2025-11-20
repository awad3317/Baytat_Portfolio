<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>بايتات للحلول التقنية | تطوير تطبيقات – تصميم مواقع – خدمات تقنية</title>

    <!-- normalize -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- template -->
    <link rel="stylesheet" href="{{ asset('assets/css/devspa.css') }}">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&family=Cairo:wght@200..1000&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- SEO: Description -->
    <meta name="description"
        content="بايتات للحلول التقنية تقدم خدمات تطوير التطبيقات، تصميم وبرمجة المواقع، إنشاء الهويات البصرية، وتصميم واجهات وتجارب المستخدم. حلول تقنية مبتكرة لتحويل أفكارك إلى منتجات رقمية احترافية.">

    <!-- SEO: Keywords -->
    <meta name="keywords"
        content="بايتات, تطوير تطبيقات, تصميم مواقع, برمجة مواقع, UI UX, تصميم جرافيك, هوية بصرية, حلول تقنية, شركة تقنية, خدمات رقمية, برمجة تطبيقات, تصاميم احترافية, خدمات تقنية, تكنولوجيا">

    <meta name="author" content="Baytat Tech Solutions">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="بايتات للحلول التقنية | تطبيقات – مواقع – تصاميم – حلول رقمية">
    <meta property="og:description"
        content="نحوّل أفكارك إلى مشاريع رقمية: تطوير تطبيقات، برمجة مواقع، تصميمات احترافية، وهويات بصرية. بايتات — التقنية كما يجب أن تكون.">
    <meta property="og:image" content="{{ asset('favicons/favicon-96x96.png') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="بايتات للحلول التقنية | حلول رقمية متكاملة">
    <meta name="twitter:description"
        content="تطبيقات، مواقع، تصاميم وهويات بصرية — حلول مبتكرة تلائم الشركات والمشاريع الناشئة.">

    <!-- Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/web-app-manifest-192x192.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/favicon-96x96.png') }}">
    <meta name="msapplication-TileColor" content="#00C4FF">

    <!-- AOS Animation -->
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Deskripsi Aplikasi" />
    <meta name="keywords" content="keyword1, keyword2" />
    <meta name="author" content="Diskominfotik Kab. Bengkalis" />
    <link rel="icon" href="{{ asset('theme') }}/assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('theme') }}/assets/images/favicon.png" type="image/x-icon" />
    <title>Title - Sub Title</title>
    <!-- Google font-->
    @if (request()->is('admin*'))
        <!-- admin font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/font-awesome.css" />
    @else
        <!-- landing page font -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/icofont.css">
        <link rel="icon" href="{{ asset('theme') }}/assets/svg/landing-icons.svg">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/slick.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/animate.css">
    @endif
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/icofont.css" />
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/themify.css" />
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/flag-icon.css" />
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/feather-icon.css" />
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/slick.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/prism.css" />
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/bootstrap.css" />
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/style.css" />
    <link id="color" rel="stylesheet" href="{{ asset('theme') }}/assets/css/color-1.css" media="screen" />
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/responsive.css" />
    <!-- Stack CSS -->
    @stack('css')
</head>

<body>
    @yield('content')

    <!-- Stack JS -->
    @stack('js')
</body>

</html>

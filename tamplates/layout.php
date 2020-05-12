<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo 'iGSM BOX - ' . $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/icon/favicon.png">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" type="text/css" href="/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" type="text/css" href="/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" type="text/css" href="/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" type="text/css" href="/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" type="text/css" href="/css/style-customizer.css">
    <link href="#" data-style="styles" type="text/css" rel="stylesheet">
    <!-- Modernizr JS -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Recaptcha JS -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <?php
    require_once "header.php";
    require_once "$view.php";
    require_once "footer.php";
    ?>
</body>

</html>
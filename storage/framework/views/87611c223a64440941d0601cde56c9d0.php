<head>
    <?php if(isset($setting->google_analytics_code)): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($setting->google_analytics_code); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo e($setting->google_analytics_code); ?>');
    </script>
    <?php endif; ?>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="icon" href="/<?php echo e($setting->favicon_path); ?>">
    <title><?php echo e($setting->site_name); ?> | <?php echo $__env->yieldContent('title'); ?></title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="/assets/css/fonts.css" rel="stylesheet">
    <!-- CSS files -->
    <link href="/assets/css/tabler.min.css" rel="stylesheet"/>
    <link href="/assets/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="/assets/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="/assets/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="/assets/css/demo.min.css" rel="stylesheet"/>
    <link href="/assets/css/toastr.min.css" rel="stylesheet"/>
    <?php echo $__env->yieldContent('additional_css'); ?>
    <link href="/assets/css/magic-ai.css" rel="stylesheet"/>
	<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php if($setting->dashboard_code_before_head != null): ?>
        <?php echo $setting->dashboard_code_before_head; ?>

    <?php endif; ?>
</head>
<?php /**PATH /var/www/html/resources/views/panel/layout/head.blade.php ENDPATH**/ ?>
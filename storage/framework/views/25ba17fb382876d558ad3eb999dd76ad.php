<!DOCTYPE html>
<html lang="en" class="max-sm:overflow-x-hidden">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php if(isset($setting->meta_description)): ?>
        <meta name="description" content="<?php echo e($setting->meta_description); ?>">
    <?php endif; ?>
	<?php if(isset($setting->meta_keywords)): ?>
        <meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
    <?php endif; ?>
    <link rel="icon" href="/<?php echo e($setting->favicon_path); ?>">
    <title><?php if(isset($setting->meta_title)): ?> <?php echo e($setting->meta_title); ?> <?php else: ?> <?php echo e($setting->site_name); ?> | <?php echo e(__('Home')); ?> <?php endif; ?></title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="/assets/css/frontend/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/frontend/flickity.min.css">

	<?php echo app('Illuminate\Foundation\Vite')('resources/css/frontend.scss'); ?>

    <?php if($setting->frontend_custom_css != null): ?>
        <link rel="stylesheet" href="<?php echo e($setting->frontend_custom_css); ?>" />
    <?php endif; ?>
  
	<?php if($setting->frontend_code_before_head != null): ?>
        <?php echo $setting->frontend_code_before_head; ?>

    <?php endif; ?>

	<script>
		window.liquid = {
			isLandingPage: true
		};
	</script>
</head>
<body class="font-golos bg-body-bg text-body group/body">
	<script src="/assets/js/tabler-theme.min.js"></script>
	<script src="/assets/js/navbar-shrink.js"></script>

	<div id="app-loading-indicator" class="fixed top-0 left-0 right-0 z-[99] opacity-0 transition-opacity">
		<div class="progress [--tblr-progress-height:3px]">
			<div class="progress-bar progress-bar-indeterminate bg-[--tblr-primary] before:[animation-timing-function:ease-in-out] dark:bg-white"></div>
		</div>
	</div>

	<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php if($setting->frontend_custom_js != null): ?>
		<script src="<?php echo e($setting->frontend_custom_js); ?>"></script>
	<?php endif; ?>

	<?php if($setting->frontend_code_before_body != null): ?>
        <?php echo $setting->frontend_code_before_body; ?>

    <?php endif; ?>

	<script src="/assets/libs/vanillajs-scrollspy.min.js"></script>
	<script src="/assets/libs/flickity.pkgd.min.js"></script>
	<script src="/assets/js/frontend.js"></script>
	<script src="/assets/js/frontend/frontend-animations.js"></script>
	<?php if($setting->gdpr_status == 1): ?>
	<script src="/assets/js/gdpr.js"></script>
	<?php endif; ?>

</body>
</html>
<?php /**PATH /var/www/html/resources/views/layout/app.blade.php ENDPATH**/ ?>
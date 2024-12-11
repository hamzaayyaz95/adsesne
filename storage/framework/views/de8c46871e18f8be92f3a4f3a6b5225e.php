<!doctype html>
<html lang="en">
<?php echo $__env->make('panel.layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="group/body">
	<script src="/assets/js/tabler-theme.min.js"></script>
	<script src="/assets/js/navbar-shrink.js"></script>

	<div id="app-loading-indicator" class="fixed top-0 left-0 right-0 z-[99] opacity-0 transition-opacity">
		<div class="progress [--tblr-progress-height:3px]">
			<div class="progress-bar progress-bar-indeterminate bg-[--tblr-primary] before:[animation-timing-function:ease-in-out] dark:bg-white"></div>
		</div>
	</div>

	<div class="page">
		<!-- Navbar -->
		<?php echo $__env->make('panel.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="page-wrapper overflow-hidden">
			<!-- Updater -->
            <?php if($good_for_now): ?>
			<?php echo $__env->yieldContent('content'); ?>
            <?php elseif(!$good_for_now and Route::currentRouteName()!= 'dashboard.admin.settings.general'): ?>
				<?php echo $__env->yieldContent('content'); ?>
            <?php else: ?>
                <?php echo $__env->yieldContent('content'); ?>
            <?php endif; ?>
			<?php echo $__env->make('panel.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>

	<?php echo $__env->make('panel.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php if(\Session::has('message')): ?>
	<script>
		toastr.<?php echo e(\Session::get('type')); ?>('<?php echo e(\Session::get('message')); ?>')
	</script>
	<?php endif; ?>

	<?php echo $__env->yieldContent('script'); ?>
	<script src="/assets/js/frontend.js"></script>

	<?php if($setting->dashboard_code_before_body != null): ?>
        <?php echo $setting->dashboard_code_before_body; ?>

    <?php endif; ?>

	<?php if(auth()->guard()->check()): ?>
		<?php if(\Illuminate\Support\Facades\Auth::user()->type == 'admin'): ?>
			<script src="/assets/js/panel/update-check.js"></script>
		<?php endif; ?>
	<?php endif; ?>


</body>
</html>
<?php /**PATH D:\laragon\www\adsense\resources\views/panel/layout/app.blade.php ENDPATH**/ ?>
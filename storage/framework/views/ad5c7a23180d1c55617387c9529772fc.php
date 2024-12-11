<footer class="footer footer-transparent max-lg:pb-24">
    <div class="container-xl">
        <div class="row text-center items-center flex-row-reverse">
            <div class="col-lg-auto lg:ms-auto">
                <p><?php echo e(__('Version')); ?>: <?php echo e($setting->script_version); ?>R</p>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
				<p>
					<?php echo e(__('Copyright')); ?> &copy; <?php echo date("Y"); ?>
					<a href="<?php echo e(route('index')); ?>" class="link-secondary"><?php echo e($setting->site_name); ?></a>.
					<?php echo e(__('All rights reserved.')); ?></p>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH D:\laragon\www\adsense\resources\views/panel/layout/footer.blade.php ENDPATH**/ ?>
<?php if($paginator->hasPages()): ?>
    <nav class="flex items-center border-solid border-t border-r-0 border-b-0 border-l-0 border-[--tblr-border-color] px-[--tblr-card-cap-padding-x] py-[--tblr-card-cap-padding-y]">
        <div class="w-full sm:hidden">
            <ul class="pagination flex justify-between m-0 whitespace-nowrap">
                
                <?php if($paginator->onFirstPage()): ?>
                    <li class="flex items-center page-item disabled" aria-disabled="true">
                        <svg class="rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                        <span class="page-link rounded-md">prev</span>
                    </li>
                <?php else: ?>
                    <li class="page-item flex items-center">
                        <svg class="rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                        <a class="page-link rounded-md" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><?php echo e(__('Prev')); ?></a>
                    </li>
                <?php endif; ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li class="page-item flex items-center">
                        <a class="page-link rounded-md" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><?php echo e(__('Next')); ?></a>
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path d="M9 6l6 6l-6 6"></path> </svg>
                    </li>
                <?php else: ?>
                    <li class="flex items-center page-item disabled" aria-disabled="true">
						<span class="page-link rounded-md"><?php echo e(__('Next')); ?></span>
                        <svg class="rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="m-0 text-muted">
                    <?php echo __('Showing'); ?>

                    <span><?php echo e($paginator->firstItem()); ?></span>
                    <?php echo __('to'); ?>

                    <span><?php echo e($paginator->lastItem()); ?></span>
                    <?php echo __('of'); ?>

                    <span><?php echo e($paginator->total()); ?></span>
                    <?php echo __('results'); ?>

                </p>
            </div>

            <div>
                <ul class="pagination m-0 gap-1">
                    
                    <?php if($paginator->onFirstPage()): ?>
                        <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo e(__('Prev')); ?>">
                            <span class="page-link" aria-hidden="true">
								<svg class="rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
							</span>
                        </li>
                    <?php else: ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo e(__('Prev')); ?>">
								<svg class="rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
							</a>
                        </li>
                    <?php endif; ?>

                    
                    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <?php if(is_string($element)): ?>
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
                        <?php endif; ?>

                        
                        <?php if(is_array($element)): ?>
                            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($page == $paginator->currentPage()): ?>
                                    <li class="page-item active" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                                <?php else: ?>
                                    <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                    <?php if($paginator->hasMorePages()): ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo e(__('Next')); ?>">
								<svg class="rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
							</a>
                        </li>
                    <?php else: ?>
                        <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo e(__('Next')); ?>">
                            <span class="page-link" aria-hidden="true">
								<svg class="rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
							</span>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/vendor/pagination/bootstrap-5.blade.php ENDPATH**/ ?>
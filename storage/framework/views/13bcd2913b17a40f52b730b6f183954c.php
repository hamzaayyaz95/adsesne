<div
    class="page-body mt-2 relative after:h-px after:w-full after:bg-[var(--tblr-body-bg)] after:absolute after:top-full after:left-0 after:-mt-px">
    <div class="container-fluid">
        <div class="row">
            <?php $__currentLoopData = $aiList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div data-filter="medical" class="col-lg-4 col-xl-3 col-md-6 py-8 10 px-16 relative border-b border-solid border-t-0 border-s-0 border-[var(--tblr-border-color)] group max-xl:px-10">
                    <div class="flex flex-col justify-center text-center relative">
                        <div class="inline-flex items-center justify-center w-[128px] h-[128px] rounded-full mx-auto mb-6 transition-shadow text-[44px] font-medium overflow-hidden border-solid border-[6px] !border-white shadow-[0_1px_2px_rgba(0,0,0,0.07)] text-[rgba(0,0,0,0.65)] whitespace-nowrap overflow-ellipsis dark:!border-current group-hover:shadow-xl" style="background: <?php echo e($entry->color); ?>;">
							<?php if( $entry->slug === 'ai-chat-bot' ): ?>
								<img class="w-full h-full object-cover object-center" src="/assets/img/chat-default.jpg" alt="<?php echo e($entry->name); ?>">
							<?php elseif( $entry->image ): ?>
								<img class="w-full h-full object-cover object-center" src="/<?php echo e($entry->image); ?>" alt="<?php echo e($entry->name); ?>">
							<?php else: ?>
								<span class="block w-full text-center whitespace-nowrap overflow-hidden overflow-ellipsis"><?php echo e($entry->short_name); ?></span>
                            <?php endif; ?>
                        </div>
                        <h3 class="mb-0"><?php echo e($entry->name); ?></h3>
                        <p class="text-muted"><?php echo e($entry->description); ?></p>
                        <!-- link to the chat -->
                        <a href="<?php echo e(LaravelLocalization::localizeUrl(route('dashboard.user.openai.chat.chat', $entry->slug))); ?>" class="block w-full h-full absolute top-0 left-0 z-2"></a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH D:\laragon\www\adsense\resources\views/panel/user/openai_chat/components/list.blade.php ENDPATH**/ ?>
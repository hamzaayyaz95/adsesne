<?php $__env->startSection('title', 'List of generators'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header">
	<div class="container-fluid px-16 max-lg:px-10">
		<div class="row g-2 items-center">
			<div class="col">
				<div class="page-pretitle">
					<?php echo e(__('Text Generator & AI Copywriting Assistant')); ?>

				</div>
				<h2 class="page-title mb-[22px]">
					<?php echo e(__('AI Writer')); ?>

				</h2>
				<ul class="flex flex-wrap items-center m-0 p-0 list-none text-[13px] text-[#2B2F37] gap-[20px] max-sm:gap-[10px]">
					<li>
						<button data-filter-trigger="all" class="inline-flex leading-none p-[0.3em_0.65em] rounded-full bg-[transparent] border-0 text-inherit hover:no-underline hover:bg-[#f2f2f4] transition-colors [&.active]:bg-[#f2f2f4] dark:text-[--tblr-muted] dark:[&.active]:bg-[--lqd-faded-out] dark:[&.active]:text-[--lqd-heading-color] active">
							All
						</button>
					</li>
					<?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>
						<button data-filter-trigger="<?php echo e($filter->name); ?>" class="inline-flex leading-none p-[0.3em_0.65em] rounded-full bg-[transparent] border-0 text-inherit hover:no-underline hover:bg-[#f2f2f4] transition-colors [&.active]:bg-[#f2f2f4] dark:text-[--tblr-muted] dark:[&.active]:bg-[--lqd-faded-out] dark:[&.active]:text-[--lqd-heading-color]">
                            <?php echo e(\Illuminate\Support\Str::ucfirst($filter->name)); ?>

						</button>
					</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Page body -->
<div class="page-body mt-2 relative after:h-px after:w-full after:bg-[var(--tblr-body-bg)] after:absolute after:top-full after:left-0 after:-mt-px">
	<div class="container-fluid">
		<div class="row">
			<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($item->active != 1): ?>
				<?php continue; ?>
			<?php endif; ?>
			<div data-filter="<?php echo e($item->filters); ?>" class="col-lg-4 col-xl-3 col-md-6 pt-8 pb-10 px-16 relative border-[1px] border-solid border-t-0 border-s-0 border-[var(--tblr-border-color)] group max-xl:px-10">
				<span class="avatar w-[43px] h-[43px] mb-[18px] [&_svg]:w-[20px] [&_svg]:h-[20px] relative transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg" style="background: <?php echo e($item->color); ?>">
					<?php if( $item->image !== 'none' ): ?>
					<span class="inline-block transition-all duration-300 group-hover:scale-110">
						<?php echo html_entity_decode($item->image); ?>

					</span>
					<?php endif; ?>
					<?php if($item->active == 1): ?>
						<span class="badge bg-green !w-[9px] !h-[9px]"></span>
					<?php else: ?>
						<span class="badge bg-red !w-[9px] !h-[9px]"></span>
					<?php endif; ?>
				</span>
				<div>
					<h4 class="inline-block text-[17px] font-semibold mb-[0.85em] relative">
						<?php echo e(__($item->title)); ?>

						<span class="inline-block align-bottom absolute top-1/2 start-[calc(100%+0.35rem)] -translate-y-1/2 -translate-x-1 opacity-0 transition-all group-hover:!opacity-100 group-hover:translate-x-0 rtl:-scale-x-100">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path d="M9 6l6 6l-6 6"></path>
							</svg>
						</span>
					</h4>
					<div class="text-muted">
						<?php echo e(__($item->description)); ?>

					</div>
				</div>
				<?php if($item->active == 1): ?>
				<a onclick="return favoriteTemplate(<?php echo e($item->id); ?>);" id="favorite_area_<?php echo e($item->id); ?>" class="btn inline-flex items-center justify-center w-[34px] h-[34px] p-0 absolute top-4 right-4 z-3">
                    <?php if(!isFavorited($item->id)): ?>
					<svg width="16" height="15" viewBox="0 0 16 15" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.99989 11.8333L3.88522 13.9966L4.67122 9.41459L1.33789 6.16993L5.93789 5.50326L7.99522 1.33459L10.0526 5.50326L14.6526 6.16993L11.3192 9.41459L12.1052 13.9966L7.99989 11.8333Z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
                    <?php else: ?>
					<svg width="16" height="15" viewBox="0 0 16 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.99989 11.8333L3.88522 13.9966L4.67122 9.41459L1.33789 6.16993L5.93789 5.50326L7.99522 1.33459L10.0526 5.50326L14.6526 6.16993L11.3192 9.41459L12.1052 13.9966L7.99989 11.8333Z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
                    <?php endif; ?>
				</a>
				<div class="absolute top-0 left-0 w-full h-full transition-all z-2">
					<?php if($item->type == 'text' or $item->type == 'code'): ?>
                        <?php if(Auth::user()->remaining_words > 0 or Auth::user()->remaining_words == -1): ?>
						<a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.generator.workbook', $item->slug))); ?>" class="inline-block w-full h-full absolute top-0 left-0 overflow-hidden -indent-[99999px]">
							<?php echo e(__('Create Workbook')); ?>

						</a>
                        <?php endif; ?>
					<?php elseif($item->type == 'voiceover'): ?>
                        <?php if(Auth::user()->remaining_words > 0 or Auth::user()->remaining_words == -1): ?>
						<a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.generator', $item->slug))); ?>" class="inline-block w-full h-full absolute top-0 left-0 overflow-hidden -indent-[99999px]">
							<?php echo e(__('Create Workbook')); ?>

						</a>
                        <?php endif; ?>
					<?php elseif($item->type == 'image'): ?>
                        <?php if(Auth::user()->remaining_images > 0 or Auth::user()->remaining_images == -1): ?>
						<a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.generator', $item->slug))); ?>" class="inline-block w-full h-full absolute top-0 left-0 overflow-hidden -indent-[99999px]">
							<?php echo e(__('Create')); ?>

						</a>
                        <?php endif; ?>
					<?php elseif($item->type == 'audio'): ?>
                        <?php if(Auth::user()->remaining_words>0 or Auth::user()->remaining_words == -1): ?>
						<a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.generator', $item->slug))); ?>" class="inline-block w-full h-full absolute top-0 left-0 overflow-hidden -indent-[99999px]">
							<?php echo e(__('Create')); ?>

						</a>
                        <?php endif; ?>
					<?php else: ?>
						<div class="flex items-center justify-center absolute inset-0 bg-zinc-900 bg-opacity-5 backdrop-blur-[1px]">
							<a href="#" disabled="" class="bg-white pointer-events-none btn text-dark cursor-default">
								<?php echo e(__('No Tokens Left')); ?>

							</a>
						</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="/assets/js/panel/openai_list.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\adsense\resources\views/panel/user/openai/list.blade.php ENDPATH**/ ?>
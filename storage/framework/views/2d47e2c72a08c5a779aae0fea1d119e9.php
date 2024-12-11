<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <div class="container-xl">
            <div class="row g-2 items-center justify-between max-md:flex-col max-md:items-start max-md:gap-4">
                <div class="col">
                    <div class="page-pretitle">
                        <?php echo e(__('User Dashboard')); ?>

                    </div>
                    <h2 class="mb-2 page-title">
                        <?php echo e(__('Welcome')); ?>, <?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?>.
                    </h2>
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        <a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.documents.all') )); ?>" class="btn">
                            <?php echo e(__('My Documents')); ?>

                        </a>
                        <a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.list') )); ?>" class="btn btn-primary items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="!me-2" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            <?php echo e(__('New')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
					<?php echo $__env->make('panel.user.payment.subscriptionStatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <?php if($ongoingPayments != null): ?>
                <div class="col-12">
                    <?php echo $__env->make('panel.user.payment.ongoingPayments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <?php endif; ?>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="px-10 py-8 card-body">
							<h2 class="mb-[1em]"><?php echo e(__('Overview')); ?></h2>
                            <div class="row">
								<div class="col-auto max-xl:w-full max-xl:mb-5">
									<div class="flex max-sm:flex-col max-sm:mb-4">
										<div class="px-9 !ps-0 border-e border-solid border-t-0 border-b-0 border-s-0 border-[var(--tblr-border-color)] max-sm:border-b max-sm:border-e-0 max-sm:px-0 max-sm:pb-3 max-sm:mb-3">
											<p class="subheader"><?php echo e(__('Words Left')); ?></p>
											<p class="mt-2 h1 text-[30px] font-semibold">
                                                <?php if(Auth::user()->remaining_words == -1): ?>
                                                    Unlimited
                                                <?php else: ?>
                                                    <?php echo e(number_format((int)Auth::user()->remaining_words)); ?>

                                                <?php endif; ?>
                                            </p>
										</div>
										<div class="px-9 border-e border-solid border-t-0 border-b-0 border-s-0 border-[var(--tblr-border-color)] max-sm:border-b max-sm:border-e-0 max-sm:px-0 max-sm:pb-3 max-sm:mb-3">
											<p class="subheader"><?php echo e(__('Images Left')); ?></p>
											<p class="mt-2 h1 text-[30px] font-semibold">
                                                <?php if(Auth::user()->remaining_images == -1): ?>
                                                    Unlimited
                                                <?php else: ?>
                                                    <?php echo e(number_format((int)Auth::user()->remaining_images)); ?>

                                                <?php endif; ?>
                                            </p>
										</div>
										<div class="px-9 max-sm:p-0">
											<p class="subheader"><?php echo e(__('Hours Saved')); ?></p>
											<p class="mt-2 h1 text-[30px] font-semibold"><?php echo e(number_format($total_words*0.5/60)); ?></p>
										</div>
									</div>
								</div>
                                <div class="col max-xl:w-full">
                                    <p class="mb-3"><?php echo e(__('Your Documents')); ?></p>
                                    <div class="mb-3 progress progress-separated">
                                        <?php if($total_documents != 0): ?>
                                        <div class="progress-bar grow-0 shrink-0 basis-auto bg-primary" role="progressbar" style="width: <?php echo e(100*(int)$total_text_documents/(int)$total_documents); ?>%" aria-label="<?php echo e(__('Text')); ?>"></div>
                                        <?php endif; ?>
                                        <?php if($total_documents != 0): ?>
                                        <div class="progress-bar grow-0 shrink-0 basis-auto bg-[#9E9EFF]" role="progressbar" style="width: <?php echo e(100*(int)$total_image_documents/(int)$total_documents); ?>%" aria-label="<?php echo e(__('Images')); ?>"></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto d-flex align-items-center pe-2">
                                            <span class="legend !me-2 rounded-full bg-primary"></span>
                                            <span><?php echo e(__('Text')); ?></span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted"><?php echo e($total_text_documents); ?></span>
                                        </div>
                                        <div class="col-auto px-2 d-flex align-items-center">
                                            <span class="legend !me-2 rounded-full bg-[#9E9EFF]"></span>
                                            <span><?php echo e(__('Image')); ?></span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted"><?php echo e($total_image_documents); ?></span>
                                        </div>
                                        <div class="col-auto px-2 d-flex align-items-center">
                                            <span class="legend !me-2 rounded-full bg-success"></span>
                                            <span><?php echo e(__('Total')); ?></span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted"><?php echo e($total_documents); ?></span>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-heading"><?php echo e(__('Documents')); ?></h3>
                        </div>
                        <div class="card-table table-responsive">
                            <table class="table table-vcenter">
                                <tbody>
                                <?php $__currentLoopData = Auth::user()->openai()->orderBy('created_at', 'desc')->take(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($entry->generator != null): ?>
                                    <tr>
										<td class="w-1 !pe-0">
											<span class="avatar w-[43px] h-[43px] [&_svg]:w-[20px] [&_svg]:h-[20px]" style="background: <?php echo e($entry->generator->color); ?>">
												<?php if( $entry->generator->image !== 'none' ): ?>
												<?php echo html_entity_decode($entry->generator->image); ?>

												<?php endif; ?>
											</span>
                                        </td>
                                        <td class="td-truncate">
                                            <a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.documents.single', $entry->slug) )); ?>" class="block text-truncate text-heading hover:no-underline">
                                                <span class="font-medium"><?php echo e($entry->generator->title); ?></span>
                                                <br>
                                                <span class="italic text-muted opacity-80 dark:!text-white dark:!opacity-50"><?php echo e($entry->generator->description); ?></span>
                                            </a>
                                        </td>
                                        <td class="text-nowrap">
											<span class="text-heading"><?php echo e(__('in Workbook')); ?></span>
											<br>
                                            <span class="italic text-muted opacity-80 dark:!text-white dark:!opacity-50"><?php echo e($entry->created_at->format('M d, Y')); ?></span>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-heading"><?php echo e(__('Favorite Templates')); ?></h3>
                        </div>
                        <div class="card-table table-responsive">
                            <table class="table table-vcenter">
                                <tbody>
                                <?php $__currentLoopData = \Illuminate\Support\Facades\Auth::user()->favoriteOpenai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="w-1 !pe-0">
                                      <span class="avatar w-[43px] h-[43px] [&_svg]:w-[20px] [&_svg]:h-[20px]" style="background: <?php echo e($entry->color); ?>">
                                        <?php if( $entry->image !== 'none' ): ?>
                                            <?php echo html_entity_decode($entry->image); ?>

                                        <?php endif; ?>

                                        <?php if($entry->active == 1): ?>
                                            <span class="badge bg-green !w-[9px] !h-[9px]"></span>
                                        <?php else: ?>
                                            <span class="badge bg-red !w-[9px] !h-[9px]"></span>
                                        <?php endif; ?>
										</span>
                                            </td>
                                            <td class="td-truncate">
                                                <?php if($entry->active == 1): ?>
                                                    <a href="<?php if($entry->type == 'voiceover'): ?><?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.generator', $entry->slug))); ?><?php else: ?> <?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.openai.generator.workbook', $entry->slug))); ?><?php endif; ?>" class="text-heading hover:no-underline">
                                                        <span class="font-medium"><?php echo e($entry->title); ?></span>
                                                        <br>
                                                        <span class="block italic text-muted opacity-80 text-truncate dark:!text-white dark:!opacity-50"><?php echo e($entry->description); ?></span>
                                                    </a>
                                                <?php else: ?>
                                                    <div class="text-heading hover:no-underline">
                                                        <span class="font-medium"><?php echo e($entry->title); ?></span>
                                                        <br>
                                                        <span class="block italic text-muted opacity-80 text-truncate dark:!text-white dark:!opacity-50"><?php echo e($entry->description); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-nowrap">
                                                <span class="text-heading"><?php echo e(__('in Workbook')); ?></span>
                                                <br>
                                                <span class="italic text-muted opacity-80"><?php echo e($entry->created_at->format('M d, Y')); ?></span>
                                            </td>
                                        </tr>
                                    <?php if($loop->iteration == 4): ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\adsense\resources\views/panel/user/dashboard.blade.php ENDPATH**/ ?>
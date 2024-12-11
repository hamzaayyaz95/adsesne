<?php $__env->startSection('title', __('Subscription Plans')); ?>
<?php $paymentControls = app('App\Http\Controllers\PaymentController'); ?>
<?php $gatewayControls = app('App\Http\Controllers\GatewayController'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page header -->
    <div class="page-header">
        <div class="container-xl">
            <div class="row g-2 items-center">
                <div class="col">
					<a href="<?php echo e(LaravelLocalization::localizeUrl(route('dashboard.index'))); ?>" class="page-pretitle flex items-center">
						<svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z"/>
						</svg>
						<?php echo e(__('Back to dashboard')); ?>

					</a>
                    <h2 class="page-title mb-2">
                        <?php echo e(__('Subscription Plans')); ?>

                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body pt-8">
        <div class="container-xl">
            <div class="row row-cards">
				<div class="col-12">
					<h2><?php echo e(__('Current plan')); ?></h2>
					<?php echo $__env->make('panel.user.payment.subscriptionStatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
				<div class="grid gap-3 grid-cols-4 max-lg:grid-cols-2 max-md:grid-cols-1">
					<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="w-full border-solid border-[--tblr-border-color] rounded-3xl <?php echo e($plan->is_featured == 1 ? 'shadow-[0_7px_20px_rgba(0,0,0,0.04)]' : ''); ?>">
						<div class="flex flex-col h-full p-[1rem]">
							<div class="flex items-start mb-2 text-[50px] leading-none text-heading font-bold">
								<?php echo e($plan->price); ?>

								<div class="inline-flex flex-col items-start gap-2 mt-2 ms-2 text-[0.3em]">
									<?php echo e(currency()->code); ?> / <?php echo e($plan->frequency); ?>

									<?php if($plan->is_featured == 1): ?>
										<div class="inline-flex rounded-full py-[0.25rem] px-[0.75rem] bg-gradient-to-r from-[#ece7f7] via-[#e7c5e6] to-[#e7ebf9] text-[11px] text-black">
											<?php echo e(__('Popular plan')); ?>

										</div>
									<?php endif; ?>
								</div>
							</div>
							<p class="font-medium text-[15px] leading-none text-muted"><?php echo e($plan->name); ?></p>

							<ul class="list-none p-0 my-6 text-[15px] text-heading">
								<?php if($plan->trial_days != 0): ?>
								<li class="mb-3">
									<span class="inline-flex items-center justify-center w-[20px] h-[20px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
								</span>
								<?php echo e(number_format($plan->trial_days)." ".__('Days of free trial.')); ?> 
								</li>
								<?php endif; ?>
								<li class="mb-3">
									<span class="inline-flex items-center justify-center w-[20px] h-[20px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
									</span>
									<?php echo e(__('Access')); ?> <strong><?php echo e($plan->plan_type); ?></strong> <?php echo e(__('Templates')); ?>

								</li>
								<?php $__currentLoopData = explode(',', $plan->features); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="mb-3">
										<span class="inline-flex items-center justify-center w-[20px] h-[20px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
									</span>
										<?php echo e($item); ?>

									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<li class="mb-[0.625em]">
										<span class="inline-flex items-center justify-center w-[19px] h-[19px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
										</span>
										<?php if((int)$plan->total_words >= 0): ?>
										<strong><?php echo e(number_format($plan->total_words)); ?></strong> <?php echo e(__('Word Tokens')); ?>

										<?php else: ?>
										<strong><?php echo e(__('Unlimited')); ?></strong> <?php echo e(__('Word Tokens')); ?>

										<?php endif; ?>
									</li>
									<li class="mb-[0.625em]">
										<span class="inline-flex items-center justify-center w-[19px] h-[19px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
										</span>
										<?php if((int)$plan->total_images >= 0): ?>
										<strong><?php echo e(number_format($plan->total_images)); ?></strong> <?php echo e(__('Image Tokens')); ?>

										<?php else: ?>
										<strong><?php echo e(__('Unlimited')); ?></strong> <?php echo e(__('Image Tokens')); ?>

										<?php endif; ?>
									</li>
							</ul>
							<?php if($activesubid == $plan->id): ?>
							<div class="mt-auto -mx-[1rem] mb-[1rem] text-center">
								<div class="vstack gap-2">
									<span class="text-success"><b><?php echo e(__('Already Subscribed')); ?></b></span>
									<a onclick="return confirm('Are you sure to cancel your plan? You will lose your remaining usage.');" href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.payment.cancelActiveSubscription') )); ?>" class="text-muted"><?php echo e(__('Cancel Subscription')); ?></a>
								</div>
							</div>
							<?php elseif($activesubid != null): ?>
							<div class="mt-auto -mx-[1rem] mb-[1rem] text-center">
								<div class="vstack gap-2">
									<span class="text-muted"><b><?php echo e(__('You have an active subscription.')); ?></b></span>
								</div>
							</div>
							<?php else: ?>
							<div class="mt-auto -mx-[1rem] -mb-[1rem] text-center">
								<?php if($is_active_gateway == 1): ?>
								<?php ($planid=$plan->id); ?>
								<a class="btn rounded-3xl py-[0.75rem] -mx-px -mb-px w-full border border-[--tblr-border-color] text-[15px] font-semibold shadow-none hover:bg-[--tblr-primary] hover:text-white" 
								href = "#" role="button" data-bs-toggle="modal" data-bs-target="#gatewayModal_<?php echo e($planid); ?>"><?php echo e(__('Choose plan')); ?></a>
								<div class="modal fade" id="gatewayModal_<?php echo e($planid); ?>" tabindex="-1" aria-labelledby="gatewayModalLabel_<?php echo e($planid); ?>" aria-hidden="true">
									<div class="modal-dialog modal-sm modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title" id="gatewayModalLabel_<?php echo e($planid); ?>">Continue with</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body vstack gap-3">
											<?php $__currentLoopData = $activeGateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php ($data=$gatewayControls->gatewayData($gateway->code)); ?>
											<a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.payment.startSubscriptionProcess',['planId' => $planid, 'gatewayCode' => $data['code'] ]) )); ?>" 
											class="btn rounded-3xl px-3 py-0 -mx-px -mb-px w-full h-[36px] flex items-center border border-[--tblr-border-color] text-[15px] font-semibold shadow-none hover:bg-[--tblr-primary] hover:text-white">
												<div class="flex justify-between w-100 align-middle items-center h-[36px] m-0 p-0"> 
													<?php if($data['whiteLogo'] == 1): ?>
													<img src="<?php echo e($data['img']); ?>" style="max-height:24px;" alt="<?php echo e($data['title']); ?>"  class="rounded-3xl bg-[--tblr-primary] "/>
													<?php else: ?>
													<img src="<?php echo e($data['img']); ?>" style="max-height:24px;" alt="<?php echo e($data['title']); ?>"/>
													<?php endif; ?>
													<span class=""><?php echo e($data['title']); ?></span>
												</div>
											</a>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</div>
										</div>
									</div>
								</div>
								<?php else: ?>
								<p><?php echo e(__('Please enable a payment gateway')); ?></p>
								<?php endif; ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class="page-header pt-4">
					<div class="container-xl">
						<div class="row g-2 items-center">
							<div class="col">
								<h2 class="page-title mb-2">
									<?php echo e(__('Token Packs')); ?>

								</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="grid gap-3 grid-cols-4 max-lg:grid-cols-2 max-md:grid-cols-1">
					<?php $__currentLoopData = $prepaidplans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="w-full border-solid border-[--tblr-border-color] rounded-3xl <?php echo e($plan->is_featured == 1 ? 'shadow-[0_7px_20px_rgba(0,0,0,0.04)]' : ''); ?>">
							<div class="flex flex-col h-full p-[1rem]">
								<div class="flex items-start mb-2 text-[50px] leading-none text-heading font-bold">
									<?php echo e($plan->price); ?>

									<div class="inline-flex flex-col items-start gap-2 mt-2 ms-2 text-[0.3em]">
										<?php echo e(currency()->code); ?> / <?php echo e(__('One time')); ?>

										<?php if($plan->is_featured == 1): ?>
											<div class="inline-flex rounded-full py-[0.25rem] px-[0.75rem] bg-gradient-to-r from-[#ece7f7] via-[#e7c5e6] to-[#e7ebf9] text-[11px] text-black">
												<?php echo e(__('Popular pack')); ?>

											</div>
										<?php endif; ?>
									</div>
								</div>
								<p class="font-medium text-[15px] leading-none text-muted"><?php echo e($plan->name); ?></p>

								<ul class="list-none p-0 my-6 text-[15px] text-heading">
									<li class="mb-3">
										<span class="inline-flex items-center justify-center w-[20px] h-[20px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
										</span>
										<?php echo e(__('Access')); ?> <strong><?php echo e($plan->plan_type); ?></strong> <?php echo e(__('Templates')); ?>

									</li>
									<?php $__currentLoopData = explode(',', $plan->features); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li class="mb-3">
											<span class="inline-flex items-center justify-center w-[20px] h-[20px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
										</span>
											<?php echo e($item); ?>

										</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<li class="mb-[0.625em]">
										<span class="inline-flex items-center justify-center w-[19px] h-[19px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
										</span>
										<strong><?php echo e(number_format($plan->total_words)); ?></strong> <?php echo e(__('Word Tokens')); ?>

									</li>
									<li class="mb-[0.625em]">
										<span class="inline-flex items-center justify-center w-[19px] h-[19px] mr-1 bg-[rgba(var(--tblr-primary-rgb),0.1)] text-primary rounded-xl align-middle">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
										</span>
										<strong><?php echo e(number_format($plan->total_images)); ?></strong> <?php echo e(__('Image Tokens')); ?>

									</li>
								</ul>
								<div class="mt-auto -mx-[1rem] -mb-[1rem] text-center">
									<?php if($is_active_gateway == 1): ?>
									<?php ($planid=$plan->id); ?>
									<a class="btn rounded-3xl py-[0.75rem] -mx-px -mb-px w-full border border-[--tblr-border-color] text-[15px] font-semibold shadow-none hover:bg-[--tblr-primary] hover:text-white" 
									href="#" role="button" data-bs-toggle="modal" data-bs-target="#gatewayPrepaidModal_<?php echo e($planid); ?>" ><?php echo e(__('Choose pack')); ?></a>
									<div class="modal fade" id="gatewayPrepaidModal_<?php echo e($planid); ?>" tabindex="-1" aria-labelledby="gatewayPrepaidModalLabel_<?php echo e($planid); ?>" aria-hidden="true">
										<div class="modal-dialog modal-sm modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title" id="gatewayPrepaidModalLabel_<?php echo e($planid); ?>">Continue with</h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body vstack gap-3">
												<?php $__currentLoopData = $activeGateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php ($data=$gatewayControls->gatewayData($gateway->code)); ?>
												<a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.payment.startPrepaidPaymentProcess',['planId' => $planid, 'gatewayCode' => $data['code'] ]) )); ?>" 
												class="btn rounded-3xl px-3 py-0 -mx-px -mb-px w-full h-[36px] flex items-center border border-[--tblr-border-color] text-[15px] font-semibold shadow-none hover:bg-[--tblr-primary] hover:text-white">
													<div class="flex justify-between w-100 align-middle items-center h-[36px] m-0 p-0"> 
														<?php if($data['whiteLogo'] == 1): ?>
														<img src="<?php echo e($data['img']); ?>" style="max-height:24px;" alt="<?php echo e($data['title']); ?>"  class="rounded-3xl bg-[--tblr-primary] "/>
														<?php else: ?>
														<img src="<?php echo e($data['img']); ?>" style="max-height:24px;" alt="<?php echo e($data['title']); ?>"/>
														<?php endif; ?>
														<span class=""><?php echo e($data['title']); ?></span>
													</div>
												</a>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</div>
											</div>
										</div>
									</div>

									<?php else: ?>
									<p><?php echo e(__('Please enable a payment gateway')); ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/panel/user/payment/subscriptionPlans.blade.php ENDPATH**/ ?>
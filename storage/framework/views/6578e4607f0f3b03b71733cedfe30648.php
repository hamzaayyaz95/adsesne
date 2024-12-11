<div class="card max-md:text-center">
    <div class="card-body py-8 px-10">
        <div class="row align-items-center subheader font-medium text-[1em] leading-[1.5em]">
            <div class="col-12 col-md-6 col-lg-5 max-md:mb-4">
                <h2 class="mb-[1em]"><?php echo e(__('Upgrade')); ?></h2>
                <?php if(Auth::user()->activePlan()!=null): ?>
                    <p class="mb-3">
                        <?php echo e(__('You have currently')); ?>

                        <strong class="text-heading"><?php echo e(getSubscriptionName()); ?></strong> <?php echo e(__('plan.')); ?>

                        <?php echo e(__('Will refill automatically in')); ?> <?php echo e(getSubscriptionDaysLeft()); ?> <?php echo e(__('Days.')); ?> <?php echo e(checkIfTrial() == true ? __('You are in Trial time.') : ''); ?>

                        <br>
                        <?php echo e(__('Total')); ?> <strong class="text-heading">
                            <?php if(Auth::user()->remaining_words == -1): ?>
                                Unlimited
                            <?php else: ?>
                                <?php echo e(number_format((int)Auth::user()->remaining_words)); ?>

                            <?php endif; ?>
                        </strong>
                        <?php echo e(__('word and')); ?> <strong class="text-heading">
                            <?php if(Auth::user()->remaining_images == -1): ?>
                                Unlimited
                            <?php else: ?>
                                <?php echo e(number_format((int)Auth::user()->remaining_images)); ?>

                            <?php endif; ?>
                        </strong> <?php echo e(__('image tokens left.')); ?>

                    </p>
                <?php else: ?>
                    <p class="mb-3">
                        <?php echo e(__('You have no subscription at the moment. Please select a subscription plan or a token pack.')); ?>

                        <br>
                        <?php echo e(__('Total')); ?> <strong class="text-heading">
                            <?php if(Auth::user()->remaining_words == -1): ?>
                                Unlimited
                            <?php else: ?>
                                <?php echo e(number_format((int)Auth::user()->remaining_words)); ?>

                            <?php endif; ?>
                        </strong> <?php echo e(__('word and')); ?>

                        <strong class="text-heading">
                            <?php if(Auth::user()->remaining_images == -1): ?>
                                Unlimited
                            <?php else: ?>
                                <?php echo e(number_format((int)Auth::user()->remaining_images)); ?>

                            <?php endif; ?>
                        </strong> <?php echo e(__('image tokens left.')); ?>

                    </p>
                <?php endif; ?>
				<a class="btn me-4 hover:bg-green-500 hover:text-white dark:!bg-[rgba(255,255,255,0.2)]" href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.payment.subscription') )); ?>" >
					<svg xmlns="http://www.w3.org/2000/svg" class="!me-2" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M12 5l0 14"></path>
						<path d="M5 12l14 0"></path>
					</svg>
					<?php echo e(__('Select a Plan')); ?>

				</a>
                <?php if(getSubscriptionStatus()): ?>
                <a class="btn me-4 hover:bg-red-500 hover:text-white group-[.theme-dark]/body:!bg-[rgba(255,255,255,0.2)]" onclick="return confirm('Are you sure to cancel your plan? You will lose your remaining usage.');" href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.user.payment.cancelActiveSubscription') )); ?>" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="!me-2" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M9 12l6 0"></path>
                    </svg>
                    <?php echo e(__('Cancel My Plan')); ?>

                </a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-6 ms-auto">
				<div class="relative">
					<h3 class="text-[14px] font-normal text-center m-0 absolute top-[calc(50%-5px)] left-1/2 -translate-x-1/2">
						<strong class="text-[2em] font-semibold leading-none max-sm:text-[1.5em]">
                            <?php if(Auth::user()->remaining_words == -1): ?>
                                Unlimited
                            <?php else: ?>
                                <?php echo e(number_format((int)Auth::user()->remaining_words)); ?>

                            <?php endif; ?>
                        </strong>
						<br>
						<?php echo e(__('Tokens')); ?>

					</h3>
					<div id="chart-credit" class="relative [&_.apexcharts-legend-text]:ps-2 [&_.apexcharts-legend-text]:!pe-2 [&_.apexcharts-legend-text]:!m-0"></div>
				</div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('script'); ?>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
			"use strict";

            const options = {
                series: [<?php echo e((int)Auth::user()->remaining_words+$total_words); ?>, <?php echo e((int)$total_words); ?>],
                labels: [ 'Remaining' , 'Used'],
                colors: ['#9A34CD', 'rgba(154,52,205,0.2)'],
                chart: {
                    type: 'donut',
                    height: 205,
                },
                legend: {
                    position: 'bottom',
                    fontFamily: 'inherit',
                },
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 90,
                        offsetY: 0,
                        donut: {
                            size: '75%',
                        }
                    },
                },
                grid: {
                    padding: {
                        bottom: -130
                    }
                },
                stroke: {
                    width: 5,
					colors: 'var(--tblr-body-bg)'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 280,
							height: 250
                        },
                    }
                }],
                dataLabels: {
                    enabled: false,
                }
            };
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-credit'), options)).render();
        });
        // @formatter:on
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH D:\laragon\www\adsense\resources\views/panel/user/payment/subscriptionStatus.blade.php ENDPATH**/ ?>
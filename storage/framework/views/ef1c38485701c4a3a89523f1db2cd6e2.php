<?php $__env->startSection('title', 'My Affiliates'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <div class="container-xl">
            <div class="row g-2 items-center justify-between max-md:flex-col max-md:items-start max-md:gap-4">
                <div class="col">
                    <a href="/dashboard" class="page-pretitle flex items-center">
                        <svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z"/>
                        </svg>
                        <?php echo e(__('Back to dashboard')); ?>

                    </a>
                    <h2 class="page-title mb-2">
                        <?php echo e(__('Affiliate Requests')); ?>

                    </h2>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="<?php echo e(route('dashboard.admin.settings.affiliate')); ?>"><?php echo e(__('Settings')); ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body pt-6">
        <div class="container-xl">
            <h2><?php echo e(__('Withdrawal Requests')); ?></h2>
            <div class="card">
				<div id="table-default-2" class="card-table table-responsive">
					<table class="table">
						<thead>
						<tr>
							<th>#</th>
							<th><?php echo e(__('Amount')); ?></th>
							<th><?php echo e(__('Bank Information')); ?></th>
							<th><?php echo e(__('Status')); ?></th>
							<th><?php echo e(__('Date')); ?></th>
							<th><?php echo e(__('Action')); ?></th>
						</tr>
						</thead>
						<tbody class="table-tbody align-middle text-heading">
						<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="sort-id">AFF-WTHDRWL-<?php echo e($entry->id); ?></td>
								<td class="sort-amount"><?php echo e($entry->amount); ?></td>
								<td class="sort-account"><?php echo e($entry->user->affiliate_bank_account); ?></td>
								<td class="sort-status"><?php echo e($entry->status); ?></td>
								<td class="sort-date" data-date="<?php echo e(strtotime($entry->created_at)); ?>">
									<p class="m-0"><?php echo e(date("j.n.Y", strtotime($entry->created_at))); ?></p>
									<p class="m-0 text-muted"><?php echo e(date("H:i:s", strtotime($entry->created_at))); ?></p>
								</td>
								<td>
									<a class="btn btn-success" href="<?php echo e(route('dashboard.admin.affiliates.sent', $entry->id)); ?>"><?php echo e(__('Set as Sent')); ?></a>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<?php if(count($list) == 0): ?>
							<tr>
								<td colspan="4" class="text-center"><?php echo e(__('There is no withdraval request')); ?></td>
							</tr>
						<?php endif; ?>

						</tbody>
					</table>
				</div>
            </div>

            <hr class="my-5">

            <h2><?php echo e(__('Succesfull Withdrawal Requests')); ?></h2>
            <div class="card">
				<div id="table-default" class="card-table table-responsive">
					<table class="table">
						<thead>
						<tr>
							<th>#</th>
							<th><?php echo e(__('Amount')); ?></th>
							<th><?php echo e(__('Bank Information')); ?></th>
							<th><?php echo e(__('Status')); ?></th>
							<th><?php echo e(__('Date')); ?></th>
							<th><?php echo e(__('Action')); ?></th>
						</tr>
						</thead>
						<tbody class="table-tbody align-middle text-heading">
						<?php $__currentLoopData = $list2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="sort-id">AFF-WTHDRWL-<?php echo e($entry->id); ?></td>
								<td class="sort-amount"><?php echo e($entry->amount); ?></td>
								<td class="sort-account"><?php echo e($entry->user->affiliate_bank_account); ?></td>
								<td class="sort-status"><?php echo e($entry->status); ?></td>
								<td class="sort-date" data-date="<?php echo e(strtotime($entry->created_at)); ?>">
									<p class="m-0"><?php echo e(date("j.n.Y", strtotime($entry->created_at))); ?></p>
									<p class="m-0 text-muted"><?php echo e(date("H:i:s", strtotime($entry->created_at))); ?></p>
								</td>
								<td>
									<a class="btn btn-success" href="<?php echo e(route('dashboard.admin.affiliates.sent', $entry->id)); ?>">Set as Sent</a>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<?php if(count($list2) == 0): ?>
							<tr>
								<td colspan="4" class="text-center"><?php echo e(__('There is no succesfull withdraval request')); ?></td>
							</tr>
						<?php endif; ?>

						</tbody>
					</table>
				</div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="/assets/js/panel/affiliate.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/panel/admin/affiliate/index.blade.php ENDPATH**/ ?>
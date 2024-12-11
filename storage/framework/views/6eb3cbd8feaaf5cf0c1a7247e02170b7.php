<?php $__env->startSection('title', 'Support Requests'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <div class="container-xl">
            <div class="row g-2 items-center">
                <div class="col">
					<a href="<?php echo e(LaravelLocalization::localizeUrl( route('dashboard.index') )); ?>" class="page-pretitle flex items-center">
						<svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z"/>
						</svg>
						<?php echo e(__('Back to dashboard')); ?>

					</a>
                    <h2 class="page-title mb-2">
                        <?php echo e(__('Support Requests')); ?>

                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body pt-6">
        <div class="container-xl">
			<?php if(Auth::user()->type != 'admin'): ?>
			<div class="mb-3">
				<a href="<?php echo e(route('dashboard.support.new')); ?>" class="btn btn-success m-2"><?php echo e(__('Create New Support Request')); ?></a>
			</div>
			<?php endif; ?>
			<div class="card">
				<div id="table-default" class="card-table table-responsive">
					<table class="table table-vcenter">
						<thead>
						<tr>
							<th><?php echo e(__('Ticked ID')); ?></th>
							<th><?php echo e(__('Status')); ?></th>
							<th><?php echo e(__('Category')); ?></th>
							<th><?php echo e(__('Subject')); ?></th>
							<th><?php echo e(__('Priority')); ?></th>
							<th><?php echo e(__('Created At')); ?></th>
							<th><?php echo e(__('Last Updated')); ?></th>
							<th><?php echo e(__('Actions')); ?></th>
						</tr>
						</thead>
						<tbody class="table-tbody">
						<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="sort-ticketid text-capitalize"><?php echo e($entry->ticket_id); ?></td>
								<td class="sort-Status"><?php echo e($entry->status); ?></td>
								<td class="sort-Category"><?php echo e($entry->category); ?></td>
								<td class="sort-Subject"><?php echo e($entry->subject); ?></td>
								<td class="sort-Priority"><?php echo e($entry->priority); ?></td>
								<td class="sort-date" data-date="<?php echo e(strtotime($entry->created_at)); ?>"><?php echo e($entry->created_at); ?></td>
								<td class="sort-date-update" data-date="<?php echo e(strtotime($entry->updated_at)); ?>"><?php echo e($entry->updated_at); ?></td>
								<td>
									<a href="<?php echo e(route('dashboard.support.view', $entry->ticket_id)); ?>" class="btn btn-sm btn-success">View</a>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="/assets/js/panel/support.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/panel/support/list.blade.php ENDPATH**/ ?>
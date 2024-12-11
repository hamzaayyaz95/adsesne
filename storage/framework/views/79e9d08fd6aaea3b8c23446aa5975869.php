<?php $__env->startSection('title', 'Edit User'); ?>

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
                        <?php echo e(__('Edit')); ?> <?php echo e($user->fullName()); ?>

                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body pt-6">
        <div class="container-xl">
			<div class="row">
				<div class="col-md-5 mx-auto">
					<form id="user_edit_form" onsubmit="return userSave(<?php echo e($user->id); ?>);" action="">
						<div class="row">
							<div class="col-md-12 col-xl-12">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label"><?php echo e(__('Name')); ?></label>
											<input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label"><?php echo e(__('Surname')); ?></label>
											<input type="text" class="form-control" id="surname" name="surname" value="<?php echo e($user->surname); ?>">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label"><?php echo e(__('Phone')); ?></label>
											<input type="text" name="phone" id="phone" class="form-control" data-mask="+000000000000" data-mask-visible="true" placeholder="+000000000000" autocomplete="off" value="<?php echo e($user->phone); ?>"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label"><?php echo e(__('Email')); ?></label>
											<input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>">
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label"><?php echo e(__('Country')); ?></label>
									<select type="text" class="form-select" name="country" id="country">
										<?php echo $__env->make('panel.admin.users.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</select>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<div class="form-label"><?php echo e(__('Type')); ?></div>
											<select class="form-select" id="type" name="type">
												<option value="admin" <?php echo e($user->type == 'admin' ? 'selected' : ''); ?>><?php echo e(__('Admin')); ?></option>
												<option value="user" <?php echo e($user->type == 'user' ? 'selected' : ''); ?>><?php echo e(__('User')); ?></option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<div class="form-label"><?php echo e(__('Status')); ?></div>
											<select class="form-select" id="status" name="status">
												<option value="1" <?php echo e($user->status == 1 ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
												<option value="0" <?php echo e($user->status == 0 ? 'selected' : ''); ?>><?php echo e(__('Passive')); ?></option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label"><?php echo e(__('Remaining Words')); ?></label>
											<input type="number" name="remaining_words" id="remaining_words" class="form-control"  value="<?php echo e($user->remaining_words); ?>"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label"><?php echo e(__('Remaining Images')); ?></label>
											<input type="number" name="remaining_images" id="remaining_images" class="form-control"  value="<?php echo e($user->remaining_images); ?>"/>
										</div>
									</div>
								</div>

								<button form="user_edit_form" id="user_edit_button" class="btn btn-primary w-100">
									<?php echo e(__('Save')); ?>

								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="/assets/js/panel/user.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/panel/admin/users/edit.blade.php ENDPATH**/ ?>
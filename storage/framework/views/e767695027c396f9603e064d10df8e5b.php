<?php

	$classname = ['inline-flex', 'items-center', 'relative', 'overflow-hidden', 'transition-all', 'duration-300', 'hover:scale-105', 'hover:shadow-lg',  'hover:border-black', 'hover:bg-black', 'hover:text-white'];

	$size_classname = [
		'md' => 'py-2 px-4 rounded-lg font-medium',
		'lg' => 'py-4 px-7 rounded-xl font-semibold'
	];
	$bg_classname = [
		'outline' => '',
		'solid' => 'bg-[#343C57]'
	];
	$border_classname = [
		'outline' => 'border-[2px]',
		'solid' => 'border-[2px] border-[#343C57]'
	];
	$text_classname = [
		'outline' => '',
		'solid' => 'text-white'
	];

	if ( !empty( $border ) ) {
		$classname[] = $border;
	} else if ( isset( $border_classname[$type] ) ) {
		$classname[] = $border_classname[$type];
	} else {
		$classname[] = $border_classname['solid'];
	}

	if ( !empty( $bg ) ) {
		$classname[] = $bg;
	} else if ( isset( $bg_classname[$type] ) ) {
		$classname[] = $bg_classname[$type];
	} else {
		$classname[] = $bg_classname['solid'];
	}

	if ( !empty( $text ) ) {
		$classname[] = $text;
	} else if ( isset( $text_classname[$type] ) ) {
		$classname[] = $text_classname[$type];
	} else {
		$classname[] = $text_classname['solid'];
	}

	if ( isset( $size_classname[$size] ) ) {
		$classname[] = $size_classname[$size];
	} else {
		$classname[] = $size_classname['md'];
	}

?>

<a href="<?php echo e($link); ?>" class="<?php echo e(join( ' ', $classname )); ?>" target="<?php echo e($target); ?>">
	<?php if( !empty( $glow ) ): ?>
		<?php echo e($glow); ?>

	<?php endif; ?>
	<span class="inline-flex items-center relative z-10">
		<?php if( !empty( $icon ) && $iconPos === 'start' ): ?>
			<?php echo e($icon); ?>

		<?php endif; ?>
		<?php echo e($label); ?>

		<?php if( !empty( $icon ) && $iconPos === 'end' ): ?>
			<?php echo e($icon); ?>

		<?php endif; ?>
	</span>
</a><?php /**PATH /var/www/html/resources/views/components/button.blade.php ENDPATH**/ ?>
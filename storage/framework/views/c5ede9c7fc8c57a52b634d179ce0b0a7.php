<?php $__env->startSection('content'); ?>

<section class="site-section flex items-center justify-center min-h-screen text-center text-white relative py-52 max-md:pb-16 max-md:pt-48 overflow-hidden bg-gradient-to-br from-[#3655df] via-[#A068FA] via-70% to-[#327BD1]" id="banner">
	<canvas id="banner-bg" class="absolute top-0 start-0 w-full-h-full"></canvas>
	<div class="container relative">
		<div class="max-lg:w-2/3 max-md:w-full flex flex-col items-center w-1/2 mx-auto">
			<h6 class=" rounded-2xl px-3 py-1 mb-8 bg-white bg-opacity-15 text-white relative overflow-hidden transition-all ease-out opacity-0 translate-y-6 blur-lg group-[.page-loaded]/body:opacity-100 group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:blur-0">
				<div class="banner-subtitle-gradient absolute -inset-3 blur-3xl transition-all duration-500 group-[.page-loaded]/body:opacity-0">
					<div class="absolute inset-0 bg-gradient-to-br from-violet-600 to-red-500 animate-hue-rotate"></div>
				</div>
				<span class="relative"><?php echo __($setting->site_name); ?></span>
				<span class="dot relative"></span>
				<span class="opacity-60 relative"><?php echo __($fSetting->hero_subtitle); ?></span>
			</h6>
			<div class="banner-title-wrap relative">
				<h1
					class="
					banner-title
					mb-7 font-golos -tracking-wide font-bold text-white
					opacity-0 transition-all ease-out translate-y-7
					group-[.page-loaded]/body:opacity-100 group-[.page-loaded]/body:translate-y-0">
					<?php echo __($fSetting->hero_title); ?>

					<?php if($fSetting->hero_title_text_rotator != null): ?>
                        <span class="lqd-text-rotator inline-grid grid-cols-1 grid-rows-1 transition-[width] duration-200">
						<?php $__currentLoopData = explode(',' , __($fSetting->hero_title_text_rotator)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="lqd-text-rotator-item inline-flex col-start-1 row-start-1 transition-all duration-300 opacity-0 blur-sm translate-x-3 [&.lqd-is-active]:blur-0 [&.lqd-is-active]:opacity-100 [&.lqd-is-active]:translate-x-0 <?php echo e($loop->first ? 'lqd-is-active' : ''); ?>">
								<span><?php echo $keyword; ?></span>
							</span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</span>
                    <?php endif; ?>
					<svg class="inline lqd-split-text-words transition-all duration-[2850ms]" width="47" height="62" viewBox="0 0 47 62" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M27.95 0L0 38.213H18.633V61.141L46.583 22.928H27.95V0Z"/>
					</svg>
				</h1>
				
			</div>
			<p
				class="
				mb-7 max-sm:w-full w-3/4 text-[20px] leading-[1.25em] text-fuchsia-700 opacity-75
				[&_.lqd-split-text-words]:transition-all [&_.lqd-split-text-words]:ease-out [&_.lqd-split-text-words]:opacity-0 [&_.lqd-split-text-words]:translate-y-3
				group-[.page-loaded]/body:[&_.lqd-split-text-words]:opacity-100 group-[.page-loaded]/body:[&_.lqd-split-text-words]:translate-y-0 group-[.page-loaded]/body:[&_.lqd-split-text-words]:text-white">
				<?php if (isset($component)) { $__componentOriginal2b917688a5d8efb5c374dc180235cce6 = $component; } ?>
<?php $component = App\View\Components\SplitWords::resolve(['text' => ''.__($fSetting->hero_description).'','transitionDelayStart' => ''.e(0.15).'','transitionDelayStep' => ''.e(0.02).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('split-words'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SplitWords::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b917688a5d8efb5c374dc180235cce6)): ?>
<?php $component = $__componentOriginal2b917688a5d8efb5c374dc180235cce6; ?>
<?php unset($__componentOriginal2b917688a5d8efb5c374dc180235cce6); ?>
<?php endif; ?>
			</p>
			<div class="transition-all delay-[450ms] opacity-0 translate-y-3 group-[.page-loaded]/body:opacity-100 group-[.page-loaded]/body:translate-y-0">
				<?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php $component = App\View\Components\Button::resolve(['target' => '_blank','link' => ''.e(!empty($fSetting->hero_button_url) ? $fSetting->hero_button_url : '#').'','label' => ''.__($fSetting->hero_button).'','size' => 'lg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('icon', null, []); ?> 
						<svg class="!me-2" width="11" height="14" viewBox="0 0 47 62" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M27.95 0L0 38.213H18.633V61.141L46.583 22.928H27.95V0Z"/>
						</svg>
					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $component = $__componentOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__componentOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
			</div>
			<br>
			<div class="transition-all delay-[500ms] opacity-0 translate-y-3 group-[.page-loaded]/body:opacity-100 group-[.page-loaded]/body:translate-y-0">
				<a href="#features" class="hover:opacity-100 transition-opacity opacity-50"><?php echo __($fSetting->hero_scroll_text); ?></a>
			</div>
		</div>
	</div>
	<div class="banner-divider absolute -bottom-[2px] inset-x-0">
		<svg class="fill-body-bg w-full h-auto" width="1440" height="105" viewBox="0 0 1440 105" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
			<path d="M0 0C240 68.7147 480 103.072 720 103.072C960 103.072 1200 68.7147 1440 0V104.113H0V0Z"/>
		</svg>
	</div>
</section>

<?php if($fSectSettings->features_active == 1): ?>
<section id="features">
	<section class="site-section pb-20 pt-32 md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0">
		<div class="container">
			<?php if (isset($component)) { $__componentOriginal044312fc7e45484e118b3e1951e4e85f = $component; } ?>
<?php $component = App\View\Components\SectionHeader::resolve(['title' => ''.__($fSectSettings->features_title).'','subtitle' => ''.__($fSectSettings->features_description) ?? __('MagicAI is designed to help you generate high-quality content instantly, without breaking a sweat.').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SectionHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal044312fc7e45484e118b3e1951e4e85f)): ?>
<?php $component = $__componentOriginal044312fc7e45484e118b3e1951e4e85f; ?>
<?php unset($__componentOriginal044312fc7e45484e118b3e1951e4e85f); ?>
<?php endif; ?>
			<div class="gap-x-20 gap-y-9 max-lg:grid-cols-2 max-lg:gap-x-10 max-md:grid-cols-1 grid justify-between grid-cols-3">
                <?php $__currentLoopData = $futures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $future): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5 = $component; } ?>
<?php $component = App\View\Components\Box::resolve(['title' => ''.__($future->title).'','desc' => ''.__($future->description).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Box::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php echo $future->image; ?>

                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5)): ?>
<?php $component = $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5; ?>
<?php unset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>

    <?php endif; ?>

    <?php if($fSectSettings->generators_active == 1): ?>
	<section class="site-section md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0">
		<div class="container">
			<div class="border rounded-[50px] p-20 max-xl:px-10 max-lg:py-12 max-sm:px-5">
				<div class="lqd-tabs" data-lqd-tabs-style="1">
					<div class="mb-9 lqd-tabs-triggers max-lg:grid-cols-3 max-lg:gap-4 max-md:grid-cols-2 max-sm:grid-cols-1 grid justify-between grid-cols-5 gap-8">
                        <?php $__currentLoopData = $generatorsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal8c9d13af251f41b73923e8410f290df1 = $component; } ?>
<?php $component = App\View\Components\TabsTrigger::resolve(['target' => '#'.e(\Illuminate\Support\Str::slug($entry->menu_title)).'','label' => ''.__($entry->menu_title).'','active' => ''.e($loop->first ? 'true' : '').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabs-trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TabsTrigger::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c9d13af251f41b73923e8410f290df1)): ?>
<?php $component = $__componentOriginal8c9d13af251f41b73923e8410f290df1; ?>
<?php unset($__componentOriginal8c9d13af251f41b73923e8410f290df1); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<div class="lqd-tabs-content-wrap">
                        <?php $__currentLoopData = $generatorsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="lqd-tabs-content <?php echo e(!$loop->first ? 'hidden' : ''); ?>" id="<?php echo e(\Illuminate\Support\Str::slug($entry->menu_title)); ?>">
							<div class="max-md:gap-4 flex flex-wrap justify-between">
								<div class="w-[47%] p-8 shadow-lg rounded-xl flex flex-col items-start max-md:w-full">
									<h6 class="px-3 py-1 bg-[#F3E5F5] rounded-xl mb-10">
                                        <?php echo __($entry->subtitle_one); ?>

										<span class="dot"></span>
										<span class="opacity-50"><?php echo __($entry->subtitle_two); ?></span>
									</h6>
									<h3 class="mb-7 mt-auto"><?php echo __($entry->title); ?></h3>
									<p class="text-lg [&_strong]:text-black [&_strong]:font-semibold"><?php echo __($entry->text); ?></p>
								</div>
								<div class="w-[47%] p-8 rounded-xl max-md:w-full group" style="background-color: <?php echo e($entry->color); ?>;">
									<div class="text-center">
										<figure class="w-full mb-6">
											<img class="w-full rounded-2xl shadow-[0px_3px_45px_rgba(0,0,0,0.07)] transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-[1.025] group-hover:shadow-[0px_20px_65px_rgba(0,0,0,0.05)]" width="878" height="748" src="/<?php echo e($entry->image); ?>" alt="<?php echo e(__($entry->image_title)); ?>">
										</figure>
										<p class="text-heading text-lg font-semibold"><?php echo __($entry->image_title); ?></p>
										<p class="text-heading text-sm"><?php echo __($entry->image_subtitle); ?></p>
									</div>
								</div>
							</div>
						</div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>
			</div>
		</div>
	</section>

    <?php endif; ?>

    <?php if($fSectSettings->who_is_for_active == 1): ?>
    <section class="site-section py-20 md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0">
		<div class="container">
			<div class="max-lg:grid-cols-2 max-md:grid-cols-1 grid grid-cols-3 gap-4">
                <?php $__currentLoopData = $who_is_for; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if (isset($component)) { $__componentOriginal5d09e94efc1ca4d9287c0910c455330e = $component; } ?>
<?php $component = App\View\Components\ColorBox::resolve(['title' => ''.__($entry->title).'','color' => ''.e($entry->color).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('color-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ColorBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d09e94efc1ca4d9287c0910c455330e)): ?>
<?php $component = $__componentOriginal5d09e94efc1ca4d9287c0910c455330e; ?>
<?php unset($__componentOriginal5d09e94efc1ca4d9287c0910c455330e); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
    <?php endif; ?>


</section>

<?php if($fSectSettings->custom_templates_active == 1): ?>
<section class="site-section pb-9 md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0" id="templates">
	<div class="container">
		<div class="p-10 border rounded-[50px] max-sm:px-5">
			<?php if (isset($component)) { $__componentOriginal044312fc7e45484e118b3e1951e4e85f = $component; } ?>
<?php $component = App\View\Components\SectionHeader::resolve(['mb' => '7','width' => 'w-3/5','title' => ''.$fSectSettings->custom_templates_title.'','subtitle' => ''.$fSectSettings->custom_templates_description ?? 'Create your own template or use pre-made templates and examples for various content types and industries to help you get started quickly.'.''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SectionHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<h6 class="inline-block py-1 px-3 mb-6 rounded-md text-[13px] font-medium text-[#083D91] bg-[#083D91] bg-opacity-15">
					<?php echo __($fSectSettings->custom_templates_subtitle_one); ?>

					<span class="dot"></span>
					<span class="opacity-50"><?php echo __($fSectSettings->custom_templates_subtitle_two); ?></span>
				</h6>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal044312fc7e45484e118b3e1951e4e85f)): ?>
<?php $component = $__componentOriginal044312fc7e45484e118b3e1951e4e85f; ?>
<?php unset($__componentOriginal044312fc7e45484e118b3e1951e4e85f); ?>
<?php endif; ?>
			<div class="flex flex-col items-center">
				<div class="inline-flex flex-wrap items-center gap-2 p-[0.35rem] mx-auto mb-10 text-sm font-semibold leading-none border rounded-lg max-md:justify-center">
					<?php if (isset($component)) { $__componentOriginal8c9d13af251f41b73923e8410f290df1 = $component; } ?>
<?php $component = App\View\Components\TabsTrigger::resolve(['target' => '.templates-all','style' => '2','label' => ''.e(__('All')).'','active' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabs-trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TabsTrigger::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c9d13af251f41b73923e8410f290df1)): ?>
<?php $component = $__componentOriginal8c9d13af251f41b73923e8410f290df1; ?>
<?php unset($__componentOriginal8c9d13af251f41b73923e8410f290df1); ?>
<?php endif; ?>
                    <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if (isset($component)) { $__componentOriginal8c9d13af251f41b73923e8410f290df1 = $component; } ?>
<?php $component = App\View\Components\TabsTrigger::resolve(['target' => '.templates-'.e(\Illuminate\Support\Str::slug($filter->name)).'','style' => '2','label' => ''.e(__($filter->name)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabs-trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TabsTrigger::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c9d13af251f41b73923e8410f290df1)): ?>
<?php $component = $__componentOriginal8c9d13af251f41b73923e8410f290df1; ?>
<?php unset($__componentOriginal8c9d13af251f41b73923e8410f290df1); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			<div class="relative">
				<div class="grid grid-cols-3 gap-4 templates-cards max-h-[28rem] overflow-hidden max-lg:grid-cols-2 max-md:grid-cols-1">
                    <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($item->active != 1): ?>
						<?php continue; ?>
					<?php endif; ?>
					<?php if (isset($component)) { $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5 = $component; } ?>
<?php $component = App\View\Components\Box::resolve(['wrapperClass' => 'templates-all templates-'.e(\Illuminate\Support\Str::slug($item->filters)).'','style' => '2','title' => ''.e(__($item->title)).'','desc' => ''.e(__($item->title)).' '.e(__($item->description)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Box::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
						 <?php $__env->slot('image', null, []); ?> 
							<span class="inline-flex items-center justify-center w-11 h-11 mb-4 rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&_svg]:w-6 [&_svg]:h-5 [&_svg]:fill-[#7c7c7e] [&_path]:fill-inherit">
								<?php echo $item->image; ?>

							</span>
							
						 <?php $__env->endSlot(); ?>
					 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5)): ?>
<?php $component = $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5; ?>
<?php unset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class="h-[230px] absolute bottom-0 inset-x-0 z-10 bg-gradient-to-t from-body-bg to-transparent templates-cards-overlay"></div>
			</div>
			<div class="relative z-20 mt-2 text-center">
				<button class="text-[#5A4791] font-semibold text-[14px] templates-show-more">
					<span class="inline-grid rounded-lg place-content-center w-7 h-7 bg-[#885EFE] bg-opacity-10 mr-1">
						<svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.671 11.796V0.996H7.125V11.796H5.671ZM0.998 7.125V5.671H11.798V7.125H0.998Z"/>
						</svg>
					</span>
					<span class="inline-grid place-content-center px-2 h-7 bg-[#885EFE] bg-opacity-10 rounded-lg">
						<?php echo e(__('Show more')); ?>

					</span>
				</button>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if($fSectSettings->tools_active == 1): ?>
<section class="site-section py-10 md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0">
	<div class="container">
		<div class="p-10 border rounded-[50px] max-sm:px-6 max-sm:py-16">
			<?php if (isset($component)) { $__componentOriginal044312fc7e45484e118b3e1951e4e85f = $component; } ?>
<?php $component = App\View\Components\SectionHeader::resolve(['mb' => '14','title' => ''.e(__($fSectSettings->tools_title)).'','subtitle' => ''.e(__($fSectSettings->tools_description) ?? __('MagicAI has all the tools you need to create and manage your SaaS platform.')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SectionHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal044312fc7e45484e118b3e1951e4e85f)): ?>
<?php $component = $__componentOriginal044312fc7e45484e118b3e1951e4e85f; ?>
<?php unset($__componentOriginal044312fc7e45484e118b3e1951e4e85f); ?>
<?php endif; ?>
			<div class="max-lg:grid-cols-2 max-md:grid-cols-1 grid grid-cols-3 gap-3">
                <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if (isset($component)) { $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5 = $component; } ?>
<?php $component = App\View\Components\Box::resolve(['style' => '3','title' => ''.__($tool->title).'','desc' => ''.__($tool->description).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Box::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('image', null, []); ?> 
						<img class="-mx-8 max-w-[calc(100%+4rem)]" src="/<?php echo e($tool->image); ?>" alt="<?php echo __($tool->title); ?>" width="696" height="426">
					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5)): ?>
<?php $component = $__componentOriginalf8d22cb0bbc2c20a18faee8523755af5; ?>
<?php unset($__componentOriginalf8d22cb0bbc2c20a18faee8523755af5); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if($fSectSettings->how_it_works_active == 1): ?>
<section class="site-section py-10 md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0" id="how-it-works">
	<div class="container">
		<div class="p-10 py-24 bg-[#010101] rounded-[50px] shadow-xl text-white text-opacity-60 max-sm:px-5 bg-cover" style="background-image: url(/assets/img/site/steps-bg.jpg);">
			<div class="mb-14 max-xl:w-1/2 max-lg:w-8/12 max-md:w-full w-2/5 mx-auto text-center">
				<h2 class="text-[#E5E6E6] text-[64px] leading-none max-sm:text-[45px]"><?php echo __($fSectSettings->how_it_works_title); ?></h2>
			</div>
			<div class="gap-7 max-md:grid-cols-1 grid grid-cols-<?php echo e(count($howitWorks)); ?> mb-20" >
				<?php $__currentLoopData = $howitWorks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="flex flex-col items-center font-medium text-center max-w-[270px] mx-auto text-xl group">
					<span class="w-16 h-16 grid place-content-center text-[26px] font-medium border-opacity-15 border-[2px] border-[#A2B2C9] rounded-full mb-10 transition-all group-hover:bg-white group-hover:border-white group-hover:text-black group-hover:-translate-y-2 group-hover:scale-110"><?php echo e(__($step->order )); ?></span>
					<p><?php echo __($step->title); ?></p>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<?php if($howitWorksDefaults["option"]==1): ?>
			<div class="flex justify-center text-[#A2B2C9]">
				<?php echo $howitWorksDefaults['html']; ?>

			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if($fSectSettings->testimonials_active == 1): ?>
<section class="site-section relative py-10 md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0" id="testimonials">
	<div class="absolute inset-x-0 top-0 -z-1 h-[150vh]" style="background: linear-gradient(to bottom, transparent, #F0EFFA, transparent)"></div>
	<div class="container relative">
		<div class="p-11 pb-24 border rounded-[50px] bg-contain bg-center bg-no-repeat max-sm:px-5" style="background-image: url(/assets/img/site/world-map.png)">
			<?php if (isset($component)) { $__componentOriginal044312fc7e45484e118b3e1951e4e85f = $component; } ?>
<?php $component = App\View\Components\SectionHeader::resolve(['width' => 'w-1/2','mb' => '10','title' => ''.$fSectSettings->testimonials_title.'','subtitle' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SectionHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<h6 class="inline-block py-1 px-3 mb-6 rounded-md text-[13px] font-medium text-[#28027C] bg-[#28027C] bg-opacity-15">
                    <?php echo __($fSectSettings->testimonials_subtitle_one); ?>

					<span class="dot"></span>
					<span class="opacity-50"><?php echo __($fSectSettings->testimonials_subtitle_two); ?></span>
				</h6>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal044312fc7e45484e118b3e1951e4e85f)): ?>
<?php $component = $__componentOriginal044312fc7e45484e118b3e1951e4e85f; ?>
<?php unset($__componentOriginal044312fc7e45484e118b3e1951e4e85f); ?>
<?php endif; ?>
			<div class="max-lg:11/12 max-md:w-full w-8/12 mx-auto">
				<div class="mb-20">
					<div
						class="gap-5 mb-7 w-[235px] mx-auto"
						data-flickity='{ "asNavFor": ".testimonials-main-carousel", "contain": false, "pageDots": false, "cellAlign": "center", "prevNextButtons": false, "wrapAround": true, "draggable": false }'
						style="mask-image: linear-gradient(to right, transparent 0%, #000 15%, #000 85%, transparent 100% ); -webkit-mask-image: linear-gradient(to right, transparent 0%, #000 15%, #000 85%, transparent 100% );">
						<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="w1/3 text-center text-[15px] font-medium group pb-[16px] pt-9 cursor-pointer">
							<figure class="mx-auto mb-4 overflow-hidden rounded-full w-11 h-11 transition-all group-[&.is-nav-selected]:scale-[1.75] group-[&.is-nav-selected]:-translate-y-4 group-[&.is-nav-selected]:border-white group-[&.is-nav-selected]:border-[5px] group-[&.is-nav-selected]:shadow-sm max-sm:group-[&.is-nav-selected]:scale-150">
								<img class="object-cover object-center w-full h-full" src="<?php echo e(isset($entry->avatar) ? (str_starts_with($entry->avatar, 'asset') ? url('').'/'.$entry->avatar : url('').'/testimonialAvatar/'.$entry->avatar ) : url('').'/assets/img/auth/default-avatar.png'); ?>" alt="<?php echo e(__($entry->full_name)); ?>">
							</figure>
							<div class="opacity-0 whitespace-nowrap transition-all group-[&.is-nav-selected]:opacity-100">
								<p class="text-heading"><?php echo __($entry->full_name); ?></p>
								<p class="text-heading opacity-15"><?php echo __($entry->job_title); ?></p>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<div
					class="
						text-[26px] leading-[1.27em] text-heading text-center testimonials-main-carousel
						[&_.flickity-button]:opacity-40 [&_.flickity-button]:focus:shadow-none [&_.flickity-button]:transition-all
						[&_.flickity-button]:hover:bg-transparent [&_.flickity-button]:hover:opacity-100
						[&_.flickity-button.previous]:-left-16
						[&_.flickity-button.next]:-right-16
						max-md:[&_.flickity-button.previous]:-left-10
						max-md:[&_.flickity-button.next]:-right-10
						max-sm:text-lg
						max-sm:[&_.flickity-button]:relative max-sm:[&_.flickity-button]:top-auto max-sm:[&_.flickity-button]:!left-auto max-sm:[&_.flickity-button]:!right-auto max-sm:[&_.flickity-button]:!mx-4 max-sm:[&_.flickity-button]:translate-y-0 max-sm:[&_.flickity-button-icon]:!w-1/2 max-sm:[&_.flickity-button-icon]:!h-1/2 max-sm:[&_.flickity-button-icon]:!top-1/4 max-sm:[&_.flickity-button-icon]:!left-1/4"
					data-flickity='{ "contain": true, "wrapAround": true, "pageDots": false, "adaptiveHeight": true }'>
					<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="shrink-0 grow-0 basis-full w-full">
						<blockquote class="max-sm:mb-7">
							<p><?php echo __('“'.$entry->words.'”'); ?></p>
						</blockquote>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


					</div>
				</div>
				<div class="opacity-80 max-lg:gap-12 max-sm:gap-4 flex justify-center gap-20">
					<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<img class="object-cover object-center w-full h-full" style="max-width: 48px; max-height: 48px;" src="<?php echo e(isset($entry->avatar) ? (str_starts_with($entry->avatar, 'asset') ? url('').'/'.$entry->avatar : url('').'/clientAvatar/'.$entry->avatar ) : url('').'/assets/img/auth/default-avatar.png'); ?>" alt="<?php echo e(__($entry->alt)); ?>" title="<?php echo e(__($entry->title)); ?>">
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if($fSectSettings->pricing_active == 1): ?>
<section class="site-section relative py-10 md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0" id="pricing">
	<div class="container relative">
		<div class="p-11 border rounded-[50px] relative max-lg:px-5">
			<?php if (isset($component)) { $__componentOriginal044312fc7e45484e118b3e1951e4e85f = $component; } ?>
<?php $component = App\View\Components\SectionHeader::resolve(['mb' => '7','title' => ''.__($fSectSettings->pricing_title).'','subtitle' => ''.__($fSectSettings->pricing_description) ?? __('Flexible and affording plans tailored to your needs. Save up to %20 for a limited time.').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SectionHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal044312fc7e45484e118b3e1951e4e85f)): ?>
<?php $component = $__componentOriginal044312fc7e45484e118b3e1951e4e85f; ?>
<?php unset($__componentOriginal044312fc7e45484e118b3e1951e4e85f); ?>
<?php endif; ?>
			<div class="lqd-tabs text-center">
				<div class="lqd-tabs-triggers inline-flex flex-wrap gap-2 mx-auto mb-9 text-[15px] font-medium leading-none border rounded-md">
					<?php if (isset($component)) { $__componentOriginal8c9d13af251f41b73923e8410f290df1 = $component; } ?>
<?php $component = App\View\Components\TabsTrigger::resolve(['target' => '#pricing-monthly','style' => '3','label' => ''.e(__('Monthly Billing')).'','badge' => ''.e(__($fSectSettings->pricing_save_percent)).'','active' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabs-trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TabsTrigger::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c9d13af251f41b73923e8410f290df1)): ?>
<?php $component = $__componentOriginal8c9d13af251f41b73923e8410f290df1; ?>
<?php unset($__componentOriginal8c9d13af251f41b73923e8410f290df1); ?>
<?php endif; ?>
					<?php if (isset($component)) { $__componentOriginal8c9d13af251f41b73923e8410f290df1 = $component; } ?>
<?php $component = App\View\Components\TabsTrigger::resolve(['target' => '#pricing-prepaid','style' => '3','label' => ''.e(__('Prepaid')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabs-trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TabsTrigger::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c9d13af251f41b73923e8410f290df1)): ?>
<?php $component = $__componentOriginal8c9d13af251f41b73923e8410f290df1; ?>
<?php unset($__componentOriginal8c9d13af251f41b73923e8410f290df1); ?>
<?php endif; ?>
				</div>
				<div class="lqd-tabs-content-wrap max-xl:px-0 px-10">
					<div class="lqd-tabs-content">
						<div id="pricing-monthly">
							<div class="grid grid-cols-3 gap-2 max-md:grid-cols-1 ">
                                <?php $__currentLoopData = $plansSubscription; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if (isset($component)) { $__componentOriginalf457caa3fd47ec556cf3cecba6a5bc3b = $component; } ?>
<?php $component = App\View\Components\PriceTable::resolve(['currency' => ''.e(currency()->symbol).'','featured' => ''.e($plan->is_featured == 1).'','title' => ''.$plan->name.'','price' => ''.e($plan->price).'','period' => ''.e($plan->frequency == 'monthly' ? 'month' : 'year').'','buttonLabel' => ''.e(__('Select')).' '.e($plan->name).'','buttonLink' => ''.e(route('login')).'','activeFeatures' => ''.e($plan->features).'','inactiveFeatures' => '','totalWords' => ''.e($plan->total_words).'','totalImages' => ''.e($plan->total_images).'','trialDays' => ''.e($plan->trial_days).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('price-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PriceTable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf457caa3fd47ec556cf3cecba6a5bc3b)): ?>
<?php $component = $__componentOriginalf457caa3fd47ec556cf3cecba6a5bc3b; ?>
<?php unset($__componentOriginalf457caa3fd47ec556cf3cecba6a5bc3b); ?>
<?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
						<div class="hidden" id="pricing-prepaid">
							<div class="grid grid-cols-3 gap-2 max-md:grid-cols-1">
                                <?php $__currentLoopData = $plansPrepaid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if (isset($component)) { $__componentOriginalf457caa3fd47ec556cf3cecba6a5bc3b = $component; } ?>
<?php $component = App\View\Components\PriceTable::resolve(['currency' => ''.e(currency()->symbol).'','featured' => ''.e($plan->is_featured == 1).'','title' => ''.$plan->name.'','price' => ''.e($plan->price).'','period' => 'One Time Payment','buttonLabel' => ''.e(__('Select')).' '.e($plan->name).'','buttonLink' => ''.e(route('login')).'','activeFeatures' => ''.e($plan->features).'','inactiveFeatures' => '','totalWords' => ''.e($plan->total_words).'','totalImages' => ''.e($plan->total_images).'','trialDays' => ''.e($plan->trial_days).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('price-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PriceTable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf457caa3fd47ec556cf3cecba6a5bc3b)): ?>
<?php $component = $__componentOriginalf457caa3fd47ec556cf3cecba6a5bc3b; ?>
<?php unset($__componentOriginalf457caa3fd47ec556cf3cecba6a5bc3b); ?>
<?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mt-9 flex justify-center">
				<div class="flex w-[305px] gap-5 text-sm text-[#002A40] text-opacity-60 items-center">
					<span class="inline-flex items-center justify-center w-10 h-10 rounded-xl shrink-0 bg-[#6C727B] bg-opacity-10">
						<svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.346 6.323H4.024V3.449C4.024 2.839 4.26632 2.25399 4.69765 1.82266C5.12899 1.39132 5.714 1.149 6.324 1.149C6.934 1.149 7.51901 1.39132 7.95035 1.82266C8.38168 2.25399 8.624 2.839 8.624 3.449C8.624 3.6015 8.68458 3.74775 8.79241 3.85559C8.90025 3.96342 9.0465 4.024 9.199 4.024C9.3515 4.024 9.49775 3.96342 9.60558 3.85559C9.71342 3.74775 9.774 3.6015 9.774 3.449C9.774 2.534 9.41052 1.65648 8.76352 1.00948C8.11652 0.362482 7.23899 -0.000999451 6.324 -0.000999451C5.409 -0.000999451 4.53148 0.362482 3.88448 1.00948C3.23748 1.65648 2.874 2.534 2.874 3.449V6.323H2.3C1.69001 6.323 1.10499 6.56532 0.673653 6.99666C0.242319 7.42799 0 8.013 0 8.623V14.946C0 15.248 0.0594935 15.5471 0.175079 15.8262C0.290665 16.1052 0.460078 16.3588 0.673653 16.5723C0.887227 16.7859 1.14078 16.9553 1.41983 17.0709C1.69888 17.1865 1.99796 17.246 2.3 17.246H10.347C10.649 17.246 10.9481 17.1865 11.2272 17.0709C11.5062 16.9553 11.7598 16.7859 11.9733 16.5723C12.1869 16.3588 12.3563 16.1052 12.4719 15.8262C12.5875 15.5471 12.647 15.248 12.647 14.946V8.622C12.6469 8.31996 12.5872 8.0209 12.4715 7.7419C12.3558 7.46291 12.1863 7.20943 11.9726 6.99595C11.759 6.78247 11.5053 6.61316 11.2262 6.49769C10.9472 6.38223 10.648 6.32287 10.346 6.323Z" fill="#6C727B"/>
						</svg>
					</span>
					<p class="[&_strong]:block"><?php echo __('<strong>Safe Payment:</strong> Use Stripe or Credit Card.'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if($fSectSettings->faq_active == 1): ?>
    <section class="site-section py-10 md:opacity-0 md:translate-y-8 transition-all duration-700 [&.lqd-is-in-view]:opacity-100 [&.lqd-is-in-view]:translate-y-0" id="faq">
        <div class="container">
            <div class="p-11 pb-16 border rounded-[50px] relative max-sm:px-5">
                <?php if (isset($component)) { $__componentOriginal044312fc7e45484e118b3e1951e4e85f = $component; } ?>
<?php $component = App\View\Components\SectionHeader::resolve(['mb' => '9','width' => 'w-1/2','title' => ''.__($fSectSettings->faq_title).'','subtitle' => ''.__($fSectSettings->faq_subtitle).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SectionHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <h6 class="inline-block py-1 px-3 mb-6 rounded-md text-[13px] font-medium text-[#60027C] bg-[#60027C] bg-opacity-15">
                        <?php echo __($fSectSettings->faq_text_one); ?>

                        <span class="dot"></span>
                        <span class="opacity-50"><?php echo __($fSectSettings->faq_text_two); ?></span>
                    </h6>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal044312fc7e45484e118b3e1951e4e85f)): ?>
<?php $component = $__componentOriginal044312fc7e45484e118b3e1951e4e85f; ?>
<?php unset($__componentOriginal044312fc7e45484e118b3e1951e4e85f); ?>
<?php endif; ?>
                <div class="lqd-accordion max-lg:w-full w-5/6 mx-auto">
                    <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal128a9a5e7887d8246812b1454fe28d25 = $component; } ?>
<?php $component = App\View\Components\AccordionItem::resolve(['id' => 'faq-'.e($item->id).'','title' => ''.__($item->question).'','content' => ''.__($item->answer).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('accordion-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AccordionItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal128a9a5e7887d8246812b1454fe28d25)): ?>
<?php $component = $__componentOriginal128a9a5e7887d8246812b1454fe28d25; ?>
<?php unset($__componentOriginal128a9a5e7887d8246812b1454fe28d25); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if($setting->gdpr_status == 1): ?>
<div id="gdpr" class="bg-white fixed z-50 p-2 rounded-full drop-shadow-2xl bottom-12 left-1/2 -translate-x-1/2 max-sm:w-11/12">
	<div class="flex items-center justify-between gap-6 text-sm">
		<div class="content-left pl-4">
			<?php echo __($setting->gdpr_content); ?>

		</div>
		<div class="content-right text-end">
			<button class="bg-black text-white px-4 py-2 cursor-pointer rounded-full"><?php echo __($setting->gdpr_button); ?></button>
		</div>
	</div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/index.blade.php ENDPATH**/ ?>
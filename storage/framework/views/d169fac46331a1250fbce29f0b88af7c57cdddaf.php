<!-- Header Area Starts -->
<header
	class="shadow-md left-0 lg:left-1/2 ml-4 w-56 lg:w-4/5 py-1 px-0 bg-white absolute top-5 z-1 lg:transform lg:-translate-x-1/2 lg:translate-y-0 rounded lg:mx-auto xl:w-11/12"
>
	<div class="mx-4 lg:flex lg:items-center">
		<div class="flex items-center">
			<div class="lg:shrink-0">
				<a href="index.html"
					><img src="assets/images/logo/logo.png" alt="logo" class="m-auto max-w-[200px] min-w-[130px] w-9/12 px-2 py-4 lg:p-5 h-auto lg:m-0"
				/></a>
			</div>
				<div class="nav-ham p-4 lg:hidden cursor-pointer transition ease-in-out duration-75 open">
					<?php $__currentLoopData = [1, 2, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    		<span class="bg-gray-500 block w-5 h-[3px] my-1 mx-0"></span>
		    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>		
				<div class="nav-ham p-4 lg:hidden cursor-pointer relative transition ease-in-out duration-75 close hidden">
					<span class="bg-gray-500 block w-5 h-[3px] my-1 mx-0 absolute top-3.5 right-4 transform rotate-45"></span>
	    		<span class="bg-gray-500 block w-5 h-[3px] my-1 mx-0  absolute top-3.5 right-4 transform -rotate-45"></span>
				</div>
		</div>
		
		<div class="lg:flex-1 nav-collapse hidden lg:block">			
			<ul class="pb-2 lg:pb-0 lg:flex lg:flex-wrap lg:items-center lg:justify-end">
				<?php $__currentLoopData = $navdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				     <li class="p-2.5 lg:p-4 text-right text-sm lg:font-bold text-slate-800 uppercase lg:text-left">
				     	<a href=<?php echo e($data['href']); ?>><?php echo e($data['text']); ?></a>
				     </li> 
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				    
				
				<?php if(Route::has('login')): ?> <?php if(auth()->guard()->check()): ?>
				<div class="m-2 flex justify-end lg:mx-4 lg:block">
					<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['align' => 'right','width' => '48']]); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
						 <?php $__env->slot('trigger', null, []); ?> 
							<?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
							<button
								class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
							>
								<img
									class="h-8 w-8 rounded-full object-cover"
									src="<?php echo e(Auth::user()->profile_photo_url); ?>"
									alt="<?php echo e(Auth::user()->name); ?>"
								/>
							</button>
							<?php else: ?>
							<span class="inline-flex rounded-md">
								<button
									type="button"
									class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition"
								>
									<?php echo e(Auth::user()->name); ?>


									<svg
										class="ml-2 -mr-0.5 h-4 w-4"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 20 20"
										fill="currentColor"
									>
										<path
											fill-rule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
											clip-rule="evenodd"
										/>
									</svg>
								</button>
							</span>
							<?php endif; ?>
						 <?php $__env->endSlot(); ?>

						 <?php $__env->slot('content', null, []); ?> 
							<!-- Account Management -->
							<div class="block px-4 py-2 text-xs text-gray-400">
								<?php echo e(__('Manage Account')); ?>

							</div>

							<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('profile.show')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('profile.show')).'']); ?>
								<?php echo e(__('Profile')); ?>

							 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

							<?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
							<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('api-tokens.index')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('api-tokens.index')).'']); ?>
								<?php echo e(__('API Tokens')); ?>

							 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
							<?php endif; ?>

							<div class="border-t border-gray-100"></div>

							<!-- Authentication -->
							<form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
								<?php echo csrf_field(); ?>

								<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']); ?>
									<?php echo e(__('Log Out')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
							</form>
						 <?php $__env->endSlot(); ?>
					 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
				</div>
				<?php else: ?>
				<li class="text-right p-2.5 text-sm font-bold text-slate-800 uppercase lg:text-left">
					<a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-500">Login</a>
				</li>

				<?php if(Route::has('register')): ?>
				<li class="text-right p-2.5 text-sm font-bold text-slate-800 uppercase lg:text-left">
					<a href="<?php echo e(route('register')); ?>" class="text-sm text-gray-500"
						>Register</a
					>
				</li>
				<?php endif; ?> <?php endif; ?> <?php endif; ?>
			</ul>
		</div>
	</div>
</header>
<!-- Header Area End -->
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views/home/partials/header.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\Index::class, ['user' => $user,'isAdmin' => $isAdmin]); ?>
<?php $component->withName('home.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div class="content-wrapper">
		<a href="<?php echo e(route('spdish.create')); ?>" class="btn btn-primary mx-2">Add Special Dish</a>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Special-Dish Data-Table</h4>					
					<p class="card-description">
						Special-Dish information table  
					</p>

					<?php if(session()->has('msg')): ?>
					<p class="alert alert-info"><?php echo e(session()->get('msg')); ?></p>
					<?php endif; ?>
					
					<table class="table table-hover overflow-auto block">
						<thead>
							<tr class="bg-slate-800">
								<?php $__currentLoopData = ["Image", "Name", "Price", "Description", "Created at", "", ""]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<th class="font-bold text-white"><?php echo e($heading); ?></th>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="w-32">
									<img src="<?php echo e($data->img); ?>" alt="<?php echo e($data->name); ?>" class="!w-full !h-auto !rounded-none">
								</td>							
								<td>
									<p class="font-bold">
		                <span class="text-amber-400"><?php echo e($data['namepart1']); ?></span> <span class="leading-normal"><?php echo e($data['namepart2']); ?></span>
		              </p>
		            </td>
								<td><?php echo e($data->price); ?></td>								
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words"><?php echo e($data->desc); ?></td>
								<td><?php echo e($data->created_at); ?></td>
								<td>
									<a
										href="<?php echo e(route('spdish.edit', $data->id)); ?>"
										class="badge badge-primary cursor-pointer"
										>Edit</a
									>
								</td>
								<td>
									<?php if($isAdmin === true): ?>
									<form method="POST" action="<?php echo e(route('spdish.destroy', $data->id)); ?>">
						        <?php echo method_field('DELETE'); ?>
										<?php echo csrf_field(); ?>
					        	<button 
					        		type="submit" 
					        		class="badge badge-danger cursor-pointer" 
					        		onclick="return confirmDeleteSpDish(<?php echo e($data->id); ?> , '<?php echo e($data->name); ?>');"
					        		>Delete</button>
								  </form>
									<?php else: ?>
									<button
										onclick="alert('Only admin can special dish info')"
										class="badge badge-danger cursor-pointer"
										>Delete</button>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script>
  function confirmDeleteSpDish(id, name) {
      if(!confirm("Are You Sure to delete this special dish item, Named: " + name + ", Id: " + id + "." ))
      event.preventDefault();
  }
 </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737)): ?>
<?php $component = $__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737; ?>
<?php unset($__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737); ?>
<?php endif; ?>
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views/admin/pages/spdishes/spdisheslist.blade.php ENDPATH**/ ?>
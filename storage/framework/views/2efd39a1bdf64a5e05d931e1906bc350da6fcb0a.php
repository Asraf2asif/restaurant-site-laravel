<?php if (isset($component)) { $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Index::class, ['user' => $user,'isAdmin' => $isAdmin]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div class="content-wrapper">
		<a href="<?php echo e(route('foodmenu.create')); ?>" class="btn btn-primary mx-2">Add New Food</a>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Food-Menu Data-Table</h4>					
					<p class="card-description">
						Food-Menu information table 
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
								<td><?php echo e($data->name); ?></td>
								<td><?php echo e($data->price); ?></td>								
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words"><?php echo e($data->desc); ?></td>
								<td><?php echo e($data->created_at); ?></td>
								<td>
									<a
										href="<?php echo e(route('foodmenu.edit', $data->id)); ?>"
										class="badge badge-primary cursor-pointer"
										>Edit</a
									>
								</td>
								<td>
									<?php if($isAdmin === true): ?>
									<form method="POST" action="<?php echo e(route('foodmenu.destroy', $data->id)); ?>">
						        <?php echo method_field('DELETE'); ?>
										<?php echo csrf_field(); ?>

					        	<button 
					        		type="submit" 
					        		class="badge badge-danger cursor-pointer" 
					        		onclick="return confirmDeleteFood(<?php echo e($data->id); ?> , '<?php echo e($data->name); ?>');"
					        		>Delete</button>
								  </form>
									<?php else: ?>
									<button
										onclick="alert('Only admin can delete food menu')"
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
  function confirmDeleteFood(id, name) {
      if(!confirm("Are You Sure to delete this food menu, Named: " + name + ", Id: " + id + "." ))
      event.preventDefault();
  }
 </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views\admin\pages\foodmenu\foodmenu.blade.php ENDPATH**/ ?>
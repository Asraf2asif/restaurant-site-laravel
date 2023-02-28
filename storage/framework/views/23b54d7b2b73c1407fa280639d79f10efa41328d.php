<?php if (isset($component)) { $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Index::class, ['user' => $user,'isAdmin' => $isAdmin]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div class="content-wrapper">
		<div class="col-lg-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">User Data-Table</h4>					
					<p class="card-description">
						User information table 
					</p>
					<table class="table table-hover">
						<thead>
							<tr class="bg-slate-800">
								<?php $__currentLoopData = ["Name", "Email", "Created at", "Action"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<th class="font-bold text-white"><?php echo e($heading); ?></th>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tr>
						</thead>
						<tbody>
							<?php if($isAdmin === false): ?>
							<tr>
								<td>Only Admin can</td>
								<td>view or edit</td>								
								<td>users</td>								
								<td>data</td>
							</tr>
							<?php else: ?>
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($data->name); ?></td>
									<td><?php echo e($data->email); ?></td>
									<td><?php echo e($data->created_at); ?></td>
									<?php if($data->usertype == "0"): ?>
									<td>
										<form method="POST" action="<?php echo e(route('user.destroy', $data->id)); ?>">
								        <?php echo method_field('DELETE'); ?>
												<?php echo csrf_field(); ?>

								        <div class="form-group">
								        	<button 
								        		type="submit" 
								        		class="badge badge-danger cursor-pointer" 
								        		onclick="return confirmDeleteUser(<?php echo e($data->id); ?> , '<?php echo e($data->name); ?>');"
								        		>Delete</button>
								        </div>
								    </form>
									</td>
									<?php else: ?>
									<td><p class="badge badge-dark">Not allowded</p></td>
									<?php endif; ?>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script>
  function confirmDeleteUser(id, name) {
      if(!confirm("Are You Sure to delete this user, Named: " + name + ", Id: " + id + "." ))
      event.preventDefault();
  }
 </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?><?php /**PATH E:\My Work\web\Resturent-Site\resources\views\admin\pages\user.blade.php ENDPATH**/ ?>
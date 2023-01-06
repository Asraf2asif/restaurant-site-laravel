<?php if (isset($component)) { $__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\Index::class, []); ?>
<?php $component->withName('home.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Food-Menu Form</h4>
						<p class="card-description">Add/Edit food menu info</p>
						<form action="<?php echo e(url('/uploadfood')); ?>" method="post" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<label for="productname">Name</label>
								<input
									type="text"
									class="form-control"
									id="productname"
									name="productname"
									placeholder="Input product name"
									required
								/>
							</div>

							<div class="form-group">
								<label for="productprice">Price</label>
								<input
									type="number"
									class="form-control"
									id="productprice"
									name="productprice"
									placeholder="Input product price up to 2 decimal places"
									pattern="[0-9]+([\.,][0-9]+)?" 
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label>Image upload</label>
								<input type="file" name="img[]" class="file-upload-default" />
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="Upload product image"
										id="productimage"
										name="productimage"
										required
									/>
									
									</span>
								</div>
							</div>

							<div class="form-group">
								<label for="productdescription">Description</label>
								<textarea
									class="form-control"
									id="productdescription"
									name="productdescription"
									rows="4"
									placeholder="Input product description"
								></textarea>
							</div>

							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-10 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Admin data</h4>
					
					</p>
					<table class="table table-hover">
						<thead>
							<tr class="bg-slate-800">
								<?php $__currentLoopData = ["Name", "Price", "Image", "Description", "Created at", "Action"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<th class="font-bold text-white"><?php echo e($heading); ?></th>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($data->name); ?></td>
								<td><?php echo e($data->price); ?></td>
								<td><?php echo e($data->img); ?></td>
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words"><?php echo e($data->desc); ?></td>
								<td><?php echo e($data->created_at); ?></td>
								<?php if($usertype == "1"): ?>
								<td>
									<a
										
										class="badge badge-danger cursor-pointer"
										>Delete</a
									>
								</td>
								<?php else: ?>
								<td><p class="badge badge-dark">Not allowded</p></td>
								<?php endif; ?>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737)): ?>
<?php $component = $__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737; ?>
<?php unset($__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737); ?>
<?php endif; ?>
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views\admin\pages\foodmenu.blade.php ENDPATH**/ ?>
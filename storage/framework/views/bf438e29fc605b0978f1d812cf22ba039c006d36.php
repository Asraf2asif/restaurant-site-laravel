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
						<p class="card-description">Edit food menu info</p>
						<form action="<?php echo e(url('/updatefood', $data->id )); ?>" method="post" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<label for="productname">Name</label>
								<input
									type="text"
									class="form-control"
									id="productname"
									name="productname"
									value="<?php echo e($data->name); ?>"
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
									value="<?php echo e($data->price); ?>"
									placeholder="Input product price up to 2 decimal places"
									pattern="[0-9]+([\.,][0-9]+)?" 
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label>Image upload</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="Upload product image"
										id="productimageupdate"
										name="productimage"
										value="<?php echo e($data->img); ?>"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempproductimageedit" src="<?php echo e($data->img); ?>" alt="<?php echo e($data->name); ?>" class="h-auto shadow-sm w-1/2" />
							</div>

							<div class="form-group">
								<label for="productdescription">Description</label>
								<textarea
									class="form-control"
									id="productdescription"
									name="productdescription"
									rows="4"
									placeholder="Input product description"
								><?php echo e($data->desc); ?></textarea>
							</div>

							<button type="submit" class="btn btn-primary mr-2">Edit</button>
							<a href="<?php echo e(url("foodmenu")); ?>" class="btn btn-light">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		productimageupdate.onchange = evt => {
		  const [file] = productimageupdate.files
		  if (file) {
		    tempproductimageedit.src = URL.createObjectURL(file)
		  }
		}
		
	</script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737)): ?>
<?php $component = $__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737; ?>
<?php unset($__componentOriginal59c2d7c0c48f93f56b3d4e9fec7b6da284fc6737); ?>
<?php endif; ?>
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views/admin/pages/updatefoodmenu.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Index::class, ['user' => $user,'isAdmin' => $isAdmin]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Testimonial Form</h4>
						<p class="card-description">Edit testimonial info</p>
						<form action="<?php echo e(route('testimonial.update', $data->id )); ?>" method="post" enctype="multipart/form-data">
							<?php echo method_field('PUT'); ?>
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<label for="reviewname">Name</label>
								<input
									type="text"
									class="form-control"
									id="reviewname"
									name="reviewname"
									value="<?php echo e($data->name); ?>"
									placeholder="Input Client name"
									required
								/>
							</div>

							<div class="form-group">
								<label for="reviewbio">Bio</label>
								<input
									type="text"
									class="form-control"
									id="reviewbio"
									name="reviewbio"
									value="<?php echo e($data->bio); ?>"
									placeholder="Input Client Bio"
									required
								/>
							</div>

							<div class="form-group">
								<label for="reviewrating">Rating</label>
								<input
									type="number"
									class="form-control"
									id="reviewrating"
									name="reviewrating"
									value="<?php echo e($data->rating); ?>"
									placeholder="Input Review Rating up to 2 decimal places"
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
										placeholder="Upload review image"
										id="reviewimageupdate"
										name="reviewimage"
										value="<?php echo e($data->img); ?>"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempreviewimageedit" src="<?php echo e($data->img); ?>" alt="<?php echo e($data->name); ?>" class="h-auto shadow-sm w-1/2" />
							</div>

							<div class="form-group">
								<label for="reviewtext">Review</label>
								<textarea
									class="form-control"
									id="reviewtext"
									name="reviewtext"
									rows="4"
									required
									placeholder="Input Client Review"
								><?php echo e($data->review); ?></textarea>
							</div>

							<?php if($isAdmin === true): ?>
							<button type="submit" class="btn btn-primary mr-2">Edit</button>
							<?php else: ?>
							<button onclick="alert('Only admin can edit food menu')" type="button" class="btn btn-primary mr-2">Edit</button>
							<?php endif; ?>
							<a href="<?php echo e(route("testimonial.index")); ?>" class="btn btn-light">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		reviewimageupdate.onchange = evt => {
		  const [file] = reviewimageupdate.files
		  if (file) {
		    tempreviewimageedit.src = URL.createObjectURL(file)
		  }
		}
		
	</script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views\admin\pages\review\editreview.blade.php ENDPATH**/ ?>
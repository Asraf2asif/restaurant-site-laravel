<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex align-items-center mb-4">
          <h4 class="card-title mb-sm-0">Reservation</h4>
          <a href="<?php echo e(route('testimonial.index')); ?>" class="text-dark ml-auto mb-3 mb-sm-0"> View all Reservation</a>
        </div>
        <div class="table-responsive border rounded p-1">
          <table class="table">
            <thead>
              <tr class="bg-slate-800">
                <?php $__currentLoopData = ["Image", "Intro", "Description", "Ratings", "Created at"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <th class="font-bold text-white"><?php echo e($heading); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><img class="img-sm rounded-circle m-auto" src="<?php echo e($data->img); ?>" alt="person image"></td>
                <td>
                  <p class="capitalize mb-0"><?php echo e($data->name); ?></p>
                  <p class="capitalize italic mb-0 py-1 text-slate-400"><?php echo e($data->bio); ?></p>
                </td>
                <td class="max-w-[290px] min-w-[290px] !leading-normal !whitespace-normal break-words"><?php echo e($data->review); ?></td>
                <td><?php echo e($data->rating); ?></td>
                <td><?php echo e($data->created_at); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div><?php /**PATH E:\My Work\web\Resturent-Site\resources\views\admin\pages\home\tabledisplay1.blade.php ENDPATH**/ ?>
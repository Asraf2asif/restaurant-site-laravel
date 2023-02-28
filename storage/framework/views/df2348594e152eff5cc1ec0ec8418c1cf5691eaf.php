    <!-- Deshes Area Starts -->
    <section class="py-32 mx-auto max-w-[960px]">
      <div class="m-4 max-w-md mt-5 mb-11 p-4 text-center mx-auto">
        <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Our <span class="text-amber-400 leading-snug">special</span> dishes</h3>
        <p class="pt-2 text-[14px] font-sans-lato text-slate-600 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
      </div>
      <?php $__currentLoopData = $dishesdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="p-3 flex flex-wrap items-center justify-around<?php echo e($loop->first ? " mt-0": " mt-10"); ?><?php echo e($loop->iteration % 2 == 0 ? " flex-row-reverse" : ""); ?>">
          <div class="p-5 basis-[400px] grow shrink max-w-[650px]<?php echo e($loop->iteration % 2 == 0 ? " pr-7" : ""); ?>">
            <h1 class="relative text-4xl font-semibold font-cursive-merie mb-3 text-slate-400<?php echo e($loop->iteration % 2 == 0 ? " text-right" : ""); ?>"><?php echo e($loop->iteration < 9 ? "0" . $loop->iteration : $loop->iteration); ?>.
              <span class="absolute top-1/2 border-t border-slate-300 w-1/2<?php echo e($loop->iteration % 2 == 0 ? " right-16" : " left-16"); ?>"></span>
            </h1>
            <div class="<?php echo e($loop->iteration % 2 == 0 ? "text-right" : ""); ?>">
              <h3 class="font-bold font-cursive-merie text-3xl ">
                <span class="text-amber-400 leading-snug"><?php echo e($data['namepart1']); ?></span> <br /><span class="leading-normal"><?php echo e($data['namepart2']); ?></span>
              </h3>

              <p class="mt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed"><?php echo e($data['desc']); ?></p>
              <p class="mt-4 font-bold font-cursive-merie text-2xl text-amber-400 ">$<?php echo e($data['price']); ?></p>
              <a href="#book">
                <p class="mt-4 inline-block rounded-sm shadow px-3 py-3 uppercase font-sans-monts text-xs font-bold text-slate-900 transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent ">book a table <span><i class="fa fa-long-arrow-right"></i></span></p>
              </a>
            </div>
          </div>
          <div class="basis-[500px] grow-0 mt-5">
            <img class="w-full h-auto" src="<?php echo e($data['img']); ?>" alt="<?php echo e($data['namepart1']); ?> <?php echo e($data['namepart2']); ?>">
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
    <!-- Deshes Area End --><?php /**PATH E:\My Work\web\Resturent-Site\resources\views\home\partials\deshes.blade.php ENDPATH**/ ?>
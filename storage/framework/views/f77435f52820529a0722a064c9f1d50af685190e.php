    <!-- Testimonial Area Starts -->
    <section id="testimonial" class="bg-[url(assets/images/testimonial-bg.jpg')] bg-center bg-cover bg-no-repeat mt-28 px-10 py-24 relative w-full z-1">
      <span class="overlay absolute w-full h-full bg-slate-900/70 left-0 top-0 z-n1"></span>
      <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
        <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Customer <span class="text-amber-400 leading-snug">says</span> . . .</h3>
        <p class="pt-2 text-[14px] font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
      </div>
      <div class="flex flex-wrap justify-center mt-5 owl-carousel testimonial-slider">
        <?php $__currentLoopData = $testimonialdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="bg-white bg-no-repeat bg-right-top flex flex-wrap flex-col items-start md:flex-row m-5 max-w-[530px] px-6 py-5 rounded h-auto" style="background-image: url(<?php echo e($quoteImg); ?>)">
            <div class="mr-6 mb-4 w-[100px] grow-0 shrink-0 rounded-full border border-gray-300 p-0.5">
              <img src="<?php echo e($data['img']); ?>" class="w-full h-auto" alt="">
            </div>
            <div class="flex-grow flex-shrink basis-auto md:basis-[22rem]">
              <h5 class='font-cursive-merie text-lg p-1 leading-normal capitalize font-semibold'><?php echo e($data['name']); ?></h5>
              <span class="pt-4 text-[14px] text-slate-600 font-sans-lato leading-relaxed"><i><?php echo e($data['bio']); ?></i></span>
              <p class="pt-3.5 text-[14px] text-slate-500 font-sans-lato leading-relaxed "><?php echo e($data['review']); ?></p>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      </div>
    </section>
    <!-- Testimonial Area End --><?php /**PATH E:\My Work\web\Resturent-Site\resources\views\home\partials\testimonial.blade.php ENDPATH**/ ?>
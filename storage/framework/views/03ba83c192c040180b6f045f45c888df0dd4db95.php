  <!-- Table Area Starts -->
  <section id="book" class="py-32 px-4 md:px-32 bg-no-repeat bg-center bg-cover w-full relative z-1 text-center" style="background-image: url(<?php echo e($tableBg); ?>)">
    <span class="overlay absolute w-full h-full bg-slate-900/70 left-0 top-0 z-n1"></span>
    <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
      <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Book <span class="text-amber-400 leading-snug">your</span> table</h3>
      <p class="pt-2 text-[14px] font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
    </div>

    <form action="<?php echo e(route('reservation.store')); ?>"  method="post" enctype="multipart/form-data" class="bg-slate-800/75 border-2 inline-block mx-5 md:mx-0 px-1.5 md:px-6 py-4 pb-5 md:py-8 md:pb-8 shadow-md">
      <?php echo csrf_field(); ?>
      <div class="flex flex-wrap items-center justify-center">
        <div class="m-3 relative">
          <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-user text-[14px]"></i></span>
          <input type="text" id="name" name="name" class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Your name">
        </div>
        <div class="m-3 relative">
          <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-phone text-[14px]"></i></span>
          <input type="text" id="phone" name="phone" class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Phone Number" required>
        </div>
      </div>
      <div class="flex flex-wrap items-center justify-center">
        <div class="m-3 relative">
          <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa fa-calendar text-[14px]"></i></span>
          <input type="text" id="datepicker" name="date" class="w-48 md:w-32 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Date" required>
        </div>
        <div class="m-3 relative">
          <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-clock text-[14px]"></i></span>
          <input type="text" name="time" class="w-48 md:w-24 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Time">
        </div>
        <div class="m-3 relative">
          <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-border-none text-[14px]"></i></span>
          <select name="person" required id="person" class="w-48 md:w-32 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed">
            <option value="0" disabled>Person</option>
            <option value="1">1 Person</option>
            <option value="2">2 Person</option>
            <option value="3">3 Person</option>
            <option value="4">4 Person</option>
            <option value="5">5 Person</option>
            <option value="6">6 Person</option>
          </select>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="inline-block rounded-sm shadow-md mt-7 px-5 py-3 bg-lime-400 uppercase font-sans-monts text-xs font-bold text-slate-900 border border-transparent transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent hover:border-lime-400 hover:text-slate-100">book a table</button>
      </div>
    </form>
  </section>
  <!-- Table Area End --><?php /**PATH E:\My Work\web\Resturent-Site\resources\views\home\partials\table.blade.php ENDPATH**/ ?>
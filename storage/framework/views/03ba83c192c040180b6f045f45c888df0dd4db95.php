<!-- Table Area Starts -->
    <section class="py-32 px-4 md:px-32 bg-no-repeat bg-center bg-cover w-full relative z-1" style="background-image: url(<?php echo e($tableBg); ?>)">
      <span class="overlay absolute w-full h-full bg-slate-900/70 left-0 top-0 z-n1"></span>
      <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
        <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Book <span class="text-amber-400 leading-snug">your</span> table</h3>
        <p class="pt-2 text-[14px] font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
      </div>

      <form action="#">
        <div class="flex flex-wrap items-center justify-center">
          <div class="m-3 relative">
            <span class="absolute top-0 left-0 px-3 py-2 text-slate-700"><i class="fa fa-user-o text-[14px]"></i></span>
            <input type="text" class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Your name">
          </div>
          <div class="m-3 relative">
            <span class="absolute top-0 left-0 px-3 py-2 text-slate-700"><i class="fa-solid fa-phone text-[14px]"></i></span>
            <input type="text" class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Phone Number">
          </div>

        </div>
        <div class="flex flex-wrap items-center justify-center">
          <div class="m-3.5 relative">
            <span class="absolute top-0 left-0 px-3 py-2 text-slate-700"><i class="fa fa-calendar text-[14px]"></i></span>
            <input type="text" id="datepicker" class="w-48 md:w-32 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Date">
          </div>
          <div class="m-3.5 relative">
            <span class="absolute top-0 left-0 px-3 py-2 text-slate-700"><i class="fa fa-clock-o text-[14px]"></i></span>
            <input type="text" id="timepicker" class="w-48 md:w-24 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Time">
          </div>
          <div class="m-3.5 relative">
            <span class="absolute top-0 left-0 px-3 py-2 text-slate-700"><i class="fa fa-user-o text-[14px]"></i></span>
            <select name="cars" id="cars" class="w-48 md:w-32 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed">
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
          <a href="#" class="book-table-btn">book a table</a>
        </div>
      </form>
    </section>
<!-- Table Area End --><?php /**PATH E:\My Work\web\Resturent-Site\resources\views\home\partials\table.blade.php ENDPATH**/ ?>
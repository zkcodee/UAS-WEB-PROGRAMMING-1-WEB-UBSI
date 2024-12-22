<section id="testimoni" class="py-10">
  <div class="container">
    <div class="mb-[26px] lg:mb-[46px] text-center">
      <h2 class="section-subtitle">Suara alumni</h2>
      <h6 class="section-title text-4xl">
        Perjalanan luar biasa yang dimulai di kampus UBSI.
      </h6>
    </div>

	<?php
	$testimonials = json_decode(file_get_contents('./data/testimonials.json'));
	?>
    <!-- testi avatar -->
    <div class="flex flex-wrap items-center justify-center">
		<?php foreach ($testimonials as $key => $testimonial) : ?>
      <img
        src="<?php echo $testimonial->foto; ?>"
        alt="<?php echo $testimonial->nama; ?>"
		loading="lazy"
        onclick="changeReview()"
        class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer object-cover shadow-md user-pic <?php echo ($key === 0) ? "active-pic" : ""; ?>"
      />
		<?php endforeach; ?>
    </div>

    <!-- testi text -->
    <div class="grid place-items-center text-center m-auto lg:w-4/5 min-h-[40vh]">
		<?php foreach ($testimonials as $key => $testimonial) : ?>
      <div class="user-text <?php echo ($key === 0) ? "active-text" : ""; ?>">
        <p class="lg:text-base font-medium mb-6 italic">
          "<?php echo $testimonial->testimoni; ?>"
        </p>
        <h4 class="font-bold text-blue-800"><?php echo $testimonial->nama; ?></h4>
        <p class="text-base text-slate-500"><?php echo $testimonial->pekerjaan; ?></p>
      </div>
		<?php endforeach; ?>
    </div>
  </div>
</section>

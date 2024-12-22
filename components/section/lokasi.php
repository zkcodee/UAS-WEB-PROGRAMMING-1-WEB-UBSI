<section
  id="lokasi-kampus"
  class="bg-slate-50 py-[60px] relative z-[1] overflow-hidden"
>
  <div class="container">
    <!-- heading -->
    <div class="mb-[26px] lg:mb-[46px] text-center">
      <h2 class="section-subtitle">cabang kampus</h2>
      <h6 class="section-title text-4xl">Jangkauan Kampus Kami</h6>
      <div class="pt-5 space-x-2 flex items-center justify-center">
        <button
          id="prevToggleBtn"
          class="p-3 rounded-full border border-primaryBlue text-primaryBlue"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-move-left"
          >
            <path d="M6 8L2 12L6 16" />
            <path d="M2 12H22" />
          </svg>
        </button>
        <button
          id="nextToggleBtn"
          class="p-3 rounded-full border border-primaryBlue text-primaryBlue"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-move-right"
          >
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </button>
      </div>
    </div>

    <!-- content -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 active" id="kampus-utama">
      <?php
		$lokasi_utama = json_decode(file_get_contents('./data/lokasi_utama.json'));
		foreach ($lokasi_utama as $item_utama) {
		?>
      <div
        class="relative overflow-hidden rounded-lg shadow-lg shrink-0 group card"
      >
        <img
          src="<?= $item_utama->gambar; ?>"
          alt="<?= $item_utama->nama; ?>"
          loading="lazy"
          class="w-full h-full object-cover group-hover:scale-105 transition-all duration-300 ease-in-out lokasi_utama"
        />
        <div
          class="absolute inset-0 hover-overlay flex flex-col items-center justify-center"
        >
          <span class="text-white text-xl font-medium hover-text text-center"
            ><?= $item_utama->nama; ?></span
          >
          <a
            href="<?= $item_utama->url; ?>"
            target="_blank"
            class="border border-yellow-600 hover:bg-yellow-600 text-white uppercase px-3 py-2 mt-2 rounded-lg hover-button"
            >kunjungi</a
          >
        </div>
      </div>
      <?php } ?>
    </div>

    <div class="grid-cols-2 lg:grid-cols-4 gap-8 hidden" id="kampus-psdku">
      <?php
		$lokasi_utama = json_decode(file_get_contents('./data/lokasi_psdku.json'));
		foreach ($lokasi_utama as $item_utama) {
		?>
      <div
        class="relative overflow-hidden rounded-lg shadow-lg shrink-0 group card"
      >
        <img
          src="<?= $item_utama->gambar; ?>"
          alt="<?= $item_utama->nama; ?>"
          loading="lazy"
          class="w-full h-full object-cover group-hover:scale-105 transition-all duration-300 ease-in-out lokasi_utama"
        />
        <div
          class="absolute inset-0 hover-overlay flex flex-col items-center justify-center"
        >
          <span class="text-white text-xl font-medium hover-text text-center"
            ><?= $item_utama->nama; ?></span
          >
          <a
            href="<?= $item_utama->url; ?>"
            target="_blank"
            class="border border-yellow-600 hover:bg-yellow-600 text-white uppercase px-3 py-2 mt-2 rounded-lg hover-button"
            >kunjungi</a
          >
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Universitas Bina Sarana Informatika</title>
	<!-- Preconnect ke Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">

	<!-- Fallback DNS Prefetch -->
	<link rel="dns-prefetch" href="https://fonts.googleapis.com">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link
      rel="shortcut icon"
      href="./public/assets/img/logo/logo-bsi-lama.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./public/assets/css/styles.css" />
    <link rel="stylesheet" href="./public/assets/css/custom.css" />
  </head>
  <body class="antialiased scroll-smooth overflow-x-clip text-base font-normal">
    <!-- start header -->
    <header class="sticky top-0 z-50">
      <?php include "./components/header.php"; ?>
    </header>
    <!-- end header -->

    <main>
      <!-- start form pendaftaran -->
      <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <div class="mx-auto w-full max-w-[550px] bg-white">
          <form method="post" action="./hasil.php">
            <div class="mb-5">
              <label for="namaLengkap" class="label-input">
                Nama Lengkap
              </label>
              <input
                type="text"
                name="namaLengkap"
                id="namaLengkap"
                placeholder="Ganjar Baswedan"
                required
                class="w-full rounded-md border border-slate-200 bg-white py-3 px-6 text-base font-medium text-darkBlue outline-none focus:border-primaryBlue focus:shadow-md"
              />
            </div>

            <div class="mb-5">
              <label for="nomorTelepon" class="label-input">
                Nomor Telepon
              </label>
              <input
                type="number"
                name="nomorTelepon"
                id="nomorTelepon"
                placeholder="0812*****"
                required
                class="w-full rounded-md border border-slate-200 bg-white py-3 px-6 text-base font-medium text-darkBlue outline-none focus:border-primaryBlue focus:shadow-md"
              />
            </div>

            <div class="mb-5">
              <label for="email" class="label-input"> Alamat Email </label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="anak.abah17@gmail.com"
                required
                class="w-full rounded-md border border-slate-200 bg-white py-3 px-6 text-base font-medium text-darkBlue outline-none focus:border-primaryBlue focus:shadow-md"
              />
            </div>

            <div class="-mx-3 flex flex-wrap">
              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <label for="nisn" class="label-input"> NISN </label>
                  <input
                    type="number"
                    name="nisn"
                    id="nisn"
                    placeholder="14269****"
                    required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                  />
                </div>
              </div>

              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <label for="tanggalLahir" class="label-input">
                    Tanggal Lahir
                  </label>
                  <input
                    type="date"
                    name="tanggalLahir"
                    id="tanggalLahir"
                    required
                    class="w-full rounded-md border border-slate-200 bg-white py-3 px-6 text-base font-medium text-darkBlue outline-none focus:border-primaryBlue focus:shadow-md"
                  />
                </div>
              </div>
            </div>

            <?php
			$fakultas_data = json_decode(file_get_contents('./data/fakultas.json'), true);
			?>
            <div class="-mx-3 flex flex-wrap">
              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <label for="fakultas" class="label-input"> Fakultas </label>
                  <select
                    name="fakultas"
                    id="fakultas"
                    required
                    class="w-full rounded-md border border-slate-200 bg-white py-3 px-6 text-base font-medium text-darkBlue outline-none focus:border-primaryBlue focus:shadow-md"
                  >
                    <option value="">Pilih Fakultas</option>
                    <?php foreach ($fakultas_data as $fakultas =>
                    $prodis): ?>
                    <option value="<?= htmlspecialchars($fakultas) ?>">
                      <?= htmlspecialchars($fakultas) ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <label for="prodi" class="label-input"> Program Studi </label>
                  <select
                    name="prodi"
                    id="prodi"
                    disabled
                    required
                    class="w-full rounded-md border border-slate-200 bg-white py-3 px-6 text-base font-medium text-darkBlue outline-none focus:border-primaryBlue focus:shadow-md"
                  >
                    <option value="">Pilih Program Studi</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="justify-end space-x-3 flex" id="jenjang">
              <label>
                <input type="radio" name="jenjang" value="D3" required />
                D3
              </label>

              <label>
                <input type="radio" name="jenjang" value="S1" required />
                S1
              </label>
            </div>

            <div class="mb-5">
              <label
                class="mb-5 block text-base font-semibold text-darkBlue lg:text-xl"
              >
                Alamat Detail
              </label>
              <textarea
                name="alamat"
                id="alamat"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                placeholder="JL. Bareng Kamu, Kel. Uyuran Bareng Kamu, Kec. Apean Deh, Jember Utara, 14212"
              ></textarea>
            </div>

            <div class="flex justify-end items-center space-x-5">
              <button type="reset" class="text-base text-red-500">
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
                  class="lucide lucide-rotate-ccw"
                >
                  <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                  <path d="M3 3v5h5" />
                </svg>
              </button>
              <button
                type="submit"
                class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
              >
                Daftar
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- end form pendaftaran -->
    </main>

    <!-- start scroll up comp -->
    <?php include "./components/scroll.php"; ?>
    <!-- end scroll up comp -->

    <!-- start footer comp -->
    <?php include "./components/footer.php"; ?>
    <!-- end footer comp -->

    <!-- script -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        const fakultasSelect = document.getElementById("fakultas");
		const prodiSelect = document.getElementById("prodi");
      	const jenjang = document.getElementById("jenjang");
        const data = <?= json_encode($fakultas_data); ?>;

      	prodiSelect.addEventListener("change",()=>{
      		if(prodiSelect.value){
      			jenjang.classList.remove("hidden");
      			jenjang.classList.add("flex");
      		}else{
      			jenjang.classList.add("hidden");
      			jenjang.classList.remove("flex");
      		}
      	})

        fakultasSelect.addEventListener("change",()=>{
        	const selectedFakultas = fakultasSelect.value;

      		prodiSelect.innerHTML = "<option value=''>Pilih Program Studi</option>";
      		prodiSelect.disabled = true;

      		if(data[selectedFakultas]){
      			data[selectedFakultas].forEach((prodi)=>{
      				const option = document.createElement("option");
      				option.value = prodi;
      				option.textContent = prodi;
      				prodiSelect.appendChild(option);
      			})

      			prodiSelect.disabled = false;
      		}
        	})
        });
    </script>
    <script src="./public/assets/js/navbar.js"></script>
    <script src="./public/assets/js/scrollup.js"></script>
  </body>
</html>

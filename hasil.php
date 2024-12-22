<?php
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: ./daftar');
  exit;
}

$namaLengkap = $_POST['namaLengkap'];
$nomorTelepon = $_POST['nomorTelepon'];
$email = $_POST['email'];
$nisn = $_POST['nisn'];
$tanggalLahir = $_POST['tanggalLahir'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$jenjang = $_POST['jenjang'];
$alamat = $_POST['alamat'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Universitas Bina Sarana Informatika</title>
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
    <header class="sticky top-0 z-50">
      <?php include "./components/header.php"; ?>
    </header>

    <main>
      <section class="py-20">
        <div class="container">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-10">
            <!-- data diri -->
            <div>
              <div>
                <img
                  src="./public/assets/img/illustration/happy-student.svg"
                  alt=""
                  class="w-48 mx-auto"
                />

                <div class="space-y-5">
                  <h1 class="text-2xl font-bold text-center">
                    Selamat, Anda Berhasil Mendaftar!
                  </h1>
                  <p class="text-center">
                    Terima kasih telah mendaftar di Universitas Bina Sarana
                    Informatika. Berikut adalah data diri Anda:
                  </p>
                </div>

                <div class="mt-5">
                  <div class="overflow-hidden">
                    <table class="w-full text-sm leading-5">
                      <tbody class="divide-y divide-gray-300">
                        <tr class="px-3">
                          <td class="py-2 text-gray-600 font-medium">
                            Nama Lengkap
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 text-gray-800">
                            <?php echo $namaLengkap; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-medium">
                            Telepon
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 text-gray-800">
                            <?php echo $nomorTelepon; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-medium">Email</td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 text-gray-800">
                            <?php echo $email; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-medium">NISN</td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 text-gray-800">
                            <?php echo $nisn; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-medium">
                            Tanggal Lahir
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 text-gray-800">
                            <?php echo $tanggalLahir; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-medium">
                            Fakultas
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 text-gray-800">
                            <?php echo $fakultas; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-medium">Prodi</td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 text-gray-800">
                            <?php echo $prodi; ?>
                            (<?php echo $jenjang; ?>)
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-medium">Alamat</td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 text-gray-800">
                            <?php echo $alamat; ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- <div class="overflow-x-auto">
                    <table class="min-w-full max-w-sm">
                      <tbody class="divide-y divide-gray-300">
                        <tr>
                          <td class="py-2 text-gray-600 font-semibold">
                            Nama Lengkap
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 px-4 text-gray-800">
                            <?php echo $namaLengkap; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-semibold">
                            Telepon
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 px-4 text-gray-800">
                            <?php echo $nomorTelepon; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-semibold">
                            Email
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 px-4 text-gray-800">
                            <?php echo $email; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-semibold">NISN</td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 px-4 text-gray-800">
                            <?php echo $nisn; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-semibold">
                            Tanggal Lahir
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 px-4 text-gray-800">
                            <?php echo $tanggalLahir; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-semibold">
                            Fakultas
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 px-4 text-gray-800">
                            <?php echo $fakultas; ?>
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-semibold">
                            Prodi
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 px-4 text-gray-800">
                            <?php echo $prodi; ?>
                            (<?php echo $jenjang; ?>)
                          </td>
                        </tr>

                        <tr>
                          <td class="py-2 text-gray-600 font-semibold">
                            Alamat
                          </td>
                          <td class="py-2 px-4 text-gray-600">:</td>
                          <td class="py-2 px-4 text-gray-800">
                            <?php echo $alamat; ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div> -->
                </div>
              </div>
            </div>

            <!-- twibbon -->
            <div>
              <h6 class="section-subtitle">Bikin Twibbon yuk!</h6>
              <p class="mt-3 2xl:text-lg">
                Dukung UBSI dengan memasang Twibbon di foto profil Anda. Klik
                tombol di bawah ini untuk membuat Twibbon.
              </p>

              <div class="mb-6 pt-4">
                <div class="mb-8" id="wrapper-input">
                  <input
                    type="file"
                    name="upload-foto"
                    id="upload-foto"
                    class="sr-only"
                    accept="image/*"
                  />
                  <label
                    for="upload-foto"
                    class="relative flex cursor-pointer items-center justify-center rounded-md border border-dashed border-slate-300 p-12 text-center"
                  >
                    <div>
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
                        class="lucide lucide-image-up text-primaryBlue w-16 h-16 text-center mx-auto"
                      >
                        <path
                          d="M10.3 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10l-3.1-3.1a2 2 0 0 0-2.814.014L6 21"
                        />
                        <path d="m14 19.5 3-3 3 3" />
                        <path d="M17 22v-5.5" />
                        <circle cx="9" cy="9" r="2" />
                      </svg>
                      <p class="font-medium text-primarySlate">
                        Upload foto terbaik mu!
                      </p>
                    </div>
                  </label>
                </div>
                <canvas
                  id="twibbon-canvas"
                  class="hidden"
                  width="500"
                  height="500"
                >
                </canvas>
              </div>

              <div class="flex justify-start">
                <button
                  id="generate-button"
                  class="py-3 px-6 bg-primaryBlue text-white rounded-md hover:bg-darkBlue transition duration-300 ease-in-out hidden"
                >
                  Buat Twibbon
                </button>
                <a
                  id="download-button"
                  class="py-3 px-6 bg-primaryBlue text-white rounded-md hover:bg-darkBlue transition duration-300 ease-in-out hidden"
                  href="#"
                  download="twibbon.png"
                  >Download Twibbon</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- start scroll up comp -->
    <?php include "./components/scroll.php"; ?>
    <!-- end scroll up comp -->

    <!-- start footer comp -->
    <?php include "./components/footer.php"; ?>
    <!-- end footer comp -->

    <script src="./public/assets/js/twibbon.js"></script>
    <script src="./public/assets/js/navbar.js"></script>
    <script src="./public/assets/js/scrollup.js"></script>
  </body>
</html>

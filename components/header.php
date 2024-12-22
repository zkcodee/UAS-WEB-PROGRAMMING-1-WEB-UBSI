
  <div
    class="container relative flex flex-col overflow-hidden py-4 md:mx-auto md:flex-row md:items-center"
  >
    <a href="./" class="flex items-center whitespace-nowrap text-2xl font-black w-12 space-x-3 group">
	  <img src="./public/assets/img/logo/logo-bsi-lama.webp" alt="Logo UBSI" class="group-hover:rotate-y-180 duration-300 transform">
      <span class="text-darkBlue font-semibold uppercase group-hover:underline underline-offset-4">ubsi</span>
    </a>

    <input
      type="checkbox"
      class="peer hidden"
      id="navbar-open"
      onchange="setChangeNavbar()"
    />
    <label
      class="absolute top-5 right-7 cursor-pointer lg:hidden peer-checked:rotate-90 transform duration-300 ease-in-out"
      for="navbar-open"
    >
      <span class="sr-only">Toggle Navigation</span>
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
        class="lucide lucide-x h-6 w-6 icon-close hidden"
      >
        <path d="M18 6 6 18" />
        <path d="m6 6 12 12" />
      </svg>

      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6 icon-open"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16"
        />
      </svg>
    </label>

    <nav
      aria-label="Header Navigation"
      class="peer-checked:mt-8 peer-checked:max-h-56 flex max-h-0 w-full flex-col items-center justify-between overflow-hidden transition-all lg:ml-24 lg:max-h-full lg:flex-row lg:items-start"
    >
      <ul
        class="flex flex-col items-center space-y-2 lg:ml-auto lg:flex-row lg:space-y-0"
      >
        <li class="header-link">
          <a href="./#beranda">Beranda</a>
        </li>

        <li class="header-link">
          <a href="#tentang-kami">Tentang Kami</a>
        </li>

        <li class="header-link">
          <a href="./#lokasi-kampus">Lokasi Kampus</a>
        </li>

        <li class="header-link">
          <a href="./#fakultas">Fakultas</a>
        </li>

        <li class="header-link">
			<a href="./daftar">
				<button
				class="rounded-lg border-2 border-primaryBlue px-6 py-1 font-medium text-primaryBlue transition-colors hover:bg-primaryBlue hover:text-white"
				>
				 Daftar
			    </button>
		    </a>
        </li>
      </ul>
    </nav>
  </div>


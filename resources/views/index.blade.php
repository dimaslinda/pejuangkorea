<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PejuangKorea</title>

    {{-- meta --}}
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Arimo:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="fixed top-0 z-20 w-full border-b border-gray-200 bg-secondary font-alata start-0">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('img/general/logo.png') }}" class="h-16" alt="Flowbite Logo">
                </a>
                <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Masuk / Daftar
                    </button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200
                        aria-controls="navbar-sticky"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded text-secondary md:text-white hover:bg-secondary hover:text-primary md:hover:bg-transparent md:bg-transparent md:hover:text-primary md:p-0"
                                aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded text-secondary md:text-white hover:bg-secondary hover:text-primary md:hover:bg-transparent md:bg-transparent md:hover:text-primary md:p-0">Tentang
                                Kami</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded text-secondary md:text-white hover:bg-secondary hover:text-primary md:hover:bg-transparent md:bg-transparent md:hover:text-primary md:p-0">Kelas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        {{-- section hero --}}
        <section class="pt-10 bg-white">
            <div
                class="container flex flex-col-reverse items-center self-center justify-center max-w-screen-xl px-4 py-8 mx-auto md:flex-row lg:py-16">
                <div class="items-center self-center justify-center flex-1 md:pl-10">
                    <h1
                        class="mb-5 text-4xl font-bold leading-none tracking-tight text-center text-black md:text-left font-arimo md:text-5xl lg:text-6xl lg:leading-tight">
                        SIAP TEMENIN DAN BIMBING KAMU SAMPAI KE KOREA
                    </h1>
                    <div class="flex justify-center md:justify-start">
                        <a href="#"
                            class="px-5 py-3 text-base font-bold text-center text-white uppercase rounded-lg hover:bg-primary font-alata bg-secondary">
                            Mulai Sekarang!</a>
                    </div>
                </div>
                <div class="items-center self-center justify-center flex-1">
                    <img src="{{ asset('img/general/image-hero.png') }}" alt="hero">
                </div>
            </div>
        </section>

        {{-- kategori kelas --}}
        <section class="py-10 bg-white">
            <div class="container max-w-screen-xl px-4 py-8 mx-auto">
                <h2
                    class="text-3xl font-semibold leading-none tracking-tight text-center text-black uppercase font-arimo md:text-4xl lg:text-5xl">
                    Kategori
                    Kelas</h2>

                <div class="flex flex-wrap justify-center gap-5 mt-8">
                    <div
                        class="flex flex-col overflow-hidden bg-white border border-gray-200 shadow-2xl cursor-pointer hover:bg-secondary group rounded-xl drop-shadow-2xl md:flex-row">
                        <div class="p-5 md:w-1/2">
                            <img src="{{ asset('img/general/kelas-video.png') }}" alt="Kategori Video"
                                class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col justify-center p-5 uppercase md:w-1/2">
                            <h3 class="md:text-lg text-secondary font-alata group-hover:text-white">kelas video</h3>
                            <p class="mt-2 text-xl font-bold text-black font-arimo group-hover:text-white">
                                BEBAS AKSES <br> KELAS DIMANAPUN <br> DAN KAPANPUN
                            </p>
                            <div>
                                <a href="#"
                                    class="inline-block px-6 py-2 mt-4 text-sm text-white rounded-lg bg-secondary group-hover:bg-primary font-alata">Mulai
                                    Sekarang!</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col-reverse justify-center overflow-hidden bg-white border border-gray-200 shadow-2xl cursor-pointer hover:bg-secondary group rounded-xl drop-shadow-2xl md:flex-row">

                        <div class="flex flex-col justify-center p-5 uppercase md:w-1/2 md:text-end">
                            <h3 class="md:text-lg text-secondary font-alata group-hover:text-white">kelas video</h3>
                            <p class="mt-2 text-xl font-bold text-black font-arimo group-hover:text-white">
                                BEBAS AKSES <br> KELAS DIMANAPUN <br> DAN KAPANPUN
                            </p>
                            <div>
                                <a href="#"
                                    class="inline-block px-6 py-2 mt-4 text-sm text-white rounded-lg group-hover:bg-primary bg-secondary font-alata">Mulai
                                    Sekarang!</a>
                            </div>
                        </div>

                        <div class="p-5 md:w-1/2">
                            <img src="{{ asset('img/general/kelas-zoom.png') }}" alt="Kategori Zoom"
                                class="object-cover w-full h-full">
                        </div>
                    </div>
                </div>
        </section>

        {{-- kelas video --}}
        <section class="py-10 bg-white">
            <div class="container max-w-screen-xl px-4 py-8 mx-auto">
                <h2
                    class="mb-10 text-3xl font-semibold leading-none tracking-tight text-center text-black uppercase font-arimo md:text-4xl lg:text-5xl">
                    Kelas Video
                </h2>

                <div class="grid grid-cols-1 gap-4 mb-5 md:grid-cols-2 lg:grid-cols-4">

                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                        <div>
                            <img src="{{ asset('img/general/card.png') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white">Nama Kelas
                                Video</h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                Topik
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    Rp. 100.000
                                </div>
                                <a href="#"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                        <div>
                            <img src="{{ asset('img/general/card.png') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white">Nama Kelas
                                Video</h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                Topik
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    Rp. 100.000
                                </div>
                                <a href="#"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                        <div>
                            <img src="{{ asset('img/general/card.png') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white">Nama Kelas
                                Video</h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                Topik
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    Rp. 100.000
                                </div>
                                <a href="#"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                        <div>
                            <img src="{{ asset('img/general/card.png') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white">Nama Kelas
                                Video</h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                Topik
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    Rp. 100.000
                                </div>
                                <a href="#"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center p-5">
                    <a href="#"
                        class="px-6 py-2 text-xl text-white uppercase bg-secondary rounded-xl font-alata">
                        Tampilkan semua kelas
                    </a>
                </div>
            </div>
        </section>

        {{-- kelas zoom --}}
        <section>
            <div class="container max-w-screen-xl px-4 py-8 mx-auto">
                <h2
                    class="mb-10 text-3xl font-semibold leading-none tracking-tight text-center text-black uppercase font-arimo md:text-4xl lg:text-5xl">
                    Kelas Zoom
                </h2>

                <div class="grid grid-cols-1 gap-4 mb-5 md:grid-cols-2 lg:grid-cols-4">

                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                        <div>
                            <img src="{{ asset('img/general/card.png') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white">Nama Kelas
                                Video</h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                Topik
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    Rp. 100.000
                                </div>
                                <a href="#"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                        <div>
                            <img src="{{ asset('img/general/card.png') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white">Nama Kelas
                                Zoom</h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                Topik
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    Rp. 100.000
                                </div>
                                <a href="#"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                        <div>
                            <img src="{{ asset('img/general/card.png') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white">Nama Kelas
                                Zoom</h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                Topik
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    Rp. 100.000
                                </div>
                                <a href="#"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                        <div>
                            <img src="{{ asset('img/general/card.png') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white">Nama Kelas
                                Zoom</h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                Topik
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    Rp. 100.000
                                </div>
                                <a href="#"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center p-5">
                    <a href="#"
                        class="px-6 py-2 text-xl text-white uppercase bg-secondary rounded-xl font-alata">
                        Tampilkan semua kelas
                    </a>
                </div>
            </div>
        </section>

        {{-- kelas benefit --}}
        <section class="bg-[linear-gradient(180deg,_#FFF_43.53%,_#FDFFDF_100%)] py-10">
            <div class="container max-w-screen-xl px-4 py-8 mx-auto">
                <div class="flex flex-col justify-between md:flex-row">
                    <div class="mb-5 md:w-1/2 md:mb-0">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-white rounded-lg shadow">
                                <img src="{{ asset('img/general/benefit-1.png') }}" alt="Card Image 1"
                                    class="object-cover w-full ">
                            </div>
                            <div class="p-4 bg-white rounded-lg shadow md:mt-14">
                                <img src="{{ asset('img/general/benefit-2.png') }}" alt="Card Image 2"
                                    class="object-cover w-full">
                            </div>
                            <div class="p-4 bg-white rounded-lg shadow">
                                <img src="{{ asset('img/general/benefit-3.png') }}" alt="Card Image 3"
                                    class="object-cover w-full">
                            </div>
                            <div class="p-4 bg-white rounded-lg shadow md:mt-14">
                                <img src="{{ asset('img/general/benefit-4.png') }}" alt="Card Image 4"
                                    class="object-cover w-full">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 text-center lg:px-32 md:text-left md:w-1/2">
                        <h2 class="mb-4 text-2xl font-bold uppercase md:text-4xl lg:text-6xl font-arimo">DAPATKAN
                            SEABREG BENEFIT
                        </h2>
                        <p class="my-5 text-xl font-bold text-black font-arimo">
                            Belajar & Proses kerja ke korea mandiri, siapa takut!?
                        </p>
                        <div class="flex justify-center md:justify-start">
                            <a href="#"
                                class="px-5 py-3 text-base text-center text-white uppercase rounded-lg hover:bg-primary font-alata bg-secondary">
                                Mulai Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- faq --}}
        <section class="bg-[linear-gradient(0deg,_#FFF_22.99%,_#FDFFDF_105.42%)] py-10">
            <div class="container max-w-screen-xl px-4 py-8 mx-auto">
                <div class="flex flex-col md:flex-row">
                    <div class="mb-10 md:w-1/2 md:mb-0">
                        <h2
                            class="mb-2 text-lg text-center md:text-xl lg:text-2xl md:text-left text-secondary font-arimo">
                            FAQ
                        </h2>
                        <p
                            class="mb-2 text-2xl font-bold text-center text-black uppercase md:text-left md:text-4xl lg:text-6xl lg:leading-tight font-arimo">
                            Ada <br> Pertanyaan <br> khusus?
                        </p>
                        <p class="mb-5 text-lg text-center md:text-left md:text-xl lg:text-2xl font-alata">
                            Jangan ragu untuk hubungi kami
                        </p>
                        <div class="flex justify-center md:justify-start">
                            <a href="#"
                                class="px-5 py-3 text-base text-center text-white uppercase rounded-lg hover:bg-primary font-alata bg-secondary">
                                Hubungi Sekarang</a>
                        </div>
                    </div>
                    <div class="md:w-1/2">

                        <div id="accordion-color" data-accordion="collapse"
                            data-active-classes="bg-primary text-white">
                            <h2 id="accordion-color-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full gap-3 p-5 font-medium border border-b-0 border-gray-200 font-alata hover:text-white rtl:text-right rounded-t-xl focus:ring-4 focus:ring-primary hover:bg-primary"
                                    data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                                    aria-controls="accordion-color-body-1">
                                    <span>Siapa yang harus ikut kelas online pejuangkorea academy?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-1" class="hidden"
                                aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border border-b-0 border-gray-200">
                                    <p class="mb-2 text-secondary font-alata"> Adalah kamu yang berencana atau
                                        berkeinginan untuk kerja atau kuliah di korea.</p>
                                </div>
                            </div>
                            <h2 id="accordion-color-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full gap-3 p-5 font-medium border border-b-0 border-gray-200 font-alata hover:text-white rtl:text-right rounded-t-xl focus:ring-4 focus:ring-primary hover:bg-primary"
                                    data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                                    aria-controls="accordion-color-body-2">
                                    <span>Bagaimana cara kerja ke korea dengan ijasah Smp/Sma?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-2" class="hidden"
                                aria-labelledby="accordion-color-heading-2">
                                <div class="p-5 border border-b-0 border-gray-200">
                                    <p class="mb-2 text-secondary font-alata"> Yaitu dengan mengikuti program G
                                        To G Korea, yang salah satu syarat wajibnya adalah lulus ujian bahasa korea
                                        EPSTOPIK.
                                    </p>
                                </div>
                            </div>
                            <h2 id="accordion-color-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full gap-3 p-5 font-medium border border-b-0 border-gray-200 font-alata hover:text-white rtl:text-right rounded-t-xl focus:ring-4 focus:ring-primary hover:bg-primary"
                                    data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                                    aria-controls="accordion-color-body-3">
                                    <span>Bagaimana cara lanjut kuliah dikorea?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-3" class="hidden"
                                aria-labelledby="accordion-color-heading-3">
                                <div class="p-5 border border-t-0 border-gray-200">
                                    <p class="mb-2 text-secondary font-alata">Salah satu caranya adalah dengan
                                        mencari beasiswa GKS, dan salah satu syarat wajibnya adalah memiliki sertifikat
                                        kemampuan bahasa korea TOPIK.

                                    </p>
                                </div>
                            </div>
                            <h2 id="accordion-color-heading-4">
                                <button type="button"
                                    class="flex items-center justify-between w-full gap-3 p-5 font-medium border border-b-0 border-gray-200 font-alata hover:text-white rtl:text-right rounded-t-xl focus:ring-4 focus:ring-primary hover:bg-primary"
                                    data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                                    aria-controls="accordion-color-body-4">
                                    <span>⁠Sejauh mana Pejuangkorea Academy akan membantu?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-4" class="hidden"
                                aria-labelledby="accordion-color-heading-4">
                                <div class="p-5 border border-t-0 border-gray-200">
                                    <p class="mb-2 text-secondary font-alata">Kami akan membantu kamu dalam
                                        proses belajar bahasa korea, membantu dalam proses pendaftaran, pemberkasan, dan
                                        harapan kami kedepan kami bisa membantu dalam segi finansial seperti pinjaman
                                        atau dana talang, mohon do'a nya semoga kita bisa sampai tahap itu
                                        sesegera mungkin.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- testimoni --}}
        <section class="py-10 bg-white">
            <div class="container max-w-screen-xl px-4 py-8 mx-auto">
                <div class="mb-5 text-lg font-normal text-center uppercase font-alata md:text-xl lg:text-2xl">
                    testimoni
                </div>
                <div class="text-2xl font-bold text-center uppercase font-arimo md:text-4xl lg:text-6xl">
                    apa kata alumni pejuang <br> korea academy?
                </div>

                <div class="flex flex-wrap justify-center gap-5">
                    <div class="py-20 swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="w-full max-w-xs p-4 bg-white border-2 shadow-2xl rounded-xl">
                                    <img class="w-24 h-24 mx-auto rounded-full"
                                        src="{{ asset('img/general/profil.png') }}" alt="Testimonial profile">
                                    <div class="mt-4 text-center">
                                        <p class="text-lg font-medium text-gray-700">Kim Jisoo</p>
                                        <p class="mt-1 text-sm text-gray-500">Alumni Pejuang Korea Academy</p>
                                        <p class="mt-4 text-gray-600">"Belajar di Pejuang Korea Academy sangat membantu
                                            saya dalam
                                            mempersiapkan diri untuk bekerja di Korea. Materi yang diberikan sangat
                                            relevan dan
                                            mudah dipahami."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full max-w-xs p-4 bg-white border-2 shadow-2xl rounded-xl">
                                    <img class="w-24 h-24 mx-auto rounded-full"
                                        src="{{ asset('img/general/profil.png') }}" alt="Testimonial profile">
                                    <div class="mt-4 text-center">
                                        <p class="text-lg font-medium text-gray-700">Park Seo-joon</p>
                                        <p class="mt-1 text-sm text-gray-500">Alumni Pejuang Korea Academy</p>
                                        <p class="mt-4 text-gray-600">"Program yang ditawarkan sangat komprehensif dan
                                            pengajarannya berkualitas. Saya mendapatkan banyak pengetahuan baru yang
                                            bermanfaat
                                            untuk karir saya di Korea."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full max-w-xs p-4 bg-white border-2 shadow-2xl rounded-xl">
                                    <img class="w-24 h-24 mx-auto rounded-full"
                                        src="{{ asset('img/general/profil.png') }}" alt="Testimonial profile">
                                    <div class="mt-4 text-center">
                                        <p class="text-lg font-medium text-gray-700">Park Seo-joon</p>
                                        <p class="mt-1 text-sm text-gray-500">Alumni Pejuang Korea Academy</p>
                                        <p class="mt-4 text-gray-600">"Program yang ditawarkan sangat komprehensif dan
                                            pengajarannya berkualitas. Saya mendapatkan banyak pengetahuan baru yang
                                            bermanfaat
                                            untuk karir saya di Korea."</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="w-full max-w-xs p-4 bg-white border-2 shadow-2xl rounded-xl">
                                    <img class="w-24 h-24 mx-auto rounded-full"
                                        src="{{ asset('img/general/profil.png') }}" alt="Testimonial profile">
                                    <div class="mt-4 text-center">
                                        <p class="text-lg font-medium text-gray-700">Kim Jisoo</p>
                                        <p class="mt-1 text-sm text-gray-500">Alumni Pejuang Korea Academy</p>
                                        <p class="mt-4 text-gray-600">"Belajar di Pejuang Korea Academy sangat membantu
                                            saya dalam
                                            mempersiapkan diri untuk bekerja di Korea. Materi yang diberikan sangat
                                            relevan dan
                                            mudah dipahami."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full max-w-xs p-4 bg-white border-2 shadow-2xl rounded-xl">
                                    <img class="w-24 h-24 mx-auto rounded-full"
                                        src="{{ asset('img/general/profil.png') }}" alt="Testimonial profile">
                                    <div class="mt-4 text-center">
                                        <p class="text-lg font-medium text-gray-700">Park Seo-joon</p>
                                        <p class="mt-1 text-sm text-gray-500">Alumni Pejuang Korea Academy</p>
                                        <p class="mt-4 text-gray-600">"Program yang ditawarkan sangat komprehensif dan
                                            pengajarannya berkualitas. Saya mendapatkan banyak pengetahuan baru yang
                                            bermanfaat
                                            untuk karir saya di Korea."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="w-full max-w-xs p-4 bg-white border-2 shadow-2xl rounded-xl">
                                    <img class="w-24 h-24 mx-auto rounded-full"
                                        src="{{ asset('img/general/profil.png') }}" alt="Testimonial profile">
                                    <div class="mt-4 text-center">
                                        <p class="text-lg font-medium text-gray-700">Park Seo-joon</p>
                                        <p class="mt-1 text-sm text-gray-500">Alumni Pejuang Korea Academy</p>
                                        <p class="mt-4 text-gray-600">"Program yang ditawarkan sangat komprehensif dan
                                            pengajarannya berkualitas. Saya mendapatkan banyak pengetahuan baru yang
                                            bermanfaat
                                            untuk karir saya di Korea."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination paginat"></div>
                        <div class="swiper-button-next text-primary"></div>
                        <div class="swiper-button-prev text-primary"></div>
                    </div>



                </div>
            </div>
            <!-- Swiper -->

        </section>

        {{-- footer --}}
        <footer class="py-8 text-white bg-secondary">
            <div
                class="container flex flex-col items-center justify-center max-w-screen-xl gap-5 px-6 mx-auto md:gap-32 md:flex-row">
                <div class="footer-logo">
                    <img src="{{ asset('img/general/logo-footer.png') }}" alt="Large Logo" class="w-48">
                </div>
                <div class="relative hidden md:block">
                    <img src="{{ asset('img/general/line.png') }}" class="h-full" alt="line">
                </div>
                <div class="space-y-4 footer-contact">
                    <div class="flex justify-center gap-4 md:justify-start">
                        <a href="#">
                            <div class="w-10 h-10 border rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="p-2" x="0px" y="0px"
                                    viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                        font-weight="none" font-size="none" text-anchor="none"
                                        style="mix-blend-mode: normal">
                                        <g transform="scale(10.66667,10.66667)">
                                            <path
                                                d="M8,3c-2.757,0 -5,2.243 -5,5v8c0,2.757 2.243,5 5,5h8c2.757,0 5,-2.243 5,-5v-8c0,-2.757 -2.243,-5 -5,-5zM8,5h8c1.654,0 3,1.346 3,3v8c0,1.654 -1.346,3 -3,3h-8c-1.654,0 -3,-1.346 -3,-3v-8c0,-1.654 1.346,-3 3,-3zM17,6c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM12,7c-2.757,0 -5,2.243 -5,5c0,2.757 2.243,5 5,5c2.757,0 5,-2.243 5,-5c0,-2.757 -2.243,-5 -5,-5zM12,9c1.654,0 3,1.346 3,3c0,1.654 -1.346,3 -3,3c-1.654,0 -3,-1.346 -3,-3c0,-1.654 1.346,-3 3,-3z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                        <a href="#">
                            <div class="w-10 h-10 border rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="p-2"
                                    viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                        font-weight="none" font-size="none" text-anchor="none"
                                        style="mix-blend-mode: normal">
                                        <g transform="scale(10.66667,10.66667)">
                                            <path
                                                d="M17.525,9h-3.525v-2c0,-1.032 0.084,-1.682 1.563,-1.682h1.868v-3.18c-0.909,-0.094 -1.823,-0.14 -2.738,-0.138c-2.713,0 -4.693,1.657 -4.693,4.699v2.301h-3v4l3,-0.001v9.001h4v-9.003l3.066,-0.001z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                        <a href="#">
                            <div class="w-10 h-10 border rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="p-2"
                                    viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                        font-weight="none" font-size="none" text-anchor="none"
                                        style="mix-blend-mode: normal">
                                        <g transform="scale(8.53333,8.53333)">
                                            <path
                                                d="M15,4c-4.186,0 -9.61914,1.04883 -9.61914,1.04883l-0.01367,0.01563c-1.90652,0.30491 -3.36719,1.94317 -3.36719,3.93555v6v0.00195v5.99805v0.00195c0.00384,1.96564 1.4353,3.63719 3.37695,3.94336l0.00391,0.00586c0,0 5.43314,1.05078 9.61914,1.05078c4.186,0 9.61914,-1.05078 9.61914,-1.05078l0.00195,-0.00195c1.94389,-0.30554 3.37683,-1.97951 3.37891,-3.94727v-0.00195v-5.99805v-0.00195v-6c-0.00288,-1.96638 -1.43457,-3.63903 -3.37695,-3.94531l-0.00391,-0.00586c0,0 -5.43314,-1.04883 -9.61914,-1.04883zM12,10.39844l8,4.60156l-8,4.60156z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="text-center md:text-left font-alata">
                        <h3 class="mb-2 text-lg capitalize">terhubung dengan kami</h3>
                        <p class="flex gap-3 mb-2">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                            support@pejuangkorea.com
                        </p>
                        <p class="flex gap-3">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                            </svg>
                            +62 812 3456 7890
                        </p>
                    </div>
                </div>
            </div>
        </footer>


    </main>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            centeredSlides: true,
            loop: true,
            spaceBetween: 10,
            pagination: {
                el: ".paginat",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>

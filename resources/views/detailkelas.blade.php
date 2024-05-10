@extends('layouts.main')
@section('content')
    {{-- detail kelas --}}
    <section class="pt-32 pb-10 bg-white font-alata">
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="flex flex-col gap-4 lg:flex-row">
                <div class="flex-1">
                    <div id="video" class="w-full">
                        <video poster="{{ asset('img/general/poster.png') }}" class="w-full" controls
                            controlslist="nodownload">
                            <source src="{{ asset('img/general/Detail E-Course - PT. Inovasika.mp4') }}" class="w-full"
                                type="video/mp4">
                            <source src="{{ asset('img/general/Detail E-Course - PT. Inovasika.mp4') }}" class="w-full"
                                type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="border-b border-[#4F4F4F] flex justify-between mb-5">
                        <div class="uppercase">
                            Materi
                        </div>
                        <div>
                            3 Video
                        </div>
                    </div>
                    <div class="overflow-y-auto max-h-80">
                        <div class="flex justify-between mb-5">
                            <div class="flex items-center space-x-4">
                                <img src="{{ asset('img/general/poster.png') }}" class="w-32" alt="poster">
                                <div class="">
                                    Materi 1
                                </div>
                            </div>
                            <div class="flex items-center">
                                01.00
                            </div>
                        </div>

                        <div class="flex justify-between mb-5">
                            <div class="flex items-center space-x-4">
                                <img src="{{ asset('img/general/poster.png') }}" class="w-32" alt="poster">
                                <div class="">
                                    Materi 2
                                </div>
                            </div>
                            <div class="flex items-center">
                                01.00
                            </div>
                        </div>

                        <div class="flex justify-between mb-5">
                            <div class="flex items-center space-x-4">
                                <img src="{{ asset('img/general/poster.png') }}" class="w-32" alt="poster">
                                <div class="">
                                    Materi 3
                                </div>
                            </div>
                            <div class="flex items-center">
                                01.00
                            </div>
                        </div>

                        <div class="flex justify-between mb-5">
                            <div class="flex items-center space-x-4">
                                <img src="{{ asset('img/general/poster.png') }}" class="w-32" alt="poster">
                                <div class="">
                                    Materi 4
                                </div>
                            </div>
                            <div class="flex items-center">
                                01.00
                            </div>
                        </div>

                        <div class="flex justify-between mb-5">
                            <div class="flex items-center space-x-4">
                                <img src="{{ asset('img/general/poster.png') }}" class="w-32" alt="poster">
                                <div class="">
                                    Materi 5
                                </div>
                            </div>
                            <div class="flex items-center">
                                01.00
                            </div>
                        </div>

                        <div class="flex justify-between mb-5">
                            <div class="flex items-center space-x-4">
                                <img src="{{ asset('img/general/poster.png') }}" class="w-32" alt="poster">
                                <div class="">
                                    Materi 6
                                </div>
                            </div>
                            <div class="flex items-center">
                                01.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- nama kelas --}}
        <div class="container max-w-screen-xl px-4 mx-auto">
            <div class="flex flex-col md:flex-row md:space-x-10">
                <div class="flex-1">
                    <div class="text-3xl text-black md:text-4xl lg:text-5xl">
                        Nama Kelas Video
                    </div>
                    <div class="mt-8 text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
                <div class="flex-1 mt-5 md:mt-0">
                    <div class="flex flex-col items-center justify-between gap-2 md:gap-0 md:flex-row">
                        <div class="text-2xl text-primary lg:text-3xl">
                            Rp100.000
                        </div>
                        <div class="flex justify-center md:justify-start">
                            <a href="#"
                                class="px-5 py-3 text-base font-bold text-center text-white uppercase rounded-lg hover:bg-primary font-alata bg-secondary">
                                Daftar Sekarang!</a>
                        </div>
                    </div>
                    <div class="flex justify-between mt-8 md:w-3/4">
                        <div class="flex-1">
                            <div class="flex gap-2 mb-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-5-4v4h4V3h-4Z" />
                                </svg>
                                kategori
                            </div>
                            <div class="flex gap-2 mb-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
                                </svg>
                                level
                            </div>
                            <div class="flex gap-2 mb-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                durasi
                            </div>
                        </div>
                        <div class="flex-2">
                            <div class="mb-2">
                                epstopik
                            </div>
                            <div class="mb-2">
                                semua tingkatan
                            </div>
                            <div class="mb-2">
                                2 jam 10 menit
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- profil pengajar --}}
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="text-xl text-center md:text-2xl md:text-left">
                Profil Mentor
            </div>
            <div class="w-full mt-5 md:w-3/4 lg:w-1/2">
                <div class="flex flex-col items-center justify-center gap-5 md:items-start md:justify-start lg:flex-row">
                    <div>
                        <img src="{{ asset('img/general/profil.png') }}" class="w-32 h-32 rounded-full"
                            alt="profil mentor">
                    </div>
                    <div class="flex-1">
                        <div>
                            <div class="mb-2 text-xl text-center md:text-2xl md:text-left">
                                Nama Mentor
                            </div>
                            <div class="mb-5 text-center md:text-left">
                                Specialist
                            </div>
                            <p class="mb-5 text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <div class="flex justify-center md:justify-start">
                                <a href="#"
                                    class="px-5 py-3 text-base text-center text-white uppercase rounded-lg hover:bg-primary font-alata bg-secondary">
                                    Ikuti di Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

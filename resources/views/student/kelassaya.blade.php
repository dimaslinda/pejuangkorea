@extends('layouts.main')
@section('content')
    <section class="min-h-screen pt-32">
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="mb-10 text-2xl font-bold text-center md:text-3xl lg:text-4xl md:text-left font-arimo">
                안녕하세요, Bambang!
            </div>

            <div class="flex flex-col lg:min-h-screen md:flex-row">
                <div class="flex flex-col w-full h-full md:w-1/2 xl:w-1/3">
                    <a href="/dashboarduser" class="flex flex-row gap-2 px-4 py-2 font-bold text-white bg-primary">
                        <div>
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023" />
                            </svg>
                        </div>
                        <div>
                            Kelas
                        </div>
                    </a>
                    <a href="{{ route('profile.edit') }}"
                        class="flex flex-row gap-2 px-4 py-2 font-bold group text-secondary hover:text-white hover:bg-primary">
                        <div>
                            <svg class="w-6 h-6 text-secondary group-hover:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                        </div>
                        <div>
                            Profil Saya
                        </div>
                    </a>
                    <a href="/pesanan"
                        class="flex flex-row gap-2 border-[#4F4F4F] px-4 py-2 font-bold border-b-2 group text-secondary hover:text-white hover:bg-primary">
                        <div>
                            <svg class="w-6 h-6 text-secondary group-hover:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>


                        </div>
                        <div>
                            Pesanan
                        </div>
                    </a>
                    <a href="#"
                        class="flex flex-row gap-2 px-4 py-2 mt-5 mb-20 font-bold md:mb-0 group text-secondary hover:text-white hover:bg-primary">
                        <div>
                            <svg class="w-6 h-6 text-secondary group-hover:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                            </svg>

                        </div>
                        <div>
                            Logout
                        </div>
                    </a>
                </div>
                <div class="w-full md:border-l-2 md:border-[#4F4F4F] font-alata">
                    <div class="flex flex-row border-b-[1px] border-[#4F4F4F] space-x-16 px-10">
                        <a href="/dashboarduser">
                            <div class="font-bold border-b-[3px] -mb-[2px] text-primary border-primary pb-3">
                                Kelas Video
                            </div>
                        </a>
                        <a href="/kelaszoom">
                            <div
                                class="font-bold hover:border-b-[3px] -mb-[2px] hover:text-primary hover:border-primary pb-3">
                                Kelas Zoom
                            </div>
                        </a>
                    </div>

                    <div class="p-10">
                        {{-- <div class="flex flex-col items-center justify-center gap-4">
                            <div>
                                <img src="{{ asset('img/general/empty-video.png') }}" alt="empty video">
                            </div>
                            <div class="font-semibold text-center lg:text-xl text-secondary">
                                Belum ada kelas yang kamu ikuti. Cari kelas yang <br> kamu minati sekarang!
                            </div>
                            <div class="flex justify-center md:justify-start">
                                <a href="#"
                                    class="px-5 py-3 text-base text-center text-white uppercase rounded-lg hover:bg-primary font-alata bg-secondary">
                                    Mulai Sekarang!</a>
                            </div>
                        </div> --}}

                        <div
                            class="flex flex-col mb-5 overflow-hidden bg-white border border-gray-200 rounded-lg shadow-2xl md:flex-row">
                            <div class="w-full md:w-1/3 max-h-52">
                                <img src="{{ asset('img/general/poster.png') }}" alt="Sample Image"
                                    class="object-cover w-full h-full rounded-l-lg">
                            </div>
                            <div class="flex flex-col p-5 md:w-1/2">
                                <h3
                                    class="text-xl lg:text-2xl text-secondary font-alata line-clamp-2 group-hover:text-white">
                                    Nama Kelas Video
                                </h3>
                                <div>
                                    Topik
                                </div>
                                <div class="flex mt-5 text-center">
                                    <a href="#" class="px-5 py-2 text-center text-white rounded-full bg-primary">
                                        <div>
                                            Lihat Materi
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col mb-5 overflow-hidden bg-white border border-gray-200 rounded-lg shadow-2xl md:flex-row">
                            <div class="w-full md:w-1/3 max-h-52">
                                <img src="{{ asset('img/general/poster.png') }}" alt="Sample Image"
                                    class="object-cover w-full h-full rounded-l-lg">
                            </div>
                            <div class="flex flex-col p-5 md:w-1/2">
                                <h3
                                    class="text-xl lg:text-2xl text-secondary font-alata line-clamp-2 group-hover:text-white">
                                    Nama Kelas Video
                                </h3>
                                <div>
                                    Topik
                                </div>
                                <div class="flex mt-5 text-center">
                                    <a href="#" class="px-5 py-2 text-center text-white rounded-full bg-primary">
                                        <div>
                                            Lihat Materi
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection

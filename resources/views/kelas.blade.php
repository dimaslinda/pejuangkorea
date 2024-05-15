@extends('layouts.main')
@section('content')
    {{-- section kelas --}}
    <section class="py-20 md:py-32 bg-[linear-gradient(180deg,_#FFF_43.53%,_#FDFFDF_100%)]">
        {{-- kelas video --}}
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div id="myBtnContainer" class="flex flex-wrap justify-center gap-4 mb-8 md:justify-start md:flex-row font-alata">
                <button
                    class="px-6 py-2 border-2 rounded-full cursor-pointer btn active text-tertiary hover:text-white hover:bg-primary border-tertiary hover:border-primary font-alata"
                    onclick="filterSelection('all')">
                    Semua Kelas
                </button>
                @forelse ($category as $item)
                    <button
                        class="px-6 py-2 border-2 rounded-full cursor-pointer btn text-tertiary hover:text-white hover:bg-primary border-tertiary hover:border-primary font-alata"\
                        onclick="filterSelection('{{ $item->name }}')">
                        Kelas {{ $item->name }}
                    </button>
                @empty
                @endforelse
                <button
                    class="px-6 py-2 border-2 rounded-full cursor-pointer btn text-tertiary hover:text-white hover:bg-primary border-tertiary hover:border-primary font-alata"
                    onclick="filterSelection('zoom')">
                    Kelas Zoom
                </button>
            </div>

            <div class="grid grid-cols-1 gap-4 mb-5 md:grid-cols-2 lg:grid-cols-4">

                @forelse ($course as $item)
                    <div
                        class="flex flex-col overflow-hidden bg-white border shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary kolom {{ $item->category->name }}">
                        <div>
                            <img src="{{ $item->getfirstMediaUrl('thumbnail_course') }}" alt="E-Course"
                                class="object-cover w-full h-48">
                        </div>
                        <div class="flex flex-col justify-between p-5">
                            <h3 class="text-xl font-bold text-secondary font-alata group-hover:text-white line-clamp-2">
                                {{ $item->name }}
                            </h3>
                            <p class="mt-2 text-secondary font-alata group-hover:text-white">
                                {{ $item->category->name }}
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="text-secondary font-alata group-hover:text-white">
                                    @currency($item->price)
                                </div>
                                <a href="/detailkelas/{{ $item->slug }}"
                                    class="items-center px-6 py-2 text-sm uppercase bg-white border-2 rounded-full border-primary text-primary font-alata">Tertarik</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>

    {{-- faq --}}
    <section class="bg-[linear-gradient(0deg,_#FFF_22.99%,_#FDFFDF_105.42%)] py-10">
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="flex flex-col md:flex-row">
                <div class="mb-10 md:w-1/2 md:mb-0">
                    <h2 class="mb-2 text-lg text-center md:text-xl lg:text-2xl md:text-left text-secondary font-arimo">
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
                        <a href="https://wa.me/+821095204837" target="_blank"
                            class="px-5 py-3 text-base text-center text-white uppercase rounded-lg hover:bg-primary font-alata bg-secondary">
                            Hubungi Sekarang</a>
                    </div>
                </div>
                <div class="md:w-1/2">

                    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-primary text-white">
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
                        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
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
                        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
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
                        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
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
                        <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
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
                                <img class="w-24 h-24 mx-auto rounded-full" src="{{ asset('img/general/profil.png') }}"
                                    alt="Testimonial profile">
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
                                <img class="w-24 h-24 mx-auto rounded-full" src="{{ asset('img/general/profil.png') }}"
                                    alt="Testimonial profile">
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
                                <img class="w-24 h-24 mx-auto rounded-full" src="{{ asset('img/general/profil.png') }}"
                                    alt="Testimonial profile">
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
                                <img class="w-24 h-24 mx-auto rounded-full" src="{{ asset('img/general/profil.png') }}"
                                    alt="Testimonial profile">
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
                                <img class="w-24 h-24 mx-auto rounded-full" src="{{ asset('img/general/profil.png') }}"
                                    alt="Testimonial profile">
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
                                <img class="w-24 h-24 mx-auto rounded-full" src="{{ asset('img/general/profil.png') }}"
                                    alt="Testimonial profile">
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
@endsection
@section('skrip')
    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("kolom");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                removeClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
            }
        }

        function addClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function removeClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            })
        }
    </script>
@endsection

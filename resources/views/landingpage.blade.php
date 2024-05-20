<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page | PejuangKorea</title>

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-secondary">
    <section class="container h-full max-w-screen-sm min-h-screen mx-auto">
        <div class="flex flex-col items-center justify-center px-6 py-20 mx-auto">
            <div>
                <img src="{{ asset('img/general/logo-landing.png') }}" class="w-52" alt="Logo PejuangKorea">
            </div>
            <a href="#"
                class="w-full px-5 py-2 mb-5 text-center text-white uppercase rounded-lg bg-primary font-alata">
                Admin 1
            </a>
            <a href="#"
                class="w-full px-5 py-2 mb-10 text-center text-white uppercase rounded-lg bg-primary font-alata">
                Admin 2
            </a>
            <div class="text-4xl font-semibold leading-snug text-center text-white font-arimo">
                SIAP TEMENIN DAN BIMBING KAMU SAMPAI KE KOREA
            </div>
        </div>

        {{-- kelas video --}}
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <h2
                class="mb-10 text-3xl font-semibold leading-none tracking-tight text-center text-white uppercase font-arimo md:text-4xl lg:text-5xl">
                Kelas Video
            </h2>

            @if (!empty($kelasvideo))
                <div class="grid grid-cols-1 gap-4 mb-5 md:grid-cols-2">
                    @forelse ($kelasvideo as $item)
                        <div
                            class="flex flex-col overflow-hidden bg-transparent border border-[#6C6C6C] shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                            <div>
                                <img src="{{ $item->getfirstMediaUrl('thumbnail_course') }}" alt="E-Course"
                                    class="object-cover w-full h-48">
                            </div>
                            <div class="flex flex-col justify-between p-5">
                                <h3 class="text-xl font-bold text-white font-alata group-hover:text-white line-clamp-2">
                                    {{ $item->name }}
                                </h3>
                                <p class="mt-2 text-white font-alata group-hover:text-white">
                                    {{ $item->category->name }}
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-white font-alata group-hover:text-white">
                                        @currency($item->price)
                                    </div>
                                    <a href="/detailkelas/{{ $item->slug }}"
                                        class="items-center px-6 py-2 text-sm uppercase border-2 rounded-full group-hover:bg-white border-primary text-primary font-alata">Tertarik</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            @else
                <div
                    class="flex justify-center mb-5 text-xl font-bold text-center text-white uppercase font-arimo lg:text-2xl">
                    Tidak Ada Kelas Video yang Tersedia
                </div>
            @endif
        </div>

        {{-- kelas zoom --}}
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <h2
                class="mb-10 text-3xl font-semibold leading-none tracking-tight text-center text-white uppercase font-arimo md:text-4xl lg:text-5xl">
                Kelas Zoom
            </h2>

            @if (!empty($zoom))
                <div class="grid grid-cols-1 gap-4 mb-5 md:grid-cols-2">
                    @forelse ($zoom as $item)
                        <div
                            class="flex flex-col overflow-hidden bg-transparent border border-[#6C6C6C] shadow-2xl cursor-pointer drop-shadow-2xl rounded-xl group hover:bg-primary">
                            <div>
                                <img src="{{ $item->getfirstMediaUrl('zoom') }}" alt="E-Course"
                                    class="object-cover w-full h-48">
                            </div>
                            <div class="flex flex-col justify-between p-5">
                                <h3 class="text-xl font-bold text-white font-alata group-hover:text-white line-clamp-2">
                                    {{ $item->name }}
                                </h3>
                                <p class="mt-2 text-white font-alata group-hover:text-white">
                                    {{ $item->category }}
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-white font-alata group-hover:text-white">
                                        @currency($item->price)
                                    </div>
                                    <a href="/detailzoom/{{ $item->slug }}"
                                        class="items-center px-6 py-2 text-sm uppercase border-2 rounded-full group-hover:bg-white border-primary text-primary font-alata">Tertarik</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            @else
                <div
                    class="flex justify-center mb-5 text-xl font-bold text-center text-white uppercase font-arimo lg:text-2xl">
                    Tidak Ada Kelas Video yang Tersedia
                </div>
            @endif
        </div>

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
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                        +82 10-9520-4837
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

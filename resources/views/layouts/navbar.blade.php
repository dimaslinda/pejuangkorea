<nav class="fixed top-0 z-20 w-full border-b border-gray-200 bg-secondary font-alata start-0">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/general/logo.png') }}" class="h-16" alt="Flowbite Logo">
        </a>
        <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
            @guest
                <a href="/login"
                    class="px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Masuk / Daftar
                </a>
            @endguest
            @auth
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-10 h-10 rounded-full" src="{{ asset('img/general/profil.png') }}" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900">Bonnie Green</span>
                        <span class="block text-sm text-gray-500 truncate">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/dashboarduser"
                                class="block px-4 py-2 text-sm text-secondary hover:bg-gray-100">Dashboard</a>
                        </li>
                        @if (auth()->user()->role === 'admin')
                            <li>
                                <a href="/secret" class="block px-4 py-2 text-sm text-secondary hover:bg-gray-100">Dashboard
                                    Admin</a>
                            </li>
                        @endif
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-secondary hover:bg-gray-100">Earnings</a>
                        </li>
                        <li>
                            <a href="#" onclick="getElementById('logout').submit()"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                            <form id="logout" action="/logout" method="post">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-secondary rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200
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
                    <a href="/"
                        class="block px-3 py-2 rounded text-secondary md:text-white hover:bg-secondary hover:text-primary md:hover:bg-transparent md:bg-transparent md:hover:text-primary md:p-0"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="/about"
                        class="block px-3 py-2 rounded text-secondary md:text-white hover:bg-secondary hover:text-primary md:hover:bg-transparent md:bg-transparent md:hover:text-primary md:p-0">Tentang
                        Kami</a>
                </li>
                <li>
                    <a href="/kelas"
                        class="block px-3 py-2 rounded text-secondary md:text-white hover:bg-secondary hover:text-primary md:hover:bg-transparent md:bg-transparent md:hover:text-primary md:p-0">Kelas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

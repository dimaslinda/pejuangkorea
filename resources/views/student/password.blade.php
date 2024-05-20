@extends('layouts.main')
@section('kepala')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <section class="min-h-screen pt-32">
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="mb-10 text-2xl font-bold text-center md:text-3xl lg:text-4xl md:text-left font-arimo">
                안녕하세요, {{ Auth()->user()->name }}!
            </div>

            <div class="flex flex-col lg:min-h-screen md:flex-row">
                <div class="flex flex-col w-full h-full md:w-1/2 xl:w-1/3">
                    <a href="/dashboard"
                        class="flex flex-row gap-2 px-4 py-2 font-bold group text-secondary hover:text-white hover:bg-primary">
                        <div>
                            <svg class="w-6 h-6 text-secondary group-hover:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023" />
                            </svg>
                        </div>
                        <div>
                            Kelas
                        </div>
                    </a>
                    <a href="{{ route('profile.edit') }}"
                        class="flex flex-row gap-2 px-4 py-2 font-bold text-white group bg-primary">
                        <div>
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                    <a href="#" onclick="getElementById('logout').submit()"
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
                        <form id="logout" action="/logout" method="post">
                            @csrf
                        </form>
                    </a>
                </div>
                <div class="w-full md:border-l-2 md:border-[#4F4F4F] font-alata">
                    <div class="flex flex-row border-b-[1px] border-[#4F4F4F] space-x-16 px-10">
                        <a href="{{ route('profile.edit') }}">
                            <div
                                class="font-bold hover:border-b-[3px] -mb-[2px] hover:text-primary hover:border-primary pb-3">
                                Kelola Profil
                            </div>
                        </a>
                        <a href="/ubahpassword">
                            <div class="font-bold border-b-[3px] -mb-[2px] text-primary border-primary pb-3">
                                Ubah Password
                            </div>
                        </a>
                    </div>

                    <div class="p-6 md:p-10">
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                            <div class="flex flex-col lg:w-1/2">

                                <div class="mb-4">
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password
                                        Lama</label>
                                    <input type="password" id="password" name="current_password"
                                        class="bg-gray-50 border border-secondary text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                        placeholder="Masukkan password lama" required>
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password
                                        Baru</label>
                                    <input type="password" id="password" name="password"
                                        class="bg-gray-50 border border-secondary text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                        placeholder="Masukkan password baru" required>
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                </div>
                                <div class="mb-4">
                                    <label for="confirm-password"
                                        class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password</label>
                                    <input type="password" id="confirm-password" name="password_confirmation"
                                        class="bg-gray-50 border border-secondary text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                        placeholder="Konfirmasi password baru" required>
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                </div>
                                <button type="submit"
                                    class="py-2 text-white uppercase transition-all transform rounded-lg lg:w-1/2 hover:bg-primary bg-secondary">
                                    Simpan Perubahan
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('skrip')
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        @if (Session::has('status'))
            toastr.success('{{ Session::get('status') }}')
        @endif
    </script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#showgambar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#dropzone-file").change(function() {
            readURL(this);
        });
    </script>
@endsection

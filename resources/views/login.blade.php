@extends('layouts.main')

@section('content')
    <section class="flex items-center justify-center min-h-screen p-6 bg-gray-100 font-alata">
        <div class="w-full p-10 space-y-6 bg-white border-2 rounded-lg shadow-2xl md:p-20 md:max-w-xl drop-shadow-2xl">
            <a href="{{ url('/auth/google') }}">
                <div class="flex items-center justify-center gap-4 px-4 py-2 border border-gray-300 rounded-md">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" x="0px" y="0px" viewBox="0 0 48 48">
                            <path fill="#fbc02d"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#e53935"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4caf50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1565c0"
                                d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>
                    </div>
                    <div class="">
                        Login Menggunakan Google
                    </div>
                </div>
            </a>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}"
                        class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md text-secondary focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40"
                        required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md text-secondary focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40"
                        required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="border-gray-300 rounded shadow-sm text-primary focus:ring-primary" name="remember">
                        <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex-col justify-center mt-10 text-center">
                    <button type="submit"
                        class="w-1/2 px-4 py-2 text-sm font-medium text-white rounded-md bg-primary hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">Masuk</button>
                    <div class="mt-2">
                        Belum Punya Akun? <a href="{{ route('register') }}"
                            class="underline text-primary underline-offset-4">Daftar</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

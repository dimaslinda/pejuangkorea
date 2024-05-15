@extends('layouts.main')
@section('content')
    {{-- invoice --}}
    <section class="pt-32 bg-white font-alata">
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="flex">
                <div class="flex flex-row gap-4 border-b border-[#4F4F4F] w-full">
                    <img src="{{ asset('img/general/poster.png') }}" class="w-48 mb-5" alt="kelas video">
                    <div class="flex flex-col font-alata">
                        <div class="text-lg text-secondary md:text-xl lg:text-2xl">
                            Nama Kelas Video
                        </div>
                        <div class="text-sm">
                            01-01-2024
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-14">
                <div class="flex flex-col lg:space-x-10 lg:flex-row">
                    <div class="flex-1">
                        <div class="mb-5 text-2xl text-primary">
                            Metode Pembayaran
                        </div>
                        <div class="flex flex-row justify-between mb-10 md:mb-20">
                            <div class="flex flex-col w-full">
                                <div class="flex flex-row items-center justify-between gap-2 mb-1 text-secondary">
                                    <img src="{{ asset('img/bank/bca.png') }}" class="w-32" alt="logo bca">
                                    <div>
                                        no rek. 123456789
                                    </div>
                                </div>
                                <div class="flex gap-2 mb-1 text-secondary">
                                    <img src="{{ asset('img/bank/bni.png') }}" class="w-32" alt="logo bca">
                                </div>
                                <div class="flex gap-2 mb-1 text-secondary">
                                    <img src="{{ asset('img/bank/mandiri.png') }}" class="w-32" alt="logo bca">
                                </div>
                            </div>
                        </div>
                        <div class="mb-10 md:mb-0">
                            <form action="">
                                <label class="block mb-2 text-secondary" for="file_input">
                                    Bukti Transfer
                                </label>
                                <input
                                    class="block w-full mb-2 text-sm border border-gray-300 rounded-lg cursor-pointer text-secondary bg-gray-50 focus:outline-none"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 mb-5 text-sm text-secondary" id="file_input_help">SVG, PNG, JPG
                                    or GIF</p>
                                <button type="submit"
                                    class="text-white uppercase hover:bg-primary bg-secondary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                                    Konfirmasi
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="mb-5 text-lg">
                            Detail Pembayaran
                        </div>
                        <div class="flex justify-between py-2">
                            <div>
                                Nama Produk
                            </div>
                            <div>
                                Harga
                            </div>
                        </div>
                        <div class="flex justify-between py-2 bg-[#E8E8E8]">
                            <div>
                                {{ $itemco->name }}
                            </div>
                            <div>
                                @currency($itemco->price)
                            </div>
                        </div>
                        <div class="flex justify-between py-2">
                            <div>
                                Pembayaran
                            </div>
                            <div class="uppercase">
                                Bank
                            </div>
                        </div>
                        <div class="flex justify-between py-2 bg-[#E8E8E8] font-bold">
                            <div>
                                Total Transfer
                            </div>
                            <div>
                                @currency($itemco->price)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

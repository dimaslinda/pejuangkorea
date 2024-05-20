@extends('layouts.main')
@section('content')
    {{-- invoice --}}
    <section class="pt-32 bg-white font-alata">
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="flex">
                <div class="flex flex-col-reverse md:flex-row justify-between border-b border-[#4F4F4F] w-full">
                    <div class="flex flex-row gap-4">
                        <img src="{{ asset('img/general/poster.png') }}" class="w-48 mb-5" alt="kelas video">
                        <div class="flex flex-col font-alata">
                            <div class="text-lg text-secondary md:text-xl lg:text-2xl">
                                {{ $invoice->course->name }}
                            </div>
                            <div class="uppercase">
                                Invoice: #{{ $invoice->no_invoice }}
                            </div>
                            <div class="text-sm">
                                {{ date('j F Y', strtotime($invoice->created_at)) }}
                            </div>
                        </div>
                    </div>
                    <div class="flex mb-5 text-lg font-bold md:mb-0 text-primary md:text-xl lg:text-2xl">
                        *Pembayaran Berhasil
                    </div>

                </div>
            </div>

            <div class="py-14">
                <div class="flex flex-col min-h-screen">
                    <div class="flex flex-col mb-10">
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
                                {{ $invoice->course->name }}
                            </div>
                            <div>
                                @currency($invoice->price)
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
                                @currency($invoice->price)
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="/detailkelas/{{ $invoice->course->slug }}"
                            class="text-white uppercase hover:bg-primary bg-secondary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            halaman Pelatihan
                        </a>
                        <a href="/dashboard"
                            class="text-primary hover:text-white border-primary border hover:border-secondary uppercase hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-secondary font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            kembali ke Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

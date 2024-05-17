@extends('layouts.main')
@section('content')
    {{-- invoice --}}
    <section class="pt-32 bg-white font-alata">
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="flex">
                <div class="flex-1">
                    <div class="mb-5 text-lg">
                        Info Pesanan
                    </div>
                    <div class="flex justify-between py-2">
                        <div>
                            Nama Produk
                        </div>
                        <div>
                            Harga
                        </div>
                    </div>
                    <div class="flex justify-between py-2">
                        <div>
                            {{ $itemco->name }}
                        </div>
                        <div>
                            @currency($itemco->price)
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
            <div class="mt-10">
                <div class="mb-5 text-lg">
                    Pembayaran
                </div>
                <div class="mb-5">
                    Transfer Bank
                </div>
                <div class="flex flex-col items-center justify-center">
                    <div class="mb-2">
                        <img src="{{ asset('img/bank/bca.png') }}" alt="logo bca">
                    </div>
                    <div>
                        4660263930
                    </div>
                    <div>
                        a.n Rohman Amin
                    </div>
                </div>
            </div>
            <div class="flex justify-end my-10">
                <form action="/prosescheckoutcourse" method="post">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $itemco->id }}">
                    <input type="hidden" name="price" value="{{ $itemco->price }}">
                    <button type="submit"
                        class="text-white uppercase hover:bg-primary bg-secondary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Konfirmasi Pesanan
                    </button>
                </form>
            </div>
    </section>
@endsection

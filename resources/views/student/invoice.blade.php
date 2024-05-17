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
            </div>

            <div class="py-14">
                <div class="flex flex-col lg:space-x-10 lg:flex-row">
                    <div class="flex-1">
                        <div class="mb-5 text-2xl text-primary">
                            Konfirmasi Pembayaran
                        </div>
                        <div class="flex flex-row justify-between mb-10 md:mb-20">
                            <div class="flex flex-col">
                                <div class="flex gap-2 px-1 py-1 mb-1 text-secondary">
                                    <svg class="w-6 h-6 text-secondary" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z" />
                                    </svg>
                                    sms
                                </div>
                                <div class="flex gap-2 px-1 py-1 mb-1 text-secondary">
                                    <svg class="w-6 h-6 text-secondary" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                                    </svg>
                                    telephone
                                </div>
                                <div class="flex gap-2 px-1 py-1 mb-1 text-secondary">
                                    <svg class="w-6 h-6 text-secondary" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg>
                                    whatsapp
                                </div>
                                <div class="flex gap-2 px-1 py-1 mb-1 text-secondary">
                                    <svg class="w-6 h-6 text-secondary" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m12 18-7 3 7-18 7 18-7-3Zm0 0v-5" />
                                    </svg>
                                    telegram
                                </div>
                                <div class="flex gap-2 px-1 py-1 mb-1 text-secondary">
                                    <svg class="w-6 h-6 text-secondary" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                            d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                                    </svg>
                                    email
                                </div>
                            </div>
                            <div class="flex flex-col text-secondary">
                                <a href="sms:+62888777222?&body=Hello%20PejuangKorea%20Academy" target="_blank"
                                    class="px-1 py-1 mb-1 text-right border rounded-lg md:text-left hover:text-white hover:bg-secondary border-secondary">
                                    +62888777222
                                </a>
                                <a href="tel:+62888777222" target="_blank"
                                    class="px-1 py-1 mb-1 text-right border rounded-lg md:text-left hover:text-white hover:bg-secondary border-secondary">
                                    +62888777222
                                </a>
                                <a href="https://wa.me/+62888777222" target="_blank"
                                    class="px-1 py-1 mb-1 text-right border rounded-lg md:text-left hover:text-white hover:bg-secondary border-secondary">
                                    +62888777222
                                </a>
                                <a href="https://t.me/CSpejuangKorea" target="_blank"
                                    class="px-1 py-1 mb-1 text-right border rounded-lg md:text-left hover:text-white hover:bg-secondary border-secondary">
                                    https//t.me/CSpejuangKorea
                                </a>
                                <a href="mailto:pejuangkoreaacademy@gmail" target="_blank"
                                    class="px-1 py-1 mb-1 text-right border rounded-lg md:text-left hover:text-white hover:bg-secondary border-secondary">
                                    pejuangkoreaacademy@gmail.com
                                </a>
                            </div>
                        </div>
                        <div class="mb-10 md:mb-0">
                            <form action="/updateinvoice/{{ $invoice->no_invoice }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <label class="block mb-2 text-secondary" for="file_input">
                                    Bukti Transfer
                                </label>
                                <input
                                    class="block w-full mb-2 text-sm border border-gray-300 rounded-lg cursor-pointer text-secondary bg-gray-50 focus:outline-none"
                                    aria-describedby="file_input_help" id="file_input" name="bukti" required
                                    type="file">
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
                </div>
            </div>
        </div>
    </section>
@endsection

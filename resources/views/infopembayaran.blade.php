@extends('layouts.main')
@section('content')
    <section class="pt-32 bg-white font-alata">
        <div class="container max-w-screen-xl min-h-screen px-4 py-8 mx-auto">
            <div class="flex flex-col justify-center text-center">
                <div class="my-10 text-xl md:text-2xl lg:text-3xl text-secondary">
                    Terima kasih, pesanan anda telah kami terima!
                </div>
                <div class="text-secondary">
                    Hi {{ Auth()->user()->name }}, <br>
                    Terima kasih telah memercayai Pejuangkorea Academy sebagai teman belajar anda. <br> Silakan ikuti
                    petunjuk di
                    bawah untuk proses pesanan kelas anda lebih lanjut
                </div>
                <div class="my-10">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                        <div class="max-w-sm p-4 bg-white rounded-lg sm:p-6 lg:p-8">
                            <div class="flex justify-center mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37"
                                    fill="none">
                                    <path
                                        d="M29.0638 6.83862H7.40855C5.20542 6.83862 3.41943 8.62461 3.41943 10.8277V25.6445C3.41943 27.8476 5.20542 29.6336 7.40855 29.6336H29.0638C31.2669 29.6336 33.0529 27.8476 33.0529 25.6445V10.8277C33.0529 8.62461 31.2669 6.83862 29.0638 6.83862Z"
                                        stroke="black" stroke-width="2.2795" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3.41943 13.677H33.0529M9.11818 21.3703H12.5374V22.795H9.11818V21.3703Z"
                                        stroke="black" stroke-width="4.27406" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h5 class="mb-4 text-sm font-medium text-secondary">
                                Lakukan pembayaran dengan transfer ke bank berikut:
                            </h5>
                            <div class="flex items-center justify-center mb-5">
                                <img src="{{ asset('img/bank/bca.png') }}" alt="logo bca">
                            </div>
                            <p class="text-base text-secondary">
                                4660263930 a.n Rohman Amin
                            </p>
                        </div>
                        <div class="max-w-sm p-4 rounded-lg sm:p-6 lg:p-8">
                            <div class="flex justify-center mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 28 28"
                                    fill="none">
                                    <g clip-path="url(#clip0_272_123)">
                                        <path
                                            d="M25.6668 12.9269V14.0002C25.6654 16.5161 24.8507 18.964 23.3444 20.979C21.838 22.9941 19.7207 24.4681 17.3081 25.1815C14.8955 25.8948 12.317 25.8091 9.95704 24.9373C7.59712 24.0654 5.58226 22.454 4.21295 20.3435C2.84364 18.233 2.19325 15.7363 2.35879 13.2259C2.52432 10.7156 3.4969 8.32596 5.13149 6.4135C6.76607 4.50104 8.97508 3.16819 11.429 2.61375C13.883 2.05931 16.4505 2.31298 18.7485 3.33692"
                                            stroke="black" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M25.6667 4.66675L14 16.3451L10.5 12.8451" stroke="black" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_272_123">
                                            <rect width="28" height="28" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h5 class="mb-4 text-sm font-medium text-secondary">
                                Konfirmasi pesanan dengan mencantumkan bukti transfer melalui tombol di bawah
                            </h5>
                        </div>
                        <div class="max-w-sm p-4 rounded-lg sm:p-6 lg:p-8">
                            <div class="flex justify-center mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M8.625 8.5H4.125C3.85978 8.5 3.60543 8.39464 3.41789 8.20711C3.23036 8.01957 3.125 7.76522 3.125 7.5V3C3.125 2.73478 3.23036 2.48043 3.41789 2.29289C3.60543 2.10536 3.85978 2 4.125 2C4.39022 2 4.64457 2.10536 4.83211 2.29289C5.01964 2.48043 5.125 2.73478 5.125 3V6.5H8.625C8.89022 6.5 9.14457 6.60536 9.33211 6.79289C9.51964 6.98043 9.625 7.23478 9.625 7.5C9.625 7.76522 9.51964 8.01957 9.33211 8.20711C9.14457 8.39464 8.89022 8.5 8.625 8.5Z"
                                        fill="black" />
                                    <path
                                        d="M8.625 8.5H4.125C3.85978 8.5 3.60543 8.39464 3.41789 8.20711C3.23036 8.01957 3.125 7.76522 3.125 7.5V3C3.125 2.73478 3.23036 2.48043 3.41789 2.29289C3.60543 2.10536 3.85978 2 4.125 2C4.39022 2 4.64457 2.10536 4.83211 2.29289C5.01964 2.48043 5.125 2.73478 5.125 3V6.5H8.625C8.89022 6.5 9.14457 6.60536 9.33211 6.79289C9.51964 6.98043 9.625 7.23478 9.625 7.5C9.625 7.76522 9.51964 8.01957 9.33211 8.20711C9.14457 8.39464 8.89022 8.5 8.625 8.5Z"
                                        stroke="black" />
                                    <path
                                        d="M20.9999 13.0001C20.7347 13.0001 20.4803 12.8947 20.2928 12.7072C20.1053 12.5197 19.9999 12.2653 19.9999 12.0001C20.0007 10.2396 19.4203 8.52815 18.349 7.13121C17.2777 5.73427 15.7752 4.72999 14.0747 4.27423C12.3743 3.81846 10.571 3.93668 8.94458 4.61055C7.3182 5.28442 5.9597 6.47625 5.0799 8.0011C4.94703 8.23065 4.72841 8.39801 4.47214 8.46636C4.21588 8.53472 3.94295 8.49848 3.7134 8.3656C3.48386 8.23273 3.3165 8.01411 3.24814 7.75784C3.17979 7.50157 3.21603 7.22865 3.3489 6.9991C4.44916 5.09334 6.14759 3.60395 8.18072 2.76199C10.2138 1.92003 12.468 1.77257 14.5935 2.34249C16.719 2.91241 18.597 4.16784 19.9361 5.91403C21.2753 7.66022 22.0007 9.79954 21.9999 12.0001C21.9999 12.2653 21.8945 12.5197 21.707 12.7072C21.5195 12.8947 21.2651 13.0001 20.9999 13.0001ZM19.8749 22.0001C19.6097 22.0001 19.3553 21.8947 19.1678 21.7072C18.9803 21.5197 18.8749 21.2653 18.8749 21.0001V17.5001H15.3749C15.1097 17.5001 14.8553 17.3947 14.6678 17.2072C14.4803 17.0197 14.3749 16.7653 14.3749 16.5001C14.3749 16.2349 14.4803 15.9805 14.6678 15.793C14.8553 15.6055 15.1097 15.5001 15.3749 15.5001H19.8749C20.1401 15.5001 20.3945 15.6055 20.582 15.793C20.7695 15.9805 20.8749 16.2349 20.8749 16.5001V21.0001C20.8749 21.2653 20.7695 21.5197 20.582 21.7072C20.3945 21.8947 20.1401 22.0001 19.8749 22.0001Z"
                                        fill="black" />
                                    <path
                                        d="M12 22C9.34881 21.9968 6.80712 20.9422 4.93244 19.0676C3.05776 17.1929 2.00318 14.6512 2 12C2 11.7348 2.10536 11.4804 2.29289 11.2929C2.48043 11.1054 2.73478 11 3 11C3.26522 11 3.51957 11.1054 3.70711 11.2929C3.89464 11.4804 4 11.7348 4 12C3.99924 13.7605 4.57956 15.472 5.65091 16.8689C6.72225 18.2658 8.22472 19.2701 9.92516 19.7259C11.6256 20.1816 13.4289 20.0634 15.0553 19.3896C16.6817 18.7157 18.0402 17.5239 18.92 15.999C18.9858 15.8853 19.0733 15.7858 19.1776 15.7059C19.2819 15.6261 19.4009 15.5676 19.5278 15.5337C19.6547 15.4999 19.787 15.4914 19.9172 15.5087C20.0473 15.5259 20.1728 15.5687 20.2865 15.6345C20.4002 15.7003 20.4997 15.7878 20.5796 15.8921C20.6594 15.9964 20.7179 16.1154 20.7518 16.2423C20.7856 16.3692 20.7941 16.5015 20.7768 16.6317C20.7596 16.7618 20.7168 16.8873 20.651 17.001C19.7715 18.5175 18.51 19.777 16.9921 20.6541C15.4743 21.5312 13.7531 21.9953 12 22Z"
                                        fill="black" />
                                    <path
                                        d="M12 22C9.34881 21.9968 6.80712 20.9422 4.93244 19.0676C3.05776 17.1929 2.00318 14.6512 2 12C2 11.7348 2.10536 11.4804 2.29289 11.2929C2.48043 11.1054 2.73478 11 3 11C3.26522 11 3.51957 11.1054 3.70711 11.2929C3.89464 11.4804 4 11.7348 4 12C3.99924 13.7605 4.57956 15.472 5.65091 16.8689C6.72225 18.2658 8.22472 19.2701 9.92516 19.7259C11.6256 20.1816 13.4289 20.0634 15.0553 19.3896C16.6817 18.7157 18.0402 17.5239 18.92 15.999C18.9858 15.8853 19.0733 15.7858 19.1776 15.7059C19.2819 15.6261 19.4009 15.5676 19.5278 15.5337C19.6547 15.4999 19.787 15.4914 19.9172 15.5087C20.0473 15.5259 20.1728 15.5687 20.2865 15.6345C20.4002 15.7003 20.4997 15.7878 20.5796 15.8921C20.6594 15.9964 20.7179 16.1154 20.7518 16.2423C20.7856 16.3692 20.7941 16.5015 20.7768 16.6317C20.7596 16.7618 20.7168 16.8873 20.651 17.001C19.7715 18.5175 18.51 19.777 16.9921 20.6541C15.4743 21.5312 13.7531 21.9953 12 22Z"
                                        stroke="black" />
                                </svg>
                            </div>
                            <h5 class="mb-4 text-sm font-medium text-secondary">
                                Pesanan segera diproses setelah anda melakukan konfirmasi pembayaran
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center text-secondary">
                    <div class="mb-1">
                        Kode Pemesanan anda (Invoice):
                    </div>
                    <div class="mb-5">
                        INVOICE: {{ $invoice->no_invoice }}
                    </div>
                    <div class="flex justify-center md:justify-start">
                        <a href="/konfirmasipembayaran/{{ $invoice->no_invoice }}"
                            class="px-5 py-3 text-base text-center text-white uppercase transition-all transform rounded-lg hover:bg-primary font-alata bg-secondary">
                            Konfirmasi Pembayaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

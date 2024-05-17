@extends('layouts.main')
@section('content')
    {{-- detail kelas --}}
    <section class="pt-32 pb-10 bg-white font-alata">
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="flex flex-col gap-4 mb-5 lg:flex-row">
                <div class="flex-1">
                    <div class="mb-5 text-3xl text-black md:text-4xl lg:text-5xl">
                        {{ $lesson->course->name }}
                    </div>
                    <div id="video" class="w-full">
                        <video class="w-full" controls controlslist="nodownload">
                            <source src="{{ $lesson->getfirstMediaUrl('video_lesson') }}" class="w-full" type="video/mp4">
                            <source src="{{ $lesson->getfirstMediaUrl('video_lesson') }}" class="w-full" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    {{-- nama kelas --}}
                    <div class="container max-w-screen-xl mx-auto mt-5">
                        <div class="flex flex-col md:flex-row md:space-x-10">
                            <div class="flex flex-col w-full">
                                <div class="text-3xl text-black md:text-4xl lg:text-5xl">
                                    {{ $lesson->name }}
                                </div>
                                <div class="mt-8 text-justify">
                                    {!! $lesson->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="border-b border-[#4F4F4F] flex justify-between mb-5">
                        <div class="uppercase">
                            Materi
                        </div>
                        <div>
                            3 Video
                        </div>
                    </div>
                    <div class="overflow-y-auto max-h-96">
                        @forelse ($lesson->course->publishedLessons as $item)
                            @if ($purchased_course)
                                <a href="{{ route('pembelajaran', [$item->course_id, $item->slug]) }}"
                                    class="cursor-pointer">
                                    <div class="flex justify-between mb-5">
                                        <div class="flex items-center space-x-4">
                                            <img src="{{ asset('img/general/poster.png') }}" class="w-32" alt="poster">
                                            <div class="">
                                                {{ $item->name }}
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            @php
                                                $value = $item->duration * 60;

                                                $hours = floor($value / 3600);
                                                $minutes = floor(($value - $hours * 3600) / 60);
                                                $seconds = $value - $hours * 3600 - $minutes * 60;
                                                $duration = sprintf('%02d:%02d', $minutes, $seconds);
                                            @endphp
                                            {{ $duration }}
                                        </div>
                                    </div>
                                </a>
                            @else
                            @endif
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>

        </div>


        {{-- profil pengajar --}}
        <div class="container max-w-screen-xl px-4 py-8 mx-auto">
            <div class="text-xl text-center md:text-2xl md:text-left">
                Profil Mentor
            </div>
            <div class="w-full mt-5 md:w-3/4 lg:w-1/2">
                <div class="flex flex-col items-center justify-center gap-5 md:items-start md:justify-start lg:flex-row">
                    <div>
                        <img src="{{ asset('img/general/profil.png') }}" class="w-32 h-32 rounded-full" alt="profil mentor">
                    </div>
                    <div class="flex-1">
                        <div>
                            <div class="mb-2 text-xl text-center md:text-2xl md:text-left">
                                {{ $lesson->course->mentor->name }}
                            </div>
                            <div class="mb-5 text-center md:text-left">
                                {{ $lesson->course->mentor->speciality }}
                            </div>
                            <div class="mb-5 text-justify">
                                {!! $lesson->course->mentor->description !!}
                            </div>
                            <div class="flex justify-center md:justify-start">
                                <a href="{{ $lesson->course->mentor->link_social }}" target="_blank"
                                    class="px-5 py-3 text-base text-center text-white uppercase rounded-lg hover:bg-primary font-alata bg-secondary">
                                    Ikuti di Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

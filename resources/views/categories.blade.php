@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    <section id="category" class="flex justify-center text-white">
        <div class="container">
            <div class="pt-14">
                <div class="px-6 mx-auto max-w-7xl lg:px-20 lg:py-10">
                    <h1 class="max-w-6xl text-xl font-semibold text-center md:text-5xl">"Unveiling the Design Spectrum
                        Categories in the
                        World of
                        Design"</h1>
                    <div
                        class="grid max-w-2xl grid-cols-1 gap-8 mx-auto mt-16 auto-rows-fr sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        @foreach ($categories as $category)
                            <article
                                class="relative flex flex-col justify-end px-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl pt-80 sm:pt-48 lg:pt-80">
                                <img src="https://source.unsplash.com/1200x400?{{ $category->name }}" alt=""
                                    class="absolute inset-0 object-cover w-full h-full -z-10 aspect-[16/9]">
                                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                                    <a href="product?category={{ $category->slug }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $category->name }}
                                    </a>
                                </h3>
                            </article>
                            {{-- <div class="flex items-start">
                                <div class="w-full rounded-lg">
                                    <img src="https://source.unsplash.com/1200x400?{{ $category->name }}"
                                        class="aspect-[16/9] w-full bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]"
                                        alt="...">
                                    <div class="card-img-overlay">
                                        <div class="px-2 py-1 position-absolute" style="background-color: rgba(0,0,0,0.7)">
                                            <a class="text-white text-decoration-none"
                                                href="blog?category={{ $category->slug }}">
                                                <h5 class="card-title">{{ $category->name }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection

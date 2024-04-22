@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    <section id="post" class="flex justify-center text-white">
        {{-- <div class="max-w-2xl px-4 py-24 mx-auto sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
            <div class="grid items-start grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2">
                <div>
                    <div class="overflow-hidden bg-gray-100 rounded-lg aspect-h-1 aspect-w-1">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="object-cover object-center w-full h-full">
                        @else
                            <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}"
                                alt="{{ $post->category->name }}" class="object-cover object-center w-full h-full">
                        @endif
                    </div>
                </div>

                <div>
                    <div class="pb-10 border-b border-gray-200">
                        <div class="flex flex-row items-center">
                            <h2 class="font-medium text-gray-400">
                                by <a href="/product?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                            </h2>
                            <a class="rounded-full bg-[#06E3FF] mx-5 px-3 py-1.5 font-medium text-black hover:bg-slate-600"
                                href="/product?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </div>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $post->title }}
                        </p>
                    </div>

                    <dl class="mt-10 space-y-10">
                        <div>
                            <dt class="text-sm font-medium text-white">Sleek design</dt>
                            <dd class="mt-3 text-sm text-gray-300">The machined kettle has a smooth black finish and
                                contemporary shape that stands apart from most plastic appliances.</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-white">Comfort handle</dt>
                            <dd class="mt-3 text-sm text-gray-300">Shaped for steady pours and insulated to prevent
                                burns.</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-white">One-button control</dt>
                            <dd class="mt-3 text-sm text-gray-300">The one button control has a digital readout for
                                setting temperature and turning the kettle on and off.</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-white">Long spout</dt>
                            <dd class="mt-3 text-sm text-gray-300">Designed specifically for controlled pour-overs that
                                don&#039;t slash or sputter.</dd>
                        </div>
                    </dl>
                </div>

            </div>
        </div> --}}
        <div class="w-full">
            <div class="pt-14">
                <div
                    class="flex flex-col items-center justify-center px-6 mx-auto mb-5 space-y-5 lg:mb-0 max-w-7xl lg:px-20 lg:py-10">
                    <h1 class="text-xl font-semibold text-center md:text-4xl">{{ $post->title }}</h1>
                    <div class="flex flex-row items-center">
                        <h2 class="font-medium text-gray-400">
                            by <a href="/product?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                        </h2>
                        <a class="rounded-full bg-[#06E3FF] mx-5 px-3 py-1.5 font-medium text-black hover:bg-slate-600"
                            href="/product?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </div>
                </div>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="object-cover aspect-[3/1]"
                        alt="Image {{ $post->title }}">
                @else
                    <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                        class="aspect-[3/1] object-cover" alt="">
                @endif
                <div class="px-5 py-4 space-y-5 lg:space-y-20 lg:py-20 lg:px-24">

                    <p class="max-w-2xl text-base text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.
                        Sed aliquet
                        eros
                        vitae neque
                        consequat, eget
                        vulputate dolor consequat. In porttitor dolor sed eros efficitur fringilla. </p>
                    <div class="flex flex-row space-x-6">
                        <div class="w-full h-fit">
                            <img src="{{ asset('storage/' . $post->image2) }}" class="rounded-2xl aspect-[1/1] object-cover"
                                alt="Gambar Produk 1">
                        </div>
                        <div class="w-full h-fit">
                            <img src="{{ asset('storage/' . $post->image3) }}" class="rounded-2xl aspect-[1/1] object-cover"
                                alt="Gambar Produk 2">
                        </div>
                        <div class="flex flex-col w-full space-y-3 h-fit">
                            <img src="{{ asset('storage/' . $post->image4) }}" class="rounded-2xl aspect-[1/1] object-cover"
                                alt="Gambar Produk 3">
                        </div>
                    </div>
                    <div class="flex flex-row flex-wrap items-start">
                        <div class="flex flex-col w-full pr-5 lg:w-1/2">
                            <h1 class="mb-10 text-4xl font-medium lg:mb-16">{{ $post->slogan }}</h1>
                            <p class="text-base w-full xl:w-[480px] font-normal">{!! $post->body !!}</p>
                        </div>
                        <div class="flex justify-end w-full h-full my-10 lg :my-0 lg:w-1/2 rounded-xl">
                            <iframe class="w-full h-[480px] rounded-lg shadow-lg" src="{{ $post->video }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>

    </section>


    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/700x200?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                @endif

                <p>
                    by <a href="/product?author={{ $post->user->username }}"
                        class="text-decoration-none">{{ $post->user->name }}</a> ||
                    <a href="/product?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>
                <article>
                    {!! $post->body !!}
                </article>

                <a href="/product"> back</a>

            </div>
        </div>
    </div> --}}
    @include('partials.footer')
@endsection

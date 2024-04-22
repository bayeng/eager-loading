@extends('layouts.main')

@section('container')

    @include('partials.navbar')

    <section id="product" class="bg-[#2B2B2B]">

        <div class="pt-24 pb-10 sm:pt-32">
            <div class="px-6 mx-auto max-w-7xl lg:px-8">
                <div class="max-w-2xl mx-auto text-center" data-aos="fade-up" data-aos-duration="500"
                    data-aos-easing="ease-in-out">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our Product</h2>
                    <p class="mt-2 text-lg leading-8 text-white">{{ $title }}</p>
                </div>
                <!-- Search bar -->
                <div class="flex justify-end" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <form class="flex items-center max-w-sm" action="/blog">
                        <label for="simple-search" class="sr-only">Search Product</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full pl-10 p-2.5 placeholder-gray-400"
                                placeholder="Search" name="search" value="{{ request('search') }}" required>
                        </div>
                        <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-slate-600 rounded-lg border border-slate-400 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 transition duration-300 ease-in-out">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>

                <!-- Card Product -->
                <div class="grid max-w-2xl grid-cols-1 mx-auto mt-16 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3"
                    data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <article class="flex flex-col items-start">
                                <div class="relative w-full">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt=""
                                            class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                                    @else
                                        <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                            alt=""
                                            class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                                    @endif
                                </div>
                                <div class="w-full">
                                    <div class="flex items-center mt-8 text-xs gap-x-4">
                                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                        <a href="product?category={{ $post->category->slug }}"
                                            class="relative z-10 rounded-full bg-[#06E3FF] px-3 py-1.5 font-medium text-black hover:bg-slate-600 hover:text-white transition duration-300 ease-in-out">{{ $post->category->name }}</a>
                                    </div>
                                    <div class="relative group">
                                        <h3
                                            class="mt-3 text-lg font-semibold leading-6 text-white transition duration-300 ease-in-out group-hover:text-gray-600">
                                            <a href="/product/{{ $post->slug }}">
                                                <span class="absolute inset-0"></span>
                                                {{ $post->title }}
                                            </a>
                                        </h3>
                                        <p class="mt-5 text-sm leading-6 text-gray-400 line-clamp-3">{{ $post->excerpt }}
                                        </p>
                                    </div>
                                    <div class="mt-8 gap-x-4">
                                        <div class="relative flex items-center justify-between text-sm">
                                            <div>
                                                <p class="font-semibold text-white">
                                                    <a href="/product?user={{ $post->user->username }}"
                                                        class="transition duration-300 ease-in-out hover:text-gray-600">
                                                        <span class="absolute inset-0"></span>
                                                        {{ $post->user->name }}
                                                    </a>
                                                </p>
                                            </div>
                                            <div>
                                                <a href="/product/{{ $post->slug }}"
                                                    class="relative z-10 rounded-xl bg-slate-600 px-3 py-1.5 font-medium text-white hover:bg-[#06E3FF] hover:text-black transition duration-300 ease-in-out">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endif
                    <!-- More posts... -->
                </div>

                <div class="flex justify-center mt-10 ">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>

        <!-- Pagination -->


        {{-- <h1>{{ $title }}</h1>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/blog">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('user'))
                            <input type="hidden" name="user" value="{{ request('user') }}">
                        @endif
                        <div class="mb-3 input-group">
                            <input type="text" class="form-control" name="search" value="{{ request('search') }}"
                                placeholder="Search...">
                            <button class="btn btn-primary" type="submit">Button</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($posts->count())
            <div class="mb-3 card">
                @if ($posts[0]->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img class="mt-3" src="{{ asset('storage/' . $posts[0]->image) }}"
                            alt="{{ $posts[0]->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="...">
                @endif
                <div class="text-center card-body">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                    <small class="text-muted">
                        <p>by <a href="/blog?user={{ $posts[0]->user->username }}"
                                class="text-decoration-none">{{ $posts[0]->user->name }}</a> || <a
                                href="/blog?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }} </p>
                    </small>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    @foreach ($posts->skip(1) as $post)
                        <div class="col-md-4">
                            <div class="mb-3 card" style="width: 18rem;">
                                <div class="px-2 py-1 position-absolute" style="background-color: rgba(0,0,0,0.7)"><a
                                        href=""
                                        class="text-white text-decoration-none">{{ $post->category->slug }}</a></div>
                                @if ($post->image)
                                    <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}"
                                        alt="{{ $post->category->name }}">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="...">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <small class="text-muted">
                                        <p>by <a href="/blog?user={{ $post->user->username }}"
                                                class="text-decoration-none">{{ $post->user->name }}</a> || <a
                                                href="/blog?category={{ $post->category->slug }}"
                                                class="text-decoration-none">{{ $post->category->name }}</a>
                                            {{ $post->created_at->diffForHumans() }} </p>
                                    </small>
                                    <p class="card-text">{{ $post->excerpt }}</p>
                                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center">posts not found</p>
        @endif
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div> --}}
    </section>

    @include('partials.footer')

@endsection

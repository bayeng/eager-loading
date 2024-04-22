@extends('layouts.main')


@section('container')
    @include('partials.navbar')
    <main class="isolate bg-[#2B2B2B]">
        {{-- <section id="home" class="bg-white pt-36 pb-14 lg:pt-0">
            <div class="container">
                <div class="flex flex-wrap lg:px-5">
                    <div class="self-center w-full px-10 lg:w-1/2">
                        <h2 class="text-2xl font-semibold leading-relaxed text-[#2B2B2B]">Welcome to</h2>
                        <h1 class="text-7xl font-bold mb-5 text-[#2B2B2B]">VR Lab - SMK</h1>
                        <p class="font-medium leading-relaxed mb-5 text-[#2B2B2B]">Berinteraksi dengan dunia
                            maya melalui
                            headset VR, sarana input seperti sensor gerakan, dan
                            visual yang ciamik </p>

                        <button type="button"
                            class="inline-flex items-center rounded-full bg-[#06E3FF] px-[78px] py-[21px] text-lg font-semibold text-[#2B2B2B] shadow-sm hover:bg-slate-500 hover:text-white transition duration-300 ease-in-out">
                            <h1>Experience</h1>
                            <img src="img/icon/vr.png" class="h-[32px] mx-[20px]" alt="">
                        </button>
                    </div>

                    <div class="self-end w-full px-9 lg:w-1/2">
                        <div class="mt-10">
                            <img src="img/ilustrasi.png" class="max-w-full mx-auto" alt="VR Man">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="relative overflow-hidden isolate -z-10 bg-gradient-to-b from-indigo-100/20 pt-14">
            <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:-mr-80 lg:-mr-96"
                aria-hidden="true"></div>
            <div class="px-6 py-16 mx-auto max-w-7xl sm:py -20 lg:px-8">
                <div
                    class="max-w-2xl mx-auto lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                    <h1
                        class="max-w-2xl text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl lg:col-span-2 xl:col-auto">
                        We’re a passionate group of people working from around the world to build the future of
                        ecommerce.
                    </h1>
                    <div class="max-w-xl mt-6 lg:mt-0 xl:col-end-1 xl:row-start-1">
                        <p class="text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt.
                            Qui
                            irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua. Anim
                            aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1567532900872-f4e906cbf06a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1280&q=80"
                        alt=""
                        class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                </div>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-24 -z-10 bg-gradient-to-t from-white sm:h-32"></div>
        </div> --}}

        <!-- Hero Section -->
        <div class="relative overflow-hidden isolate pt-14">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#06E3FF] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="flex flex-wrap px-5 py-10 lg:px-5 lg:py-0">
                <div class="self-center w-full px-10 lg:w-1/2" data-aos="fade-right" data-aos-duration="500"
                    data-aos-easing="ease-in-out">
                    <h2 class="text-2xl font-semibold leading-relaxed text-white">Welcome to</h2>
                    <h1 class="mb-5 font-bold text-white text-7xl">VR Lab - SMK</h1>
                    <p class="mb-5 font-medium leading-relaxed text-white">Berinteraksi dengan dunia
                        maya melalui
                        headset VR, sarana input seperti sensor gerakan, dan
                        visual yang ciamik </p>

                    <a href="/about">
                        <button type="button"
                            class="inline-flex items-center rounded-full bg-[#06E3FF] px-[78px] py-[21px] text-lg font-semibold text-[#2B2B2B] shadow-sm hover:bg-slate-500 hover:text-white transition duration-300 ease-in-out">
                            <h1>Experience</h1>

                        </button>
                    </a>
                </div>

                <div class="self-end w-full px-9 lg:w-1/2" data-aos="fade-up" data-aos-duration="500"
                    data-aos-easing="ease-in-out">
                    <div class="mt-10">
                        <img src="img/ilustrasi.png" class="max-w-full mx-auto" alt="VR Man">
                    </div>
                </div>
            </div>
        </div>


        <!-- Product section -->
        <div class="pt-24 sm:pt-32">
            <div class="px-6 mx-auto max-w-7xl lg:px-8">
                <div class="max-w-2xl mx-auto text-center" data-aos="fade-up" data-aos-duration="500"
                    data-aos-easing="ease-in-out">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our Product</h2>
                    <p class="mt-2 text-lg leading-8 text-white">Learn how to grow your business with our expert
                        advice.</p>
                </div>
                <div class="grid max-w-2xl grid-cols-1 mx-auto mt-16 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3"
                    data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
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
                                        <a href="blog?category={{ $post->category->slug }}"
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
                                                    <a href="/blog?user={{ $post->user->username }}"
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
                <div class="flex justify-center w-full mt-20" data-aos="fade-up" data-aos-duration="500"
                    data-aos-easing="ease-in-out">
                    <a href="/product"
                        class="relative z-10 rounded-full bg-slate-300 px-[78px] py-[21px] font-medium text-black hover:bg-slate-600 transition duration-300 ease-in-out">More
                        Post</a>
                </div>
            </div>
        </div>



        <!-- Image section -->
        <div class="px-8 mt-32 sm:mt-40 xl:mx-auto xl:max-w-7xl">
            <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2894&q=80"
                alt="" class="aspect-[9/4] w-full object-cover rounded-3xl">
        </div>
        <div class="w-full px-8 py-10 mx-auto text-white lg:px-36 lg:py-28">
            <div class="max-w-2xl mx-auto lg:max-w-none">
                <div class="grid max-w-xl grid-cols-1 gap-8 text-base leading-7 lg:max-w-none lg:grid-cols-2">
                    <div data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <p>VR Lab adalah inovator dalam teknologi virtual reality (VR). tujuan kami untuk
                            menciptakan pengalaman VR yang memukau dan menarik perhatian dengan inovasi yang dapat
                            di garap sesuai dengan kebutuhan penguna.</p>
                        <p class="mt-8">Dengan tim yang terdiri dari desainer, IT, dan Game dev , Divisi VR Lab
                            mampu menciptakan dunia virtual yang menakjubkan. Mereka menggabungkan grafis
                            berkualitas tinggi, suara realistis, dan kontrol yang responsif untuk menghadirkan
                            pengalaman yang tampak nyata.</p>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <p>Kami juga menawarkan solusi VR yang beragam, mulai dari pengembangan permainan interaktif
                            hingga simulasi pelatihan yang memadai. Mereka bekerja sama dengan klien dari berbagai
                            industri, termasuk pendidikan, perhotelan, dan perawatan kesehatan, untuk menciptakan
                            pengalaman VR yang sesuai dengan kebutuhan khusus masing-masing.</p>
                        <p class="mt-8">Potensi kami juga meliputi pengembangan perangkat keras VR. kami juga
                            menyiapkan , lebih nyaman, dan lebih imersif untuk memastikan pengalaman VR yang optimal
                            bagi pengguna.</p>
                    </div>
                </div>
                <dl class="grid grid-cols-1 mt-16 gap-x-8 gap-y-12 sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mt-28 lg:grid-cols-4"
                    data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="flex flex-col-reverse pl-6 border-l gap-y-3 border-white/20">
                        <dt class="text-base leading-7 text-white">Business was founded</dt>
                        <dd class="text-3xl font-semibold tracking-tight text-white"><span>2012</span></dd>
                    </div>
                    <div class="flex flex-col-reverse pl-6 border-l gap-y-3 border-white/20">
                        <dt class="text-base leading-7 text-white">People on the team</dt>
                        <dd class="text-3xl font-semibold tracking-tight text-white"><span>120</span>+</dd>
                    </div>
                    <div class="flex flex-col-reverse pl-6 border-l gap-y-3 border-white/20">
                        <dt class="text-base leading-7 text-white">Users on the platform</dt>
                        <dd class="text-3xl font-semibold tracking-tight text-white"><span>250</span>k</dd>
                    </div>
                    <div class="flex flex-col-reverse pl-6 border-l gap-y-3 border-white/20">
                        <dt class="text-base leading-7 text-white">Paid out to creators</dt>
                        <dd class="text-3xl font-semibold tracking-tight text-white">$<span>70</span>M</dd>
                    </div>
                </dl>
            </div>
        </div>

        <!-- Contact Person section -->
        <div class="relative isolate">
            <div class="grid grid-cols-1 mx-auto max-w-7xl lg:grid-cols-2">
                <div class="relative px-6 pt-24 pb-20 sm:pt-32 lg:static lg:px-8 lg:py-48">
                    <div class="max-w-xl mx-auto lg:mx-0 lg:max-w-lg">
                        <div class="absolute inset-y-0 left-0 w-full overflow-hidden -z-10 ring-1 ring-white/5 lg:w-1/2">
                            <svg class="absolute inset-0 h-full w-full stroke-gray-700 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                                aria-hidden="true">
                                <defs>
                                    <pattern id="54f88622-e7f8-4f1d-aaf9-c2f5e46dd1f2" width="200" height="200"
                                        x="100%" y="-1" patternUnits="userSpaceOnUse">
                                        <path d="M130 200V.5M.5 .5H200" fill="none" />
                                    </pattern>
                                </defs>
                                <svg x="100%" y="-1" class="overflow-visible fill-gray-800/20">
                                    <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
                                </svg>
                                <rect width="100%" height="100%" stroke-width="0"
                                    fill="url(#54f88622-e7f8-4f1d-aaf9-c2f5e46dd1f2)" />
                            </svg>
                            <div class="absolute -left-56 top-[calc(100%-13rem)] transform-gpu blur-3xl lg:left-[max(-14rem,calc(100%-59rem))] lg:top-[calc(50%-7rem)]"
                                aria-hidden="true">
                                <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-br from-[#06E3FF] to-[#4f46e5] opacity-20"
                                    style="clip-path: polygon(74.1% 56.1%, 100% 38.6%, 97.5% 73.3%, 85.5% 100%, 80.7% 98.2%, 72.5% 67.7%, 60.2% 37.8%, 52.4% 32.2%, 47.5% 41.9%, 45.2% 65.8%, 27.5% 23.5%, 0.1% 35.4%, 17.9% 0.1%, 27.6% 23.5%, 76.1% 2.6%, 74.1% 56.1%)">
                                </div>
                            </div>
                        </div>
                        <h2 class="text-3xl font-bold tracking-tight text-white">Get in touch</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-300">Terima kasih atas minat Anda terhadap Divisi VR
                            Lab! Kami akan senang mendengar dari Anda. Jika Anda memiliki pertanyaan, ingin berdiskusi
                            tentang proyek VR Anda, atau tertarik bekerja sama dengan kami, jangan ragu untuk menghubungi
                            kami. Kami siap membantu dan mengeksplorasi peluang yang menarik bersama Anda.</p>
                        <dl class="mt-10 space-y-4 text-base leading-7 text-gray-300">
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Address</span>
                                    <svg class="w-6 text-gray-400 h-7" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                    </svg>
                                </dt>
                                <dd>Jalan Letjend S. Parman Kav.8 1 7<br>Jakarta Barat</dd>
                            </div>
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Telephone</span>
                                    <svg class="w-6 text-gray-400 h-7" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </dt>
                                <dd><a class="transition duration-300 ease-in-out hover:text-white"
                                        href="tel:+62 (021) 5667375">+62 (021) 5667375</a>
                                </dd>
                            </div>
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Email</span>
                                    <svg class="w-6 text-gray-400 h-7" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </dt>
                                <dd><a class="transition duration-300 ease-in-out hover:text-white"
                                        href="mailto:corporate_comm@telkom.co.id">corporate_comm@telkom.co.id</a>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <form action="#" method="POST" class="px-6 pt-20 pb-24 sm:pb-32 lg:px-8 lg:py-48">
                    <div class="max-w-xl mx-auto lg:mr-0 lg:max-w-lg">
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div>
                                <label for="first-name" class="block text-sm font-semibold leading-6 text-white">First
                                    name</label>
                                <div class="mt-2.5">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-semibold leading-6 text-white">Last
                                    name</label>
                                <div class="mt-2.5">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email"
                                    class="block text-sm font-semibold leading-6 text-white">Email</label>
                                <div class="mt-2.5">
                                    <input type="email" name="email" id="email" autocomplete="email"
                                        class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="phone-number" class="block text-sm font-semibold leading-6 text-white">Phone
                                    number</label>
                                <div class="mt-2.5">
                                    <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                                        class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message"
                                    class="block text-sm font-semibold leading-6 text-white">Message</label>
                                <div class="mt-2.5">
                                    <textarea name="message" id="message" rows="4"
                                        class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-8">
                            <button type="submit"
                                class="rounded-md bg-[#06E3FF] px-3.5 py-2.5 text-center text-sm font-semibold text-[#2B2B2B] shadow-sm hover:bg-slate-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 transition duration-300 ease-in-out">Send
                                message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- Footer -->

        {{-- <footer class="relative w-full bg-[#2B2B2B]" aria-labelledby="footer-heading">
                <h2 id="footer-heading" class="sr-only">Footer</h2>
                <div class="px-6 py-8 mx-auto max-w-7xl lg:px-8">
                    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                        <div class="space-y-8">
                            <img class="h-20" src="img/logo-vr.png" alt="VR Lab">
                            <p class="text-sm leading-6 text-gray-300">Est error fuga modi error. Laborum eum nobis
                                porro
                                cupiditate et quo.</p>
                            <div class="flex space-x-6">
                                <a href="#" class="text-gray-500 hover:text-gray-400">
                                    <span class="sr-only">Facebook</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-400">
                                    <span class="sr-only">Instagram</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-400">
                                    <span class="sr-only">Twitter</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-400">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-400">
                                    <span class="sr-only">YouTube</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-8 mt-16 xl:col-span-2 xl:mt-0">
                            <div class="md:grid md:grid-cols-2 md:gap-8">
                                <div>
                                    <h3 class="text-sm font-semibold leading-6 text-white">Solutions</h3>
                                    <ul role="list" class="mt-6 space-y-4">
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Marketing</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Analytics</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Commerce</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Insights</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-10 md:mt-0">
                                    <h3 class="text-sm font-semibold leading-6 text-white">Support</h3>
                                    <ul role="list" class="mt-6 space-y-4">
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Documentation</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Guides</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">API
                                                Status</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 md:gap-8">
                                <div>
                                    <h3 class="text-sm font-semibold leading-6 text-white">Company</h3>
                                    <ul role="list" class="mt-6 space-y-4">
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">About</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Jobs</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Press</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Partners</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-10 md:mt-0">
                                    <h3 class="text-sm font-semibold leading-6 text-white">Legal</h3>
                                    <ul role="list" class="mt-6 space-y-4">
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Claim</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Privacy</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-sm leading-6 text-gray-300 hover:text-white">Terms</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-8 mt-16 border-t border-white/10 sm:mt-20 lg:mt-24">
                        <p class="text-xs leading-5 text-gray-400">&copy; 2020 Your Company, Inc. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer> --}}


    </main>

    @include('partials.footer')
@endsection

@extends('layouts.main')

@section('container')
    <div class="flex min-h-screen">
        <div class="flex flex-col justify-center flex-1 px-4 py-8 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="w-full max-w-sm mx-auto lg:w-96">
                <div>
                    <a href="/">
                        <img class="w-auto h-20" src="img/logo-vr.png" alt="VR Lab Logo">
                    </a>
                    <h2 class="mt-0 text-2xl font-bold leading-9 tracking-tight text-white">Register your account</h2>
                </div>

                <div class="mt-10">
                    <div>
                        <form action="/register" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium leading-6 text-white">Full Name
                                </label>
                                <div class="">
                                    <input id="name" name="name" type="text" required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                                @error('name')
                                    <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="username" class="block text-sm font-medium leading-6 text-white">Username
                                </label>
                                <div class="">
                                    <input id="username" name="username" type="text" required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                                @error('username')
                                    <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-white">Email
                                    address</label>
                                <div class="">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                                @error('email')
                                    <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="password"
                                    class="block text-sm font-medium leading-6 text-white">Password</label>
                                <div class="">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                        required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 @error('password') is-invalid @enderror">
                                </div>
                                @error('password')
                                    <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium leading-6 text-white">Confirm
                                    Password</label>
                                <div class="">
                                    <input id="password" name="password_confirmation" type="password"
                                        autocomplete="current-password" required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 @error('password') is-invalid @enderror">
                                </div>
                            </div>

                            <div>
                                <small class="text-white">Already have account? sign in <a href="/login"
                                        class="underline decoration-solid hover:text-[#06E3FF]">here</a></small>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-[#06E3FF] px-3 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-white/20 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="relative flex-1 hidden w-0 lg:block">
            <img class="absolute inset-0 object-cover w-full h-full"
                src="https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                alt="">
        </div>
    </div>
@endsection

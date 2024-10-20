@extends('auth.components.layout')

@section('container')
    <div class="w-full flex">
        <div class="bg-biru-utama-0 w-2/5 text-white h-screen">
            <div class="font-semibold text-xl grid justify-items-center my-16">
                <span class="">Welcome to</span>
            </div>
            <div class="grid justify-items-center">
                <img src="{{ asset('img/brighton.png') }}" alt="" class="w-1/4">
            </div>

            <div class="font-semibold text-3xl grid justify-items-center mb-3 mt-16">
                <span class="">MisukriPedia</span>
            </div>
            <div class="grid justify-items-center">
                <p>Platform Penjualan Online Terbesar Dan Perkasa
                    Di Dunia</p>
                <p>Belilah Barang-Barang Anda Disini Karena Kami
                    Hebat!</p>
            </div>

            <div class="grid justify-items-center h-32 content-end">
                <span class="font-semibold"><a href="">@mitsukripedia</a> | <a
                        href="">mitsukripedia.com</a></span>
            </div>
        </div>
        <img src="{{ asset('img/wave.png') }}" alt="" class="aspect-square object-cover">
        <div class=" w-1/2">
            <div class="font-semibold w-full grid justify-items-center mt-16 text-2xl">{{ $title }}</div>

            <form action="/loginAuth" method="post" class="my-12 mx-10 space-y-4 space-x-10">
                @csrf
                <label for="email" class="font-semibold">E-mail</label>
                <div>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="px-5 py-3 border-4 border-biru-utama-0 rounded-2xl w-11/12 outline-none focus:ring-biru-muda-0 focus:ring-2 text-gray-800"
                        required placeholder="Enter Your Email...">
                </div>

                <div class="">
                    <label for="password" class="font-semibold">Password</label>
                </div>
                <div>
                    <input type="password" name="password" id="password" value="{{ old('password') }}"
                        class="px-5 py-3 border-4 border-biru-utama-0 rounded-2xl w-11/12 outline-none focus:ring-biru-muda-0 focus:ring-2 text-gray-800"
                        required placeholder="Enter Your Password...">
                </div>

                <div class="text-xs text-gray-500 grid justify-end w-10/12 font-semibold">
                    <a href="">Forgot Password?</a>
                </div>

                <div class="grid justify-items-center text-xs font-semibold">
                    <label for="remember" class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mx-2">Remember Me
                    </label>
                </div>

                <div class="grid justify-items-center">
                    <button type="submit"
                        class="bg-biru-utama-0 rounded-full py-3 px-14 text-white font-semibold active:bg-blue-500 hover:bg-biru-muda-2-0">
                        Login
                    </button>
                </div>

            </form>

            <div class=" grid justify-items-center">
                <div class="flex justify-between w-6/12 ms-10">
                    <div class="grid justify-items-center">
                        <a class="rounded-full border border-biru-utama-0 py-2 px-14 text-white font-semibold hover:bg-gray-50 active:bg-gray-100"
                            href="{{ url('auth/google') }}">
                            <img src="{{ asset('img/google.png') }}" alt=""
                                class="object-contain mix-blend-multiply w-10">
                        </a>
                    </div>
                    <div class="grid justify-items-center">
                        <a class="rounded-full border border-biru-utama-0 py-2 px-14 text-white font-semibold flex items-center hover:bg-gray-50 active:bg-gray-100"
                            href="">
                            <img src="{{ asset('img/facebook.jpeg') }}" alt=""
                                class="object-contain mix-blend-multiply w-8">
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

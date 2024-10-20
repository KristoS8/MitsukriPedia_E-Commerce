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
            <div class="font-semibold w-full grid justify-items-center mt-8 text-2xl">{{ $title }}</div>

            <form action="/register" method="post" class="mb-5 mt-2 mx-10 space-y-2 space-x-10">
                @csrf
                <label for="no_telp" class="font-semibold">No. Telp</label>
                <div>
                    <input type="tel" value="{{ old('no_telp') }}" id="no_telp" name="no_telp"
                        class="px-5 py-3 border-4 border-biru-utama-0 rounded-2xl w-11/12 outline-none focus:ring-biru-muda-0 focus:ring-2 text-gray-800"
                        required placeholder="Enter Your No. Telp... (use +62 format)">

                    @error('no_telp')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="name" class="font-semibold">Name</label>
                </div>
                <div>
                    <input type="tel" value="{{ old('name') }}" id="name" name="name"
                        class="px-5 py-3 border-4 border-biru-utama-0 rounded-2xl w-11/12 outline-none focus:ring-biru-muda-0 focus:ring-2 text-gray-800"
                        required placeholder="Enter Your Name">

                    @error('name')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <label for="email" class="font-semibold">Email</label>
                </div>
                <div>
                    <input type="email" value="{{ old('email') }}" id="email" name="email"
                        class="px-5 py-3 border-4 border-biru-utama-0 rounded-2xl w-11/12 outline-none focus:ring-biru-muda-0 focus:ring-2 text-gray-800"
                        required placeholder="Enter Your Email...">
                    @error('email')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <label for="password" class="font-semibold">Password</label>
                </div>
                <div>
                    <input type="password" value="{{ old('password') }}" id="password" name="password"
                        class="px-5 py-3 border-4 border-biru-utama-0 rounded-2xl w-11/12 outline-none focus:ring-biru-muda-0 focus:ring-2 text-gray-800"
                        required placeholder="Enter Your Password...">
                    @error('password')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <label for="confirm" class="font-semibold">Confirm Password</label>
                </div>
                <div>
                    <input type="password" value="{{ old('password_confirmation') }}" id="password_confirmation"
                        name="password_confirmation"
                        class="px-5 py-3 border-4 border-biru-utama-0 rounded-2xl w-11/12 outline-none focus:ring-biru-muda-0 focus:ring-2 text-gray-800"
                        required placeholder="Enter Your Password Again...">
                    @error('confirmPassword')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>


                <div class="flex justify-center gap-10">
                    <button type="submit"
                        class="bg-biru-utama-0 rounded-full py-2 px-12 text-white font-semibold active:bg-blue-500 hover:bg-biru-muda-2-0">
                        Register
                    </button>

                    <a class="rounded-full border border-biru-utama-0 py-2 px-14 text-white font-semibold hover:bg-gray-50 active:bg-gray-100"
                        href="{{ url('auth/google') }}">
                        <img src="{{ asset('img/google.png') }}" alt=""
                            class="object-contain mix-blend-multiply w-8">
                    </a>
                </div>

            </form>

            <div class=" grid justify-items-center">
                <div class="flex justify-between w-6/12 ms-10">
                    <div class="grid justify-items-center">
                        {{-- google --}}
                    </div>
                    {{-- <div class="grid justify-items-center">
                        <a class="rounded-full border border-biru-utama-0 py-2 px-14 text-white font-semibold flex items-center hover:bg-gray-50 active:bg-gray-100"
                            href="">
                            <img src="{{ asset('img/facebook.jpeg') }}" alt=""
                                class="object-contain mix-blend-multiply w-6">
                        </a>
                    </div> --}}
                </div>
            </div>


        </div>
    </div>
@endsection

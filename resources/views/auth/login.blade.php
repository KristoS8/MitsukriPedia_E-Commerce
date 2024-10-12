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
        <div class="bg-green-500 w-1/2">

        </div>
    </div>
@endsection

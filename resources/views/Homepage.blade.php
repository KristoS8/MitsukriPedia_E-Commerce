<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Mitsukri Pedia</title>
</head>

<body class="m-0 font-helvetica" style="height: 200vh">

    <x-navbar></x-navbar>

    <div class="text-3xl font-bold my-12 w-full grid justify-items-center">
        <p>Books</p>
    </div>

    <div class="w-full flex items-center justify-center">
        <ul class="flex justify-around w-10/12">
            <li class="">
                <a
                    class="bg-biru-muda-0 h-80 w-60 flex justify-center items-center rounded-xl shadow-md shadow-cyan-500/50">
                    <img src="{{ asset('img/book4.png') }}" alt="">
                </a>
                <div class="w-full grid justify-items-center my-2">
                    <div class="font-semibold mt-1">History Of Western Philosophy</div>
                    <div class="mt-1">Rating (ga tau buatnya njir)</div>
                    <div class="font-semibold mt-1">Rp. 100.000,00</div>
                </div>
            </li>
            <li class="">
                <a
                    class="bg-biru-muda-0 h-80 w-60 flex justify-center items-center rounded-xl shadow-md shadow-cyan-500/50">
                    <img src="{{ asset('img/book4.png') }}" alt="">
                </a>
                <div class="w-full grid justify-items-center my-2">
                    <div class="font-semibold mt-1">Psychology of Money</div>
                    <div class="mt-1">Rating (ga tau buatnya njir)</div>
                    <div class="font-semibold mt-1">Rp. 150.000,00</div>
                </div>
            </li>
            <li class="">
                <a
                    class="bg-biru-muda-0 h-80 w-60 flex justify-center items-center rounded-xl shadow-md shadow-cyan-500/50">
                    <img src="{{ asset('img/book2.png') }}" alt="">
                </a>
                <div class="w-full grid justify-items-center my-2">
                    <div class="font-semibold mt-1">Sebuah Seni Untuk<br />
                        Bersikap Bodo Amat</div>
                    <div class="mt-1">Rating (ga tau buatnya njir)</div>
                    <div class="font-semibold mt-1">Rp. 200.000,00</div>
                </div>
            </li>
            <li class="">
                <a
                    class="bg-biru-muda-0 h-80 w-60 flex justify-center items-center rounded-xl shadow-md shadow-cyan-500/50">
                    <img src="{{ asset('img/book3.png') }}" alt="">
                </a>
                <div class="w-full grid justify-items-center my-2">
                    <div class="font-semibold mt-1">Masyarakat Tanpa Tuhan</div>
                    <div class="mt-1">Rating (ga tau buatnya njir)</div>
                    <div class="font-semibold mt-1">Rp. 300.000,00</div>
                </div>
            </li>
        </ul>

    </div>

    <div class="my-12 w-full grid justify-items-center">
        <button
            class="outline outline-1 outline-gray-400 rounded-full py-5 px-14 font-semibold shadow-md hover:bg-gray-50 active:bg-gray-100">Lihat
            Semua</button>
    </div>

    <div class="grid justify-items-center">
        <hr class="h-px my-8 w-11/12 bg-gray-200 border-0 dark:bg-gray-700">
    </div>

    {{-- footer --}}
    {{-- <div>
        <footer class="bg-biru-utama-0 w-full h-52">Make With Love</footer>
    </div> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.2/feather.min.js"
        integrity="sha512-zMm7+ZQ8AZr1r3W8Z8lDATkH05QG5Gm2xc6MlsCdBz9l6oE8Y7IXByMgSm/rdRQrhuHt99HAYfMljBOEZ68q5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>

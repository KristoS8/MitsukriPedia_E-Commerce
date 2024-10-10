<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mitsukri Pedia</title>
</head>

<body class="m-0 font-helvetica">

    <x-navbar></x-navbar>

    {{-- Books Section --}}
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
                    <div class="mt-1">
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star"></span>
                    </div>
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
                    <div class="mt-1">
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star"></span>
                    </div>
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
                    <div class="mt-1">
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                    </div>
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
                    <div class="mt-1">
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                    </div>
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

    {{-- Gadget --}}
    <div class="text-3xl font-bold my-12 w-full grid justify-items-center">
        <p>Gadget</p>
    </div>

    <div class="w-full flex items-center justify-center">
        <ul class="flex justify-around w-10/12">
            <li class="">
                <a
                    class="outline-none h-80 w-60 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                    <img src="{{ asset('img/gadget1.jpg') }}" alt="">
                </a>
                <div class="w-full grid justify-items-center my-2">
                    <div class="font-semibold mt-1">Iphone 14 Pro Max</div>
                    <div class="mt-1">
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                    </div>
                    <div class="font-semibold mt-1">Rp. 24.999.000,00</div>
                </div>
            </li>
            <li class="">
                <a
                    class="outline-none h-80 w-60 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                    <img src="{{ asset('img/gadget2.jpeg') }}" alt="">
                </a>
                <div class="w-full grid justify-items-center my-2">
                    <div class="font-semibold mt-1">PlayStation 5</div>
                    <div class="mt-1">
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="font-semibold mt-1">Rp. 99.999.000,00</div>
                </div>
            </li>
            <li class="">
                <a
                    class="outline-none h-80 w-60 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                    <img src="{{ asset('img/gadget3.jpeg') }}" alt="">
                </a>
                <div class="w-full grid justify-items-center my-2">
                    <div class="font-semibold mt-1">Redmibook 14</div>
                    <div class="mt-1">
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                    </div>
                    <div class="font-semibold mt-1">Rp. 7.999.000,00</div>
                </div>
            </li>
            <li class="">
                <a
                    class="outline-none h-80 w-60 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                    <img src="{{ asset('img/gadget4.jpeg') }}" alt="">
                </a>
                <div class="w-full grid justify-items-center my-2">
                    <div class="font-semibold mt-1">Macbook Air M1</div>
                    <div class="mt-1">
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                        <span class="fa fa-star text-yellow-400"></span>
                    </div>
                    <div class="font-semibold mt-1">Rp. 12.599.000,00</div>
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

    {{-- Diamond MLBB --}}

    <div class="text-3xl font-bold my-12 w-full grid justify-items-center">
        <p>Diamond MLBB</p>
    </div>

    <div class="w-full flex items-center justify-center">
        <ul class="flex justify-around w-10/12">
            <li
                class="outline-none h-72 w-72 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                <a class="">
                    <div class="font-semibold my-3 mx-auto text-center text-biru-muda-2-0">"No Bonus"</div>
                    <img src="{{ asset('img/diamond.png') }}" alt="" class="mx-auto text-center">

                    <div class="w-full grid justify-items-center my-2">
                        <div class="font-semibold mt-1">15 Diamonds</div>
                        <div class="font-semibold mt-1">Rp. 15.000,00</div>
                    </div>
                </a>
            </li>
            <li
                class="outline-none h-72 w-72 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                <a class="">
                    <div class="font-semibold my-3 text-biru-muda-2-0 mx-auto text-center">"5 Diamonds Bonus"</div>
                    <img src="{{ asset('img/diamond.png') }}" alt="" class="mx-auto text-center">

                    <div class="w-full grid justify-items-center my-2">
                        <div class="font-semibold mt-1">50 Diamonds</div>
                        <div class="font-semibold mt-1">Rp. 95.000,00</div>
                    </div>
                </a>
            </li>
            <li
                class="outline-none h-72 w-72 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                <a class="">
                    <div class="font-semibold  my-3 text-biru-muda-2-0 mx-auto text-center">"20 Diamonds Bonus"</div>
                    <img src="{{ asset('img/diamond.png') }}" alt="" class="mx-auto text-center">

                    <div class="w-full grid justify-items-center my-2">
                        <div class="font-semibold mt-1">100 Diamonds</div>
                        <div class="font-semibold mt-1">Rp. 155.000,00</div>
                    </div>
                </a>
            </li>
            <li
                class="outline-none h-72 w-72 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                <a class="">
                    <div class="font-semibold my-3 text-biru-muda-2-0 mx-auto text-center">"30 Diamonds Bonus"</div>
                    <img src="{{ asset('img/diamond.png') }}" alt="" class="mx-auto text-center">

                    <div class="w-full grid justify-items-center my-2">
                        <div class="font-semibold mt-1">200 Diamonds</div>
                        <div class="font-semibold mt-1">Rp. 355.000,00</div>
                    </div>
                </a>
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

    {{-- about --}}

    <div class="text-3xl font-bold my-12 w-full grid justify-items-center">
        <p>About</p>
    </div>

    <div class="w-full grid justify-items-center text-gray-500 mb-52">
        <p class="w-3/5 text-center"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of
            type and scrambled it to make a type specimen book.</p>
    </div>



    {{-- footer --}}
    <div class="bg-biru-muda-3-0 w-full relative h-max pt-24">
        <div
            class="flex items-center bg-biru-utama-0 absolute -top-28 w-max rounded-3xl justify-evenly left-1/2 transform -translate-x-1/2 shadow-md drop-shadow-md">
            <img src="{{ asset('img/brighton.png') }}" alt="" class="py-8 px-7 w-1/5 h-1/5">
            <div class="font-semibold text-white text-2xl text-center py-8 px-8">
                <div>STAY UP TO DATE ABOUT OUR LATEST OFFERS</div>
                <div class="text-sm mt-2">Support Us!</div>
            </div>
        </div>
        <footer class="w-full h-full">
            <ul class="mx-24 my-5 w-max">
                <li class="mt-1">
                    <div class="font-semibold text-5xl text-biru-utama-0">MitsukriPedia</div>
                </li>
                <li class="mt-1">
                    <div class="font-semibold text-sm opacity-30 ">We sale everything that we have</div>
                </li>
                <li class="mt-1">
                    <div class="font-semibold text-sm opacity-30">We sale everything that we supposed to sale
                    </div>
                </li>
                <li class="flex items-center mt-1">
                    <button class="bg-gray-50 p-1.5 rounded-full shadow-md focus:ring-gray-300 focus:ring-2">
                        <i data-feather="github" class="stroke-blue-600 w-3 h-3"></i>
                    </button>
                    <div class="font-medium text-sm mx-1">KristoS8</div>
                </li>
                <li class="mt-1 flex items-center">
                    <button class="bg-gray-50 p-1.5 rounded-full shadow-md focus:ring-gray-300 focus:ring-2">
                        <i data-feather="instagram" class="stroke-blue-600 w-3 h-3"></i>
                    </button>
                    <div class="font-medium text-sm mx-1">Instagram</div>
                </li>
                <li class="mt-1 flex items-center">
                    <button class="bg-gray-50 p-1.5 rounded-full shadow-md focus:ring-gray-300 focus:ring-2">
                        <i data-feather="linkedin" class="stroke-blue-600 w-3 h-3"></i>
                    </button>
                    <div class="font-medium text-sm mx-1">Linkedin</div>
                </li>
            </ul>

        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.2/feather.min.js"
        integrity="sha512-zMm7+ZQ8AZr1r3W8Z8lDATkH05QG5Gm2xc6MlsCdBz9l6oE8Y7IXByMgSm/rdRQrhuHt99HAYfMljBOEZ68q5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>

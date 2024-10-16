<x-layout>
    <div class="flex">

        <aside class="w-2/6 grid justify-items-center border-r-gray-300 border-4 border-gray-50">
            <div class="mt-14 h-max grid justify-items-center ml-10">
                <div class="font-semibold text-2xl flex gap-2 h-max w-max my-3">
                    <img src="{{ asset('img/category.png') }}" alt="" class="object-contain w-7">
                    <p>Categories</p>
                </div>
                <ul class="space-y-3 text-gray-500 h-max w-max mt-3">
                    <li><a href="">Komik</a></li>
                    <li><a href="">Programming</a></li>
                    <li class="underline"><a href="">Filsafat</a></li>
                </ul>
            </div>

        </aside>

        <div class="w-full h-max">
            <header class="bg-gray-200 py-1 w-full">
                <div class="font-semibold text-2xl m-10">Books</div>
            </header>

            <div class="h-max w-full grid justify-items-center mt-14 mb-40">
                <div class="h-96 w-max grid grid-cols-5 gap-10 items-center">
                    <div class="h-full w-40 ">
                        <a class="h-4/6 w-full bg-biru-utama-0 rounded-xl shadow-md flex justify-center items-center"
                            href="">
                            <img src="{{ asset('img/book4.png') }}" alt="" class="w-3/4">
                        </a>
                        <div class="w-full grid justify-items-center my-2">
                            <div class="font-semibold mt-1 text-xs text-center">History Of Western Philosophy</div>
                            <div class="mt-1 text-xs">
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="font-semibold mt-1">Rp. 100.000,00</div>
                        </div>
                    </div>

                    <div class="h-full w-40">
                        <a class="h-4/6 w-full bg-biru-utama-0 rounded-xl shadow-md flex justify-center items-center"
                            href="">
                            <img src="{{ asset('img/book4.png') }}" alt="" class="w-3/4">
                        </a>
                        <div class="w-full grid justify-items-center my-2">
                            <div class="font-semibold mt-1 text-xs text-center">Psychology of Money</div>
                            <div class="mt-1 text-xs">
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="font-semibold mt-1">Rp. 150.000,00</div>
                        </div>
                    </div>

                    <div class="h-full w-40">
                        <a class="h-4/6 w-full bg-biru-utama-0 rounded-xl shadow-md flex justify-center items-center"
                            href="">
                            <img src="{{ asset('img/book2.png') }}" alt="" class="w-3/4">
                        </a>
                        <div class="w-full grid justify-items-center my-2">
                            <div class="font-semibold mt-1 text-xs text-center">Sebuah Seni Untuk<br />
                                Bersikap Bodo Amat</div>
                            <div class="mt-1 text-xs">
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="font-semibold mt-1">Rp. 100.000,00</div>
                        </div>
                    </div>

                    <div class="h-full w-40">
                        <a class="h-4/6 w-full bg-biru-utama-0 rounded-xl shadow-md flex justify-center items-center"
                            href="">
                            <img src="{{ asset('img/book3.png') }}" alt="" class="w-3/4">
                        </a>
                        <div class="w-full grid justify-items-center my-2">
                            <div class="font-semibold mt-1 text-xs text-center">Masyarakat Tanpa Tuhan</div>
                            <div class="mt-1 text-xs">
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="font-semibold mt-1">Rp. 100.000,00</div>
                        </div>
                    </div>

                    <div class="h-full w-40">
                        <a class="h-4/6 w-full bg-biru-utama-0 rounded-xl shadow-md flex justify-center items-center"
                            href="">
                            <img src="{{ asset('img/book4.png') }}" alt="" class="w-3/4">
                        </a>
                        <div class="w-full grid justify-items-center my-2">
                            <div class="font-semibold mt-1 text-xs text-center">History Of Western Philosophy</div>
                            <div class="mt-1 text-xs">
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star text-yellow-400"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="font-semibold mt-1">Rp. 100.000,00</div>
                        </div>
                    </div>

                </div>

                <div class="w-2/4 h-14 my-6 items-center flex text-white font-normal justify-evenly">
                    <button
                        class="flex items-center bg-biru-utama-0 p-2 rounded-xl hover:bg-sky-600 focus:ring-1 focus:ring-biru-utama-0">
                        <i data-feather="chevrons-left" class="stroke-white w-5 mr-2"></i>
                        Previous page
                    </button>

                    <button
                        class="flex items-center bg-biru-utama-0 py-2 px-4 rounded-lg hover:bg-sky-600 focus:ring-1 focus:ring-biru-utama-0 underline">1</button>

                    <button
                        class="flex items-center bg-biru-utama-0 py-2 px-4 rounded-lg hover:bg-sky-600 focus:ring-1 focus:ring-biru-utama-0">2</button>

                    <button
                        class="flex items-center bg-biru-utama-0 py-2 px-4 rounded-lg hover:bg-sky-600 focus:ring-1 focus:ring-biru-utama-0">3</button>

                    <button
                        class="flex items-center bg-biru-utama-0 py-2 px-4 rounded-lg focus:ring-1 focus:ring-biru-utama-0 cursor-not-allowed"
                        disabled>...</button>

                    <button
                        class="flex items-center bg-biru-utama-0 py-2 px-4 rounded-lg hover:bg-sky-600 focus:ring-1 focus:ring-biru-utama-0">
                        Next page
                        <i data-feather="chevrons-right" class="stroke-white w-5 mr-2"></i>
                    </button>
                </div>
            </div>



        </div>

    </div>

</x-layout>

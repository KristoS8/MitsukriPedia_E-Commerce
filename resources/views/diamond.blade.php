<x-layout>
    <div class="flex">

        <aside class="w-2/6 grid justify-items-center border-r-gray-300 border-4 border-gray-50">
            <div class="mt-14 h-max grid justify-items-center ml-10">
                <div class="font-semibold text-2xl flex gap-2 h-max w-max my-3">
                    <img src="{{ asset('img/category.png') }}" alt="" class="object-contain w-7">
                    <p>Categories</p>
                </div>
                <ul class="space-y-3 text-gray-500 h-max w-max mt-3">
                    <li class="underline"><a href="">MLBB</a></li>
                </ul>
            </div>

        </aside>

        <div class="w-full h-max">
            <header class="bg-gray-200 py-1 w-full">
                <div class="font-semibold text-2xl m-10">Diamond</div>
            </header>

            <div class="h-max w-full grid justify-items-center mt-14 mb-40">
                <div class="h-96 w-max grid grid-cols-4 gap-10 items-center">
                    <div
                        class="outline-none h-4/6 w-52 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                        <a class="" href="">
                            <div class="font-semibold my-3 mx-auto text-center text-biru-muda-2-0">"No Bonus"</div>
                            <img src="{{ asset('img/diamond.png') }}" alt="" class="mx-auto text-center">

                            <div class="w-full grid justify-items-center my-2">
                                <div class="font-semibold mt-1">15 Diamonds</div>
                                <div class="font-semibold mt-1">Rp. 15.000,00</div>
                            </div>
                        </a>
                    </div>

                    <div
                        class="outline-none h-4/6 w-52 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                        <a class="" href="">
                            <div class="font-semibold my-3 mx-auto text-center text-biru-muda-2-0">"5 Diamonds Bonus"
                            </div>
                            <img src="{{ asset('img/diamond.png') }}" alt="" class="mx-auto text-center">

                            <div class="w-full grid justify-items-center my-2">
                                <div class="font-semibold mt-1">50 Diamonds</div>
                                <div class="font-semibold mt-1">Rp. 95.000,00</div>
                            </div>
                        </a>
                    </div>

                    <div
                        class="outline-none h-4/6 w-52 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                        <a class="" href="">
                            <div class="font-semibold my-3 mx-auto text-center text-biru-muda-2-0">"20 Diamonds Bonus"
                            </div>
                            <img src="{{ asset('img/diamond.png') }}" alt="" class="mx-auto text-center">

                            <div class="w-full grid justify-items-center my-2">
                                <div class="font-semibold mt-1">100 Diamonds</div>
                                <div class="font-semibold mt-1">Rp. 155.000,00</div>
                            </div>
                        </a>
                    </div>

                    <div
                        class="outline-none h-4/6 w-52 flex justify-center items-center rounded-xl shadow-lg outline-1 outline-biru-muda-0 outline-offset-0">
                        <a class="" href="">
                            <div class="font-semibold my-3 mx-auto text-center text-biru-muda-2-0">"30 Diamonds Bonus"
                            </div>
                            <img src="{{ asset('img/diamond.png') }}" alt="" class="mx-auto text-center">

                            <div class="w-full grid justify-items-center my-2">
                                <div class="font-semibold mt-1">200 Diamonds</div>
                                <div class="font-semibold mt-1">Rp. 355.000,00</div>
                            </div>
                        </a>
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

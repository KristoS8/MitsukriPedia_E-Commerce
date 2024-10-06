<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Mitsukri Pedia</title>
</head>

<body class="m-0 font-helvetica">

    <div class="">
        <nav class="bg-biru-utama-0 h-24 text-white flex items-center justify-evenly">
            <span class="font-semibold text-3xl mx-5">MitsukriPedia</span>
            <ul class="flex justify-around w-1/3">
                <li class="text-base cursor-pointer p-1"><a href="">Books</a></li>
                <li class="text-base cursor-pointer p-1"><a href="">Gadget</a></li>
                <li class="text-base cursor-pointer p-1"><a href="">Diamond</a></li>
            </ul>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i data-feather="search" class="stroke-gray-400"></i>
                </div>

                <input type="search" id="default-search"
                    class="block w-80 py-3 px-5 ps-12 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-md outline-none"
                    placeholder="Search Products..." autocomplete="off" />
            </div>

            <button class="bg-gray-50 p-3 rounded-full shadow-md focus:ring-gray-300 focus:ring-2">
                <i data-feather="shopping-cart" class="fill-blue-600 stroke-blue-600"></i>
            </button>
            <button class="bg-gray-50 p-3 rounded-full shadow-md focus:ring-gray-300 focus:ring-2">
                <i data-feather="user" class="fill-blue-600 stroke-blue-600"></i>
            </button>

        </nav>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.2/feather.min.js"
        integrity="sha512-zMm7+ZQ8AZr1r3W8Z8lDATkH05QG5Gm2xc6MlsCdBz9l6oE8Y7IXByMgSm/rdRQrhuHt99HAYfMljBOEZ68q5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>

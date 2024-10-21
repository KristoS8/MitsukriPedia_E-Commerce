<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mitsukri Pedia</title>
</head>

<body class="font-helvetica">
    <div class="bg-biru-utama-0 w-full text-white justify-items-center grid">
        <nav class="w-11/12 h-full flex items-center justify-between p-6">
            <div class="flex items-center gap-14">
                <h1 class="text-2xl font-bold">MitsukriPedia</h1>
                <p class="text-xl font-semibold">Welcome Admin {{ auth()->user()->name }}!</p>
            </div>
            <div class="flex items-center gap-14">
                <div
                    class="flex items-center gap-2 bg-biru-tua-0 py-3 pr-5 pl-3 rounded-xl cursor-pointer font-semibold border border-blue-700">
                    <i data-feather="file-plus" class="stroke-white w-5 ml-3"></i>
                    <a href="" class="">Create</a>
                </div>
                <a href="" class="bg-gray-50 p-3 rounded-full shadow-md focus:ring-gray-300 focus:ring-2">
                    <i data-feather="user" class="fill-blue-600 stroke-blue-600"></i>
                </a>
            </div>
        </nav>
    </div>

    <h1>Dashboard </h1>

    <form action="/logout" method="POST">
        @csrf
        <button class="bg-biru-utama-0 p-3 rounded-xl">Logout</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.2/feather.min.js"
        integrity="sha512-zMm7+ZQ8AZr1r3W8Z8lDATkH05QG5Gm2xc6MlsCdBz9l6oE8Y7IXByMgSm/rdRQrhuHt99HAYfMljBOEZ68q5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        feather.replace();
    </script>
</body>

</html>

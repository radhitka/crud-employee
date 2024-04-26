<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
</head>

<body class="bg-slate-100">
    <div class="flex max-w-6xl items-center justify-center mx-auto h-screen">
        <div class="flex flex-col bg-slate-50 p-6 shadow-md border-t-[3px] border-violet-500 gap-4 w-96">
            <h1 class="text-lg text-center">Masuk untuk memulai sesi anda</h1>
            <form class="flex flex-col gap-4" action="">
                <div class="mt-4">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Email
                    </label>
                    <input type="text" id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="admin@email.com" required />
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Password
                    </label>
                    <input type="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Masukan password" required />
                </div>
                <div class="w-full inline-block">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

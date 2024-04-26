<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="bg-slate-100">
    <div id="app">
        <increment-counter />
    </div>

    {{-- <div class="bg-slate-300">
        <div class="max-w-screen-lg flex flex-wrap items-center justify-between mx-auto p-4">
            <h1>Dashboard</h1>
            <h1>Logout</h1>
        </div>
    </div> --}}

</body>

</html>

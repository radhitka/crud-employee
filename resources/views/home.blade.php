<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-100 text-lg font-medium text-slate-800">

    <div class="bg-slate-300">
        <div class="max-w-screen-lg flex flex-wrap items-center justify-between mx-auto p-4">
            <h1>Dashboard</h1>
            <a href="{{ url('logout') }}">Logout</a>
        </div>
    </div>

    <div class="min-h-screen">
        <div
            class="flex flex-col gap-5 max-w-screen-xl mx-auto p-4 pt-2 mt-8 bg-slate-50 shadow-xl border border-slate-500 rounded-lg">
            <h1>List Karyawan</h1>
            <div class="gap-2 inline-block">
                <button type="button" class="btn-primary">
                    Tambah Karyawan
                </button>
                <button type="button" class="btn-success">
                    Import CSV
                    <i class="ms-1 fa fa-file-pdf"></i>
                </button>
                <button type="button" class="btn-success">
                    Export PDF
                    <i class="ms-1 fa fa-file-pdf"></i>
                </button>
                <button type="button" class="btn-success">
                    Export CSV
                    <i class="ms-1 fa fa-file-csv"></i>
                </button>
            </div>
            <div class="" id="app">
                <list-employee />
            </div>
        </div>
    </div>

</body>

</html>

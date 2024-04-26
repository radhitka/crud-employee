<x-layout>
    <div
        class="flex flex-col gap-5 max-w-screen-lg mx-auto p-4 pt-2 mt-8 bg-slate-50 shadow-xl border border-slate-500 rounded-lg">
        <h1>List Karyawan</h1>
        <div class="flex flex-row gap-2">
            <a href="{{ url('/home') }}" class="btn-primary">
                Kembali
            </a>
        </div>
        <div class="" id="app">
            <add-employee />
        </div>
    </div>
</x-layout>

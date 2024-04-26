<x-layout>
    <div
        class="flex flex-col gap-5 max-w-screen-xl mx-auto p-4 pt-2 mt-8 bg-slate-50 shadow-xl border border-slate-500 rounded-lg">
        <h1>List Karyawan</h1>
        <div class="flex flex-row gap-2">
            <a href="{{ url('add') }}" class="btn-primary">
                Tambah Karyawan
            </a>
            <button type="button" class="btn-purple">
                Import CSV
                <i class="ms-1 fa fa-file-pdf"></i>
            </button>
            <button type="button" class="btn-success">
                Export PDF
                <i class="ms-1 fa fa-file-pdf"></i>
            </button>
            <a href="{{ url('api/employee/export/csv') }}" class="btn-success">
                Export CSV
                <i class="ms-1 fa fa-file-csv"></i>
            </a>
        </div>
        <div class="" id="app">
            <list-employee />
        </div>
    </div>
</x-layout>

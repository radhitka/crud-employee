<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EmployeeController extends Controller
{
    //
    public function list()
    {
        $data = Employee::query()->latest()->get();

        return responseSuccess(['data' => $data]);
    }

    public function detail($id)
    {
        $data = Employee::query()->latest()->where('id', $id)->first();

        return responseSuccess(['data' => $data]);
    }

    public function add(Request $request)
    {
        $nama = $request->input('nama');
        $nomor = $request->input('nomor');
        $jabatan     = $request->input('jabatan');
        $departmen   = $request->input('departemen');
        $tanggal_masuk = $request->input('tanggal_masuk');
        $foto = $request->input('foto');
        $status = $request->input('status');

        try {

            $employee = new Employee();
            $employee->nama = $nama;
            $employee->nomor = $nomor;
            $employee->jabatan = $jabatan;
            $employee->departmen = $departmen;
            $employee->tanggal_masuk = $tanggal_masuk;
            $employee->nama = $nama;
            $employee->foto = $foto;
            $employee->status = $status;
            $employee->save();


            return responseSuccess();
        } catch (\Throwable $th) {
            return responseInternalServerError($th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $nama = $request->input('nama');
        $nomor = $request->input('nomor');
        $jabatan     = $request->input('jabatan');
        $departmen   = $request->input('departemen');
        $tanggal_masuk = $request->input('tanggal_masuk');
        $foto = $request->input('foto');
        $status = $request->input('status');

        $employee = Employee::query()->latest()->where('id', $id)->first();
        if (!$employee) {
            return responseNotFound('Karyawan tidak ada.');
        }

        try {

            $employee->nama = $nama;
            $employee->nomor = $nomor;
            $employee->jabatan = $jabatan;
            $employee->departmen = $departmen;
            $employee->tanggal_masuk = $tanggal_masuk;
            $employee->nama = $nama;
            $employee->foto = $foto;
            $employee->status = $status;
            $employee->save();

            return responseSuccess();
        } catch (\Throwable $th) {
            return responseInternalServerError($th->getMessage());
        }
    }

    public function delete($id)
    {
        $data = Employee::query()->where('id', $id)->delete();

        return responseSuccess();
    }

    public function exportCsv()
    {
        $data = Employee::all();
        $csv_name = 'employee.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=$csv_name",
        ];

        $handle = fopen('php://output', 'w');
        fputcsv($handle, ['nama', 'nomor', 'jabatan', 'departmen', 'tanggal_masuk', 'foto', 'status']);

        foreach ($data as $key => $value) {
            fputcsv($handle, [
                $value->nama,
                $value->nomor,
                $value->jabatan,
                $value->departmen,
                $value->tanggal_masuk,
                $value->foto,
                $value->status,
            ]);
        }

        fclose($handle);

        return Response::make('', 200, $headers);
    }

    public function importCsv(Request $request)
    {
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        foreach ($fileContents as $key =>  $line) {
            $data = str_getcsv($line);
            if ($key != 0) {
                Employee::create([
                    'nama' => $data[0],
                    'nomor' => $data[1],
                    'jabatan' => $data[2],
                    'departmen' => $data[3],
                    'tanggal_masuk' => $data[4],
                    'foto' => $data[5],
                    'status' => $data[6],
                ]);
            }
        }

        return responseSuccess();
    }

    public function exportPdf(Request $request)
    {
        $data = Employee::query()->get();

        $pdf = Pdf::loadView('employee.pdf', ['data' => $data]);

        return $pdf->stream('employee.pdf');
    }
}

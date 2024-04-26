<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function list()
    {
        $data = Employee::query()->latest()->get();

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

    public function delete($id)
    {
        $data = Employee::query()->where('id', $id)->delete();

        return responseSuccess();
    }
}

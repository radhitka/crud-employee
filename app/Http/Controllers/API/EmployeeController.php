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
        $data = Employee::query()->get();

        return responseJson(['data' => $data]);
    }
}

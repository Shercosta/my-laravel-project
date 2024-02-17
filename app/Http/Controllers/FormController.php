<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $name = $request->input("name");

        return response()->json(['message' => $name]);
    }

    public function store(Request $request)
    {
        $employeeNewData = $request->input('nama_karyawan');

        return response()->json(['message' => $employeeNewData]);
    }
}

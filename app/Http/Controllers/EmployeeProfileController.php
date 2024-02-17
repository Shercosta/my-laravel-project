<?php

namespace App\Http\Controllers;

use App\Models\EmployeeProfile;
use Illuminate\Http\Request;

class EmployeeProfileController extends Controller
{
    public function index()
    {
        $employeeProfiles = EmployeeProfile::all();

        return view('userTable', compact('employeeProfiles'));
    }

    public function storeNew(Request $request)
    {
        $employeeNewData = $request->all();

        $employeeProfile = new EmployeeProfile();
        $employeeProfile->timestamps = false;
        $employeeProfile->nama_karyawan = $employeeNewData['nama_karyawan'];
        $employeeProfile->tanggal_lahir = $employeeNewData['tanggal_lahir'];
        $employeeProfile->jabatan = $employeeNewData['jabatan'];
        $employeeProfile->kota_asal = $employeeNewData['kota_asal'];

        $employeeProfile->save();

        return redirect()->route('employee-profiles.index');
    }




    public function delete($id)
    {
        $employeeProfile = EmployeeProfile::find($id);

        if ($employeeProfile) {
            $employeeProfile->delete();
        }

        return redirect()->route('employee-profiles.index');
    }

    public function update($id)
    {
        $employeeProfile = EmployeeProfile::find($id);

        return view('editEmployeeProfile', compact('employeeProfile'));
    }

    public function updateProfile(Request $request, $id)
    {
        $employeeProfile = EmployeeProfile::find($id);
        $employeeProfile->update($request->all());

        return redirect()->route('employee-profiles.index');
    }
}

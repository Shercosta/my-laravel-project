<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeProfile extends Model
{
    public $timestamps = false;

    protected $table = 'employee_profile';

    protected $fillable = [
        'nama_karyawan',
        'tanggal_lahir',
        'jabatan',
        'kota_asal',
    ];

    public function store(array $data)
    {
        $selectedColumns = ['nama_karyawan', 'tanggal_lahir', 'jabatan', 'kota_asal'];

        $this->insert($data, $selectedColumns);

        return $this;
    }
}

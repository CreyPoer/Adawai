<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    public function getData(Request $request)
    {
        $grafikDivision = $this->getGrafikDivision();
        $grafikMaritalStatus = $this->getGrafikMaritalStatus();

        return response()->json([
            'success' => true,
            'message' => 'Data grafik berhasil diambil',
            'data' => [
                'division' => $grafikDivision,
                'marital_status' => $grafikMaritalStatus,
            ],
        ]);
    }

    public function getGrafikDivision()
    {
        $divisions = Divisi::withCount('employees')->get();

        $data = $divisions->map(function ($divisi) {
            return [
                'division' => $divisi->divisi,
                'total_employees' => $divisi->employees_count,
            ];
        });

        return $data;
    }

    public function getGrafikMaritalStatus() {
        $maritalStatuses = Employee::select('marital_status')
        ->distinct()
        ->pluck('marital_status')
        ->toArray();
        $data = [];

        foreach ($maritalStatuses as $status) {
            $count = Employee::where('marital_status', $status)->count();

            $data[] = [
                'status' => $status,
                'total_employees' => $count,
            ];
        }

        return $data;
    }
}

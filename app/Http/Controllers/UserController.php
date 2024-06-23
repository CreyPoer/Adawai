<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function admin()
    {
        $employee = Employee::count('id');
        $averageSalary = Employee::avg('sallary');
        $admin = User::count('id');
        $divisi = Divisi::count('id');


        // Buat Pie Chart
        $Education = DB::table('employees')
            ->select('education', DB::raw('COUNT(*) as total'))
            ->groupBy('education')
            ->get();

        // Memisahkan data menjadi dua array: satu untuk label dan satu untuk data
        $labels = $Education->pluck('education')->toArray();
        $total = $Education->pluck('total')->toArray();

        // Buat Bar Chart
        $averageSalaries = DB::table('employees')
        ->join('divisis', 'employees.divisi_id', '=', 'divisis.id')
        ->select('divisis.divisi as division_name', DB::raw('AVG(employees.sallary) as average_salary'))
        ->groupBy('divisis.divisi')
        ->get();

        $label_avg_sallary = $averageSalaries->pluck('division_name')->toArray();
        $averageSalariesData = $averageSalaries->pluck('average_salary')->toArray();



        return view('admin.index',compact('employee','admin','averageSalary','divisi','labels','total','label_avg_sallary','averageSalariesData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

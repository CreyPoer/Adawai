<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeeDataTable;
use App\Http\Requests\Employee\StoreRequest;
use App\Http\Requests\Employee\UpdateRequest;
use App\Models\Divisi;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('admin.employee.index');
    }

    public function home()
    {
        return view('home');
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisi = Divisi::all();
        return view('admin.employee.create',compact('divisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $request->name . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/Employee', $fileName);
            $validatedData['foto'] = str_replace('public', 'storage', $path);
        }

        Employee::create($validatedData);
        return redirect('/employee')->with('suksestambahemployee','Data Pegawai berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Employee::findOrFail($id);
        return view('admin.employee.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Employee::findOrFail($id);
        $divisi = Divisi::all();
        return view('admin.employee.edit', compact('data','divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $data = Employee::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($data->foto) {
                if (file_exists(public_path($data->foto))) {
                    unlink(public_path($data->foto));
                }
            }

            $file = $request->file('foto');
            $fileName = $request->name . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/Employee', $fileName);
            $validatedData['foto'] = str_replace('public', 'storage', $path);
        }
        $data->update($validatedData);

        return redirect('/employee')->with('suksesupdateemployee', 'Data Pegawai berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $employee = Employee::findOrFail($request->id);

        // Hapus foto jika ada
        if (!empty($employee->foto)) {
            $filePath = public_path($employee->foto);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $employee->delete();

        return redirect('/employee')->with('suksesdeleteemployee', 'Data Pegawai berhasil dihapus');
    }
}

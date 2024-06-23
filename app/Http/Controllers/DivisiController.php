<?php

namespace App\Http\Controllers;

use App\DataTables\DivisiDataTable;
use App\Http\Requests\Divisi\StoreRequest;
use App\Http\Requests\Divisi\UpdateRequest;
use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DivisiDataTable $dataTable)
    {
        return $dataTable->render('admin.divisi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();

        Divisi::create($validatedData);
        return redirect('/divisi')->with('suksestambahdivisi','Data Divisi berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Divisi $divisi)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Divisi::findOrFail($id);
        return view('admin.divisi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $data = Divisi::findOrFail($id);
        $data->update($validatedData);

        return redirect('/divisi')->with('suksesupdatedivisi', 'Data Divisi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user = Divisi::findOrFail($request->id);

        $user->delete();

        return redirect('/divisi')->with('suksesdeletedivisi', 'Data Divisi berhasil dihapus');
    }
}

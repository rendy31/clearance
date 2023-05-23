<?php

namespace App\Http\Controllers;
use App\Models\prodiModel;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = prodiModel::all();
        return view ('admin.prodi.prodi',['prodis'=>$prodis]);    }

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
        $validatedData = $request->validate([
            'prodi' => 'required'
        ]);

        $prodi = new prodiModel;
        $prodi->namaProdi = $request->prodi;
        $prodi->save();

        return redirect('/prodi')->with('sukses', 'Data Ditambahkan');
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
        $prodi = prodiModel::find($id);
        return view('admin.prodi.editProdi', ['prodi'=>$prodi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'prodi' => 'required'
        ]);

       $prodi = prodiModel::where('id', $request->id)->update([
                    'namaProdi' => $request->prodi
             ]);

        return redirect('/prodi')->with('sukses', 'Data DiUbah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = prodiModel::find($id);
        $prodi->delete();

        return redirect('/prodi')->with('sukses', 'Data Dihapus');
    }
}

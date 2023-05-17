<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
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
        return view ('admin.prodi.prodi',['prodis'=>$prodis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view ('admin.prodi.addProdi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $validatedData = $request->validateWithBag('prodi', [
            'prodi' => ['required', 'string']
        ]);

        $prodi = new prodiModel;
        $prodi->namaProdi = $request->namaProdi;
        $prodi->save();

        //$request->session()->flash('status', 'Task was successful!');
        return redirect('/prodi')->with('sukses','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(prodiModel $prodiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prodiModel $prodiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prodiModel $prodiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prodiModel $prodiModel)
    {
        //
    }
}

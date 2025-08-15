<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
class MobilController extends Controller
{
    
    public function index()
    {
        $mobil = Mobil::all();
        return view ('mobil.index', compact('mobil'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $mobil=Mobil::create($request->all());
        return view ('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merek' => 'required',
            'tipe' => 'required',
            'warna'=> 'required',
            'jumlah_roda'=> 'required',
            'nomor_mesin'=> 'required',
            'gambar' => 'required',
        ]);

        Mobil::create($request->all());
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $mobil = Mobil::find($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = Mobil::find($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'merek' => 'required',
            'tipe' => 'required',
            'warna' => 'required',
            'jumlah_roda' => 'required',
            'nomor_mesin' => 'required',
            'gambar' => 'required',
        ]);
        
        $mobil = Mobil::find($id);
        $mobil->update($request->all());
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $mobil = Mobil::find($id)->delete();
        return redirect()->back();
    }
}

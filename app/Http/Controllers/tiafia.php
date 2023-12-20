<?php

namespace App\Http\Controllers;
use App\Models\tianaf;
use Illuminate\Http\Request;

class tiafia extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=tianaf::all();
        return view('isian.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'Nama'=> 'required',
            'No_HP'=> 'required|numeric',
            'Alamat'=> 'required',
            'Jenis_Tiket'=> 'required',
            'Harga'=> 'required',
            'Jumlah_Tiket'=> 'required|numeric',
            'Total_Harga'=> 'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'No_HP'=> $request->input('No_HP'),
            'Alamat'=> $request->input('Alamat'),
            'Jenis_Tiket'=> $request->input('Jenis_Tiket'),
            'Harga'=> $request->input('Harga'),
            'Jumlah_Tiket'=> $request->input('Jumlah_Tiket'),
            'Total_Harga'=> $request->input('Total_Harga')
        ];
        tianaf::create($data);
        return redirect('uas');
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
       $data=tianaf::where('Nama',$id)->first();
       return view('isian.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'Nama'=> 'required',
            'No_HP'=> 'required|numeric',
            'Alamat'=> 'required',
            'Jenis_Tiket'=> 'required',
            'Harga'=> 'required',
            'Jumlah_Tiket'=> 'required|numeric',
            'Total_Harga'=> 'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'No_HP'=> $request->input('No_HP'),
            'Alamat'=> $request->input('Alamat'),
            'Jenis_Tiket'=> $request->input('Jenis_Tiket'),
            'Harga'=> $request->input('Harga'),
            'Jumlah_Tiket'=> $request->input('Jumlah_Tiket'),
            'Total_Harga'=> $request->input('Total_Harga')
        ];
        tianaf::where('Nama',$id)->update($data);
        return redirect('uas')->with('Data Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        tianaf::where('Nama',$id)->delete();
        return redirect('uas')->with('Data Berhasil Dihapus.');
    }
}

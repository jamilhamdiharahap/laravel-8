<?php

namespace App\Http\Controllers;

use App\Models\dokter as ModelsDokter;
use Illuminate\Http\Request;

class Dokter extends Controller
{
    public function index()
    {
        $tabel = ModelsDokter::all();
        return view('index', compact('tabel'));
    }


    public function create()
    {
        return view('add');
    }

    public function insert(Request $request)
    {
        ModelsDokter::insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon
        ]);

        return redirect('/')->with('success');
    }

    public function update($id)
    {
        $data = ModelsDokter::find($id);
        return view('update', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = ModelsDokter::find($id);
        $data->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon
        ]);

        return redirect('dokter')->with('berhasil di update');
    }


    public function delete(Request $request)
    {
        ModelsDokter::deleted($request->id);

        return redirect('dokter');
    }
}

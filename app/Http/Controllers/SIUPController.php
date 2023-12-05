<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SIUP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SIUPController extends Controller
{
    public function index()
    {
        $siup = SIUP::get();
        return view('content.pelayanan.siup.complaints',compact('siup'));
    }

    public function create()
    {
        return view('content.pelayanan.siup.create-complaints');
    }

    public function store(Request $request)
    {
        $file = $request->file('file_siup');
        $filename = '';
        if ($file) {
            $filename = $file->getClientOriginalName();
            $time = time();
            $newName = $time . $filename;
            $path = Storage::putFileAs('file_lampiran_siup', $file, $newName);
            $filename = $path;
        }


        siup::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'judul_siup' => $request->judul_siup,
            'jenis_siup' => $request->jenis_siup,
            'lokasi_siup' => $request->lokasi_siup,
            'lampiran' => $filename,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('siup.index')->with('success-create','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $siup = siup::where('id',$id)->first();
        return view('content.pelayanan.siup.update-complaints',compact('siup'));
    }

    public function update(Request $request,$id)
    {
        $siup = siup::where('id',$id)->first();
        $file = $request->file('file_siup');
        $filename = $siup->lampiran;
        if ($file) {
            Storage::disk('public')->delete($siup->lampiran);
            $filename = $file->getClientOriginalName();
            $time = time();
            $newName = $time . $filename;
            $path = Storage::putFileAs('file_lampiran_siup', $file, $newName);
            $filename = $path;
        }

        $siup->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'judul_siup' => $request->judul_siup,
            'jenis_siup' => $request->jenis_siup,
            'lokasi_siup' => $request->lokasi_siup,
            'lampiran' => $filename,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('siup.index')->with('success-update','Data Berhasil Diubah');
    }

    public function destroy (Request $request)
    {
        $siup = siup::where('id',$request->id)->first();

        Storage::disk('public')->delete($siup->lampiran);
        
        $siup->delete();

        return response()->json('Data Berhasil Dihapus');
    }
}

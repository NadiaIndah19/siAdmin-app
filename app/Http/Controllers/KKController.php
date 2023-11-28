<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KK;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KKController extends Controller
{
    public function index()
    {
      $kk = KK::get();
      return view('content.kependudukan.fams-list.family-card',compact('kk'));
    }
  
    public function create()
    {     
      return view('content.kependudukan.fams-list.create-kk');
    }

    public function store (Request $request)
    {      
        $file = $request->file('file');
        $filename = '';
        if ($file) {
            $filename = $file->getClientOriginalName();            
            $time = time();
            $newName = $time.$filename;            
            $path = Storage::putFileAs('kk',$file,$newName);
            $filename = $path;
        }
        // dd($filename);
    
       KK::create([
            'nik' => $request->nik, 
            'nama' => $request->nama,
            'kota_kelahiran' => $request->kota_kelahiran,
            'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            'jenis_kelamin' => $request->jenis_kelamin,
            'gol_darah' => $request->gol_darah,
            'alamat' => $request->alamat,
            'agama' => $request->agama ,
            'status_perkawinan' => $request->status_perkawinan,
            'pekerjaan' => $request->pekerjaan,
            'file_kk' => $filename
       ]);

       return redirect()->route('kependudukan-kk.index')->with('success-create','Berhasil Menambahkan Data');
    }
  
    public function edit($id)
    {
      $kk = KK::where('id',$id)->first();
      return view('content.kependudukan.fams-list.update-kk',compact('kk'));
    }

    public function update(Request $request , $id)
    {
       $file = $request->file('file');
       
       $kk = KK::where('id',$id)->first();
       $newName = $kk->file_kk;

       if ($file) {
        
          Storage::disk('public')->delete($kk->file_kk);
          $filename = $file->getClientOriginalName();            
          $time = time();
          $newName = $time.$filename;            
          $path = Storage::putFileAs('kk',$file,$newName);
          $newName = $path;          
       }

       $kk->update([
          'nik' => $request->nik, 
          'nama' => $request->nama,
          'kota_kelahiran' => $request->kota_kelahiran,
          'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
          'jenis_kelamin' => $request->jenis_kelamin,
          'gol_darah' => $request->gol_darah,
          'alamat' => $request->alamat,
          'agama' => $request->agama ,
          'status_perkawinan' => $request->status_perkawinan,
          'pekerjaan' => $request->pekerjaan,
          'file_kk' => $newName
       ]);

       return redirect()->route('kependudukan-kk.index')->with('success-update','Berhasil Mengubah Data');

    }

    public function destroy (Request $request)
    {
      $kk = KK::where('id',$request->id)->first();
      Storage::disk('public')->delete($kk->file_kk);

      $kk->delete();

      return response()->json('Berhasil Menghapus Data');
    }
}

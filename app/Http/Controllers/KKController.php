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
      return view('content.kependudukan.fams-list.kk-card',compact('kk'));
    }
  
    public function create()
    {     
      return view('content.kependudukan.fams-list.create-kk');
    }

    public function store (Request $request)
    {      
        $pengantar_rt = $request->file('pengantar_rt');
        $fc_pengantar_rt = '';
        if ($pengantar_rt) {
            $fc_pengantar_rt = $pengantar_rt->getClientOriginalName();            
            $time = time();
            $newName = $time.$fc_pengantar_rt;            
            $path = Storage::putFileAs('kk',$pengantar_rt,$newName);
            $fc_pengantar_rt = $path;

        $kk_lama = $request->file('kk_lama');
        $fc_kk_lama = '';
        if ($kk_lama) {
            $fc_kk_lama = $kk_lama->getClientOriginalName();            
            $time = time();
            $newName = $time.$fc_kk_lama;            
            $path = Storage::putFileAs('kk',$kk_lama,$newName);
            $fc_kk_lama = $path;

        
        $buku_nikah = $request->file('buku_nikah');
        $fc_buku_nikah = '';
        if ($buku_nikah) {
            $fc_buku_nikah = $file->getClientOriginalName();            
            $time = time();
            $newName = $time.$fc_buku_nikah;            
            $path = Storage::putFileAs('kk',$buku_nikah,$newName);
            $fc_buku_nikah = $path;

        $ktp = $request->file('ktp');
        $filename = '';
        if ($ktp) {
            $fc_ktp = $ktp->getClientOriginalName();            
            $time = time();
            $newName = $time.$fc_ktp;            
            $path = Storage::putFileAs('kk',$ktp,$newName);
            $fc_ktp = $path;
        }
        // dd($filename);
    
       KK::create([
            'nik' => $request->nik, 
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'agama' => $request->agama ,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'status_hub_kel' => $request->status_hub_kel,
            'status_perkawinan' => $request->status_perkawinan,
            'tanggal_perkawinan' => Carbon::parse($request->tanggal_perkawinan)->format('Y-m-d'),
            'kewarganegaraan' => $request->kewarganegaraan,
            'nama_ortu' => $request->nama_ortu,
            'file_pengantar_rt' => $fc_pengantar_rt,
            'file_kk_lama' => $fc_kk_lama,
            'file_buku_nikah' => $fc_buku_nikah,
            'file_ktp' => $fc_ktp
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

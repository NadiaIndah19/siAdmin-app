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
        $pengantar_rt = $request->file('pengantar_rt');
        $file_pengantar_rt = '';
        if ($pengantar_rt) {
            $file_pengantar_rt = $pengantar_rt->getClientOriginalName();            
            $time = time();
            $newName = $time.$file_pengantar_rt;            
            $path = Storage::putFileAs('kk',$pengantar_rt,$newName);
            $file_pengantar_rt = $path;
          }

        $kk_lama = $request->file('kk_lama');
        $file_kk_lama = '';
        if ($kk_lama) {
            $file_kk_lama = $kk_lama->getClientOriginalName();            
            $time = time();
            $newName = $time.$file_kk_lama;            
            $path = Storage::putFileAs('kk',$kk_lama,$newName);
            $file_kk_lama = $path;
          }
        
        $buku_nikah = $request->file('buku_nikah');
        $file_buku_nikah = '';
        if ($buku_nikah) {
            $file_buku_nikah = $buku_nikah->getClientOriginalName();            
            $time = time();
            $newName = $time.$file_buku_nikah;            
            $path = Storage::putFileAs('kk',$buku_nikah,$newName);
            $file_buku_nikah = $path;
          }
        $ktp = $request->file('ktp');
        $file_ktp = '';
        if ($ktp) {
            $file_ktp = $ktp->getClientOriginalName();            
            $time = time();
            $newName = $time.$file_ktp;            
            $path = Storage::putFileAs('kk',$ktp,$newName);
            $file_ktp = $path;
        }
        // dd($filename);
    
       KK::create([
            'nik' => $request->nik, 
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'agama' => $request->agama ,
            'jenis_kelamin' => $request->jenis_kelamin,
            'gol_darah' => $request->gol_darah,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'status_hub_keluarga' => $request->status_hub_keluarga,
            'status_perkawinan' => $request->status_perkawinan,
            'tgl_perkawinan' => Carbon::parse($request->tgl_perkawinan)->format('Y-m-d'),
            'kewarganegaraan' => $request->kewarganegaraan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'file_pengantar_rt' => $file_pengantar_rt,
            'file_kk_lama' => $file_kk_lama,
            'file_buku_nikah' => $file_buku_nikah,
            'file_ktp' => $file_ktp
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
      $file_pengantar_rt = $request->file('pengantar_rt');
      $file_kk_lama = $request->file('kk_lama');
      $file_buku_nikah = $request->file('buku_nikah');
      $file_ktp = $request->file('ktp');
       
      $kk = KK::where('id',$id)->first();
      $suratPengantar = $kk->file_pengantar_rt;
      $kkLama = $kk->kk_lama;
      $bukuNikah = $kk->buku_nikah;
      $fcktp = $kk->ktp;

       if ($file_pengantar_rt) {
          Storage::disk('public')->delete($kk->file_pengantar_rt);
          $file_pengantar_rt = $file_pengantar_rt->getClientOriginalName();            
          $time = time();
          $suratPengantar = $time.$file_pengantar_rt;            
          $path = Storage::putFileAs('kk',$file_pengantar_rt,$suratPengantar);
          $suratPengantar = $path;          
       }

       if ($file_kk_lama) {
        Storage::disk('public')->delete($kk->file_kk_lama);
        $file_file_kk_lama = $file_kk_lama->getClientOriginalName();            
        $time = time();
        $kkLama = $time.$file_file_kk_lama;            
        $path = Storage::putFileAs('kk',$file_kk_lama,$kkLama);
        $kkLama = $path;          
       }

       if ($file_buku_nikah) {
        Storage::disk('public')->delete($kk->file_buku_nikah);
        $file_file_buku_nikah = $file_buku_nikah->getClientOriginalName();            
        $time = time();
        $bukuNikah = $time.$file_file_buku_nikah;            
        $path = Storage::putFileAs('kk',$file_buku_nikah,$bukuNikah);
        $bukuNikah = $path;          
       }

      if ($file_ktp) {
        Storage::disk('public')->delete($kk->ktp);
        $file_ktp = $file_ktp->getClientOriginalName();            
        $time = time();
        $fcktp = $time.$file_ktp;            
        $path = Storage::putFileAs('kk',$file_ktp,$fcktp);
        $fcktp = $path;          
      }

       $kk->update([
        'nik' => $request->nik, 
        'nama' => $request->nama,
        'ttl' => $request->ttl,
        'agama' => $request->agama ,
        'jenis_kelamin' => $request->jenis_kelamin,
        'gol_darah' => $request->gol_darah,
        'pendidikan' => $request->pendidikan,
        'pekerjaan' => $request->pekerjaan,
        'status_hub_keluarga' => $request->status_hub_keluarga,
        'status_perkawinan' => $request->status_perkawinan,
        'tgl_perkawinan' => Carbon::parse($request->tgl_perkawinan)->format('Y-m-d'),
        'kewarganegaraan' => $request->kewarganegaraan,
        'nama_ayah' => $request->nama_ayah,
        'nama_ibu' => $request->nama_ibu,
        'file_pengantar_rt' => $file_pengantar_rt,
        'file_kk_lama' => $file_kk_lama,
        'file_buku_nikah' => $file_buku_nikah,
        'file_ktp' => $file_ktp
       ]);

       return redirect()->route('kependudukan-kk.index')->with('success-update','Berhasil Mengubah Data');

    }

    public function destroy (Request $request)
    {
      $kk = KK::where('id',$request->id)->first();  

      Storage::disk('public')->delete($kk->nik);
      Storage::disk('public')->delete($kk->nama);
      Storage::disk('public')->delete($kk->ttl);
      Storage::disk('public')->delete($kk->agama);
      Storage::disk('public')->delete($kk->jenis_kelamin);
      Storage::disk('public')->delete($kk->gol_darah);
      Storage::disk('public')->delete($kk->pendidikan);
      Storage::disk('public')->delete($kk->pekerjaan);
      Storage::disk('public')->delete($kk->status_hub_keluarga);
      Storage::disk('public')->delete($kk->status_perkawinan);
      Storage::disk('public')->delete($kk->tgl_perkawinan);
      Storage::disk('public')->delete($kk->kewarganegaraan);
      Storage::disk('public')->delete($kk->nama_ayah);
      Storage::disk('public')->delete($kk->nama_ibu);
      Storage::disk('public')->delete($kk->pengantar_rt);
      Storage::disk('public')->delete($kk->kk_lama);
      Storage::disk('public')->delete($kk->buku_nikah);
      Storage::disk('public')->delete($kk->ktp);

      $kk->delete();
      
      return response()->json('Berhasil Menghapus Data');
      
    }
    
    public function view ($id)
    {
      $kk = KK::where('id',$id)->first();
      return view('content.kependudukan.fams-list.view-kk',compact('kk'));
    }
}

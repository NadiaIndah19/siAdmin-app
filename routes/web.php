<?php

use App\Http\Controllers\AktaKelahiranController;
use App\Http\Controllers\AktaKematianController;
use App\Http\Controllers\AktaPernikahanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KIPController;
use App\Http\Controllers\KKController;
use App\Http\Controllers\KTPController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\SIUPController;
use App\Http\Controllers\IMBController;
use App\Http\Controllers\UserController;
use App\Models\AktaKelahiran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ============== USER MANAGEMENT =================================
    Route::prefix('users')->group(function () {
        Route::get('/user-management', [UserController::class, 'index'])->name('user-management');
        Route::get('/add-user', [UserController::class, 'create'])->name('user-management.create');
        Route::post('/add-user', [UserController::class, 'store'])->name('user-management.store');

        Route::get('/{id}/edit-user', [UserController::class, 'edit'])->name('user-management.edit');
        Route::put('/{id}/edit-user', [UserController::class, 'update'])->name('user-management.update');
        Route::post('/edit-user', [UserController::class, 'destroy'])->name('user-management.destroy');
    });

    // =============== KTP =============================================
    Route::prefix('kependudukan')->group(function () {
        Route::get('/id-card/id-card-person', [KTPController::class, 'index'])->name('kependudukan-ktp.index');
        Route::get('/id-card/create-id-card', [KTPController::class, 'create'])->name('ktp.create');
        Route::post('/id-card/store-id-card', [KTPController::class, 'store'])->name('ktp.store');
        Route::get('/id-card/{id}/update-id-card', [KTPController::class, 'edit'])->name('ktp.edit');
        Route::PUT('/id-card/{id}/edit-id-card', [KTPController::class, 'update'])->name('ktp.update');
        Route::post('/id-card/create-id-card', [KTPController::class, 'destroy'])->name('ktp.destroy');

        Route::get('/id-card/{id}/view', [KTPController::class, 'view'])->name('ktp.view');
    });

    // =============== KK =============================================

    Route::prefix('kependudukan')->group(function () {        
        Route::get('/fams-list/family-card', [KKController::class,'index'])->name('kependudukan-kk.index');
        Route::get('/fams-list/create-kk', [KKController::class,'create'])->name('kk.create');
        Route::post('/fams-list/store-kk', [KKController::class,'store'])->name('kk.store');
        Route::get('/fams-list/{id}/update-kk', [KKController::class,'edit'])->name('kk.edit');
        Route::PUT('/fams-list/{id}/edit-kk', [KKController::class,'update'])->name('kk.update');
        Route::post('/fams-list/create-kk', [KKController::class,'destroy'])->name('kk.destroy');
        
        Route::prefix('kependudukan')->group(function () {
        Route::get('/fams-list/kk-card', [KKController::class, 'index'])->name('kependudukan-kk.index');
        Route::get('/fams-list/create-fams-list', [KKController::class, 'create'])->name('kk.create');
        Route::post('/fams-list/store-fams-list', [KKController::class, 'store'])->name('kk.store');
        Route::get('/fams-list/{id}/update-fams-list', [KKController::class, 'edit'])->name('kk.edit');
        Route::PUT('/fams-list/{id}/edit-fams-list', [KKController::class, 'update'])->name('kk.update');
        Route::post('/fams-list/create-fams-list', [KKController::class, 'destroy'])->name('kk.destroy');

    });

    // =================== AKTA PERNIKAHAN =============================
    Route::prefix('/kependudukan/marriage-list/')->group(function () {
        Route::get('marriage-card', [AktaPernikahanController::class, 'index'])->name('pernikahan.index');
        Route::get('create-marriage-card', [AktaPernikahanController::class, 'create'])->name('pernikahan.create');
        Route::get('{id}/update-marriage-card', [AktaPernikahanController::class, 'edit'])->name('pernikahan.edit');
        Route::get('{id}/view-marriage-card', [AktaPernikahanController::class, 'view'])->name('pernikahan.view');
        Route::post('create-marriage-card/store', [AktaPernikahanController::class, 'store'])->name('pernikahan.store');
        Route::put('update-marriage-card/{id}/update', [AktaPernikahanController::class, 'update'])->name('pernikahan.update');
        Route::post('create-marriage-card/destroy', [AktaPernikahanController::class, 'destroy'])->name('pernikahan.destroy');
    });

    // ==================== INFORMASI ==================================
    Route::prefix('info')->group(function () {
        Route::get('/news', [InformasiController::class, 'index'])->name('informasi.index');
        Route::post('/news/store', [InformasiController::class, 'store'])->name('informasi.store');
        Route::post('/news/delete', [InformasiController::class, 'delete'])->name('informasi.destroy');
    });

    //  ===================================== PENGADUAN ============================================================
    Route::prefix('pengaduan/complaints')->group(function () {
        Route::get('/', [PengaduanController::class, 'index'])->name('pengaduan.index');
        Route::get('/create', [PengaduanController::class, 'create'])->name('pengaduan.create');
        Route::get('{id}/edit', [PengaduanController::class, 'edit'])->name('pengaduan.edit');

        Route::post('/store', [PengaduanController::class, 'store'])->name('pengaduan.store');
        Route::post('{id}/update', [PengaduanController::class, 'update'])->name('pengaduan.update');
        Route::post('destroy', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');

        Route::get('{id}/view', [PengaduanController::class, 'view'])->name('pengaduan.view');
        
    });

    // ======================================= SIUP ==================================================================
    
    // Route::get('/pelayanan/siup/siup-card', $controller_path . '\layanan\siupController@index')->name('pelayanan-card-siup');
    Route::prefix('pelayanan/siup/siup-card')->group(function () {
        Route::get('/', [SIUPController::class,'index'])->name('siup.index');
        Route::get('/create', [SIUPController::class,'create'])->name('siup.create');
        Route::get('{id}/edit', [SIUPController::class,'edit'])->name('siup.edit');

        Route::post('/store', [SIUPController::class,'store'])->name('siup.store');
        Route::put('{id}/update', [SIUPController::class,'update'])->name('siup.update');
        Route::post('destroy', [SIUPController::class,'destroy'])->name('siup.destroy');
    });  

    // ======================================= IMB ==================================================================
   
    // Route::get('/pelayanan/imb/imb-card', $controller_path . '\layanan\imbController@index')->name('pelayanan-card-imb');
    Route::prefix('pelayanan/imb/imb-card')->group(function () {
        Route::get('/', [IMBController::class,'index'])->name('imb.index');
        Route::get('/create', [IMBController::class,'create'])->name('imb.create');
        Route::get('{id}/edit', [IMBController::class,'edit'])->name('imb.edit');

        Route::post('/store', [IMBController::class,'store'])->name('imb.store');
        Route::put('{id}/update', [IMBController::class,'update'])->name('imb.update');
        Route::post('destroy', [IMBController::class,'destroy'])->name('imb.destroy');
    });  

    // ======================================= KIP ==================================================================

    // Route::get('/pelayanan/kip/kip-card', $controller_path . '\layanan\KIPController@index')->name('pelayanan-card-kip');
    Route::prefix('pelayanan/kip/kip-card')->group(function () {
        Route::get('/', [KIPController::class, 'index'])->name('kip.index');
        Route::get('/create', [KIPController::class, 'create'])->name('kip.create');
        Route::get('{id}/edit', [KIPController::class, 'edit'])->name('kip.edit');
        Route::get('{id}/view', [KIPController::class, 'view'])->name('kip.view');

        Route::post('/store', [KIPController::class, 'store'])->name('kip.store');
        Route::put('{id}/update', [KIPController::class, 'update'])->name('kip.update');
        Route::post('destroy', [KIPController::class, 'destroy'])->name('kip.destroy');
    });


    // ========================================= AKTA KELAHIRAN =====================================================

    Route::prefix('kependudukan/birth-list')->group(function () {
        Route::get('/birth-card', [AktaKelahiranController::class, 'index'])->name('aktakelahiran.index');
        Route::get('/create-birth-card', [AktaKelahiranController::class, 'create'])->name('aktakelahiran.create');
        Route::get('{id}/update-birth-card', [AktaKelahiranController::class, 'edit'])->name('aktakelahiran.edit');
        Route::get('{id}/view-birth-card', [AktaKelahiranController::class, 'view'])->name('aktakelahiran.view');

        Route::POST('/store', [AktaKelahiranController::class, 'store'])->name('aktakelahiran.store');
        Route::PUT('{id}/update', [AktaKelahiranController::class, 'update'])->name('aktakelahiran.update');
        Route::post('destroy', [AktaKelahiranController::class, 'destroy'])->name('aktakelahiran.destroy');

        Route::get('{id}/view-birth-card', [AktaKelahiranController::class, 'view'])->name('aktakelahiran.view');
    });

    // ========================================= AKTA KEMATIAN ======================================================
    Route::prefix('kependudukan/death-list')->group(function () {
        Route::get('/death-card', [AktaKematianController::class, 'index'])->name('aktakematian.index');
        Route::get('/create-death-card', [AktaKematianController::class, 'create'])->name('aktakematian.create');
        Route::get('{id}/update-death-card', [AktaKematianController::class, 'edit'])->name('aktakematian.edit');
        Route::post('/store', [AktaKematianController::class, 'store'])->name('aktakematian.store');
        Route::put('{id}/update', [AktaKematianController::class, 'update'])->name('aktakematian.update');
        Route::post('destroy', [AktaKematianController::class, 'destroy'])->name('aktakematian.destroy');

        Route::get('{id}/view-death-card', [AktaKematianController::class, 'view'])->name('aktakematian.view');
    });
});

// ========================================== DEFAULT TEMPLATE ROUTE ======================================================

// Main Page Route
// Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard');

//kk-card
// Route::get('/kependudukan/fams-list/family-card', $controller_path . '\administrasi\KKController@index')->name('kependudukan-family-card');
// Route::get('/kependudukan/fams-list/create-kk', $controller_path . '\administrasi\KKController@create')->name('kependudukan-family-card');
// Route::get('/kependudukan/fams-list/update-kk', $controller_path . '\administrasi\KKController@update')->name('kependudukan-family-card');

//birth-card


//death-card
// Route::get('/kependudukan/death-list/death-card', $controller_path . '\administrasi\DeathController@index')->name('kependudukan-death-card');
// Route::get('/kependudukan/death-list/create-death-card', $controller_path . '\administrasi\DeathController@create')->name('kependudukan-death-card');
// Route::get('/kependudukan/death-list/update-death-card', $controller_path . '\administrasi\DeathController@update')->name('kependudukan-death-card');
// Route::get('/kependudukan/death-list/view-death-card', $controller_path . '\administrasi\DeathController@view')->name('kependudukan-death-card');

// //marriage-card
// Route::get('/kependudukan/marriage-list/marriage-card', $controller_path . '\administrasi\MarriageController@index')->name('kependudukan-marriage-card');
// Route::get('/kependudukan/marriage-list/create-marriage-card', $controller_path . '\administrasi\MarriageController@create')->name('kependudukan-marriage-card');
// Route::get('/kependudukan/marriage-list/update-marriage-card', $controller_path . '\administrasi\MarriageController@update')->name('kependudukan-marriage-card');
// Route::get('/kependudukan/marriage-list/view-marriage-card', $controller_path . '\administrasi\MarriageController@view')->name('kependudukan-marriage-card');

//pengaduan
// Route::get('/pengaduan/complaints', $controller_path . '\complaint_news\ComplaintsController@index')->name('info-complaints');
// Route::get('/pengaduan/create-complaints', $controller_path . '\complaint_news\ComplaintsController@create')->name('info-complaints');
// Route::get('/pengaduan/update-complaints', $controller_path . '\complaint_news\ComplaintsController@update')->name('info-complaints');

//info
// Route::get('/info/news', $controller_path . '\complaint_news\NewsController@index')->name('info-news');


//perizinan
// Route::get('/pelayanan/imb/imb-card', $controller_path . '\permission\imbPermit@index')->name('izin-bangunan');
// Route::get('/pelayanan/imb/create-imb-permit', $controller_path . '\permission\imbPermit@create')->name('izin-bangunan');
// Route::get('/pelayanan/imb/update-imb-permit', $controller_path . '\permission\imbPermit@update')->name('izin-bangunan');
// Route::get('/pelayanan/imb/view-imb-permit', $controller_path . '\permission\imbPermit@view')->name('izin-bangunan');

// Route::get('/pelayanan/bussiness/bussiness-licence', $controller_path . '\permission\BussinessLicence@index')->name('izin-bisnis');
// Route::get('/pelayanan/bussiness/create-bussiness-licence', $controller_path . '\permission\BussinessLicence@create')->name('izin-bisnis');
// Route::get('/pelayanan/bussiness/update-bussiness-licence', $controller_path . '\permission\BussinessLicence@update')->name('izin-bisnis');
// Route::get('/pelayanan/bussiness/view-bussiness-licence', $controller_path . '\permission\BussinessLicence@view')->name('izin-bisnis');

//statistik
// Route::get('/pelayanan/education', $controller_path . '\pelayanan\education@index')->name('pelayanan-education');
// Route::get('/pelayanan/tax-finance', $controller_path . '\pelayanan\TaxFinance@index')->name('pelayanan-tax-finance');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

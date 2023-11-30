<?php

use App\Http\Controllers\AktaPernikahanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KIPController;
use App\Http\Controllers\KTPController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';


Auth::routes();

Route::group(['middleware' => 'auth'],function () {    
    Route::get('/',[HomeController::class,'index'])->name('home');

    // ============== USER MANAGEMENT =================================
    Route::prefix('users')->group(function () {        
        Route::get('/user-management',[UserController::class,'index'])->name('user-management');
        Route::get('/add-user', [UserController::class,'create'])->name('user-management.create');
        Route::post('/add-user', [UserController::class,'store'])->name('user-management.store');

        Route::get('/{id}/edit-user', [UserController::class,'edit'])->name('user-management.edit');
        Route::put('/{id}/edit-user', [UserController::class,'update'])->name('user-management.update');
        Route::post('/edit-user', [UserController::class,'destroy'])->name('user-management.destroy');
    });

    // =============== KTP =============================================
    Route::prefix('kependudukan')->group(function () {        
        Route::get('/id-card/id-card-person', [KTPController::class,'index'])->name('kependudukan-ktp.index');
        Route::get('/id-card/create-id-card', [KTPController::class,'create'])->name('ktp.create');
        Route::post('/id-card/store-id-card', [KTPController::class,'store'])->name('ktp.store');
        Route::get('/id-card/{id}/update-id-card', [KTPController::class,'edit'])->name('ktp.edit');
        Route::PUT('/id-card/{id}/edit-id-card', [KTPController::class,'update'])->name('ktp.update');
        Route::post('/id-card/create-id-card', [KTPController::class,'destroy'])->name('ktp.destroy');
    });

    // =============== KK =============================================
    Route::prefix('kependudukan')->group(function () {        
        Route::get('/fams-list/kk-card', [KKController::class,'index'])->name('kependudukan-kk.index');
        Route::get('/fams-list/create-fams-list', [KKController::class,'create'])->name('kk.create');
        Route::post('/fams-list/store-fams-list', [KKController::class,'store'])->name('kk.store');
        Route::get('/fams-list/{id}/update-fams-list', [KKController::class,'edit'])->name('kk.edit');
        Route::PUT('/fams-list/{id}/edit-fams-list', [KKController::class,'update'])->name('kk.update');
        Route::post('/fams-list/create-fams-list', [KKController::class,'destroy'])->name('kk.destroy');
    });
    
    // =================== AKTA PERNIKAHAN =============================
    Route::prefix('/kependudukan/marriage-list/')->group(function () {
        Route::get('marriage-card', [AktaPernikahanController::class,'index'])->name('pernikahan.index');
        Route::get('create-marriage-card', [AktaPernikahanController::class,'create'])->name('pernikahan.create');
        Route::get('{id}/update-marriage-card', [AktaPernikahanController::class,'edit'])->name('pernikahan.edit');
        Route::get('{id}/view-marriage-card', [AktaPernikahanController::class,'view'])->name('pernikahan.view');
        Route::post('create-marriage-card/store', [AktaPernikahanController::class,'store'])->name('pernikahan.store');
        Route::put('update-marriage-card/{id}/update', [AktaPernikahanController::class,'update'])->name('pernikahan.update');
        Route::post('create-marriage-card/destroy', [AktaPernikahanController::class,'destroy'])->name('pernikahan.destroy');
    });
   
    // ==================== INFORMASI ==================================
    Route::prefix('info')->group(function () {
        Route::get('/news', [InformasiController::class,'index'])->name('informasi.index');
        Route::post('/news/store', [InformasiController::class,'store'])->name('informasi.store');
        Route::post('/news/delete', [InformasiController::class,'delete'])->name('informasi.destroy');
     });

    //  ===================================== PENGADUAN ============================================================
    Route::prefix('pengaduan/complaints')->group(function () {
        Route::get('/', [PengaduanController::class,'index'])->name('pengaduan.index');
        Route::get('/create', [PengaduanController::class,'create'])->name('pengaduan.create');
        Route::get('{id}/edit', [PengaduanController::class,'edit'])->name('pengaduan.edit');

        Route::post('/store', [PengaduanController::class,'store'])->name('pengaduan.store');
        Route::post('{id}/update', [PengaduanController::class,'update'])->name('pengaduan.update');
        Route::post('destroy', [PengaduanController::class,'destroy'])->name('pengaduan.destroy');
    });    


    // ======================================= KIP ==================================================================

    // Route::get('/pelayanan/kip/kip-card', $controller_path . '\layanan\KIPController@index')->name('pelayanan-card-kip');
    Route::prefix('pelayanan/kip/kip-card')->group(function () {
        Route::get('/', [KIPController::class,'index'])->name('kip.index');
        Route::get('/create', [KIPController::class,'create'])->name('kip.create');
        Route::get('{id}/edit', [KIPController::class,'edit'])->name('kip.edit');

        Route::post('/store', [KIPController::class,'store'])->name('kip.store');
        Route::put('{id}/update', [KIPController::class,'update'])->name('kip.update');
        Route::post('destroy', [KIPController::class,'destroy'])->name('kip.destroy');
    });    

    
    // ========================================= AKTA KELAHIRAN =====================================================

    // ========================================= AKTA KEMATIAN ======================================================

    

});

// ========================================== DEFAULT TEMPLATE ROUTE ======================================================

// Main Page Route
// Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard');

//kk-card
Route::get('/kependudukan/fams-list/family-card', $controller_path . '\administrasi\KKController@index')->name('kependudukan-family-card');
Route::get('/kependudukan/fams-list/create-kk', $controller_path . '\administrasi\KKController@create')->name('kependudukan-family-card');
Route::get('/kependudukan/fams-list/update-kk', $controller_path . '\administrasi\KKController@update')->name('kependudukan-family-card');

//birth-card
Route::get('/kependudukan/birth-list/birth-card', $controller_path . '\administrasi\BirthController@index')->name('kependudukan-birth-card');
Route::get('/kependudukan/birth-list/create-birth-card', $controller_path . '\administrasi\BirthController@create')->name('kependudukan-birth-card');
Route::get('/kependudukan/birth-list/update-birth-card', $controller_path . '\administrasi\BirthController@update')->name('kependudukan-birth-card');
Route::get('/kependudukan/birth-list/view-birth-card', $controller_path . '\administrasi\BirthController@view')->name('kependudukan-birth-card');

//death-card
Route::get('/kependudukan/death-list/death-card', $controller_path . '\administrasi\DeathController@index')->name('kependudukan-death-card');
Route::get('/kependudukan/death-list/create-death-card', $controller_path . '\administrasi\DeathController@create')->name('kependudukan-death-card');
Route::get('/kependudukan/death-list/update-death-card', $controller_path . '\administrasi\DeathController@update')->name('kependudukan-death-card');
Route::get('/kependudukan/death-list/view-death-card', $controller_path . '\administrasi\DeathController@view')->name('kependudukan-death-card');

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
Route::get('/perizinan/building/building-permit', $controller_path . '\permission\BuildingPermit@index')->name('izin-bangunan');
Route::get('/perizinan/building/create-building-permit', $controller_path . '\permission\BuildingPermit@create')->name('izin-bangunan');
Route::get('/perizinan/building/update-building-permit', $controller_path . '\permission\BuildingPermit@update')->name('izin-bangunan');
Route::get('/perizinan/building/view-building-permit', $controller_path . '\permission\BuildingPermit@view')->name('izin-bangunan');

Route::get('/perizinan/bussiness/bussiness-licence', $controller_path . '\permission\BussinessLicence@index')->name('izin-bisnis');
Route::get('/perizinan/bussiness/create-bussiness-licence', $controller_path . '\permission\BussinessLicence@create')->name('izin-bisnis');
Route::get('/perizinan/bussiness/update-bussiness-licence', $controller_path . '\permission\BussinessLicence@update')->name('izin-bisnis');
Route::get('/perizinan/bussiness/view-bussiness-licence', $controller_path . '\permission\BussinessLicence@view')->name('izin-bisnis');

//layanan
Route::get('/pelayanan/tax-finance', $controller_path . '\layanan\TaxFinance@index')->name('pelayanan-tax-finance');

//kks
Route::get('/pelayanan/kks/kks-card', $controller_path . '\layanan\KKSController@index')->name('pelayanan-kks-card');
Route::get('/pelayanan/kks/create-kks', $controller_path . '\layanan\KKSController@create')->name('pelayanan-kks-card');
Route::get('/pelayanan/kks/update-kks', $controller_path . '\layanan\KKSController@update')->name('pelayanan-kks-card');

//kis
Route::get('/pelayanan/kis/kis-card', $controller_path . '\layanan\KISController@index')->name('pelayanan-card-kis');
Route::get('/pelayanan/kis/create-kis', $controller_path . '\layanan\KISController@create')->name('pelayanan-card-kis');
Route::get('/pelayanan/kis/update-kis', $controller_path . '\layanan\KISController@update')->name('pelayanan-card-kis');

//kip
// Route::get('/pelayanan/kip/kip-card', $controller_path . '\layanan\KIPController@index')->name('pelayanan-card-kip');
// Route::get('/pelayanan/kip/create-kip', $controller_path . '\layanan\KIPController@create')->name('pelayanan-card-kip');
// Route::get('/pelayanan/kip/update-kip', $controller_path . '\layanan\KIPController@update')->name('pelayanan-card-kip');
// Route::get('/pelayanan/kip/view-kip', $controller_path . '\layanan\KIPController@view')->name('pelayanan-card-kip');

//statistik
// Route::get('/pelayanan/education', $controller_path . '\pelayanan\education@index')->name('pelayanan-education');
// Route::get('/pelayanan/tax-finance', $controller_path . '\pelayanan\TaxFinance@index')->name('pelayanan-tax-finance');

// ===============================================================================================================
// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

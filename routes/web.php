<?php

use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard');

// user-management
Route::get('/users/user-management', $controller_path . '\user\Users@index')->name('user-management');
Route::post('/users/add-user', $controller_path . '\user\Users@addUsers')->name('user-management');
Route::post('/users/edit-user', $controller_path . '\user\Users@editUsers')->name('user-management');

//kependudukan
//id-card
Route::get('/kependudukan/id-card/id-card-person', $controller_path . '\administrasi\IdCard@index')->name('kependudukan-id-card-person');
Route::get('/kependudukan/id-card/create-id-card', $controller_path . '\administrasi\IdCard@create')->name('kependudukan-id-card-person');
Route::get('/kependudukan/id-card/update-id-card', $controller_path . '\administrasi\IdCard@update')->name('kependudukan-id-card-person');

//kk-card
Route::get('/kependudukan/fams-list/family-card', $controller_path . '\administrasi\KKCard@index')->name('kependudukan-family-card');
Route::get('/kependudukan/fams-list/create-kk', $controller_path . '\administrasi\KKCard@create')->name('kependudukan-family-card');
Route::get('/kependudukan/fams-list/update-kk', $controller_path . '\administrasi\KKCard@update')->name('kependudukan-family-card');

//birth-card
Route::get('/kependudukan/birth-list/birth-card', $controller_path . '\administrasi\BirthCard@index')->name('kependudukan-birth-card');
Route::get('/kependudukan/birth-list/create-birth-card', $controller_path . '\administrasi\BirthCard@create')->name('kependudukan-birth-card');
Route::get('/kependudukan/birth-list/update-birth-card', $controller_path . '\administrasi\BirthCard@update')->name('kependudukan-birth-card');
Route::get('/kependudukan/birth-list/view-birth-card', $controller_path . '\administrasi\BirthCard@view')->name('kependudukan-birth-card');

//death-card
Route::get('/kependudukan/death-list/death-card', $controller_path . '\administrasi\DeathCard@index')->name('kependudukan-death-card');
Route::get('/kependudukan/death-list/create-death-card', $controller_path . '\administrasi\DeathCard@create')->name('kependudukan-death-card');
Route::get('/kependudukan/death-list/update-death-card', $controller_path . '\administrasi\DeathCard@update')->name('kependudukan-death-card');
Route::get('/kependudukan/death-list/view-death-card', $controller_path . '\administrasi\DeathCard@view')->name('kependudukan-death-card');

//marriage-card
Route::get('/kependudukan/marriage-list/marriage-card', $controller_path . '\administrasi\MarriageCard@index')->name('kependudukan-marriage-card');
Route::get('/kependudukan/marriage-list/create-marriage-card', $controller_path . '\administrasi\MarriageCard@create')->name('kependudukan-marriage-card');
Route::get('/kependudukan/marriage-list/update-marriage-card', $controller_path . '\administrasi\MarriageCard@update')->name('kependudukan-marriage-card');
Route::get('/kependudukan/marriage-list/view-marriage-card', $controller_path . '\administrasi\MarriageCard@view')->name('kependudukan-marriage-card');

//pengaduan
Route::get('/pengaduan/complaints', $controller_path . '\complaint_news\ComplaintsController@index')->name('info-complaints');
Route::get('/pengaduan/create-complaints', $controller_path . '\complaint_news\ComplaintsController@create')->name('info-complaints');
Route::get('/pengaduan/update-complaints', $controller_path . '\complaint_news\ComplaintsController@update')->name('info-complaints');

//info
Route::get('/info/news', $controller_path . '\complaint_news\NewsController@index')->name('info-news');

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
Route::get('/pelayanan/education', $controller_path . '\layanan\Education@index')->name('pelayanan-education');
Route::get('/pelayanan/tax-finance', $controller_path . '\layanan\TaxFinance@index')->name('pelayanan-tax-finance');

//kks
Route::get('/pelayanan/kks/kks-card', $controller_path . '\layanan\KKS@index')->name('pelayanan-kks-card');
Route::get('/pelayanan/kks/create-kks-card', $controller_path . '\layanan\KKS@create')->name('pelayanan-kks-card');
Route::get('/pelayanan/kks/update-kks-card', $controller_path . '\layanan\KKS@update')->name('pelayanan-kks-card');
Route::get('/pelayanan/kks/view-kks-card', $controller_path . '\layanan\KKS@view')->name('pelayanan-kks-card');

//kis
Route::get('/pelayanan/kis/kis-card', $controller_path . '\layanan\KIS@index')->name('pelayanan-card-kis');
Route::get('/pelayanan/kis/kis-card', $controller_path . '\layanan\KIS@create')->name('pelayanan-card-kis');
Route::get('/pelayanan/kis/kis-card', $controller_path . '\layanan\KIS@update')->name('pelayanan-card-kis');

//kip
Route::get('/pelayanan/kip/kip-card', $controller_path . '\layanan\KIP@index')->name('pelayanan-card-kip');
Route::get('/pelayanan/kip/kip-card', $controller_path . '\layanan\KIP@create')->name('pelayanan-card-kip');
Route::get('/pelayanan/kip/kip-card', $controller_path . '\layanan\KIP@update')->name('pelayanan-card-kip');

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

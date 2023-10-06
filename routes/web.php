<?php

use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard');

// user-management
Route::get('/users/user-management', $controller_path . '\user\Users@index')->name('user-management');
Route::get('/users/add-user', $controller_path . '\user\AddUsers@index')->name('user-management');
Route::get('/users/edit-user', $controller_path . '\user\EditUsers@index')->name('user-management');

//kependudukan
//id-card
Route::get('/kependudukan/id-card/id-card-person', $controller_path . '\admin\KTP@index')->name('kependudukan-id-card-person');
Route::get('/kependudukan/id-card/id-card-person', $controller_path . '\admin\KTP@index')->name('kependudukan-id-card-person');
Route::get('/kependudukan/id-card/id-card-person', $controller_path . '\admin\KTP@index')->name('kependudukan-id-card-person');

//kk-card
Route::get('/kependudukan/fams-list/family-card', $controller_path . '\admin\FamilyCard@index')->name('kependudukan-family-card');
Route::get('/kependudukan/fams-list/create-kk', $controller_path . '\admin\FamilyCard@index')->name('kependudukan-family-card');
Route::get('/kependudukan/fams-list/update-kk', $controller_path . '\admin\FamilyCard@index')->name('kependudukan-family-card');

//birth-card
Route::get('/kependudukan/birth-list/birth-card', $controller_path . '\admin\BirthCard@index')->name('kependudukan-birth-card');
Route::get('/kependudukan/birth-list/birth-card', $controller_path . '\admin\BirthCard@index')->name('kependudukan-birth-card');
Route::get('/kependudukan/birth-list/birth-card', $controller_path . '\admin\BirthCard@index')->name('kependudukan-birth-card');

//death-card
Route::get('/kependudukan/death-list/death-card', $controller_path . '\admin\DeathCard@index')->name('kependudukan-death-card');
Route::get('/kependudukan/death-list/death-card', $controller_path . '\admin\DeathCard@index')->name('kependudukan-death-card');
Route::get('/kependudukan/death-list/death-card', $controller_path . '\admin\DeathCard@index')->name('kependudukan-death-card');

//marriage-card
Route::get('/kependudukan/marriage-list/marriage-card', $controller_path . '\admin\MarriageCard@index')->name('kependudukan-marriage-card');
Route::get('/kependudukan/marriage-list/marriage-card', $controller_path . '\admin\MarriageCard@index')->name('kependudukan-marriage-card');
Route::get('/kependudukan/marriage-list/marriage-card', $controller_path . '\admin\MarriageCard@index')->name('kependudukan-marriage-card');

//kis
Route::get('/kartu-indonesia/kis-card', $controller_path . '\card\KISCard@index')->name('card-kis');
Route::get('/kartu-indonesia/kis-card', $controller_path . '\card\KISCard@index')->name('card-kis');
Route::get('/kartu-indonesia/kis-card', $controller_path . '\card\KISCard@index')->name('card-kis');

//kip
Route::get('/kartu-indonesia/kip-card', $controller_path . '\card\KIPCard@index')->name('card-kip');
Route::get('/kartu-indonesia/kip-card', $controller_path . '\card\KIPCard@index')->name('card-kip');
Route::get('/kartu-indonesia/kip-card', $controller_path . '\card\KIPCard@index')->name('card-kip');

//pengaduan
Route::get('/pengaduan/complaints', $controller_path . '\complaint_news\ComplaintsController@index')->name('pengajuan-info-complaints');
Route::get('/pengaduan/news', $controller_path . '\complaint_news\NewsController@index')->name('pengajuan-info-news');

//perizinan
Route::get('/perizinan/building-permit', $controller_path . '\permission\BuildingPermit@index')->name('izin-bangunan');
Route::get('/perizinan/business-licence', $controller_path . '\permission\BusinessLicence@index')->name('izin-bisnis');

//layanan
Route::get('/layanan/education', $controller_path . '\layanan\education@index')->name('layanan-education');
Route::get('/layanan/tax-finance', $controller_path . '\layanan\TaxFinance@index')->name('layanan-tax-finance');
Route::get('/layanan/kks-card', $controller_path . '\layanan\KKSCard@index')->name('layanan-kks-card');

//statistik
Route::get('/layanan/education', $controller_path . '\layanan\education@index')->name('layanan-education');
Route::get('/layanan/tax-finance', $controller_path . '\layanan\TaxFinance@index')->name('layanan-tax-finance');




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

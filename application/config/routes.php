<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'CPages/guest';

$route['beranda'] = 'CPages/guest';
$route['lowongan'] = 'CGuest/lowongan';
$route['lowongan/detail/(:num)'] = 'CGuest/detail_lowongan/$1';


$route['karyawan/dashboard'] = 'CPages/karyawan';

$route['karyawan/check-in'] = 'CKaryawan/check_in';
$route['karyawan/check-out'] = 'CKaryawan/check_out';

$route['karyawan/ajukan-cuti'] = 'CKaryawan/ajukan_cuti';
$route['karyawan/ajukan-cuti/create'] = 'CKaryawan/ajukan_cuti_create';
$route['karyawan/ajukan-cuti/store'] = 'CKaryawan/ajukan_cuti_store';

$route['karyawan/slip-gaji'] = 'CKaryawan/slip_gaji';



$route['manager/dashboard'] = 'CPages/manager';

$route['manager/data-kehadiran'] = 'CDataKehadiran';
$route['manager/data-kehadiran/create'] = 'CDataKehadiran/create';
$route['manager/data-kehadiran/store'] = 'CDataKehadiran/store';
$route['manager/data-kehadiran/edit/(:num)'] = 'CDataKehadiran/edit/$1';
$route['manager/data-kehadiran/update/(:num)'] = 'CDataKehadiran/update/$1';
$route['manager/data-kehadiran/delete/(:num)'] = 'CDataKehadiran/delete/$1';

$route['manager/data-kinerja'] = 'CDataKinerja';
$route['manager/data-kehadiran/create'] = 'CDataKehadiran/create';
$route['manager/data-kehadiran/store'] = 'CDataKehadiran/store';
$route['manager/data-kehadiran/edit/(:num)'] = 'CDataKehadiran/edit/$1';
$route['manager/data-kehadiran/delete/(:num)'] = 'CDataKehadiran/delete/$1';

$route['manager/data-karyawan'] = 'CDataKaryawan';
$route['manager/data-karyawan/create'] = 'CDataKaryawan/create';
$route['manager/data-karyawan/store'] = 'CDataKaryawan/store';
$route['manager/data-karyawan/edit/(:num)'] = 'CDataKaryawan/edit/$1';
$route['manager/data-karyawan/update/(:num)'] = 'CDataKaryawan/update/$1';
$route['manager/data-karyawan/delete/(:num)'] = 'CDataKaryawan/delete/$1';

$route['manager/data-gaji'] = 'CDataGaji';
$route['manager/data-gaji/create'] = 'CDataGaji/create';
$route['manager/data-gaji/store'] = 'CDataGaji/store';
$route['manager/data-gaji/edit/(:num)'] = 'CDataGaji/edit/$1';
$route['manager/data-gaji/update/(:num)'] = 'CDataGaji/update/$1';
$route['manager/data-gaji/delete/(:num)'] = 'CDataGaji/delete/$1';

$route['manager/data-cuti'] = 'CDataCuti';
$route['manager/data-cuti/create'] = 'CDataCuti/create';
$route['manager/data-cuti/store'] = 'CDataCuti/store';
$route['manager/data-cuti/edit/(:num)'] = 'CDataCuti/edit/$1';
$route['manager/data-cuti/update/(:num)'] = 'CDataCuti/update/$1';
$route['manager/data-cuti/delete/(:num)'] = 'CDataCuti/delete/$1';

$route['manager/data-kinerja'] = 'CDataKinerja';
$route['manager/data-kinerja/create'] = 'CDataKinerja/create';
$route['manager/data-kinerja/store'] = 'CDataKinerja/store';
$route['manager/data-kinerja/edit/(:num)'] = 'CDataKinerja/edit/$1';
$route['manager/data-kinerja/update/(:num)'] = 'CDataKinerja/update/$1';
$route['manager/data-kinerja/delete/(:num)'] = 'CDataKinerja/delete/$1';

$route['manager/data-lowongan'] = 'CDataLowongan';
$route['manager/data-lowongan/create'] = 'CDataLowongan/create';
$route['manager/data-lowongan/store'] = 'CDataLowongan/store';
$route['manager/data-lowongan/edit/(:num)'] = 'CDataLowongan/edit/$1';
$route['manager/data-lowongan/update/(:num)'] = 'CDataLowongan/update/$1';
$route['manager/data-lowongan/delete/(:num)'] = 'CDataLowongan/delete/$1';

$route['manager/lamaran-masuk'] = 'CLamaranMasuk';
$route['manager/lamaran-masuk/detail/(:num)'] = 'CLamaranMasuk/detail/$1';

$route['manager/laporan-kehadiran'] = 'CLaporanKehadiran';

$route['manager/laporan-gaji'] = 'CLaporanGaji';


$route['login'] = 'CAuth';
$route['registrasi'] = 'CAuth/registrasi';
$route['logout'] = 'CAuth/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

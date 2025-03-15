<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Memuat file routing sistem terlebih dahulu, sehingga kita bisa menimpanya nanti
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// Mendefinisikan rute default
$routes->get('/', 'Home::index');

// Rute tambahan
$routes->get('/about', 'About::index'); // Rute untuk halaman Tentang
$routes->get('/contact', 'Contact::index'); // Rute untuk halaman Kontak
$routes->get('/material', 'Material::index'); // Rute untuk halaman Materi
$routes->get('/quiz', 'Quiz::index'); // Rute untuk halaman Kuis

// Contoh rute untuk materi spesifik
$routes->get('/material/variabel', 'Material::variabel'); // Rute untuk materi Variabel
$routes->get('/material/kondisi-percabangan', 'Material::kondisiPercabangan'); // Rute untuk materi Kondisi Percabangan
$routes->get('/material/looping', 'Material::looping'); // Rute untuk materi Looping
$routes->get('/material/fungsi-dan-prosedur', 'Material::fungsiDanProsedur'); // Rute untuk materi Fungsi dan Prosedur
$routes->get('/material/array', 'Material::array'); // Rute untuk materi Array
$routes->get('/material/stack', 'Material::stack'); // Rute untuk materi Stack
$routes->get('/material/queue', 'Material::queue'); // Rute untuk materi Queue
$routes->get('/material/linked-list', 'Material::linkedList'); // Rute untuk materi Linked List
$routes->get('/material/sorting-dan-searching', 'Material::sortingDanSearching'); // Rute untuk materi Sorting dan Searching
$routes->get('/material/matriks', 'Material::matriks'); // Rute untuk materi Matriks
$routes->get('/material/pointer', 'Material::pointer'); // Rute untuk materi Pointer
$routes->get('/material/tree', 'Material::tree'); // Rute untuk materi Tree

// Contoh rute untuk kuis
$routes->get('/quiz/variabel', 'Quiz::variabel'); // Rute untuk Kuis Variabel
$routes->get('/quiz/kondisi-percabangan', 'Quiz::kondisiPercabangan'); // Rute untuk Kuis Kondisi Percabangan
$routes->get('/quiz/looping', 'Quiz::looping'); // Rute untuk Kuis Looping
$routes->get('/quiz/fungsi-dan-prosedur', 'Quiz::fungsiDanProsedur'); // Rute untuk Kuis Fungsi dan Prosedur
$routes->get('/quiz/array', 'Quiz::array'); // Rute untuk Kuis Array
$routes->get('/quiz/stack', 'Quiz::stack'); // Rute untuk Kuis Stack
$routes->get('/quiz/queue', 'Quiz::queue'); // Rute untuk Kuis Queue
$routes->get('/quiz/linked-list', 'Quiz::linkedList'); // Rute untuk Kuis Linked List
$routes->get('/quiz/sorting-dan-searching', 'Quiz::sortingDanSearching'); // Rute untuk Kuis Sorting dan Searching
$routes->get('/quiz/matriks', 'Quiz::matriks'); // Rute untuk Kuis Matriks
$routes->get('/quiz/pointer', 'Quiz::pointer'); // Rute untuk Kuis Pointer
$routes->get('/quiz/tree', 'Quiz::tree'); // Rute untuk Kuis Tree
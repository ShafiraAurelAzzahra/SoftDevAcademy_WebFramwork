<?php

namespace Config;

use RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Memuat file routing sistem terlebih dahulu, sehingga kita bisa menimpanya nanti
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// Mendefinisikan rute default
$routes->get('/', 'Home::index'); // Rute untuk halaman utama

// Rute tambahan
$routes->get('/about', 'About::index'); // Rute untuk halaman Tentang
$routes->get('/contact', 'Contact::index'); // Rute untuk halaman Kontak
$routes->get('/material', 'Material::index'); // Rute untuk halaman Materi
$routes->get('/quiz', 'Quiz::index'); // Rute untuk halaman Kuis

// Rute untuk homepage
$routes->get('/homepage', 'Homepage::index'); // Rute untuk halaman Homepage

// Contoh rute untuk materi spesifik
$routes->get('materi/materi-variabel', 'Materi::materiVariabel');
$routes->get('materi/materi-kondisi', 'Materi::materiKondisi');
$routes->get('materi/MateriLooping', 'Materi::MateriLooping');
$routes->get('materi/MateriFungsidanProsedur', 'Materi::MateriFungsidanProsedur');
$routes->get('materi/MateriArray', 'Materi::MateriArray');
$routes->get('materi/MateriStack', 'Materi::MateriStack');
$routes->get('materi/MateriQueue', 'Materi::MateriQueue');
$routes->get('materi/MateriLinkedList', 'Materi::MateriLinkedList');
$routes->get('materi/MateriSortingandSearching', 'Materi::MateriSortingandSearching');
$routes->get('materi/MateriMatriks', 'Materi::MateriMatriks');
$routes->get('materi/MateriPointer', 'Materi::MateriPointer');
$routes->get('materi/MateriTree', 'Materi::MateriTree');


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
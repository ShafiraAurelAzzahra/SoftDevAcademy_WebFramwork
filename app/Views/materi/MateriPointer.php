<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pointer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('img/Logo.jpg') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!-- GANTI path CSS jadi pakai base_url -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/icon_navigasi.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/desain.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/magnific-popup.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/materi.css') ?>" rel="stylesheet">

</head>

<body>

    <main>

        <section class="homepage" id="homepage">
            <div class="heroText">
                <h1 class="news-detail-title text-white mt-lg-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    Pointer
                </h1>

                <div class="d-flex justify-content-center align-items-center">
                    <a href="#" class="text-secondary-white-color social-share-link">
                        <i class="bi-chat-square-fill me-1"></i>
                    </a>
                    <a href="#" class="social-share-link bi-bookmark-fill ms-3 me-4"></a>
                </div>
            </div>

            <div class="videoWrapper position-relative">
                <img src="<?= base_url('Materi.jpg') ?>" class="img-fluid news-detail-image" alt="">

            </div>

            <div class="overlay"></div>
        </section>

        <!-- Bar dengan Tombol Kembali -->
        <div class="back-bar">
            <div class="container back-bar-content">
                <a href="javascript:history.back()" class="back-button">
                    <i class="bi bi-arrow-left-circle me-2"></i> Kembali
                </a>
                <span class="module-tag">Materi : Pointer</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Pointer</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Pointer adalah sebuah variabel yang menyimpan alamat memori dari variabel lain. Pointer memungkinkan kita untuk mengakses dan memanipulasi data secara langsung di memori, yang dapat meningkatkan efisiensi dan fleksibilitas dalam pemrograman.</p>

                                <p>Fungsi</p>
                                <p>Pointer memiliki beberapa fungsi utama dalam pemrograman:</p>
                                <ul>
                                    <li><strong>Akses Langsung ke Memori:</strong> Memungkinkan manipulasi data pada lokasi memori tertentu secara langsung.</li>
                                    <li><strong>Menghemat Memori:</strong> Dapat digunakan untuk menyimpan alamat daripada nilai yang sebenarnya, menghemat ruang memori.</li>
                                    <li><strong>Parameter Passing:</strong> Membantu dalam melewatkan variabel besar ke fungsi tanpa membuat salinan, dengan cara passing by reference.</li>
                                    <li><strong>Dynamic Memory Allocation:</strong> Digunakan dalam alokasi memori dinamis dengan fungsi seperti malloc, calloc, dan free di C atau new dan delete di C++.</li>
                                </ul>

                                <p>Jenis-Jenis Pointer</p>
                                <ul>
                                    <li><strong>Pointer ke Variabel:</strong> Menunjuk ke alamat memori dari variabel tertentu. Contoh: <code>int *ptr = &var;</code></li>
                                    <li><strong>Pointer ke Pointer:</strong> Menunjuk ke alamat memori dari pointer lain. Contoh: <code>int **ptr2 = &ptr;</code></li>
                                    <li><strong>Null Pointer:</strong> Pointer yang tidak menunjuk ke lokasi memori manapun. Contoh: <code>int *ptr = nullptr;</code></li>
                                    <li><strong>Void Pointer:</strong> Pointer generik yang dapat menunjuk ke tipe data apapun. Contoh: <code>void *ptr;</code></li>
                                    <li><strong>Function Pointer:</strong> Menunjuk ke alamat dari fungsi dan digunakan untuk memanggil fungsi melalui pointer. Contoh: <code>void (*funcPtr)();</code></li>
                                </ul>

                                <p>Contoh Implementasi</p>
                                <p>Studi Kasus: Pengelolaan Data Menggunakan Pointer</p>
                                <p>Misalkan kita ingin mengelola data dinamis dalam sebuah aplikasi yang memerlukan alokasi memori dinamis untuk array dan melewatkan data antara fungsi.</p>
                                <div class="example">
                                    <pre><code>
                <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>;
                <span class="keyword">using</span> <span class="keyword">namespace</span> std;
                
                <span class="comment">// Fungsi untuk mengalokasikan array dinamis</span>
                <span class="type">int</span>* alokasiArray(<span class="type">int</span> ukuran) {
                    <span class="keyword">return</span> <span class="keyword">new</span> <span class="type">int</span>[ukuran];
                }
                
                <span class="comment">// Fungsi untuk mengisi nilai array</span>
                <span class="keyword">void</span> isiArray(<span class="type">int</span>* array, <span class="type">int</span> ukuran) {
                    <span class="keyword">for</span> (<span class="type">int</span> i = <span class="number">0</span>; i &lt; ukuran; ++i) {
                        array[i] = i * <span class="number">10</span>;
                    }
                }
                
                <span class="comment">// Fungsi untuk menampilkan nilai array</span>
                <span class="keyword">void</span> tampilkanArray(<span class="type">int</span>* array, <span class="type">int</span> ukuran) {
                    <span class="keyword">for</span> (<span class="type">int</span> i = <span class="number">0</span>; i &lt; ukuran; ++i) {
                        cout &lt;&lt; <span class="string">"Elemen ke-"</span> &lt;&lt; i &lt;&lt; <span class="string">": "</span> &lt;&lt; array[i] &lt;&lt; endl;
                    }
                }
                
                <span class="comment">// Fungsi utama</span>
                <span class="keyword">int</span> <span class="function">main</span>() {
                    <span class="type">int</span> ukuran = <span class="number">5</span>;
                
                    <span class="comment">// Mengalokasikan memori untuk array dinamis</span>
                    <span class="type">int</span>* myArray = alokasiArray(ukuran);
                
                    <span class="comment">// Mengisi array dengan nilai</span>
                    isiArray(myArray, ukuran);
                
                    <span class="comment">// Menampilkan nilai array</span>
                    tampilkanArray(myArray, ukuran);
                
                    <span class="comment">// Membebaskan memori yang dialokasikan</span>
                    <span class="keyword">delete</span>[] myArray;
                
                    <span class="keyword">return</span> <span class="number">0</span>;
                }
            </code></pre>
                                </div>

                                <p>Output dari kode di atas akan seperti berikut:</p>
                                <pre class="code">Elemen ke-0: 0
Elemen ke-1: 10
Elemen ke-2: 20
Elemen ke-3: 30
Elemen ke-4: 40</pre>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>

    <!-- GANTI path JS jadi pakai base_url -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/scroll.js') ?>"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
    <script src="<?= base_url('js/search.js') ?>"></script>
    <script src="<?= base_url('js/popup.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
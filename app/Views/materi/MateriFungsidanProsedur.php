<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Materi Fungsi dan Prosedur</title>

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
                    Fungsi Dan Prosedur
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
                <span class="module-tag">Materi : Fungsi Dan Prosedur</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Fungsi dan Prosedur</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>
                                    Fungsi adalah sebuah blok kode yang dirancang untuk melakukan tugas tertentu dan dapat dipanggil atau digunakan kembali kapan saja dalam program. Fungsi menerima input (disebut parameter atau argumen), melakukan operasi berdasarkan input tersebut, dan mengembalikan hasil.
                                </p>
                                <p>
                                    Prosedur adalah jenis fungsi yang tidak mengembalikan nilai. Prosedur hanya menjalankan serangkaian perintah atau operasi tanpa memberikan hasil balik.
                                </p>

                                <p>Fungsi</p>
                                <p>
                                    Fungsi dan prosedur memiliki beberapa fungsi utama dalam pemrograman:
                                </p>
                                <ul>
                                    <li>Modularisasi: Membagi program menjadi bagian-bagian yang lebih kecil dan dapat dikelola.</li>
                                    <li>Reusabilitas: Kode yang sering digunakan dapat ditulis sekali dalam fungsi dan dipanggil beberapa kali.</li>
                                    <li>Abstraksi: Menyembunyikan kompleksitas dari pengguna fungsi, yang hanya perlu mengetahui bagaimana cara memanggil fungsi tanpa harus mengerti implementasi detailnya.</li>
                                    <li>Pemeliharaan: Membuat kode lebih mudah untuk diuji dan dipelihara.</li>
                                </ul>

                                <p>Jenis-Jenis</p>
                                <ul>
                                    <li>Fungsi Berdasarkan Return Type:
                                        <ul>
                                            <li>Fungsi yang Mengembalikan Nilai: Menghasilkan nilai tertentu setelah dieksekusi.</li>
                                            <li>Prosedur: Tidak mengembalikan nilai.</li>
                                        </ul>
                                    </li>
                                    <li>Fungsi Berdasarkan Jumlah Argumen:
                                        <ul>
                                            <li>Fungsi Tanpa Argumen: Fungsi yang tidak menerima input.</li>
                                            <li>Fungsi dengan Argumen: Fungsi yang menerima satu atau lebih input untuk diproses.</li>
                                        </ul>
                                    </li>
                                </ul>

                                <p>Contoh Implementasi/Studi Kasus</p>
                                <p>
                                    Studi Kasus: Pengelolaan Data Siswa dengan Fungsi dan Prosedur
                                </p>
                                <p>
                                    Sebuah sekolah ingin mengelola data siswa untuk berbagai keperluan seperti menghitung rata-rata nilai, menemukan nilai tertinggi dan terendah, serta menampilkan informasi siswa.
                                </p>

                                <p>Contoh Coding</p>
                                <div class="example">
                                    <pre>
                                        <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
                                        <span class="keyword">#include</span> <span class="string">&lt;vector&gt;</span>
                                        <span class="keyword">#include</span> <span class="string">&lt;algorithm&gt;</span> <span class="comment">// Untuk fungsi max_element dan min_element</span>
                                        
                                        <span class="keyword">using namespace</span> std;
                                        
                                        <span class="comment">// Fungsi untuk menghitung rata-rata nilai</span>
                                        <span class="type">double</span> <span class="function">hitungRataRata</span>(<span class="keyword">const</span> <span class="type">vector&lt;int&gt;&</span> nilai) {
                                            &emsp;<span class="type">int</span> total = <span class="number">0</span>;
                                            &emsp;<span class="keyword">for</span> (<span class="type">int</span> n : nilai) {
                                                &emsp;&emsp;total += n;
                                            }
                                            &emsp;<span class="keyword">return</span> <span class="keyword">static_cast&lt;</span><span class="type">double</span><span class="keyword">&gt;(</span>total<span class="keyword">)</span> / nilai.size();
                                        }
                                        
                                        <span class="comment">// Fungsi untuk menemukan nilai tertinggi</span>
                                        <span class="type">int</span> <span class="function">nilaiTertinggi</span>(<span class="keyword">const</span> <span class="type">vector&lt;int&gt;&</span> nilai) {
                                            &emsp;<span class="keyword">return</span> *<span class="function">max_element</span>(nilai.begin(), nilai.end());
                                        }
                                        
                                        <span class="comment">// Fungsi untuk menemukan nilai terendah</span>
                                        <span class="type">int</span> <span class="function">nilaiTerendah</span>(<span class="keyword">const</span> <span class="type">vector&lt;int&gt;&</span> nilai) {
                                            &emsp;<span class="keyword">return</span> *<span class="function">min_element</span>(nilai.begin(), nilai.end());
                                        }
                                        
                                        <span class="comment">// Prosedur untuk menampilkan data nilai siswa</span>
                                        <span class="keyword">void</span> <span class="function">tampilkanDataSiswa</span>(<span class="keyword">const</span> <span class="type">vector&lt;vector&lt;int&gt;&gt;&</span> nilaiSiswa) {
                                            &emsp;<span class="keyword">for</span> (<span class="keyword">size_t</span> i = <span class="number">0</span>; i &lt; nilaiSiswa.size(); ++i) {
                                                &emsp;&emsp;<span class="type">double</span> rataRata = <span class="function">hitungRataRata</span>(nilaiSiswa[i]);
                                                &emsp;&emsp;<span class="type">int</span> tertinggi = <span class="function">nilaiTertinggi</span>(nilaiSiswa[i]);
                                                &emsp;&emsp;<span class="type">int</span> terendah = <span class="function">nilaiTerendah</span>(nilaiSiswa[i]);
                                                &emsp;&emsp;<span class="type">cout</span> &lt;&lt; <span class="string">"Data Nilai Siswa "</span> &lt;&lt; i + <span class="number">1</span> &lt;&lt; <span class="string">": "</span>;
                                                &emsp;&emsp;<span class="keyword">for</span> (<span class="type">int</span> nilai : nilaiSiswa[i]) {
                                                    &emsp;&emsp;&emsp;<span class="type">cout</span> &lt;&lt; nilai &lt;&lt; <span class="string">" "</span>;
                                                }
                                                &emsp;&emsp;<span class="type">cout</span> &lt;&lt; <span class="string">"\nRata-rata: "</span> &lt;&lt; rataRata
                                                     &lt;&lt; <span class="string">"\nNilai Tertinggi: "</span> &lt;&lt; tertinggi
                                                     &lt;&lt; <span class="string">"\nNilai Terendah: "</span> &lt;&lt; terendah &lt;&lt; <span class="string">"\n"</span> &lt;&lt; <span class="type">endl</span>;
                                            }
                                        }
                                        
                                        <span class="keyword">int</span> <span class="function">main</span>() {
                                            &emsp;<span class="comment">// Data nilai siswa dalam berbagai mata pelajaran</span>
                                            &emsp;<span class="type">vector&lt;vector&lt;int&gt;&gt;</span> nilaiSiswa = {
                                                &emsp;&emsp;{<span class="number">85</span>, <span class="number">78</span>, <span class="number">92</span>},  <span class="comment">// Nilai siswa 1</span>
                                                &emsp;&emsp;{<span class="number">76</span>, <span class="number">88</span>, <span class="number">90</span>},  <span class="comment">// Nilai siswa 2</span>
                                                &emsp;&emsp;{<span class="number">92</span>, <span class="number">94</span>, <span class="number">89</span>}   <span class="comment">// Nilai siswa 3</span>
                                            };
                                        
                                            &emsp;<span class="comment">// Memanggil prosedur untuk menampilkan data nilai siswa</span>
                                            &emsp;<span class="function">tampilkanDataSiswa</span>(nilaiSiswa);
                                        
                                            &emsp;<span class="keyword">return</span> <span class="number">0</span>;
                                        }
                                                </pre>
                                </div>

                                <p>Penjelasan Kode</p>
                                <ol>
                                    <li><b>Fungsi untuk Menghitung Rata-Rata:</b> Fungsi <code>hitungRataRata</code> menerima vektor nilai sebagai parameter dan menghitung rata-rata nilai dalam vektor tersebut.</li>
                                    <li><b>Fungsi untuk Menemukan Nilai Tertinggi:</b> Fungsi <code>nilaiTertinggi</code> menerima vektor nilai sebagai parameter dan menggunakan <code>max_element</code> untuk menemukan nilai tertinggi dalam vektor.</li>
                                    <li><b>Fungsi untuk Menemukan Nilai Terendah:</b> Fungsi <code>nilaiTerendah</code> menerima vektor nilai sebagai parameter dan menggunakan <code>min_element</code> untuk menemukan nilai terendah dalam vektor.</li>
                                    <li><b>Prosedur untuk Menampilkan Data Siswa:</b> Prosedur <code>tampilkanDataSiswa</code> menerima vektor dua dimensi <code>nilaiSiswa</code> yang berisi data nilai beberapa siswa. Prosedur ini iterasi melalui setiap siswa, menghitung rata-rata, nilai tertinggi, dan nilai terendah, lalu menampilkannya.</li>
                                    <li><b>Fungsi main:</b> Fungsi utama <code>main</code> berisi data nilai siswa dalam bentuk vektor dua dimensi dan memanggil prosedur <code>tampilkanDataSiswa</code> untuk menampilkan informasi yang diperlukan.</li>
                                </ol>

                                <p>Output</p>
                                <p>
                                    Output dari kode di atas akan seperti berikut:
                                </p>
                                <pre>
                                    Data Nilai Siswa 1: 85 78 92 
                                    Rata-rata: 85
                                    Nilai Tertinggi: 92
                                    Nilai Terendah: 78
                            
                                    Data Nilai Siswa 2: 76 88 90 
                                    Rata-rata: 84.6667
                                    Nilai Tertinggi: 90
                                    Nilai Terendah: 76
                            
                                    Data Nilai Siswa 3: 92 94 89 
                                    Rata-rata: 91.6667
                                    Nilai Tertinggi: 94
                                    Nilai Terendah: 89
                                </pre>
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
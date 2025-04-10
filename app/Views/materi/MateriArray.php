<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Array</title>

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
                    Array
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
                <span class="module-tag">Materi : Array</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Array</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Array adalah struktur data yang terdiri dari sekumpulan elemen yang memiliki tipe data yang sama, dan setiap elemen dapat diakses menggunakan indeks atau posisi tertentu. Array digunakan untuk menyimpan data secara berurutan dan mempermudah pengelolaan dan akses data.</p>

                                <p>Fungsi</p>
                                <p>Array memiliki beberapa fungsi utama:</p>
                                <ul>
                                    <li>Penyimpanan Data: Menyimpan sekumpulan data yang homogen (bertipe sama) dalam satu variabel.</li>
                                    <li>Akses Cepat: Memungkinkan akses cepat ke elemen menggunakan indeks, yang berarti waktu akses adalah konstan (O(1)).</li>
                                    <li>Pengelolaan Memori: Memanfaatkan memori secara berurutan sehingga lebih efisien dalam hal penggunaan memori.</li>
                                    <li>Operasi Kolektif: Mendukung operasi seperti iterasi, pencarian, dan modifikasi elemen secara efisien.</li>
                                </ul>

                                <p>Jenis-Jenis Array</p>
                                <p>- Array Satu Dimensi (1D): Array yang memiliki satu baris elemen. Contohnya: [1, 2, 3, 4, 5].</p>
                                <p>- Array Multidimensi: Array yang memiliki lebih dari satu baris elemen. Contohnya:</p>
                                <ul>
                                    <li>Array Dua Dimensi (2D): Array yang memiliki baris dan kolom, sering disebut sebagai matriks. Contohnya: [[1, 2], [3, 4], [5, 6]].</li>
                                    <li>Array Tiga Dimensi (3D): Array yang memiliki baris, kolom, dan kedalaman. Contohnya: [[[1, 2], [3, 4]], [[5, 6], [7, 8]]].</li>
                                </ul>

                                <p>Contoh Implementasi/Studi Kasus</p>
                                <h3>Studi Kasus: Pengelolaan Data Nilai Siswa</h3>
                                <p>Sebuah sekolah ingin mengelola data nilai siswa dalam berbagai mata pelajaran. Sekolah ingin menyimpan data nilai, menghitung rata-rata nilai, menemukan nilai tertinggi dan terendah, serta menampilkan data tersebut.</p>

                                <p>Contoh Codingan</p>
                                <div class="example">
                                    <pre>
            <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span><br>
            <span class="keyword">#include</span> <span class="string">&lt;vector&gt;</span><br>
            <span class="keyword">#include</span> <span class="string">&lt;algorithm&gt;</span> <span class="comment">// Untuk fungsi max_element dan min_element</span><br><br>
            <span class="keyword">using namespace</span> std;<br><br>
            <span class="comment">// Fungsi untuk menghitung rata-rata nilai</span><br>
            <span class="keyword">double</span> <span class="function">hitung_rata_rata</span>(<span class="type">vector&lt;int&gt;</span> nilai) {<br>
                <span class="keyword">int</span> total = <span class="number">0</span>;<br>
                <span class="keyword">for</span> (<span class="keyword">int</span> n : nilai) {<br>
                    total += n;<br>
                }<br>
                <span class="keyword">return</span> <span class="keyword">static_cast&lt;</span><span class="type">double</span><span class="keyword">&gt;(</span>total<span class="keyword">)</span> / nilai.size();<br>
            }<br><br>
            <span class="comment">// Fungsi untuk menemukan nilai tertinggi</span><br>
            <span class="keyword">int</span> <span class="function">nilai_tertinggi</span>(<span class="type">vector&lt;int&gt;</span> nilai) {<br>
                <span class="keyword">return</span> <span class="keyword">*</span>max_element(nilai.begin(), nilai.end());<br>
            }<br><br>
            <span class="comment">// Fungsi untuk menemukan nilai terendah</span><br>
            <span class="keyword">int</span> <span class="function">nilai_terendah</span>(<span class="type">vector&lt;int&gt;</span> nilai) {<br>
                <span class="keyword">return</span> <span class="keyword">*</span>min_element(nilai.begin(), nilai.end());<br>
            }<br><br>
            <span class="keyword">int</span> <span class="function">main</span>() {<br>
                <span class="comment">// Data nilai siswa dalam berbagai mata pelajaran</span><br>
                <span class="type">vector&lt;vector&lt;int&gt;&gt;</span> nilai_siswa = {<br>
                    {<span class="number">85</span>, <span class="number">78</span>, <span class="number">92</span>},  <span class="comment">// Nilai siswa 1</span><br>
                    {<span class="number">76</span>, <span class="number">88</span>, <span class="number">90</span>},  <span class="comment">// Nilai siswa 2</span><br>
                    {<span class="number">92</span>, <span class="number">94</span>, <span class="number">89</span>}   <span class="comment">// Nilai siswa 3</span><br>
                };<br><br>
                <span class="comment">// Mengelola dan menampilkan data nilai siswa</span><br>
                <span class="keyword">for</span> (<span class="type">size_t</span> i = <span class="number">0</span>; i < nilai_siswa.size(); ++i) {<br>
                    <span class="type">double</span> rata_rata = <span class="function">hitung_rata_rata</span>(nilai_siswa[i]);<br>
                    <span class="keyword">int</span> tertinggi = <span class="function">nilai_tertinggi</span>(nilai_siswa[i]);<br>
                    <span class="keyword">int</span> terendah = <span class="function">nilai_terendah</span>(nilai_siswa[i]);<br><br>
                    cout << <span class="string">"Data Nilai Siswa "</span> << i + <span class="number">1</span> << <span class="string">": "</span>;<br>
                    <span class="keyword">for</span> (<span class="keyword">int</span> nilai : nilai_siswa[i]) {<br>
                        cout << nilai << <span class="string">" "</span>;<br>
                    }<br>
                    cout << <span class="string">"\nRata-rata: "</span> << rata_rata<br>
                         << <span class="string">"\nNilai Tertinggi: "</span> << tertinggi<br>
                         << <span class="string">"\nNilai Terendah: "</span> << terendah << <span class="string">"\n"</span> << endl;<br>
                }<br><br>
                <span class="keyword">return</span> <span class="number">0</span>;<br>
            }   
        </pre>
                                </div>

                                <p>Penjelasan Kode</p>
                                <ol>
                                    <li>Data Nilai Siswa: <code>nilai_siswa</code> adalah vektor dua dimensi yang menyimpan nilai untuk tiga siswa dalam tiga mata pelajaran.</li>
                                    <li>Fungsi untuk Menghitung Rata-rata: <code>hitung_rata_rata(vector&lt;int&gt; nilai)</code> mengembalikan rata-rata nilai dalam vektor.</li>
                                    <li>Fungsi untuk Menemukan Nilai Tertinggi: <code>nilai_tertinggi(vector&lt;int&gt; nilai)</code> mengembalikan nilai tertinggi dalam vektor.</li>
                                    <li>Fungsi untuk Menemukan Nilai Terendah: <code>nilai_terendah(vector&lt;int&gt; nilai)</code> mengembalikan nilai terendah dalam vektor.</li>
                                    <li>Mengelola dan Menampilkan Data: Kode iterasi melalui setiap siswa, menghitung rata-rata, nilai tertinggi, dan nilai terendah, lalu menampilkannya.</li>
                                </ol>

                                <p>Output dari kode di atas akan seperti berikut:</p>

                                <pre><code>Data Nilai Siswa 1: 85 78 92 
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
    </code></pre>

                                <p>Penutup</p>
                                <p>Dengan menggunakan array dan beberapa fungsi sederhana, kita dapat mengelola data nilai siswa dengan efisien. Array membantu dalam penyimpanan data yang terstruktur, sementara fungsi membantu dalam melakukan operasi pada data tersebut. Studi kasus ini menunjukkan bagaimana array dapat digunakan dalam aplikasi dunia nyata untuk memecahkan masalah yang spesifik.</p>
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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Matriks</title>

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
                    Matriks
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
                <span class="module-tag">Materi : Matriks</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Matriks</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Matriks adalah kumpulan bilangan yang disusun dalam baris dan kolom dalam bentuk persegi panjang. Matriks digunakan dalam berbagai bidang seperti matematika, fisika, statistik, dan ilmu komputer untuk memodelkan data, persamaan, dan transformasi.</p>

                                <p>Fungsi</p>
                                <p>Matriks memiliki beberapa fungsi utama:</p>
                                <ul>
                                    <li><strong>Representasi Data:</strong> Matriks digunakan untuk menyimpan data dalam bentuk tabel, seperti gambar, grafik, dan data ilmiah.</li>
                                    <li><strong>Transformasi Geometri:</strong> Matriks digunakan dalam transformasi geometri seperti rotasi, translasi, dan skala dalam grafika komputer.</li>
                                    <li><strong>Pemecahan Sistem Persamaan Linear:</strong> Matriks membantu dalam menyelesaikan sistem persamaan linear menggunakan metode seperti eliminasi Gauss dan invers matriks.</li>
                                    <li><strong>Aljabar Linear:</strong> Matriks digunakan dalam operasi aljabar linear, seperti perkalian matriks, invers matriks, dan determinan.</li>
                                </ul>

                                <p>Jenis-Jenis Matriks</p>
                                <ul>
                                    <li><strong>Matriks Nol (Zero Matrix):</strong> Matriks yang semua elemennya adalah nol.</li>
                                    <li><strong>Matriks Identitas (Identity Matrix):</strong> Matriks persegi dengan elemen diagonal utama bernilai satu dan elemen lainnya nol.</li>
                                    <li><strong>Matriks Diagonal:</strong> Matriks persegi dengan elemen non-diagonal bernilai nol.</li>
                                    <li><strong>Matriks Simetris:</strong> Matriks persegi yang elemen-elemen simetriknya sama terhadap diagonal utama.</li>
                                    <li><strong>Matriks Skalar:</strong> Matriks diagonal dengan semua elemen diagonal utama bernilai sama.</li>
                                    <li><strong>Matriks Transpos:</strong> Matriks yang diperoleh dengan menukar baris dan kolom dari matriks asli.</li>
                                </ul>

                                <p>Contoh Implementasi</p>
                                <p>Studi Kasus: Perkalian Matriks</p>
                                <p>Misalkan kita ingin mengalikan dua matriks dan menampilkan hasilnya.</p>
                                <p>Contoh Codingan</p>
                                <p><strong>a. Bahasa C++</strong></p>
                                <div class="example">
                                    <pre><code>
                                            <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>;
                                            <span class="keyword">using</span> <span class="keyword">namespace</span> std;
                                            
                                            <span class="comment">// Fungsi untuk mengalikan dua matriks</span>
                                            <span class="keyword">void</span> kalikanMatriks(<span class="type">int</span> matA[<span class="number">2</span>][<span class="number">3</span>], <span class="type">int</span> matB[<span class="number">3</span>][<span class="number">2</span>], <span class="type">int</span> hasil[<span class="number">2</span>][<span class="number">2</span>]) {
                                                <span class="keyword">for</span> (<span class="type">int</span> i = <span class="number">0</span>; i &lt; <span class="number">2</span>; ++i) {
                                                    <span class="keyword">for</span> (<span class="type">int</span> j = <span class="number">0</span>; j &lt; <span class="number">2</span>; ++j) {
                                                        hasil[i][j] = <span class="number">0</span>;
                                                        <span class="keyword">for</span> (<span class="type">int</span> k = <span class="number">0</span>; k &lt; <span class="number">3</span>; ++k) {
                                                            hasil[i][j] += matA[i][k] * matB[k][j];
                                                        }
                                                    }
                                                }
                                            }
                                            
                                            <span class="comment">// Fungsi untuk menampilkan matriks</span>
                                            <span class="keyword">void</span> tampilkanMatriks(<span class="type">int</span> mat[<span class="number">2</span>][<span class="number">2</span>]) {
                                                <span class="keyword">for</span> (<span class="type">int</span> i = <span class="number">0</span>; i &lt; <span class="number">2</span>; ++i) {
                                                    <span class="keyword">for</span> (<span class="type">int</span> j = <span class="number">0</span>; j &lt; <span class="number">2</span>; ++j) {
                                                        cout &lt;&lt; mat[i][j] &lt;&lt; <span class="string">" "</span>;
                                                    }
                                                    cout &lt;&lt; endl;
                                                }
                                            }
                                            
                                            <span class="keyword">int</span> <span class="function">main</span>() {
                                                <span class="type">int</span> matA[<span class="number">2</span>][<span class="number">3</span>] = {
                                                    {<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>},
                                                    {<span class="number">4</span>, <span class="number">5</span>, <span class="number">6</span>}
                                                };
                                            
                                                <span class="type">int</span> matB[<span class="number">3</span>][<span class="number">2</span>] = {
                                                    {<span class="number">7</span>, <span class="number">8</span>},
                                                    {<span class="number">9</span>, <span class="number">10</span>},
                                                    {<span class="number">11</span>, <span class="number">12</span>}
                                                };
                                            
                                                <span class="type">int</span> hasil[<span class="number">2</span>][<span class="number">2</span>];
                                            
                                                kalikanMatriks(matA, matB, hasil);
                                            
                                                cout &lt;&lt; <span class="string">"Hasil perkalian matriks:"</span> &lt;&lt; endl;
                                                tampilkanMatriks(hasil);
                                            
                                                <span class="keyword">return</span> <span class="number">0</span>;
                                            }
                                        </code></pre>
                                </div>

                                <p>Output dari kode di atas akan seperti berikut:</p>
                                <p>58 64</p>
                                <p>139 154</p>
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
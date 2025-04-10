<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Materi Looping</title>

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
                    Looping
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
                <span class="module-tag">Materi : Looping</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Looping</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Looping adalah proses dalam pemrograman di mana satu set instruksi dieksekusi berulang kali sampai kondisi tertentu terpenuhi. Loop memungkinkan pengulangan operasi tanpa harus menulis kode yang sama berulang kali.</p>

                                <p>Fungsi</p>
                                <ul>
                                    <li>Automatisasi Tugas Berulang: Loop digunakan untuk mengotomatisasi tugas yang harus dilakukan berulang kali, seperti iterasi melalui elemen dalam array.</li>
                                    <li>Efisiensi Kode: Mengurangi jumlah kode yang harus ditulis dengan mengulang blok kode tertentu.</li>
                                    <li>Pengolahan Data: Memproses kumpulan data yang besar dengan lebih mudah.</li>
                                    <li>Algoritma dan Logika: Digunakan dalam implementasi berbagai algoritma dan logika pemrograman, seperti pencarian, pengurutan, dan lain-lain.</li>
                                </ul>

                                <p>Jenis-Jenis</p>
                                <ul>
                                    <li><strong>For Loop:</strong> Digunakan ketika jumlah iterasi diketahui sebelumnya.</li>
                                    <li><strong>While Loop:</strong> Digunakan ketika kondisi tertentu harus terus diuji sebelum setiap iterasi, dan jumlah iterasi tidak diketahui sebelumnya.</li>
                                    <li><strong>Do-While Loop:</strong> Mirip dengan while loop, tetapi kondisi diuji setelah setiap iterasi, sehingga loop ini akan dieksekusi setidaknya satu kali.</li>
                                </ul>

                                <p>Contoh Implementasi Studi Kasus</p>
                                <p><strong>Seorang guru ingin mencatat nilai siswa dalam sebuah kelas. Dia memiliki daftar nama siswa dan ingin mencetak setiap nama siswa beserta nilai yang diberikan. Dalam kasus ini, looping dapat digunakan untuk iterasi melalui daftar nama siswa dan mencetak setiap nama dengan nilai yang sesuai.</strong></p>

                                <p>Studi Kasus:</p>
                                <p>Guru memiliki lima siswa: Alice, Bob, Charlie, Diana, dan Eva. Dia ingin mencatat nilai mereka dengan mencetak nama masing-masing siswa.</p>
                                <p><strong>Iterasi Melalui Daftar Siswa:</strong></p>
                                <ol>
                                    <li>Cetak nama dan nilai Alice.</li>
                                    <li>Cetak nama dan nilai Bob.</li>
                                    <li>Cetak nama dan nilai Charlie.</li>
                                    <li>Cetak nama dan nilai Diana.</li>
                                    <li>Cetak nama dan nilai Eva.</li>
                                </ol>

                                <p>Contoh Coding</p>
                                <div class="example">
                                    <pre>
                                        <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>
                                        <span class="keyword">#include</span> <span class="string">&lt;vector&gt;</span>
                                        <span class="keyword">#include</span> <span class="string">&lt;string&gt;</span>
                                        
                                        <span class="keyword">int</span> <span class="function">main</span>() {
                                            &emsp;std::vector&lt;std::string&gt; students = {<span class="string">"Alice"</span>, <span class="string">"Bob"</span>, <span class="string">"Charlie"</span>, <span class="string">"Diana"</span>, <span class="string">"Eva"</span>};
                                            &emsp;std::vector&lt;<span class="keyword">int</span>&gt; grades = {<span class="number">85</span>, <span class="number">90</span>, <span class="number">78</span>, <span class="number">92</span>, <span class="number">88</span>};
                                        
                                            &emsp;std::cout &lt;&lt; <span class="string">"Daftar nilai siswa:\n"</span>;
                                        
                                            &emsp;<span class="comment">// Menggunakan for loop</span>
                                            &emsp;<span class="keyword">for</span> (<span class="keyword">size_t</span> i = <span class="number">0</span>; i &lt; students.size(); ++i) {
                                                &emsp;&emsp;std::cout &lt;&lt; students[i] &lt;&lt; <span class="string">": "</span> &lt;&lt; grades[i] &lt;&lt; <span class="string">"\n"</span>;
                                            }
                                        
                                            &emsp;std::cout &lt;&lt; <span class="string">"\nIterasi menggunakan while loop:\n"</span>;
                                        
                                            &emsp;<span class="comment">// Menggunakan while loop</span>
                                            &emsp;<span class="keyword">size_t</span> j = <span class="number">0</span>;
                                            &emsp;<span class="keyword">while</span> (j &lt; students.size()) {
                                                &emsp;&emsp;std::cout &lt;&lt; students[j] &lt;&lt; <span class="string">": "</span> &lt;&lt; grades[j] &lt;&lt; <span class="string">"\n"</span>;
                                                &emsp;&emsp;++j;
                                            }
                                        
                                            &emsp;std::cout &lt;&lt; <span class="string">"\nIterasi menggunakan do-while loop:\n"</span>;
                                        
                                            &emsp;<span class="comment">// Menggunakan do-while loop</span>
                                            &emsp;<span class="keyword">size_t</span> k = <span class="number">0</span>;
                                            &emsp;<span class="keyword">do</span> {
                                                &emsp;&emsp;std::cout &lt;&lt; students[k] &lt;&lt; <span class="string">": "</span> &lt;&lt; grades[k] &lt;&lt; <span class="string">"\n"</span>;
                                                &emsp;&emsp;++k;
                                            } <span class="keyword">while</span> (k &lt; students.size());
                                        
                                            &emsp;<span class="keyword">return</span> <span class="number">0</span>;
                                        }
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
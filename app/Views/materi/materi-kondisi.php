<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Materi Kondisi Percabangan</title>

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
                    Kondisi Dan Percabangan
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
                <span class="module-tag">Materi : Kondisi Dan Percabangan</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Kondisi Percabangan</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Kondisi percabangan adalah struktur dalam pemrograman yang memungkinkan kode untuk membuat keputusan dan menjalankan bagian kode tertentu berdasarkan kondisi tertentu. Percabangan memungkinkan program untuk beroperasi dengan logika yang lebih kompleks dan dinamis.</p>

                                <p>Fungsi</p>
                                <p>Fungsi utama dari kondisi percabangan adalah untuk:</p>
                                <ul>
                                    <li>Menjalankan kode yang berbeda berdasarkan kondisi yang berbeda.</li>
                                    <li>Membuat program lebih dinamis dan responsif terhadap input atau keadaan tertentu.</li>
                                    <li>Menghindari eksekusi kode yang tidak diperlukan.</li>
                                    <li>Meningkatkan fleksibilitas dan kontrol alur eksekusi dalam program.</li>
                                </ul>

                                <p>Jenis-jenis Kondisi Percabangan</p>
                                <p>Terdapat beberapa jenis kondisi percabangan yang umum digunakan dalam pemrograman:</p>
                                <ul>
                                    <li><strong>if statement:</strong> Memeriksa suatu kondisi, dan jika kondisi tersebut benar, maka kode di dalam blok if akan dijalankan.</li>
                                    <li><strong>if-else statement:</strong> Memeriksa suatu kondisi, dan jika kondisi tersebut benar, maka kode di dalam blok if akan dijalankan; jika salah, maka kode di dalam blok else akan dijalankan.</li>
                                    <li><strong>if-else if-else statement:</strong> Memeriksa beberapa kondisi secara berurutan, dan menjalankan blok kode yang sesuai dengan kondisi pertama yang benar.</li>
                                    <li><strong>switch statement:</strong> Memilih salah satu dari banyak blok kode untuk dijalankan berdasarkan nilai dari suatu ekspresi. (Tidak semua bahasa pemrograman mendukung switch statement).</li>
                                </ul>

                                <p>Studi Kasus</p>
                                <p><strong>Pengecekan Umur untuk Pemilih</strong></p>
                                <p>Misalkan Anda ingin membuat program sederhana untuk memeriksa apakah seseorang memenuhi syarat untuk memberikan suara dalam suatu pemilihan berdasarkan usia mereka. Dalam contoh ini, kita akan menggunakan kondisi percabangan untuk melakukan pengecekan.</p>

                                <p>Contoh Codingan</p>
                                <p><strong>a. Bahasa C++</strong></p>
                                <div class="example">
                                    <pre>
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span><br>
<span class="keyword">using namespace</span> std;<br><br>
<span class="keyword">int</span> <span class="function">main</span>() {<br>
    <span class="type">int</span> usia;<br><br>
    cout << <span class="string">"Masukkan usia Anda: "</span>;<br>
    cin >> usia;<br><br>
    <span class="keyword">if</span> (usia >= <span class="number">17</span>) {<br>
        cout << <span class="string">"Anda memenuhi syarat untuk memberikan suara."</span> << endl;<br>
    } <span class="keyword">else</span> {<br>
        cout << <span class="string">"Anda belum cukup usia untuk memberikan suara. Coba lagi dalam "</span> << <span class="number">17</span> - usia << <span class="string">" tahun."</span> << endl;<br>
    }<br><br>
    <span class="keyword">return</span> <span class="number">0</span>;<br>
}
</pre>
                                </div>

                                <p><strong>b. Output</strong></p>
                                <p>Dalam studi kasus ini, program meminta pengguna untuk memasukkan usia mereka. Kemudian, dengan menggunakan kondisi percabangan (if dan else), program memeriksa apakah usia tersebut memenuhi syarat untuk memberikan suara. Jika usia mencapai atau melebihi 17 tahun, program akan memberi tahu pengguna bahwa mereka memenuhi syarat. Jika tidak, program akan memberi tahu pengguna bahwa mereka belum cukup usia untuk memberikan suara dan memberikan pesan tentang kapan mereka bisa mencobanya lagi.</p>
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
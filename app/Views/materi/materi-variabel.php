<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Variabel dan Konstanta</title>

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
                    Variabel Dan Konstanta
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
                <span class="module-tag">Materi : Variabel Dan Konstanta</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <div style="text-align: justify;">
                            <div style="text-align: justify;">
                                <h2>Pengertian</h2>
                                <p><strong>Variabel:</strong> Variabel adalah tempat penyimpanan data yang nilainya dapat berubah selama program berjalan. Variabel diberi nama untuk mengidentifikasi data yang disimpannya.</p>
                                <p><strong>Konstanta:</strong> Konstanta adalah tempat penyimpanan data yang nilainya tetap dan tidak berubah selama program berjalan. Konstanta biasanya digunakan untuk nilai yang diketahui tidak akan berubah, seperti pi (π) atau nilai tetap lainnya.</p>

                                <h2>Fungsi</h2>
                                <p><strong>Variabel:</strong></p>
                                <ul>
                                    <li>Menyimpan data sementara untuk digunakan dan dimanipulasi oleh program.</li>
                                    <li>Memudahkan pengelolaan dan pemeliharaan kode karena menggunakan nama yang bermakna.</li>
                                    <li>Memungkinkan pengambilan nilai input dari pengguna dan menyimpannya untuk digunakan dalam operasi lebih lanjut.</li>
                                </ul>
                                <p><strong>Konstanta:</strong></p>
                                <ul>
                                    <li>Menyimpan nilai tetap yang digunakan berulang kali dalam program.</li>
                                    <li>Meningkatkan keterbacaan dan pemeliharaan kode dengan memberikan nama yang bermakna pada nilai tetap.</li>
                                    <li>Mencegah perubahan nilai yang seharusnya tetap, menghindari kesalahan yang tidak diinginkan.</li>
                                </ul>

                                <h2>Jenis-jenis</h2>
                                <p><strong>Jenis Variabel Berdasarkan Tipe Data:</strong></p>
                                <ul>
                                    <li><strong>Integer (int):</strong> Menyimpan bilangan bulat.</li>
                                    <li><strong>Floating-point (float):</strong> Menyimpan bilangan desimal.</li>
                                    <li><strong>String (str):</strong> Menyimpan teks.</li>
                                    <li><strong>Boolean (bool):</strong> Menyimpan nilai benar atau salah.</li>
                                    <li><strong>List, Tuple, Dictionary:</strong> Menyimpan kumpulan data yang terstruktur.</li>
                                </ul>
                                <p><strong>Jenis Konstanta:</strong></p>
                                <ul>
                                    <li><strong>Konstanta numerik:</strong> Bilangan bulat atau desimal tetap.</li>
                                    <li><strong>Konstanta karakter atau string:</strong> Teks yang tidak berubah.</li>
                                    <li><strong>Konstanta boolean:</strong> Nilai tetap berupa benar atau salah.</li>
                                </ul>

                                <h2>Studi Kasus</h2>
                                <p><strong>Menghitung Luas Lingkaran</strong></p>
                                <p>Kita akan membuat program sederhana yang meminta pengguna untuk memasukkan nilai jari-jari lingkaran dan kemudian menghitung luas lingkaran tersebut menggunakan rumus matematika.</p>

                                <p>Contoh Codingan</p>
                                <p><strong>a. Bahasa C++</strong></p>
                                <div class="example">
                                    <pre>
<span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span><br>
<span class="keyword">#include</span> <span class="string">&lt;cmath&gt;</span><br>
<span class="keyword">using namespace</span> std;<br><br>
<span class="keyword">int</span> <span class="function">main</span>() {<br>
    <span class="keyword">const</span> <span class="type">double</span> PI = <span class="number">3.14</span>;<br>
    <span class="type">double</span> jari_jari, luas;<br><br>
    cout << <span class="string">"Masukkan jari-jari lingkaran: "</span>;<br>
    cin >> jari_jari;<br><br>
    luas = PI * pow(jari_jari, <span class="number">2</span>);<br><br>
    cout << <span class="string">"Luas lingkaran: "</span> << luas << endl;<br><br>
    <span class="keyword">return</span> <span class="number">0</span>;<br>
}
</pre>
                                </div>
                                <h2><strong>Output</strong></h2>
                                <p>Dalam studi kasus ini, kita menggunakan variabel dan konstanta:</p>
                                <ul>
                                    <li>Variabel <code>jari_jari</code> digunakan untuk menyimpan nilai jari-jari lingkaran yang dimasukkan oleh pengguna.</li>
                                    <li>Variabel <code>luas</code> digunakan untuk menyimpan hasil perhitungan luas lingkaran.</li>
                                    <li>Konstanta <code>PI</code> dideklarasikan sebagai <code>const double</code> dan nilainya diset sebagai 3.14. Konstanta ini digunakan dalam perhitungan luas lingkaran.</li>
                                </ul>
                                <p>Program ini meminta pengguna untuk memasukkan nilai jari-jari lingkaran, kemudian menghitung luas lingkaran menggunakan rumus <code>PI * jari_jari * jari_jari</code>. Hasilnya kemudian ditampilkan ke layar. Dengan menggunakan variabel dan konstanta, program menjadi lebih mudah dibaca dan dimengerti.</p>

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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sorting and Searching</title>

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
                    Sorting And Searching
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
                <span class="module-tag">Materi : Sorting And Searching</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>


        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Sorting and Searching</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Searching (Pencarian)</p>
                                <p>Pengertian</p>
                                <p>Searching adalah proses menemukan posisi atau keberadaan suatu elemen dalam struktur data, seperti array atau linked list. Tujuan searching adalah untuk menentukan apakah elemen yang dicari ada dalam struktur data dan, jika ada, mengembalikan posisinya.</p>

                                <p>Fungsi</p>
                                <ul>
                                    <li>Menemukan elemen tertentu dalam kumpulan data.</li>
                                    <li>Memverifikasi keberadaan elemen dalam struktur data.</li>
                                    <li>Mengambil informasi yang terkait dengan elemen yang dicari.</li>
                                </ul>

                                <p>Jenis-jenis</p>
                                <ul>
                                    <li>Linear Search (Sequential Search): Menelusuri setiap elemen dalam struktur data secara berurutan hingga elemen yang dicari ditemukan atau seluruh elemen telah diperiksa.</li>
                                    <li>Binary Search: Bekerja pada array yang sudah terurut. Membagi array menjadi dua bagian secara rekursif dan membandingkan elemen tengah dengan elemen yang dicari hingga ditemukan atau bagian yang tersisa kosong.</li>
                                </ul>

                                <p>Contoh Implementasi</p>
                                <p>Contoh implementasi Linear Search:</p>
                                <div class="example">
                                    <pre><code>
            <span class="type">int</span> linearSearch(<span class="type">int</span> arr[], <span class="type">int</span> n, <span class="type">int</span> x) {<br>
                <span class="keyword">for</span> (<span class="type">int</span> i = <span class="number">0</span>; i &lt; n; i++) {<br>
                    <span class="keyword">if</span> (arr[i] == x) {<br>
                        <span class="keyword">return</span> i;  <span class="comment">// Mengembalikan indeks elemen yang ditemukan</span><br>
                    }<br>
                }<br>
                <span class="keyword">return</span> -1;  <span class="comment">// Elemen tidak ditemukan</span><br>
            }
                </code></pre>
                                </div>

                                <p>Contoh implementasi Binary Search:</p>
                                <div class="example">
                                    <pre><code>
            <span class="type">int</span> binarySearch(<span class="type">int</span> arr[], <span class="type">int</span> left, <span class="type">int</span> right, <span class="type">int</span> x) {<br>
                <span class="keyword">while</span> (left &lt;= right) {<br>
                    <span class="type">int</span> mid = left + (right - left) / 2;<br>
                    <span class="keyword">if</span> (arr[mid] == x) {<br>
                        <span class="keyword">return</span> mid;  <span class="comment">// Mengembalikan indeks elemen yang ditemukan</span><br>
                    } <span class="keyword">else if</span> (arr[mid] &lt; x) {<br>
                        left = mid + 1;<br>
                    } <span class="keyword">else</span> {<br>
                        right = mid - 1;<br>
                    }<br>
                }<br>
                <span class="keyword">return</span> -1;  <span class="comment">// Elemen tidak ditemukan</span><br>
            }
                </code></pre>
                                </div>

                                <p>Sorting (Pengurutan)</p>
                                <p>Pengertian</p>
                                <p>Sorting adalah proses menyusun elemen-elemen dalam struktur data dalam urutan tertentu, baik secara menaik (ascending) atau menurun (descending). Tujuan sorting adalah untuk mempermudah pencarian, perbandingan, atau pemrosesan lebih lanjut pada data yang terurut.</p>

                                <p>Fungsi</p>
                                <ul>
                                    <li>Mengurutkan elemen dalam struktur data.</li>
                                    <li>Mempermudah pencarian dan pengaksesan elemen.</li>
                                    <li>Mempersiapkan data untuk pemrosesan lebih lanjut.</li>
                                </ul>

                                <p>Jenis-jenis</p>
                                <ul>
                                    <li>Bubble Sort: Membandingkan pasangan elemen bersebelahan secara berulang dan menukar posisi jika urutannya salah.</li>
                                    <li>Selection Sort: Mencari elemen terkecil/terbesar dari bagian yang belum terurut dan menempatkannya pada posisi yang tepat.</li>
                                    <li>Insertion Sort: Mengambil satu elemen dari bagian yang belum terurut dan menyisipkannya ke posisi yang tepat dalam bagian yang sudah terurut.</li>
                                    <li>Merge Sort: Membagi array menjadi dua bagian secara rekursif, mengurutkan bagian-bagian tersebut, kemudian menggabungkannya kembali menjadi array terurut.</li>
                                    <li>Quick Sort: Memilih elemen pivot dan mempartisi array di sekitar pivot, kemudian mengurutkan bagian-bagian secara rekursif.</li>
                                </ul>

                                <p>Contoh Implementasi</p>
                                <p>Contoh implementasi Bubble Sort:</p>
                                <div class="example">
                                    <pre><code>
            <span class="keyword">void</span> bubbleSort(<span class="type">int</span> arr[], <span class="type">int</span> n) {<br>
                <span class="keyword">for</span> (<span class="type">int</span> i = <span class="number">0</span>; i &lt; n-1; i++) {<br>
                    <span class="keyword">for</span> (<span class="type">int</span> j = <span class="number">0</span>; j &lt; n-i-1; j++) {<br>
                        <span class="keyword">if</span> (arr[j] &gt; arr[j+1]) {<br>
                            swap(arr[j], arr[j+1]);<br>
                        }<br>
                    }<br>
                }<br>
            }
                </code></pre>
                                </div>

                                <p>Contoh implementasi Selection Sort:</p>
                                <div class="example">
                                    <pre><code>
            <span class="keyword">void</span> selectionSort(<span class="type">int</span> arr[], <span class="type">int</span> n) {<br>
                <span class="keyword">for</span> (<span class="type">int</span> i = <span class="number">0</span>; i &lt; n-<span class="number">1</span>; i++) {<br>
                    <span class="type">int</span> minIndex = i;<br>
                    <span class="keyword">for</span> (<span class="type">int</span> j = i+<span class="number">1</span>; j &lt; n; j++) {<br>
                        <span class="keyword">if</span> (arr[j] &lt; arr[minIndex]) {<br>
                            minIndex = j;<br>
                        }<br>
                    }<br>
                    swap(arr[minIndex], arr[i]);<br>
                }<br>
            }
                </code></pre>
                                </div>
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
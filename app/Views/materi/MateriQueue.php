<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Materi Queue</title>

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
                    Queue
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
                <span class="module-tag">Materi : Queue</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Queue</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Queue adalah struktur data linier yang menggunakan prinsip FIFO (First In First Out), di mana elemen yang pertama kali dimasukkan ke dalam antrian akan menjadi elemen pertama yang dikeluarkan. Queue sering digunakan untuk mengatur tugas atau proses dalam urutan tertentu.</p>

                                <p>Fungsi</p>
                                <p>Beberapa fungsi queue dalam pemrograman meliputi:</p>
                                <ul>
                                    <li>Pengelolaan Tugas: Digunakan untuk mengatur tugas yang harus diproses secara berurutan.</li>
                                    <li>Penyimpanan Data Sementara: Menyimpan data sementara sebelum diproses lebih lanjut.</li>
                                    <li>Antrian Layanan: Mengatur urutan layanan dalam sistem, seperti antrian di bank atau sistem pemesanan tiket.</li>
                                    <li>Algoritma BFS (Breadth-First Search): Digunakan dalam penelusuran graf untuk menemukan jarak terpendek atau mencapai semua node yang bisa dicapai dari sebuah node awal.</li>
                                </ul>

                                <p>Jenis-Jenis</p>
                                <p>Beberapa jenis queue meliputi:</p>
                                <ul>
                                    <li>Queue Sederhana: Operasi dasar enqueue (menambah elemen) di akhir dan dequeue (menghapus elemen) di depan.</li>
                                    <li>Circular Queue: Antrian melingkar yang memungkinkan elemen terakhir terhubung kembali ke elemen pertama, menggunakan memori lebih efisien.</li>
                                    <li>Priority Queue: Elemen memiliki prioritas sehingga elemen dengan prioritas tertinggi dikeluarkan lebih dulu.</li>
                                    <li>Deque (Double-Ended Queue): Elemen dapat ditambah atau dihapus dari kedua ujung, baik depan maupun belakang.</li>
                                </ul>

                                <p>Contoh Implementasi Studi Kasus</p>
                                <p>Studi Kasus: Sistem Antrian di Klinik</p>
                                <p>Sebuah klinik memiliki sistem antrian untuk pasien yang datang. Setiap pasien mendaftarkan diri dan masuk ke dalam antrian untuk mendapatkan layanan medis. Pasien yang datang lebih awal akan dilayani lebih dulu.</p>

                                <p>Pada pagi hari, tiga pasien datang berturut-turut ke klinik: Alice, Bob, dan Charlie. Alice tiba pertama, diikuti oleh Bob, dan kemudian Charlie.</p>

                                <p>Queue Setelah Kedatangan:</p>
                                <ul>
                                    <li>Alice</li>
                                    <li>Bob</li>
                                    <li>Charlie</li>
                                </ul>

                                <p>Proses Layanan:</p>
                                <ol>
                                    <li>Dokter melayani Alice (dequeue Alice).</li>
                                    <li>Dokter melayani Bob (dequeue Bob).</li>
                                    <li>Dokter melayani Charlie (dequeue Charlie).</li>
                                </ol>

                                <p>Contoh Codingan</p>
                                <div class="example">
                                    <pre><code>
            <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span><br>
            <span class="keyword">#include</span> <span class="string">&lt;queue&gt;</span><br>
            <span class="keyword">#include</span> <span class="string">&lt;string&gt;</span><br>
            <br>
            <span class="keyword">class</span> <span class="type">Queue</span> {<br>
            <span class="keyword">private</span>:<br>
                std::queue<span class="type">&lt;std::string&gt;</span> q;<br>
            <span class="keyword">public</span>:<br>
                <span class="keyword">void</span> enqueue(<span class="keyword">const</span> std::string<span class="type">&amp;</span> item) {<br>
                    q.push(item);<br>
                }<br>
                <br>
                <span class="keyword">void</span> dequeue() {<br>
                    <span class="keyword">if</span> (!q.empty()) {<br>
                        q.pop();<br>
                    } <span class="keyword">else</span> {<br>
                        std::cerr << <span class="string">"Queue is empty, cannot dequeue!"</span> << std::endl;<br>
                    }<br>
                }<br>
                <br>
                std::string peek() <span class="keyword">const</span> {<br>
                    <span class="keyword">if</span> (!q.empty()) {<br>
                        <span class="keyword">return</span> q.front();<br>
                    } <span class="keyword">else</span> {<br>
                        <span class="keyword">throw</span> std::runtime_error(<span class="string">"Queue is empty, cannot peek!"</span>);<br>
                    }<br>
                }<br>
                <br>
                <span class="type">size_t</span> size() <span class="keyword">const</span> {<br>
                    <span class="keyword">return</span> q.size();<br>
                }<br>
                <br>
                <span class="keyword">bool</span> isEmpty() <span class="keyword">const</span> {<br>
                    <span class="keyword">return</span> q.empty();<br>
                }<br>
                <br>
                <span class="keyword">void</span> display() <span class="keyword">const</span> {<br>
                    std::queue<span class="type">&lt;std::string&gt;</span> temp = q;<br>
                    <span class="keyword">while</span> (!temp.empty()) {<br>
                        std::cout << temp.front() << <span class="string">" "</span>;<br>
                        temp.pop();<br>
                    }<br>
                    std::cout << std::endl;<br>
                }<br>
            };<br>
            <br>
            <span class="keyword">int</span> <span class="function">main</span>() {<br>
                Queue q;<br>
                q.enqueue(<span class="string">"Alice"</span>);<br>
                q.enqueue(<span class="string">"Bob"</span>);<br>
                q.enqueue(<span class="string">"Charlie"</span>);<br>
                <br>
                std::cout << <span class="string">"Queue awal: "</span>;<br>
                q.display();<br>
                <br>
                std::cout << <span class="string">"Melayani: "</span> << q.peek() << std::endl;<br>
                q.dequeue();<br>
                <br>
                std::cout << <span class="string">"Queue setelah melayani satu pasien: "</span>;<br>
                q.display();<br>
                <br>
                std::cout << <span class="string">"Melayani: "</span> << q.peek() << std::endl;<br>
                q.dequeue();<br>
                <br>
                std::cout << <span class="string">"Queue setelah melayani dua pasien: "</span>;<br>
                q.display();<br>
                <br>
                std::cout << <span class="string">"Melayani: "</span> << q.peek() << std::endl;<br>
                q.dequeue();<br>
                <br>
                std::cout << <span class="string">"Queue setelah melayani tiga pasien: "</span>;<br>
                q.display();<br>
                <br>
                <span class="keyword">return</span> <span class="number">0</span>;<br>
            }
                </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
    </main>
    </div>

    <!-- GANTI path JS jadi pakai base_url -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/scroll.js') ?>"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
    <script src="<?= base_url('js/search.js') ?>"></script>
    <script src="<?= base_url('js/popup.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
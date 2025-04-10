<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Materi Stack</title>

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
                    Stack
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
                <span class="module-tag">Materi : Stack</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>


        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Stack</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Stack adalah struktur data linier yang mengikuti prinsip LIFO (Last In, First Out), di mana elemen yang terakhir dimasukkan akan menjadi elemen pertama yang dikeluarkan. Ini mirip dengan tumpukan buku di mana buku terakhir yang diletakkan di atas adalah yang pertama diambil.</p>

                                <p>Fungsi</p>
                                <p>Beberapa fungsi stack dalam pemrograman meliputi:</p>
                                <ul>
                                    <li>Manajemen Memori: Stack digunakan untuk alokasi dan dealokasi memori dalam pemanggilan fungsi dan pengembalian.</li>
                                    <li>Undo Mechanism: Dalam aplikasi seperti editor teks, stack digunakan untuk mendukung fitur undo.</li>
                                    <li>Evaluasi Ekspresi: Dalam evaluasi ekspresi matematika, stack digunakan untuk mengubah ekspresi infix menjadi postfix dan mengevaluasinya.</li>
                                    <li>Traversal: Dalam struktur data seperti pohon, stack digunakan dalam algoritma DFS (Depth First Search).</li>
                                </ul>

                                <p>Jenis-Jenis</p>
                                <p>Beberapa jenis stack meliputi:</p>
                                <ul>
                                    <li>Array-based Stack: Stack yang diimplementasikan menggunakan array. Ukuran array biasanya tetap.</li>
                                    <li>Linked-list Stack: Stack yang diimplementasikan menggunakan linked list. Ukuran stack bisa dinamis.</li>
                                    <li>Dynamic Stack: Stack yang ukurannya dapat berubah sesuai kebutuhan.</li>
                                </ul>

                                <p>Contoh Implementasi Studi Kasus</p>
                                <p>Studi Kasus: Evaluasi Ekspresi Postfix</p>
                                <p>Misalkan kita memiliki ekspresi matematika dalam notasi postfix (misalnya, "2 3 + 4 *"), kita dapat menggunakan stack untuk mengevaluasi ekspresi ini. Kita dapat menerapkan algoritma yang mendorong angka ke dalam stack dan menangani operator ketika ditemukan.</p>

                                <p>Contoh Codingan</p>
                                <div class="example">
                                    <pre><code>
            <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span><br>
            <br>
            <span class="keyword">class</span> <span class="type">Node</span> {<br>
            <span class="keyword">public</span>:<br>
                <span class="type">int</span> data;<br>
                <span class="type">Node*</span> next;<br>
                <span class="type">Node</span>(<span class="type">int</span> value) {<br>
                    data = value;<br>
                    next = <span class="keyword">nullptr</span>;<br>
                }<br>
            };<br>
            <br>
            <span class="keyword">class</span> <span class="type">Stack</span> {<br>
            <span class="keyword">private</span>:<br>
                <span class="type">Node*</span> top;<br>
            <br>
            <span class="keyword">public</span>:<br>
                <span class="type">Stack</span>() {<br>
                    top = <span class="keyword">nullptr</span>;<br>
                }<br>
            <br>
                <span class="keyword">void</span> push(<span class="type">int</span> value) {<br>
                    <span class="type">Node*</span> newNode = <span class="keyword">new</span> <span class="type">Node</span>(value);<br>
                    <span class="keyword">if</span> (top == <span class="keyword">nullptr</span>) {<br>
                        top = newNode;<br>
                    } <span class="keyword">else</span> {<br>
                        newNode->next = top;<br>
                        top = newNode;<br>
                    }<br>
                }<br>
            <br>
                <span class="keyword">void</span> pop() {<br>
                    <span class="keyword">if</span> (isEmpty()) {<br>
                        std::cout << <span class="string">"Stack is empty!"</span> << std::endl;<br>
                        <span class="keyword">return</span>;<br>
                    }<br>
                    <span class="type">Node*</span> temp = top;<br>
                    top = top->next;<br>
                    <span class="keyword">delete</span> temp;<br>
                }<br>
            <br>
                <span class="type">int</span> peek() {<br>
                    <span class="keyword">if</span> (isEmpty()) {<br>
                        std::cout << <span class="string">"Stack is empty!"</span> << std::endl;<br>
                        <span class="keyword">return</span> -<span class="number">1</span>;<br>
                    }<br>
                    <span class="keyword">return</span> top->data;<br>
                }<br>
            <br>
                <span class="keyword">bool</span> isEmpty() {<br>
                    <span class="keyword">return</span> top == <span class="keyword">nullptr</span>;<br>
                }<br>
            };<br>
            <br>
            <span class="keyword">int</span> <span class="function">main</span>() {<br>
                <span class="type">Stack</span> stack;<br>
                stack.push(<span class="number">10</span>);<br>
                stack.push(<span class="number">20</span>);<br>
                stack.push(<span class="number">30</span>);<br>
            <br>
                std::cout << <span class="string">"Top element: "</span> << stack.peek() << std::endl;<br>
            <br>
                stack.pop();<br>
                std::cout << <span class="string">"Top element after pop: "</span> << stack.peek() << std::endl;<br>
            <br>
                <span class="keyword">return</span> <span class="number">0</span>;<br>
            }
                </code></pre>

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

                                <pre><code>Top element: 30
Top element after pop: 20
    </code></pre>
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
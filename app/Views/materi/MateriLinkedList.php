<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Materi Linked List</title>

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
                    Linked List
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
                <span class="module-tag">Materi : Linked List</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Linked List</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Linked list adalah struktur data linear yang terdiri dari kumpulan elemen (node) yang terhubung satu sama lain melalui pointer. Setiap node dalam linked list berisi data dan referensi (pointer) ke node berikutnya dalam urutan. Node terakhir dalam linked list menunjuk ke null untuk menandakan akhir dari list.</p>

                                <p>Fungsi</p>
                                <ul>
                                    <li>Menyimpan dan mengatur kumpulan data secara dinamis.</li>
                                    <li>Menambah, menghapus, atau memodifikasi elemen dengan mudah tanpa perlu mengalokasikan ulang memori.</li>
                                    <li>Mengimplementasikan struktur data seperti stack, queue, dan graf.</li>
                                    <li>Efisien dalam penggunaan memori karena hanya mengalokasikan memori yang dibutuhkan.</li>
                                </ul>

                                <p>Jenis-jenis</p>
                                <ul>
                                    <li>Singly Linked List: Setiap node hanya memiliki satu pointer yang menunjuk ke node berikutnya.</li>
                                    <li>Doubly Linked List: Setiap node memiliki dua pointer, satu menunjuk ke node sebelumnya dan satu lagi menunjuk ke node berikutnya.</li>
                                    <li>Circular Linked List: Node terakhir menunjuk kembali ke node pertama, membentuk struktur melingkar.</li>
                                </ul>

                                <p>Contoh Codingan</p>
                                <div class="example">
                                    <pre><code>
            <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span><br>
            <span class="keyword">using namespace</span> std;<br>
            <br>
            <span class="keyword">struct</span> <span class="type">Node</span> {<br>
                <span class="type">int</span> data;<br>
                <span class="type">Node*</span> next;<br>
            };<br>
            <br>
            <span class="keyword">class</span> <span class="type">LinkedList</span> {<br>
            <span class="keyword">private</span>:<br>
                <span class="type">Node*</span> head;<br>
            <br>
            <span class="keyword">public</span>:<br>
                <span class="type">LinkedList</span>() {<br>
                    head = <span class="keyword">NULL</span>;<br>
                }<br>
            <br>
                <span class="keyword">void</span> insertAtBeginning(<span class="type">int</span> value) {<br>
                    <span class="type">Node*</span> newNode = <span class="keyword">new</span> <span class="type">Node</span>();<br>
                    newNode->data = value;<br>
                    newNode->next = head;<br>
                    head = newNode;<br>
                }<br>
            <br>
                <span class="keyword">void</span> display() {<br>
                    <span class="type">Node*</span> current = head;<br>
                    <span class="keyword">while</span> (current != <span class="keyword">NULL</span>) {<br>
                        cout << current->data << <span class="string">" "</span>;<br>
                        current = current->next;<br>
                    }<br>
                    cout << endl;<br>
                }<br>
            };<br>
            <br>
            <span class="keyword">int</span> <span class="function">main</span>() {<br>
                <span class="type">LinkedList</span> list;<br>
            <br>
                list.insertAtBeginning(<span class="number">3</span>);<br>
                list.insertAtBeginning(<span class="number">2</span>);<br>
                list.insertAtBeginning(<span class="number">1</span>);<br>
            <br>
                cout << <span class="string">"Linked List: "</span>;<br>
                list.display();<br>
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
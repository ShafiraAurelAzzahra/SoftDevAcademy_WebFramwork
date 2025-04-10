<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tree</title>

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
                    Tree
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
                <span class="module-tag">Materi : Tree</span>
                <span class="info-kanan">SoftDev Academy</span>
            </div>
        </div>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-10 mx-auto">
                        <h2 class="mb-3" data-aos="fade-up">Tree</h2>
                        <div style="text-align: justify;">

                            <div style="text-align: justify;">

                                <p>Pengertian</p>
                                <p>Tree adalah struktur data yang terdiri dari simpul (node) yang terhubung secara hierarkis. Setiap simpul memiliki satu simpul induk, kecuali simpul teratas yang disebut root.</p>

                                <p>Fungsi</p>
                                <p>Trees digunakan untuk merepresentasikan data hierarkis, seperti struktur organisasi, pengelompokan data, dan hierarki folder pada sistem komputer.</p>

                                <p>Jenis-Jenis</p>
                                <ul>
                                    <li><strong>Binary Tree:</strong> Setiap simpul memiliki paling banyak dua anak.</li>
                                    <li><strong>Binary Search Tree (BST):</strong> Binary tree di mana semua simpul di sub-pohon kiri memiliki nilai yang lebih kecil dari nilai simpul tersebut, dan semua simpul di sub-pohon kanan memiliki nilai yang lebih besar.</li>
                                    <li><strong>AVL Tree:</strong> Jenis pohon pencarian biner yang seimbang, di mana setiap simpul memiliki perbedaan tinggi maksimal antara anak-anaknya yang tidak lebih dari satu.</li>
                                    <li><strong>B-Tree:</strong> Struktur data pohon yang digunakan untuk menyimpan data secara terurut dan memfasilitasi pencarian, penyisipan, dan penghapusan dalam waktu logaritmik.</li>
                                </ul>

                                <p>Contoh Implementasi</p>
                                <p>Studi Kasus: Pengelolaan Data Menggunakan Stack</p>
                                <p>Misalkan kita ingin mengelola data menggunakan struktur Stack dalam C++.</p>
                                <div class="example">
                                    <pre><code>
                <span class="keyword">#include</span> <span class="string">&lt;iostream&gt;</span>;
                <span class="keyword">using</span> <span class="keyword">namespace</span> std;
                
                <span class="keyword">class</span> Node {
                <span class="keyword">public</span>:
                    <span class="type">int</span> data;
                    Node* next;
                    Node(<span class="type">int</span> value) {
                        data = value;
                        next = <span class="keyword">nullptr</span>;
                    }
                };
                
                <span class="keyword">class</span> Stack {
                <span class="keyword">private</span>:
                    Node* top;
                
                <span class="keyword">public</span>:
                    Stack() {
                        top = <span class="keyword">nullptr</span>;
                    }
                
                    <span class="keyword">void</span> push(<span class="type">int</span> value) {
                        Node* newNode = <span class="keyword">new</span> Node(value);
                        <span class="keyword">if</span> (top == <span class="keyword">nullptr</span>) {
                            top = newNode;
                        } <span class="keyword">else</span> {
                            newNode->next = top;
                            top = newNode;
                        }
                    }
                
                    <span class="keyword">void</span> pop() {
                        <span class="keyword">if</span> (isEmpty()) {
                            cout &lt;&lt; <span class="string">"Stack is empty!"</span> &lt;&lt; endl;
                            <span class="keyword">return</span>;
                        }
                        Node* temp = top;
                        top = top->next;
                        <span class="keyword">delete</span> temp;
                    }
                
                    <span class="type">int</span> peek() {
                        <span class="keyword">if</span> (isEmpty()) {
                            cout &lt;&lt; <span class="string">"Stack is empty!"</span> &lt;&lt; endl;
                            <span class="keyword">return</span> -<span class="number">1</span>;
                        }
                        <span class="keyword">return</span> top->data;
                    }
                
                    <span class="keyword">bool</span> isEmpty() {
                        <span class="keyword">return</span> top == <span class="keyword">nullptr</span>;
                    }
                };
                
                <span class="keyword">int</span> <span class="function">main</span>() {
                    Stack stack;
                    stack.push(<span class="number">10</span>);
                    stack.push(<span class="number">20</span>);
                    stack.push(<span class="number">30</span>);
                
                    cout &lt;&lt; <span class="string">"Top element: "</span> &lt;&lt; stack.peek() &lt;&lt; endl;
                
                    stack.pop();
                    cout &lt;&lt; <span class="string">"Top element after pop: "</span> &lt;&lt; stack.peek() &lt;&lt; endl;
                
                    <span class="keyword">return</span> <span class="number">0</span>;
                }
            </code></pre>
                                </div>

                                <p>Output dari kode di atas akan seperti berikut:</p>
                                <pre class="code">Top element: 30
Top element after pop: 20</pre>
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
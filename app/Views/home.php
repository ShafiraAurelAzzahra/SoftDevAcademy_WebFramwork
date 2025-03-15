<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SoftDev Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Mengoptimalkan koneksi ke Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Mengoptimalkan koneksi ke Google Fonts dengan cross-origin -->
    <link rel="shortcut icon" type="x-icon" href="Logo.jpg"> <!-- Menentukan favicon untuk halaman -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet"> <!-- Mengimpor font Noto Sans JP -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Mengimpor stylesheet Bootstrap untuk styling -->
    <link href="css/icon_navigasi.css" rel="stylesheet"> <!-- Mengimpor stylesheet untuk ikon navigasi -->
    <link href="css/desain.css" rel="stylesheet"> <!-- Mengimpor stylesheet untuk desain khusus -->
</head>

<body>

    <main>
        <!-- Include Homepage -->
        <?php include 'controller/homepage.php'; ?> <!-- Menyertakan konten dari file homepage.php -->

        <!-- Include Navbar -->
        <?php include 'controller/navbar.php'; ?> <!-- Menyertakan konten dari file navbar.php -->

        <!-- Include About Section -->
        <?php include 'controller/about.php'; ?> <!-- Menyertakan konten dari file about.php -->

        <!-- Include Material Section -->
        <?php include 'controller/material.php'; ?> <!-- Menyertakan konten dari file material.php -->

        <!-- Include Quiz Section -->
        <?php include 'controller/quiz.php'; ?> <!-- Menyertakan konten dari file quiz.php -->

        <!-- Include Contact Section -->
        <?php include 'controller/contact.php'; ?> <!-- Menyertakan konten dari file contact.php -->
    </main>

    <!-- Include Footer -->
    <?php include 'controller/footer.php'; ?> <!-- Menyertakan konten dari file footer.php -->

    <script src="js/jquery.min.js"></script> <!-- Mengimpor jQuery untuk manipulasi DOM -->
    <script src="js/scroll.js"></script> <!-- Mengimpor script untuk efek scroll -->
    <script src="js/script.js"></script> <!-- Mengimpor script utama untuk fungsionalitas halaman -->
    <script src="js/search.js"></script> <!-- Mengimpor script untuk fungsionalitas pencarian -->
    <script src="js/popup.js"></script> <!-- Mengimpor script untuk popup -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> <!-- Mengimpor bundle JavaScript Bootstrap -->
</body>

</html>
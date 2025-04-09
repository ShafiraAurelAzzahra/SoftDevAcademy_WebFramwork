<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SoftDev Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="x-icon" href="img/Logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/icon_navigasi.css" rel="stylesheet">
    <link href="css/desain.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
            /* Menambahkan efek smooth scroll */
        }
    </style>
</head>

<body>
    <main>
        <!-- Include Homepage -->
        <?php include 'screen/homepage.php'; ?>

        <!-- Include About Section -->
        <div id="about">
            <?php include 'screen/about.php'; ?>
        </div>

        <!-- Include Material Section -->
        <div id="material">
            <?php include 'screen/material.php'; ?>
        </div>

        <!-- Include Quiz Section -->
        <div id="quiz">
            <?php include 'screen/quiz.php'; ?>
        </div>

        <!-- Include Contact Section -->
        <div id="contact">
            <?php include 'screen/contact.php'; ?>
        </div>
    </main>

    <?= $this->include('screen/footer') ?> <!-- Footer hanya dimuat sekali di sini -->

    <script src="js/jquery.min.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/script.js"></script>
    <script src="js/search.js"></script>
    <script src="js/popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
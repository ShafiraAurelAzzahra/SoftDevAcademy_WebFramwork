<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('screen/head') ?>
</head>

<body>
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('screen/footer') ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/script.js"></script>
    <script src="js/search.js"></script>
    <script src="js/popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
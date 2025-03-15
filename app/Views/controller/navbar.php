<nav class="navbar navbar-expand-lg bg-light shadow-lg"> <!-- Navbar dengan kelas Bootstrap untuk ekspansi, latar belakang terang, dan bayangan -->
    <div class="container"> <!-- Kontainer untuk mengatur layout navbar -->
        <a class="navbar-brand" href="index.php"> <!-- Tautan untuk logo atau nama brand -->
            <strong>SoftDev</strong> <!-- Nama brand yang ditampilkan dengan huruf tebal -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <!-- Tombol untuk toggle navbar pada layar kecil -->
            <span class="navbar-toggler-icon"></span> <!-- Ikon untuk tombol toggle -->
        </button>
        <div class="collapse navbar-collapse" id="navbarNav"> <!-- Kontainer untuk item navbar yang dapat dilipat -->
            <ul class="navbar-nav mx-auto"> <!-- Daftar item navbar yang terpusat -->
                <li class="nav-item active"> <!-- Item navbar untuk Home Page -->
                    <a class="nav-link" href="#homepage"> <!-- Tautan ke bagian homepage -->
                        <i class="bi bi-house"></i> Home Page <!-- Ikon dan teks untuk Home Page -->
                    </a>
                </li>
                <li class="nav-item"> <!-- Item navbar untuk About -->
                    <a class="nav-link" href="#about"> <!-- Tautan ke bagian About -->
                        <i class="bi bi-people"></i> About <!-- Ikon dan teks untuk About -->
                    </a>
                </li>
                <li class="nav-item"> <!-- Item navbar untuk Material -->
                    <a class="nav-link" href="#material"> <!-- Tautan ke bagian Material -->
                        <i class="bi bi-journal"></i> Material <!-- Ikon dan teks untuk Material -->
                    </a>
                </li>
                <li class="nav-item"> <!-- Item navbar untuk Quiz -->
                    <a class="nav-link" href="#quiz"> <!-- Tautan ke bagian Quiz -->
                        <i class="bi bi-book"></i> Quiz <!-- Ikon dan teks untuk Quiz -->
                    </a>
                </li>
                <li class="nav-item"> <!-- Item navbar untuk Contact Us -->
                    <a class="nav-link" href="#contact"> <!-- Tautan ke bagian Contact Us -->
                        <i class="bi bi-envelope"></i> Contact Us <!-- Ikon dan teks untuk Contact Us -->
                    </a>
                </li>
            </ul>
            <form id="search-form" class="d-flex ms-auto position-relative" role="search" onsubmit="handleSearch(event)"> <!-- Form pencarian dengan kelas Bootstrap untuk fleksibilitas -->
                <div class="input-group"> <!-- Kontainer untuk input dan tombol pencarian -->
                    <input id="search-input" class="form-control" type="search" placeholder="Search" aria-label="Search"> <!-- Input untuk pencarian -->
                    <button class="btn btn-outline-success" type="submit"> <!-- Tombol untuk mengirim pencarian -->
                        <i class="bi bi-search"></i> <!-- Ikon pencarian -->
                    </button>
                </div>
                <div id="search-results" class="list-group"></div> <!-- Kontainer untuk menampilkan hasil pencarian -->
            </form>
        </div>
    </div>
</nav>
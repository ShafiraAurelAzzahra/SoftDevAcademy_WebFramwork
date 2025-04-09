<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <strong>SoftDev</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#homepage">
                        <i class="bi bi-house"></i> Home Page
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        <i class="bi bi-people"></i> About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#material">
                        <i class="bi bi-journal"></i> Material
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quiz">
                        <i class="bi bi-book"></i> Quiz
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        <i class="bi bi-envelope"></i> Contact Us
                    </a>
                </li>
            </ul>
            <form id="search-form" class="d-flex ms-auto position-relative" role="search" onsubmit="handleSearch(event)">
                <div class="input-group">
                    <input id="search-input" class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                <div id="search-results" class="list-group"></div>
            </form>
        </div>
    </div>
</nav>